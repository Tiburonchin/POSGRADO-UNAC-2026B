/**
 * UNAC Programas - GSAP Animations & Interactions
 * Glassmorphism design with smooth scroll animations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Register GSAP plugins if available
    if (typeof gsap !== 'undefined') {
        initGSAPAnimations();
    } else {
        console.warn('GSAP no cargado - las animaciones estarán desactivadas');
        initFallbackAnimations();
    }

    initFilters();
    initSearch();
    initDetailView();
    initAccordions();
    initParticles();
    handleURLFilters();
    
    // Initial load: handle filtering and deep linking
    setTimeout(() => {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('id');
        
        if (id) {
            openDetail(id);
        } else if (!urlParams.get('type')) {
            updateGrid();
        }
    }, 150);
});

/* ============================================
   GSAP ANIMATIONS
   ============================================ */
function initGSAPAnimations() {
    gsap.registerPlugin(ScrollTrigger);

    // Hero entrance animation
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    heroTl
        .from('.programas-hero__title', {
            y: 60,
            opacity: 0,
            duration: 1,
            delay: 0.2
        })
        .from('.programas-hero__subtitle', {
            y: 40,
            opacity: 0,
            duration: 0.8
        }, '-=0.6')
        .from('.programas-stats__item', {
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.12
        }, '-=0.4')
        .from('.programas-filterbar', {
            y: 20,
            opacity: 0,
            duration: 0.6
        }, '-=0.3');

    // Stats counter animation
    gsap.utils.toArray('.programas-stats__number').forEach(el => {
        const target = parseInt(el.dataset.count) || 0;
        gsap.from(el, {
            textContent: 0,
            duration: 2,
            ease: 'power2.out',
            snap: { textContent: 1 },
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true
            },
            onUpdate: function() {
                el.textContent = Math.ceil(this.targets()[0].textContent);
            },
            onComplete: function() {
                el.textContent = target;
            }
        });
    });

    // Cards stagger animation
    gsap.from('.programa-card', {
        y: 50,
        opacity: 0,
        duration: 0.7,
        stagger: 0.08,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.programas-grid',
            start: 'top 80%',
            once: true
        }
    });

    // Scroll reveal for other elements
    gsap.utils.toArray('.reveal').forEach(el => {
        gsap.to(el, {
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                once: true
            }
        });
    });

    // Parallax effect on hero
    gsap.to('.programas-hero', {
        scrollTrigger: {
            trigger: '.programas-hero',
            start: 'top top',
            end: 'bottom top',
            scrub: 1
        },
        y: 80,
        opacity: 0.3
    });

    // Filter bar sticky glow effect
    ScrollTrigger.create({
        trigger: '.programas-hero',
        start: 'bottom top',
        endTrigger: '.programas-grid',
        end: 'bottom bottom',
        onEnter: () => {
            gsap.to('.programas-filterbar', {
                boxShadow: '0 0 30px rgba(59,130,246,0.2)',
                duration: 0.4
            });
        },
        onLeaveBack: () => {
            gsap.to('.programas-filterbar', {
                boxShadow: 'none',
                duration: 0.4
            });
        }
    });
}

function initFallbackAnimations() {
    // Simple CSS fallback when GSAP is not available
    document.querySelectorAll('.reveal').forEach(el => {
        el.style.opacity = '1';
        el.style.transform = 'none';
    });
}

/* ============================================
   FILTER SYSTEM
   ============================================ */
function initFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    if (!filterBtns.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active state
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Apply unified filtering
            updateGrid();
        });
    });
}

function initSearch() {
    const searchInput = document.getElementById('programasSearch');
    if (!searchInput) return;

    let debounceTimer;
    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            updateGrid();
        }, 250);
    });
}

/**
 * Unified grid update function: Handles category filters and text search
 */
function updateGrid() {
    const activeFilterBtn = document.querySelector('.filter-btn.active');
    const filterType = activeFilterBtn ? activeFilterBtn.dataset.filter : 'all';
    
    const searchInput = document.getElementById('programasSearch');
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    
    const cards = document.querySelectorAll('.programa-card');
    const emptyState = document.querySelector('.programas-empty');
    
    let visibleCards = [];

    cards.forEach(card => {
        const types = card.dataset.types ? card.dataset.types.split(' ') : [];
        const name = card.querySelector('.programa-card__name')?.textContent.toLowerCase() || '';
        const faculty = card.querySelector('.programa-card__faculty')?.textContent.toLowerCase() || '';
        const desc = card.querySelector('.programa-card__desc')?.textContent.toLowerCase() || '';

        const matchesType = filterType === 'all' || types.includes(filterType);
        const matchesSearch = query === '' || 
                            name.includes(query) || 
                            faculty.includes(query) || 
                            desc.includes(query);

        if (matchesType && matchesSearch) {
            visibleCards.push(card);
            // Ensure display is flex BEFORE animating opacity
            card.style.display = 'flex';
            card.style.position = 'relative';
            card.style.pointerEvents = 'auto';
            
            gsap.to(card, {
                scale: 1,
                opacity: 1,
                duration: 0.4,
                ease: 'power2.out',
                overwrite: true
            });
        } else {
            gsap.to(card, {
                scale: 0.9,
                opacity: 0,
                duration: 0.3,
                ease: 'power2.in',
                overwrite: true,
                onComplete: () => {
                    card.style.display = 'none';
                }
            });
        }
    });

    // Handle empty state
    if (emptyState) {
        if (visibleCards.length === 0) {
            emptyState.style.display = 'block';
            gsap.fromTo(emptyState, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.4 });
        } else {
            emptyState.style.display = 'none';
        }
    }

    // Refresh ScrollTrigger to account for layout changes
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
    }
}


/* ============================================
   DETAIL VIEW (MODAL)
   ============================================ */
function initDetailView() {
    const overlay = document.getElementById('programaDetailOverlay');
    const cards = document.querySelectorAll('.programa-card');
    const closeBtn = document.getElementById('closeDetail');

    if (!overlay) return;

    cards.forEach(card => {
        card.addEventListener('click', function() {
            const programId = this.dataset.id;
            openDetail(programId);
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeDetail);
    }

    overlay.addEventListener('click', function(e) {
        if (e.target === this || e.target.classList.contains('programa-detail-overlay__backdrop')) {
            closeDetail();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeDetail();
    });
}

function openDetail(programId) {
    const overlay = document.getElementById('programaDetailOverlay');
    const detail = document.getElementById('programaDetail');

    const ajaxUrl = window.PROGRAMAS_AJAX_URL || 'programa-detalle.php';
    const finalUrl = `${ajaxUrl}${ajaxUrl.includes('?') ? '&' : '?'}id=${programId}`;
    
    // Load content via AJAX
    fetch(finalUrl)
        .then(r => r.text())
        .then(html => {
            detail.innerHTML = html;
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Update URL for sharing (without reloading)
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('id', programId);
            window.history.pushState({ id: programId }, '', newUrl.toString());

            // Init components in the new content
            initAccordions();
            initTabs();

            // GSAP entrance for detail
            if (typeof gsap !== 'undefined') {
                gsap.from('.programa-detail__header-content', {
                    y: 30,
                    opacity: 0,
                    duration: 0.6,
                    delay: 0.2,
                    ease: 'power3.out'
                });
                gsap.from('.programa-detail__quickinfo > *', {
                    y: 20,
                    opacity: 0,
                    duration: 0.5,
                    stagger: 0.08,
                    delay: 0.35,
                    ease: 'power3.out'
                });
                gsap.from('.detail-tab', {
                    y: 10,
                    opacity: 0,
                    duration: 0.4,
                    stagger: 0.05,
                    delay: 0.5,
                    ease: 'power2.out'
                });
            }
        })
        .catch(err => console.error('Error cargando detalle:', err));
}

function closeDetail() {
    const overlay = document.getElementById('programaDetailOverlay');

    // Clean URL
    const newUrl = new URL(window.location.href);
    newUrl.searchParams.delete('id');
    window.history.pushState({}, '', newUrl.toString());

    if (typeof gsap !== 'undefined') {
        gsap.to('.programa-detail', {
            y: 40,
            scale: 0.96,
            opacity: 0,
            duration: 0.25,
            ease: 'power2.in',
            onComplete: () => {
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    } else {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
}

/* ============================================
   TABS (Inside detail view)
   ============================================ */
function initTabs() {
    const tabs = document.querySelectorAll('.detail-tab');
    const panels = document.querySelectorAll('.detail-panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.dataset.tab;

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            panels.forEach(p => {
                if (p.dataset.panel === target) {
                    p.classList.add('active');
                    if (typeof gsap !== 'undefined') {
                        gsap.fromTo(p, { opacity: 0, y: 15 }, { opacity: 1, y: 0, duration: 0.35, ease: 'power2.out' });
                    }
                } else {
                    p.classList.remove('active');
                }
            });
        });
    });
}

/* ============================================
   ACCORDIONS (Ciclos)
   ============================================ */
function initAccordions() {
    document.querySelectorAll('.ciclo-item__header').forEach(header => {
        header.addEventListener('click', function() {
            const item = this.closest('.ciclo-item');
            const isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.ciclo-item').forEach(i => i.classList.remove('open'));

            // Toggle current
            if (!isOpen) {
                item.classList.add('open');
                // Animate courses appearance
                if (typeof gsap !== 'undefined') {
                    const courses = item.querySelectorAll('.ciclo-item__courses li');
                    gsap.fromTo(courses,
                        { x: -15, opacity: 0 },
                        { x: 0, opacity: 1, duration: 0.3, stagger: 0.04, ease: 'power2.out' }
                    );
                }
            }
        });
    });
}

/* ============================================
   PARTICLES (decorative)
   ============================================ */
function initParticles() {
    const container = document.querySelector('.programas-particles');
    if (!container) return;

    // Create random floating particles
    for (let i = 0; i < 15; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        const size = Math.random() * 6 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = (Math.random() * 20) + 's';
        particle.style.animationDuration = (15 + Math.random() * 15) + 's';
        container.appendChild(particle);
    }
}

/* ============================================
   UTILITY: Smooth scroll to anchor
   ============================================ */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            if (typeof gsap !== 'undefined') {
                gsap.to(window, { duration: 1, scrollTo: { y: target, offsetY: 80 }, ease: 'power3.inOut' });
            } else {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
});

/* ============================================
   URL FILTERING SUPPORT
   ============================================ */
function handleURLFilters() {
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type');
    
    if (type) {
        const filterBtn = document.querySelector(`.filter-btn[data-filter="${type}"]`);
        if (filterBtn) {
            // Wait a bit for animations to be ready
            setTimeout(() => {
                filterBtn.click();
                
                // Scroll to grid if on mobile or if type is specified
                const grid = document.querySelector('.programas-grid');
                if (grid) {
                    gsap.to(window, { 
                        duration: 1, 
                        scrollTo: { y: grid, offsetY: 120 }, 
                        ease: 'power3.inOut' 
                    });
                }
            }, 500);
        }
    }
}

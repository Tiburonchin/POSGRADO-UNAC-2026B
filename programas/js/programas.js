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
    const cards = document.querySelectorAll('.programa-card');
    const emptyState = document.querySelector('.programas-empty');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;

            // Update active state
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Filter cards with animation
            let visibleCount = 0;

            cards.forEach(card => {
                const types = card.dataset.types ? card.dataset.types.split(' ') : [];
                const shouldShow = filter === 'all' || types.includes(filter);

                if (shouldShow) {
                    visibleCount++;
                    gsap.to(card, {
                        scale: 1,
                        opacity: 1,
                        duration: 0.4,
                        ease: 'power2.out',
                        display: 'flex'
                    });
                    card.style.position = 'relative';
                    card.style.pointerEvents = 'auto';
                } else {
                    gsap.to(card, {
                        scale: 0.9,
                        opacity: 0,
                        duration: 0.3,
                        ease: 'power2.in',
                        onComplete: () => {
                            card.style.position = 'absolute';
                            card.style.pointerEvents = 'none';
                        }
                    });
                }
            });

            // Toggle empty state
            if (emptyState) {
                if (visibleCount === 0) {
                    emptyState.style.display = 'block';
                    gsap.fromTo(emptyState, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.4 });
                } else {
                    emptyState.style.display = 'none';
                }
            }

            // Stagger visible cards
            if (typeof gsap !== 'undefined') {
                const visibleCards = Array.from(cards).filter(c => {
                    const types = c.dataset.types ? c.dataset.types.split(' ') : [];
                    return filter === 'all' || types.includes(filter);
                });

                gsap.fromTo(visibleCards,
                    { y: 20, opacity: 0 },
                    { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: 'power3.out', delay: 0.1 }
                );
            }
        });
    });
}

/* ============================================
   SEARCH
   ============================================ */
function initSearch() {
    const searchInput = document.getElementById('programasSearch');
    if (!searchInput) return;

    const cards = document.querySelectorAll('.programa-card');
    let debounceTimer;

    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const query = this.value.toLowerCase().trim();

            cards.forEach(card => {
                const name = card.querySelector('.programa-card__name').textContent.toLowerCase();
                const faculty = card.querySelector('.programa-card__faculty').textContent.toLowerCase();
                const desc = card.querySelector('.programa-card__desc').textContent.toLowerCase();

                const matches = name.includes(query) || faculty.includes(query) || desc.includes(query);

                if (matches || query === '') {
                    card.style.display = 'flex';
                    gsap.to(card, { opacity: 1, scale: 1, duration: 0.3 });
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        scale: 0.95,
                        duration: 0.2,
                        onComplete: () => { card.style.display = 'none'; }
                    });
                }
            });
        }, 200);
    });
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

    // Load content via AJAX
    fetch(`programa-detalle.php?id=${programId}`)
        .then(r => r.text())
        .then(html => {
            detail.innerHTML = html;
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Init accordions in the new content
            initAccordions();

            // Init tabs in the new content
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

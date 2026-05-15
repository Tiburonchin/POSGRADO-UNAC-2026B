document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lenis Smooth Scroll
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        orientation: 'vertical',
        smoothWheel: true
    });

    // Sync Lenis with GSAP ScrollTrigger
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    // Parallax hero effect using Lenis
    const hero = document.querySelector('.hero');
    
    lenis.on('scroll', ({ scroll }) => {
        if (!hero) return;
        const heroHeight = hero.offsetHeight;
        
        if (scroll <= heroHeight) {
            const progress = scroll / heroHeight;
            const scale = 1 - (progress * 0.2);
            const blur = progress * 10;
            const bgOpacity = 1 - (progress * 0.5);
            const textOpacity = 1 - (progress * 0.9);

            hero.style.setProperty('--hero-scale', scale);
            hero.style.setProperty('--hero-blur', `${blur}px`);
            hero.style.setProperty('--bg-opacity', bgOpacity);
            hero.style.setProperty('--hero-opacity', textOpacity);
        }
    });

    // Reveal animations
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));

    // GSAP Admission Route Animation
    const initAdmissionRoute = () => {
        const routeContainer = document.getElementById('admission-route');
        if (!routeContainer) return;

        // Register plugin
        if (window.gsap && window.ScrollTrigger) {
            gsap.registerPlugin(ScrollTrigger);
        } else {
            return;
        }

        const cards = gsap.utils.toArray('.step-card-v2');
        const navLinks = gsap.utils.toArray('.step-nav-link');
        const progressBar = document.getElementById('scroll-progress-line');

        if (!cards.length || !navLinks.length || !progressBar) return;

        // Initial State
        gsap.set(cards, { opacity: 0, y: 100, filter: 'blur(10px)' });

        // Desktop Specific Animations
        if (window.innerWidth > 1024) {
            // Sidebar Pinning
            ScrollTrigger.create({
                trigger: ".process-main-grid",
                start: "top 120px",
                end: "bottom 80%",
                pin: ".sidebar-sticky-wrapper",
                pinSpacing: false,
                id: "route-pin",
                invalidateOnRefresh: true
            });

            // Cards and Navigation Synchronization
            cards.forEach((card, index) => {
                // Reveal Card
                gsap.to(card, {
                    opacity: 1,
                    y: 0,
                    filter: 'blur(0px)',
                    duration: 1.5,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                });

                // Update Progress and Nav Active State
                ScrollTrigger.create({
                    trigger: card,
                    start: "top 50%",
                    end: "bottom 50%",
                    onToggle: self => {
                        if (self.isActive) {
                            navLinks.forEach((link, i) => {
                                const active = (i === index);
                                link.classList.toggle('active', active);
                                
                                if (active) {
                                    // Natural progress line update
                                    const progress = ((index + 1) / cards.length) * 100;
                                    gsap.to(progressBar, {
                                        height: `${progress}%`,
                                        duration: 1,
                                        ease: "expo.out"
                                    });
                                }
                            });
                        }
                    }
                });

                // Click to Scroll functionality
                if (navLinks[index]) {
                    navLinks[index].addEventListener('click', (e) => {
                        e.preventDefault();
                        lenis.scrollTo(card, {
                            offset: -120,
                            duration: 1.5,
                            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
                        });
                    });
                }

                // Spotlight Hover Effect
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });
        } else {
            // Mobile: Simple reveal without pinning
            gsap.set(cards, { opacity: 1, y: 0, filter: 'none' });
        }

        ScrollTrigger.refresh();
    };

    // Robust Initialization
    const handleInit = () => {
        const loader = document.getElementById('page-loader');
        const runInit = () => {
            setTimeout(() => {
                initAdmissionRoute();
                ScrollTrigger.refresh();
            }, 400);
        };

        if (loader && !loader.classList.contains('is-hidden')) {
            window.addEventListener('page-loader:complete', runInit, { once: true });
        } else {
            runInit();
        }
    };

    if (document.readyState === 'complete') {
        handleInit();
    } else {
        window.addEventListener('load', handleInit);
    }

    // Specific Requirements Tabs - Scoped to each container
    const containers = document.querySelectorAll('.requirements-container');
    
    containers.forEach(container => {
        const btns = container.querySelectorAll('.specific-tab-btn');
        const panes = container.querySelectorAll('.specific-pane');
        
        if (btns.length > 0) {
            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Only remove active from this container
                    btns.forEach(b => b.classList.remove('active'));
                    panes.forEach(p => p.classList.remove('active'));

                    btn.classList.add('active');
                    
                    const targetId = btn.getAttribute('data-target');
                    const targetPane = container.querySelector('#' + targetId);
                    if (targetPane) {
                        targetPane.classList.add('active');
                    }
                });
            });
        }
    });
});

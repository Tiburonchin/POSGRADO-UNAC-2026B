/**
 * Background Ambience Animations (V2 - Scroll Linked & Random)
 * Floating shapes and moving glows for a modern depth effect.
 */
(function() {
    if (!window.gsap) return;

    const gsap = window.gsap;
    const ambience = document.querySelector('.bg-ambience');
    if (!ambience) return;

    const orbs = ambience.querySelectorAll('.bg-ambience-orb');
    const shapes = ambience.querySelectorAll('.bg-ambience-shape');

    // 1. RANDOM FLOATING MOTION
    // --------------------------------------------------
    orbs.forEach((orb, i) => {
        // Random drift
        gsap.to(orb, {
            x: 'random(-100, 100)',
            y: 'random(-100, 100)',
            duration: 'random(10, 20)',
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });

        // Pulsing scale
        gsap.to(orb, {
            scale: 'random(0.9, 1.2)',
            opacity: '+=0.05',
            duration: 'random(5, 8)',
            repeat: -1,
            yoyo: true,
            ease: 'power1.inOut'
        });
    });

    shapes.forEach((shape, i) => {
        // Random rotation and float
        gsap.to(shape, {
            rotation: '+=360',
            duration: 'random(40, 60)',
            repeat: -1,
            ease: 'none'
        });

        gsap.to(shape, {
            x: 'random(-50, 50)',
            y: 'random(-50, 50)',
            duration: 'random(15, 25)',
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    });

    // 2. SCROLL LINKED MOVEMENT
    // --------------------------------------------------
    window.addEventListener('scroll', () => {
        const scrollY = window.pageYOffset;
        const scrollRatio = scrollY / (document.documentElement.scrollHeight - window.innerHeight);

        // Orbs move slightly with scroll for parallax
        gsap.to(orbs, {
            y: (i) => (i + 1) * -scrollY * 0.1,
            duration: 1,
            ease: 'power2.out',
            overwrite: 'auto'
        });

        // Shapes move and rotate more aggressively with scroll
        gsap.to(shapes, {
            y: (i) => (i + 1) * -scrollY * 0.25,
            rotation: (i) => scrollY * 0.05 * (i % 2 === 0 ? 1 : -1),
            duration: 1.5,
            ease: 'power3.out',
            overwrite: 'auto'
        });
    });

    // 3. INTERACTIVE MOUSE PARALLAX
    // --------------------------------------------------
    window.addEventListener('mousemove', (e) => {
        const { clientX, clientY } = e;
        const xPos = (clientX / window.innerWidth) - 0.5;
        const yPos = (clientY / window.innerHeight) - 0.5;

        // The mouse influence is added to the current position
        gsap.to(orbs, {
            xPercent: xPos * 20,
            yPercent: yPos * 20,
            duration: 2,
            ease: 'power2.out',
            stagger: 0.1
        });

        gsap.to(shapes, {
            xPercent: xPos * 40,
            yPercent: yPos * 40,
            duration: 1.5,
            ease: 'power2.out',
            stagger: 0.05
        });
    });

})();

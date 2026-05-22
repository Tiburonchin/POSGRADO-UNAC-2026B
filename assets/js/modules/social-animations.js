document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('social-sidebar');
    const links = document.querySelectorAll('.social-link, .theme-toggle-btn');
    const isHomePage = document.body.getAttribute('data-page') === 'home';

    if (!sidebar || !links.length || typeof gsap === 'undefined') return;

    // --- VISIBILITY LOGIC ---
    const initVisibility = () => {
        if (isHomePage) {
            gsap.set(sidebar, { autoAlpha: 0, x: 20 });
            
            ScrollTrigger.create({
                trigger: "#admision", 
                start: "top 60%",
                onEnter: () => gsap.to(sidebar, { autoAlpha: 1, x: 0, duration: 0.8, ease: "power3.out" }),
                onLeaveBack: () => gsap.to(sidebar, { autoAlpha: 0, x: 20, duration: 0.5, ease: "power3.in" })
            });
        } else {
            gsap.fromTo(
                sidebar,
                { x: 48, autoAlpha: 0 },
                {
                    x: 0,
                    autoAlpha: 1,
                    duration: 0.75,
                    ease: 'power3.out',
                    delay: 0.4,
                    clearProps: 'transform,opacity,visibility'
                }
            );
            gsap.fromTo(
                links,
                { x: 12, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    stagger: 0.06,
                    duration: 0.45,
                    ease: 'power2.out',
                    delay: 0.55,
                    clearProps: 'transform,opacity'
                }
            );
        }
    };

    // --- THEME TOGGLE LOGIC ---
    const initThemeToggle = () => {
        const themeBtn = document.getElementById('theme-toggle-sidebar');
        if (!themeBtn) return;

        const html = document.documentElement;
        const icon = themeBtn.querySelector('i');
        
        // Initial state from localStorage or default to dark
        const savedTheme = localStorage.getItem('theme') || 'dark';
        html.setAttribute('data-theme', savedTheme);
        updateIcon(savedTheme === 'light');

        themeBtn.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            // Apply theme
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);

            // Animate Icon change
            gsap.to(icon, {
                rotateY: 90,
                duration: 0.2,
                onComplete: () => {
                    updateIcon(newTheme === 'light');
                    gsap.to(icon, { rotateY: 0, duration: 0.2 });
                }
            });
        });

        function updateIcon(isLight) {
            icon.className = `fa-solid fa-${isLight ? 'sun' : 'moon'} text-xl text-white/70 group-hover:text-bg-base transition-all`;
        }
    };

    // Initialize all modules
    initVisibility();
    initThemeToggle();
});

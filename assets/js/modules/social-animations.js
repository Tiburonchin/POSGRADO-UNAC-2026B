document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('social-sidebar');
    const links = document.querySelectorAll('.social-link, .theme-toggle-btn');
    const isHomePage = document.body.getAttribute('data-page') === 'home';

    if (!sidebar || !links.length) return;

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
            gsap.from(sidebar, { x: 100, autoAlpha: 0, duration: 1, ease: 'power4.out', delay: 1 });
            gsap.from(links, { x: 20, opacity: 0, stagger: 0.1, duration: 0.8, ease: 'back.out(1.7)', delay: 1.3 });
        }
    };

    // --- THEME TOGGLE LOGIC (UI ONLY) ---
    const initThemeToggle = () => {
        const themeBtn = document.getElementById('theme-toggle-sidebar');
        if (!themeBtn) return;

        let isSun = false;
        themeBtn.addEventListener('click', () => {
            const icon = themeBtn.querySelector('i');
            isSun = !isSun;
            
            gsap.to(icon, {
                rotateY: 90,
                duration: 0.2,
                onComplete: () => {
                    icon.className = `fa-solid fa-${isSun ? 'sun' : 'moon'} text-xl text-white/70 group-hover:text-bg-base transition-all`;
                    gsap.to(icon, { rotateY: 0, duration: 0.2 });
                }
            });
        });
    };

    // Initialize all modules
    initVisibility();
    initThemeToggle();
});

document.addEventListener('DOMContentLoaded', () => {
    // Parallax hero effect
    const hero = document.querySelector('.hero');
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scroll = window.pageYOffset;
                if (!hero) return;
                const heroHeight = hero.offsetHeight;
                
                if (scroll <= heroHeight) {
                    const progress = scroll / heroHeight;
                    const scale = 1 - (progress * 0.3);
                    const blur = progress * 12;
                    const bgOpacity = 1 - (progress * 0.5);
                    const textOpacity = 1 - (progress * 0.8);

                    hero.style.setProperty('--hero-scale', scale);
                    hero.style.setProperty('--hero-blur', `${blur}px`);
                    hero.style.setProperty('--bg-opacity', bgOpacity);
                    hero.style.setProperty('--hero-opacity', textOpacity);
                }
                ticking = false;
            });
            ticking = true;
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

    // Process Tabs Interaction
    const steps = document.querySelectorAll('.process-step');
    const contents = document.querySelectorAll('.process-content');

    steps.forEach(step => {
        step.addEventListener('click', () => {
            // Remove active class from all steps and contents
            steps.forEach(s => s.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked step
            step.classList.add('active');

            // Show corresponding content
            const targetId = 'content-step-' + step.getAttribute('data-step');
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });

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

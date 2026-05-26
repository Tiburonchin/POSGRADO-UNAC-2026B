document.addEventListener('DOMContentLoaded', () => {
    // Ensure GSAP and ScrollTrigger are loaded
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded');
        return;
    }
    
    gsap.registerPlugin(ScrollTrigger);

    // Fade in sections on scroll
    const reqSections = gsap.utils.toArray('.req-section');
    
    reqSections.forEach((section) => {
        // Main section fade up
        gsap.fromTo(section, 
            { opacity: 0, y: 50 },
            { 
                opacity: 1, 
                y: 0, 
                duration: 1, 
                ease: "power3.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );

        // Stagger list items if present
        const items = section.querySelectorAll('.req-item');
        if (items.length > 0) {
            gsap.fromTo(items,
                { opacity: 0, x: -20 },
                {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: "power2.out",
                    clearProps: "all",
                    scrollTrigger: {
                        trigger: section,
                        start: "top 75%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }

        // Stagger inv-cards if present
        const invCards = section.querySelectorAll('.inv-card');
        if (invCards.length > 0) {
            gsap.fromTo(invCards,
                { opacity: 0, scale: 0.9, y: 30 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: "back.out(1.2)",
                    clearProps: "all",
                    scrollTrigger: {
                        trigger: section.querySelector('.tab-pane.opacity-100') || section,
                        start: "top 80%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }
    });

    // Alert animation
    const alerts = gsap.utils.toArray('.req-alert');
    alerts.forEach(alert => {
        gsap.fromTo(alert,
            { opacity: 0, scale: 0.95 },
            {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "elastic.out(1, 0.5)",
                scrollTrigger: {
                    trigger: alert,
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Handle Tabs with GSAP
    const tabGroups = document.querySelectorAll('.tab-navs');
    
    tabGroups.forEach(group => {
        const btns = group.querySelectorAll('.tab-btn');
        const parentContainer = group.nextElementSibling;
        const panes = parentContainer.querySelectorAll('.tab-pane');

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Ignore if already active
                if (btn.classList.contains('active')) return;

                // Update active state on buttons
                btns.forEach(b => {
                    b.classList.remove('active', 'bg-unac-yellow', 'text-bg-base', 'border-unac-yellow');
                    b.classList.add('border-border-bright', 'text-text-muted');
                });
                btn.classList.add('active', 'bg-unac-yellow', 'text-bg-base', 'border-unac-yellow');
                btn.classList.remove('border-border-bright', 'text-text-muted');

                const targetId = btn.getAttribute('data-target');
                const currentPane = parentContainer.querySelector('.tab-pane.opacity-100') || parentContainer.querySelector('.tab-pane:not(.hidden)');
                const targetPane = document.getElementById(targetId);

                if (!targetPane || currentPane === targetPane) return;

                // 1. Measure heights for fluid transition
                parentContainer.style.overflow = 'hidden';
                const startHeight = parentContainer.offsetHeight;

                // Temporarily show target to measure its natural height in-flow
                targetPane.classList.remove('hidden');
                targetPane.classList.add('block');
                targetPane.style.position = 'absolute';
                targetPane.style.width = '100%';
                targetPane.style.visibility = 'hidden';
                
                const endHeight = targetPane.offsetHeight;

                // Restore state immediately
                targetPane.style.position = '';
                targetPane.style.width = '';
                targetPane.style.visibility = '';
                targetPane.classList.add('hidden');
                targetPane.classList.remove('block');

                // 2. Animate using GSAP
                const tl = gsap.timeline({
                    onComplete: () => {
                        parentContainer.style.height = '';
                        parentContainer.style.overflow = '';
                    }
                });

                // Fade out current pane
                if (currentPane) {
                    tl.to(currentPane, {
                        opacity: 0,
                        y: 10,
                        duration: 0.18,
                        ease: "power2.in",
                        onComplete: () => {
                            currentPane.classList.remove('opacity-100', 'z-10', 'block');
                            currentPane.classList.add('opacity-0', 'hidden', 'z-0');
                        }
                    });
                }

                // Smoothly morph container height
                tl.fromTo(parentContainer,
                    { height: startHeight },
                    { height: endHeight, duration: 0.35, ease: "power2.inOut" },
                    "-=0.1"
                );

                // Fade in target pane
                tl.fromTo(targetPane,
                    { opacity: 0, y: -10 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.35,
                        ease: "power2.out",
                        onStart: () => {
                            targetPane.classList.remove('hidden', 'opacity-0', 'z-0');
                            targetPane.classList.add('block', 'opacity-100', 'z-10');
                        }
                    },
                    "-=0.2"
                );

                // Animate inner elements inside target pane for a premium touch
                const targetCards = targetPane.querySelectorAll('.inv-card');
                if (targetCards.length > 0) {
                    tl.fromTo(targetCards,
                        { opacity: 0, scale: 0.96, y: 15 },
                        { opacity: 1, scale: 1, y: 0, duration: 0.4, stagger: 0.08, ease: "back.out(1.1)" },
                        "-=0.25"
                    );
                }
            });
        });
    });

    // Accordion Logic
    const accordions = document.querySelectorAll('.accordion-item');
    
    accordions.forEach(acc => {
        const header = acc.querySelector('.accordion-header');
        const content = acc.querySelector('.accordion-content');
        const icon = acc.querySelector('.accordion-icon');
        
        header.addEventListener('click', () => {
            const isOpen = content.classList.contains('active');
            
            // Close all
            accordions.forEach(otherAcc => {
                const otherContent = otherAcc.querySelector('.accordion-content');
                const otherIcon = otherAcc.querySelector('.accordion-icon');
                if(otherContent.classList.contains('active')) {
                    otherContent.classList.remove('active');
                    otherIcon.style.transform = 'rotate(0deg)';
                    gsap.to(otherContent, {
                        height: 0,
                        opacity: 0,
                        borderTopWidth: 0,
                        paddingTop: 0,
                        paddingBottom: 0,
                        duration: 0.3,
                        ease: "power2.inOut"
                    });
                }
            });
            
            // If it wasn't open, open it
            if (!isOpen) {
                content.classList.add('active');
                icon.style.transform = 'rotate(180deg)';
                
                // We set height: auto, but to animate padding properly we remove the py-0 override if any.
                // Or we can just let GSAP animate height and opacity.
                gsap.to(content, {
                    height: 'auto',
                    opacity: 1,
                    borderTopWidth: 1,
                    paddingTop: 16, // tailwind py-4 is 16px (approx)
                    paddingBottom: 16,
                    duration: 0.4,
                    ease: "power2.out"
                });
            }
        });
    });

    // Timeline line animation
    const timelineLines = gsap.utils.toArray('.timeline-line');
    timelineLines.forEach(line => {
        gsap.fromTo(line, 
            { scaleX: 0, transformOrigin: 'left center' },
            { 
                scaleX: 1, 
                duration: 1.5, 
                ease: "power3.out",
                scrollTrigger: {
                    trigger: line.closest('.tab-pane') || line,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

});

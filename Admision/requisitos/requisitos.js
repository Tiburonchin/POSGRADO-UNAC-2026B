document.addEventListener('DOMContentLoaded', () => {
    // Ensure GSAP and ScrollTrigger are loaded
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded');
        return;
    }
    
    gsap.registerPlugin(ScrollTrigger);

    // 1. COORDINATED SCROLLTRIGGER ENTRANCES (Premium, Unified & Smooth)
    // Animates the section title, tab navigation, and active cards in a single timeline on scroll
    const sections = gsap.utils.toArray('.req-section, #requisitos-content');
    
    sections.forEach((section) => {
        // Prevent duplicate trigger if an element matches both selectors
        if (section.dataset.triggered) return;
        section.dataset.triggered = "true";

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
                once: true,
                toggleActions: "play none none none"
            }
        });

        // A. Animate the section header cleanly
        const reqHeader = section.querySelector('.req-header') || section.querySelector('.text-center:first-child');
        if (reqHeader && !reqHeader.closest('.tab-pane')) {
            tl.fromTo(reqHeader, 
                { opacity: 0, y: 25 },
                { opacity: 1, y: 0, duration: 0.55, ease: "power2.out" }
            );
        }

        // B. Animate the tab buttons selector (if present)
        const tabNavs = section.querySelector('.tab-navs');
        if (tabNavs) {
            tl.fromTo(tabNavs, 
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.45, ease: "power2.out" },
                "-=0.35"
            );
        }

        // C. Stagger entrance of only relevant active card columns
        const activePane = section.querySelector('.tab-pane.opacity-100') || section.querySelector('.tab-pane:not(.hidden)');
        if (activePane) {
            const activeCards = activePane.querySelectorAll('.inv-card');
            if (activeCards.length > 0) {
                tl.fromTo(activeCards,
                    { opacity: 0, y: 20 },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.5, 
                        stagger: 0.08, 
                        ease: "power2.out" 
                    },
                    "-=0.25"
                );
            }
        } else {
            // Direct card layout (like in requisitos_posgrado.php)
            const directCards = Array.from(section.querySelectorAll('.inv-card')).filter(card => {
                return !card.closest('.tab-pane');
            });

            if (directCards.length > 0) {
                tl.fromTo(directCards,
                    { opacity: 0, y: 20 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        stagger: 0.06,
                        ease: "power2.out"
                    },
                    "-=0.25"
                );
            }
        }
    });

    // 3. FLUID HEIGHT & TAB TRANSITIONS (GSAP HEIGHT MORPHING)
    const tabGroups = document.querySelectorAll('.tab-navs');
    
    tabGroups.forEach(group => {
        const btns = group.querySelectorAll('.tab-btn');
        const parentContainer = group.nextElementSibling;
        
        if (!parentContainer) return;
        
        const panes = parentContainer.querySelectorAll('.tab-pane');

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.classList.contains('active')) return;

                // Update active tab button classes
                btns.forEach(b => {
                    b.classList.remove('active', 'bg-unac-yellow', 'text-bg-base', 'border-unac-yellow');
                    b.classList.add('border-border-bright', 'text-text-muted');
                });
                btn.classList.add('active', 'bg-unac-yellow', 'text-bg-base', 'border-unac-yellow');
                btn.classList.remove('border-border-bright', 'text-text-muted');

                const targetId = btn.getAttribute('data-target');
                const currentPane = parentContainer.querySelector('.tab-pane.opacity-100') || parentContainer.querySelector('.tab-pane.block');
                const targetPane = document.getElementById(targetId);

                if (!targetPane || currentPane === targetPane) return;

                // Measure height for smooth fluid transition
                parentContainer.style.overflow = 'hidden';
                const startHeight = parentContainer.offsetHeight;

                // Temporarily show target to measure its natural height
                targetPane.classList.remove('hidden');
                targetPane.classList.add('block');
                targetPane.style.position = 'absolute';
                targetPane.style.width = '100%';
                targetPane.style.visibility = 'hidden';
                
                const endHeight = targetPane.offsetHeight;

                // Restore target state before animating
                targetPane.style.position = '';
                targetPane.style.width = '';
                targetPane.style.visibility = '';
                targetPane.classList.add('hidden');
                targetPane.classList.remove('block');

                // Animate timeline
                const tl = gsap.timeline({
                    onComplete: () => {
                        parentContainer.style.height = '';
                        parentContainer.style.overflow = '';
                        // Refresh ScrollTrigger to ensure all trigger anchors match the new height offsets
                        ScrollTrigger.refresh();
                    }
                });

                // Fade out current pane cleanly without visual coordinate conflict
                if (currentPane) {
                    tl.to(currentPane, {
                        opacity: 0,
                        duration: 0.15,
                        ease: "power2.in",
                        onComplete: () => {
                            currentPane.classList.remove('opacity-100', 'z-10', 'block');
                            currentPane.classList.add('opacity-0', 'hidden', 'z-0');
                        }
                    });
                }

                // Smoothly morph container height to match the new content
                tl.fromTo(parentContainer,
                    { height: startHeight },
                    { height: endHeight, duration: 0.35, ease: "power2.inOut" },
                    "-=0.05"
                );

                // Reveal new pane and stagger its inv-cards beautifully (clean, single-direction motion)
                tl.fromTo(targetPane,
                    { opacity: 0 },
                    {
                        opacity: 1,
                        duration: 0.25,
                        ease: "linear",
                        onStart: () => {
                            targetPane.classList.remove('hidden', 'opacity-0', 'z-0');
                            targetPane.classList.add('block', 'opacity-100', 'z-10');
                            
                            const paneCards = targetPane.querySelectorAll('.inv-card');
                            if (paneCards.length > 0) {
                                // Dynamic upward slide for a premium staggered card reveal
                                gsap.fromTo(paneCards,
                                    { opacity: 0, y: 25 },
                                    { 
                                        opacity: 1, 
                                        y: 0, 
                                        duration: 0.5, 
                                        stagger: 0.08, 
                                        ease: "power2.out",
                                        overwrite: "auto"
                                    }
                                );
                            }
                        }
                    },
                    "-=0.1"
                );
            });
        });
    });

    // 4. FAQs ACCORDION WITH ANCHOR REFRESH
    const accordions = document.querySelectorAll('.accordion-item');
    
    accordions.forEach(acc => {
        const header = acc.querySelector('.accordion-header');
        const content = acc.querySelector('.accordion-content');
        const icon = acc.querySelector('.accordion-icon');
        
        if (!header || !content) return;
        
        header.addEventListener('click', () => {
            const isOpen = content.classList.contains('active');
            
            // Close other accordions
            accordions.forEach(otherAcc => {
                const otherContent = otherAcc.querySelector('.accordion-content');
                const otherIcon = otherAcc.querySelector('.accordion-icon');
                
                if (otherContent && otherContent.classList.contains('active')) {
                    otherContent.classList.remove('active');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    
                    gsap.to(otherContent, {
                        height: 0,
                        opacity: 0,
                        borderTopWidth: 0,
                        paddingTop: 0,
                        paddingBottom: 0,
                        duration: 0.25,
                        ease: "power2.inOut"
                    });
                }
            });
            
            // Open clicked accordion if it wasn't open
            if (!isOpen) {
                content.classList.add('active');
                if (icon) icon.style.transform = 'rotate(180deg)';
                
                gsap.to(content, {
                    height: 'auto',
                    opacity: 1,
                    borderTopWidth: 1,
                    paddingTop: 16,
                    paddingBottom: 16,
                    duration: 0.35,
                    ease: "power2.out",
                    onComplete: () => {
                        // Refresh ScrollTrigger when FAQs expand to adapt trigger points
                        ScrollTrigger.refresh();
                    }
                });
            }
        });
    });
});

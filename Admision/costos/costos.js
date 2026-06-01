document.addEventListener('DOMContentLoaded', () => {
    
    // Configuración de GSAP
    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
    } else {
        return;
    }

    const initCostsAnimations = () => {
        const section = document.querySelector('#costos-content');
        if (!section) return;

        // Unified timeline for section entry
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
                once: true,
                onComplete: () => {
                    ScrollTrigger.refresh();
                }
            }
        });

        // 1. Animación del Header de Sección
        const header = section.querySelector('.req-header');
        if (header) {
            tl.fromTo(header.children, 
                { opacity: 0, y: 25 },
                { opacity: 1, y: 0, duration: 0.6, stagger: 0.12, ease: "power2.out" }
            );
        }

        // 2. Animación de barra de tabs
        const tabNavs = section.querySelector('.tab-navs');
        if (tabNavs) {
            tl.fromTo(tabNavs, 
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" },
                "-=0.35"
            );
        }

        // 3. Animación de Tarjetas de la Pestaña Activa
        const activePane = section.querySelector('.tab-pane.block');
        if (activePane) {
            const cards = activePane.querySelectorAll('.inv-card, .adic-card');
            if (cards.length > 0) {
                tl.fromTo(cards,
                    { opacity: 0, y: 30, transition: "none" },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.6, 
                        stagger: 0.12, 
                        ease: "power3.out",
                        clearProps: "all"
                    },
                    "-=0.25"
                );
            }

            const otherFees = activePane.querySelectorAll('.adic-otros > div');
            if (otherFees.length > 0) {
                tl.fromTo(otherFees,
                    { opacity: 0, y: 15 },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.5, 
                        stagger: 0.08, 
                        ease: "power2.out"
                    },
                    "-=0.2"
                );
            }
        }

        // 4. Animación de Secciones de Redirección (CTA)
        const ctaSections = document.querySelectorAll('#redirect-adicionales-section, #redirect-admision-section');
        ctaSections.forEach(cta => {
            gsap.fromTo(cta,
                { opacity: 0, y: 40 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: cta,
                        start: "top 88%",
                        once: true
                    }
                }
            );
        });

        // 5. Animación Alert Box e Info Boxes
        const alerts = document.querySelectorAll('.alert-box');
        alerts.forEach(alert => {
            gsap.fromTo(alert,
                { opacity: 0, x: -25 },
                {
                    opacity: 1,
                    x: 0,
                    duration: 0.7,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: alert,
                        start: "top 88%",
                        once: true
                    }
                }
            );
        });

        // 6. Animación de Preguntas Frecuentes
        const faqs = document.querySelectorAll('.faq-card');
        if (faqs.length > 0) {
            gsap.fromTo(faqs,
                { opacity: 0, y: 20 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".accordion-container",
                        start: "top 88%",
                        once: true
                    }
                }
            );
        }

        ScrollTrigger.refresh();
    };

    // Robust Initialization con Page Loader
    const loader = document.getElementById('page-loader');
    if (loader && !loader.classList.contains('is-hidden')) {
        window.addEventListener('page-loader:complete', () => {
            setTimeout(initCostsAnimations, 200);
        }, { once: true });
    } else {
        setTimeout(initCostsAnimations, 200);
    }

    // Lógica de Tabs e Intercambio de Paneles
    const setupTabs = (groupName) => {
        const tabNavsContainer = document.querySelector(`.tab-navs[data-group="${groupName}"]`);
        if (!tabNavsContainer) return;
        
        const tabBtns = tabNavsContainer.querySelectorAll('.tab-btn');
        const paneContainer = tabNavsContainer.nextElementSibling || tabNavsContainer.parentElement.nextElementSibling;
        if (!paneContainer) return;
        
        const tabPanes = paneContainer.querySelectorAll('.tab-pane');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.classList.contains('active')) return;

                const targetId = btn.getAttribute('data-target');
                const activePane = Array.from(tabPanes).find(pane => pane.classList.contains('block'));
                const targetPane = document.getElementById(targetId);

                if (!targetPane) return;

                // 1. Alternar Clases de Botón
                tabBtns.forEach(b => {
                    b.classList.remove('active', 'bg-unac-yellow', 'text-bg-base', 'shadow-lg', 'shadow-unac-yellow/20');
                    b.classList.add('text-text-muted');
                });
                btn.classList.add('active', 'bg-unac-yellow', 'text-bg-base', 'shadow-lg', 'shadow-unac-yellow/20');
                btn.classList.remove('text-text-muted');

                // 2. Animar transiciones de paneles con cross-fade rápido e indoloro
                if (activePane) {
                    const paneParent = paneContainer || tabPanes[0].parentElement;
                    const startHeight = paneParent.clientHeight;
                    
                    // Bloquear altura inicial para evitar saltos del footer
                    gsap.set(paneParent, { height: startHeight });
                    
                    gsap.to(activePane, {
                        opacity: 0,
                        y: -10,
                        duration: 0.18,
                        ease: "power2.inOut",
                        onComplete: () => {
                             activePane.classList.remove('block', 'opacity-100', 'z-10');
                             activePane.classList.add('hidden', 'opacity-0', 'z-0');

                             // Configurar entrada del panel nuevo
                             targetPane.classList.remove('hidden', 'opacity-0', 'z-0');
                             targetPane.classList.add('block', 'opacity-100', 'z-10');
                            
                            // Ajustar altura del contenedor al nuevo panel de manera fluida
                            gsap.set(targetPane, { opacity: 0, y: 10 });
                            
                            const endHeight = targetPane.scrollHeight;
                            
                            gsap.to(paneParent, {
                                height: endHeight,
                                duration: 0.32,
                                ease: "power3.out",
                                clearProps: "height" // Limpiar la altura fija al terminar
                            });

                             gsap.to(targetPane, {
                                 opacity: 1,
                                 y: 0,
                                 duration: 0.28,
                                 ease: "power2.out",
                                 onStart: () => {
                                     const paneCards = targetPane.querySelectorAll('.inv-card, .adic-card');
                                     if (paneCards.length > 0) {
                                         gsap.fromTo(paneCards,
                                             { opacity: 0, y: 30, transition: "none" },
                                             {
                                                 opacity: 1,
                                                 y: 0,
                                                 duration: 0.6,
                                                 stagger: 0.12,
                                                 ease: "power3.out",
                                                 overwrite: "auto",
                                                 clearProps: "all"
                                             }
                                         );
                                     }
                                     
                                     const otherFees = targetPane.querySelectorAll('.adic-otros > div');
                                     if (otherFees.length > 0) {
                                         gsap.fromTo(otherFees,
                                             { opacity: 0, y: 15 },
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
                                 },
                                 onComplete: () => {
                                     ScrollTrigger.refresh();
                                 }
                             });
                        }
                    });
                }
            });
        });
    };

    setupTabs('inv-economica');
    setupTabs('tesis');

    // Lógica para Accordion (Preguntas Frecuentes Financieras)
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.accordion-icon');
            const parent = header.parentElement;

            const isOpening = !content.classList.contains('active');

            // Cerrar todos los demás acordiones abiertos en un solo lote coordinado
            document.querySelectorAll('.accordion-content.active').forEach(item => {
                if (item !== content) {
                    item.classList.remove('active');
                    gsap.to(item, { height: 0, opacity: 0, duration: 0.22, ease: "power2.inOut" });
                    item.previousElementSibling.querySelector('.accordion-icon').style.transform = 'rotate(0deg)';
                    item.previousElementSibling.parentElement.classList.remove('border-unac-yellow/40', 'border-unac-yellow');
                }
            });

            // Alternar estado actual
            if (!isOpening) {
                content.classList.remove('active');
                gsap.to(content, { 
                    height: 0, 
                    opacity: 0, 
                    duration: 0.22, 
                    ease: "power2.inOut",
                    onComplete: () => ScrollTrigger.refresh()
                });
                icon.style.transform = 'rotate(0deg)';
                parent.classList.remove('border-unac-yellow');
            } else {
                content.classList.add('active');
                gsap.set(content, { height: "auto" });
                const fullHeight = content.scrollHeight;
                gsap.fromTo(content, 
                    { height: 0, opacity: 0 }, 
                    { 
                        height: fullHeight, 
                        opacity: 1, 
                        duration: 0.28, 
                        ease: "power2.out",
                        onComplete: () => ScrollTrigger.refresh()
                    }
                );
                icon.style.transform = 'rotate(180deg)';
                parent.classList.add('border-unac-yellow');
            }
        });
    });

});

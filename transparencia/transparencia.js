/**
 * Javascript para la Subpágina de Transparencia - Posgrado UNAC
 * Maneja el filtrado de documentos, cambio de pestañas e integración limpia de GSAP.
 */
document.addEventListener('DOMContentLoaded', () => {
    console.log("=== INICIALIZANDO TRANSPARENCIA EPG ===");

    // --- SISTEMA DE PESTAÑAS (TABS) ---
    const tabBtns = document.querySelectorAll('.transparency-tab-btn');
    const tabPanes = document.querySelectorAll('.transparency-tab-pane');

    if (tabBtns.length && tabPanes.length) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.getAttribute('data-target');
                console.log("Cambiando a pestaña:", target);

                // Activar botón actual
                tabBtns.forEach(b => b.classList.remove('active', 'border-unac-yellow', 'text-white'));
                tabBtns.forEach(b => b.classList.add('border-white/5', 'text-white/60'));
                btn.classList.add('active', 'border-unac-yellow', 'text-white');
                btn.classList.remove('border-white/5', 'text-white/60');

                // Mostrar panel correspondiente
                tabPanes.forEach(pane => {
                    if (pane.id === target) {
                        pane.classList.remove('hidden');
                        // Mini animación de entrada para los elementos del panel
                        gsap.fromTo(pane.querySelectorAll('.reveal-card'), 
                            { y: 15, opacity: 0 }, 
                            { y: 0, opacity: 1, duration: 0.5, stagger: 0.05, ease: 'power2.out', clearProps: 'all' }
                        );
                    } else {
                        pane.classList.add('hidden');
                    }
                });

                // Refrescar ScrollTrigger para evitar saltos/bugs con Lenis
                setTimeout(() => {
                    if (typeof ScrollTrigger !== 'undefined') {
                        ScrollTrigger.refresh();
                        console.log("ScrollTrigger refrescado tras cambio de pestaña.");
                    }
                }, 100);
            });
        });
    }

    // --- ACCORDION DE ESTADÍSTICAS ---
    const statGroupBtns = document.querySelectorAll('.stat-group-header');
    if (statGroupBtns.length) {
        statGroupBtns.forEach(header => {
            header.addEventListener('click', () => {
                const wrapper = header.nextElementSibling;
                const icon = header.querySelector('.accordion-icon');
                const isOpen = wrapper.classList.contains('open');

                console.log("Toggle estadística. Abierto actualmente:", isOpen);

                if (isOpen) {
                    wrapper.classList.remove('open');
                    wrapper.style.maxHeight = '0px';
                    icon.classList.remove('rotate-180');
                } else {
                    wrapper.classList.add('open');
                    wrapper.style.maxHeight = wrapper.scrollHeight + 'px';
                    icon.classList.add('rotate-180');
                }

                // Refrescar al terminar la transición
                setTimeout(() => {
                    if (typeof ScrollTrigger !== 'undefined') {
                        ScrollTrigger.refresh();
                    }
                }, 400);
            });
        });
    }

    // --- ANIMACIONES DE ENTRADA CON GSAP ---
    if (typeof gsap !== 'undefined') {
        // Revelar el Hero
        gsap.fromTo('.hero-content h1', 
            { y: 40, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1, ease: 'power3.out' }
        );
        gsap.fromTo('.hero-content p', 
            { y: 20, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1, delay: 0.2, ease: 'power3.out' }
        );

        // Revelar Cabecera de Sección
        if (document.querySelector('.reveal-header')) {
            gsap.fromTo('.reveal-header', 
                { y: 30, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: '.reveal-header',
                        start: 'top 85%'
                    }
                }
            );
        }

        // Revelar las Tarjetas Iniciales con ScrollTrigger
        const initialCards = document.querySelectorAll('#dashboard-tabs-container, .transparency-tab-pane:not(.hidden) .reveal-card');
        if (initialCards.length) {
            gsap.fromTo(initialCards,
                { y: 30, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.08,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '#dashboard-tabs-container',
                        start: 'top 85%',
                        once: true
                    },
                    clearProps: 'transform,opacity'
                }
            );
        }
    }
});

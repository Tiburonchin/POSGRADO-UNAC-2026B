/**
 * Noticias y Eventos - Carrusel Animado con GSAP Flip
 * Estructura modular ordenada según código de referencia
 */

// 1. Configuración de Tailwind para variables CSS
if (typeof tailwind !== 'undefined') {
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    bg: 'var(--bg)',
                    elevated: 'var(--bg-elevated)',
                    soft: 'var(--bg-soft)',
                    accent: 'var(--accent)',
                    'accent-2': 'var(--accent-2)',
                    muted: 'var(--text-muted)',
                    border: 'var(--border)'
                },
                boxShadow: {
                    soft: 'var(--shadow-soft)',
                    deep: 'var(--shadow-deep)',
                }
            }
        }
    };
}

// 2. Lógica del Carrusel con GSAP Flip
const initNewsCarousel = () => {
    // Verificación de dependencias
    if (typeof gsap === 'undefined' || typeof Flip === 'undefined') {
        console.warn("GSAP o Flip Plugin no detectados en noticias-animations.js");
        return;
    }

    gsap.registerPlugin(Flip);

    const track = document.getElementById("news-track");
    const btnNext = document.getElementById("btn-next");
    const btnPrev = document.getElementById("btn-prev");
    
    if (!track || !btnNext || !btnPrev) {
        console.warn("Elementos del carrusel no encontrados en el DOM.");
        return;
    }

    let isAnimating = false;

    // Configuración de visibilidad responsiva
    const getVisibleCount = () => {
        const w = window.innerWidth;
        if (w < 640) return 1;
        if (w < 800) return 2;
        if (w < 1150) return 3;
        return 4; // 4 Tarjetas en Desktop según referencia
    };

    const updateVisibility = () => {
        const visibleCount = getVisibleCount();
        const cards = gsap.utils.toArray(".news-card"); 
        
        cards.forEach((card, index) => {
            card.style.display = (index < visibleCount) ? "flex" : "none";
        });
    };

    // Inicialización
    updateVisibility();
    window.addEventListener('resize', () => {
        if(!isAnimating) updateVisibility();
    });

    // Motor de movimiento FLIP
    const moveCarousel = (direction) => {
        if (isAnimating) return;
        isAnimating = true;

        // Congelar dimensiones para evitar saltos visuales
        const trackBounds = track.getBoundingClientRect();
        track.style.minWidth = `${trackBounds.width}px`;
        track.style.minHeight = `${trackBounds.height}px`;

        const cards = gsap.utils.toArray(".news-card");
        const state = Flip.getState(cards);

        // Manipulación del DOM
        if (direction === "next") {
            track.appendChild(cards[0]);
        } else {
            track.prepend(cards[cards.length - 1]);
        }

        updateVisibility();

        // Ejecución de la animación
        Flip.from(state, {
            duration: 0.7,
            ease: "power2.inOut",
            absolute: true,
            scale: true,
            onEnter: elements => gsap.fromTo(elements, 
                { opacity: 0, scale: 0 }, 
                { opacity: 1, scale: 1, duration: 0.7, ease: "power2.inOut" }
            ),
            onLeave: elements => gsap.to(elements, 
                { opacity: 0, scale: 0, duration: 0.7, ease: "power2.inOut" }
            ),
            onComplete: () => {
                track.style.minWidth = "";
                track.style.minHeight = "";
                isAnimating = false;
            }
        });
    };

    btnNext.addEventListener("click", () => moveCarousel("next"));
    btnPrev.addEventListener("click", () => moveCarousel("prev"));
    
    console.log("Carrusel de noticias inicializado correctamente.");
};

// Ejecución segura
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initNewsCarousel);
} else {
    initNewsCarousel();
}

/**
 * Ubicacion y Testimonios - Animaciones Cinematográficas
 */

const initUbicacionAnimations = () => {
    // Verificación de dependencias
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn("GSAP o ScrollTrigger no detectados en ubicacion-animations.js");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const section = document.getElementById("location-reviews-section");
    if (!section) return;

    // 1. Animación del Título y Texto (Efecto de revelado)
    gsap.fromTo(".cinematic-title, .cinematic-text", 
        { 
            y: 50, 
            opacity: 0, 
            filter: "blur(10px)" 
        },
        {
            y: 0,
            opacity: 1,
            filter: "blur(0px)",
            duration: 1.2,
            stagger: 0.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
            }
        }
    );

    // 2. Animación Cinematográfica del Mapa (Zoom-Out / Perspective)
    gsap.fromTo(".map-card", 
        {
            scale: 1.1,
            y: 60,
            opacity: 0,
            rotationX: 10
        },
        {
            scale: 1,
            y: 0,
            opacity: 1,
            rotationX: 0,
            duration: 1.5,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".map-wrapper",
                start: "top 85%", 
                end: "top 30%",
                scrub: 1
            }
        }
    );

    // 3. Animación de las Tarjetas de Testimonios (Slide-in lateral)
    const reviewCards = gsap.utils.toArray(".review-card");
    
    if (reviewCards.length > 0) {
        const tlTestimonials = gsap.timeline({
            scrollTrigger: {
                trigger: ".testimonials-wrapper",
                start: "top 75%",
                end: "center center",
                scrub: 0.5
            }
        });

        tlTestimonials.fromTo(reviewCards, 
            {
                x: 100,
                opacity: 0,
                filter: "blur(8px)"
            },
            {
                x: 0,
                opacity: 1,
                filter: "blur(0px)",
                stagger: 0.3,
                ease: "power2.out"
            }
        )
        .fromTo(".review-btn", 
            { opacity: 0, y: 20 },
            { opacity: 1, y: 0, ease: "power2.out" },
            "-=0.2"
        );
    }

    // 4. Parallax Sutil de la columna de testimonios
    gsap.to(".testimonials-wrapper", {
        yPercent: -10,
        ease: "none",
        scrollTrigger: {
            trigger: section,
            start: "top bottom", 
            end: "bottom top", 
            scrub: true
        }
    });

    console.log("Animaciones de ubicación y testimonios inicializadas.");
};

// Ejecución segura
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initUbicacionAnimations);
} else {
    initUbicacionAnimations();
}

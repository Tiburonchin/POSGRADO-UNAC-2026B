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

    // Se eliminaron las animaciones de entrada (reveal) para un scroll más limpio y directo.


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

/**
 * Ubicacion y Testimonios - Animaciones Cinematográficas y Rotación
 */

const initUbicacionAnimations = () => {
    // Verificación de dependencias
    if (typeof gsap === 'undefined') {
        console.warn("GSAP no detectado en ubicacion-animations.js");
        return;
    }

    const section = document.getElementById("location-reviews-section");
    if (!section) return;

    // --- Rotación de Testimonios (2 en 2) ---
    const groups = document.querySelectorAll('.testimonial-group');
    if (groups.length > 1) {
        let currentIndex = 0;
        const intervalTime = 6000; // 6 segundos para dar tiempo a leer dos

        const rotateGroups = () => {
            const currentGroup = groups[currentIndex];
            currentIndex = (currentIndex + 1) % groups.length;
            const nextGroup = groups[currentIndex];

            // Animación de salida
            gsap.to(currentGroup, {
                opacity: 0,
                y: -15,
                duration: 0.6,
                ease: "power2.inOut",
                onComplete: () => {
                    currentGroup.classList.remove('active');
                    // Animación de entrada
                    nextGroup.classList.add('active');
                    gsap.fromTo(nextGroup, 
                        { opacity: 0, y: 15 },
                        { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" }
                    );
                }
            });
        };

        setInterval(rotateGroups, intervalTime);
    }

    // Parallax Sutil de la columna de testimonios (si ScrollTrigger está disponible)
    if (window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
        gsap.to(".testimonial-slot", {
            yPercent: -5,
            ease: "none",
            scrollTrigger: {
                trigger: section,
                start: "top bottom", 
                end: "bottom top", 
                scrub: true
            }
        });
    }

    console.log("Sistema de testimonios rotativos y mapa oscuro inicializado.");
};

// Ejecución segura
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initUbicacionAnimations);
} else {
    initUbicacionAnimations();
}

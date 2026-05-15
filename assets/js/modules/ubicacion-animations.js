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

    // --- Sistema de Mapa Interactivo On-Demand ---
    const mapContainer = document.getElementById('map-interactive-container');
    const mapPlaceholder = document.getElementById('map-placeholder');
    const mapLoader = document.getElementById('map-loader');
    const mapWrapper = document.getElementById('map-iframe-wrapper');
    let mapLoaded = false;

    if (mapContainer && mapPlaceholder && mapLoader && mapWrapper) {
        const loadMap = () => {
            if (mapLoaded) return;
            mapLoaded = true;

            // Mostrar loader y ocultar placeholder gradualmente
            gsap.to(mapLoader, { opacity: 1, pointerEvents: "auto", duration: 0.3 });
            gsap.to(mapPlaceholder, { opacity: 0, duration: 0.8, ease: "power2.inOut" });

            // Crear el iframe
            const iframe = document.createElement('iframe');
            iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.743110991196!2d-77.1198236240203!3d-12.061214042172703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cb910984762b%3A0x104327c627fa29ad!2sUniversidad%20Nacional%20del%20Callao!5e0!3m2!1ses!2spe!4v1777482384661!5m2!1ses!2spe";
            iframe.className = "w-full h-full border-0";
            iframe.setAttribute('allowfullscreen', '');
            iframe.setAttribute('loading', 'lazy');
            iframe.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');

            // Evento cuando el iframe termina de cargar
            iframe.onload = () => {
                gsap.to(mapLoader, { opacity: 0, pointerEvents: "none", duration: 0.5 });
                gsap.to(mapWrapper, { opacity: 1, duration: 1, ease: "power2.out" });
                mapPlaceholder.style.display = 'none';
                mapContainer.classList.remove('cursor-pointer');
            };

            mapWrapper.appendChild(iframe);
        };

        // Activar por click
        mapContainer.addEventListener('click', loadMap);

        // Opcional: Activar por hover prolongado (UX Pro)
        let hoverTimer;
        mapContainer.addEventListener('mouseenter', () => {
            hoverTimer = setTimeout(loadMap, 2000); // Carga tras 2s de hover
        });
        mapContainer.addEventListener('mouseleave', () => {
            clearTimeout(hoverTimer);
        });
    }

    console.log("Sistema de testimonios rotativos y mapa interactivo optimizado inicializado.");
};

// Ejecución segura
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initUbicacionAnimations);
} else {
    initUbicacionAnimations();
}

/**
 * Talento UNAC - 3D Logo Carousel Animations
 */
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById('logoTrack');
    if (!track) return;

    const originalCards = Array.from(track.children);
    
    // 1. DUPLICAR TARJETAS
    // Clonamos dos veces para asegurar que la pantalla siempre esté llena
    for (let i = 0; i < 2; i++) {
        originalCards.forEach(card => {
            const clone = card.cloneNode(true);
            track.appendChild(clone);
        });
    }

    const allCards = Array.from(track.children);

    // 2. ANIMACIÓN DE DESPLAZAMIENTO INFINITO (TICKER)
    let scrollTween = gsap.to(track, {
        xPercent: -33.3333, 
        ease: "none",
        duration: 25, // Un poco más lento para mejor legibilidad
        repeat: -1
    });

    // Pausar al pasar el mouse por el track
    track.addEventListener('mouseenter', () => scrollTween.pause());
    track.addEventListener('mouseleave', () => scrollTween.play());

    // 3. EFECTO 3D DINÁMICO (ARCO)
    gsap.ticker.add(() => {
        const centerX = window.innerWidth / 2;
        
        allCards.forEach(card => {
            const rect = card.getBoundingClientRect();
            // Solo procesar si está visible en pantalla (optimización)
            if (rect.right < 0 || rect.left > window.innerWidth) return;

            const cardCenterX = rect.left + rect.width / 2;
            const distFromCenter = cardCenterX - centerX;
            const normalizedDist = distFromCenter / centerX;
            
            const maxRotation = 35; 
            const rotateY = normalizedDist * maxRotation;
            const scale = 1 - Math.abs(normalizedDist) * 0.15;
            const translateZ = Math.abs(normalizedDist) * -100;

            gsap.set(card, {
                rotationY: rotateY,
                z: translateZ,
                scale: Math.max(0.7, scale)
            });
        });
    });
});

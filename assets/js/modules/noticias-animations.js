/**
 * NOTICIAS SECTION ANIMATIONS (V4 - Ultra Smooth Flip Carousel)
 * Circular carousel with consecutive flow and premium Flip transitions (Fade & Shrink).
 */
(function() {
    'use strict';

    if (!window.gsap || !window.Flip) return;

    const gsap = window.gsap;
    const Flip = window.Flip;
    const ScrollTrigger = window.ScrollTrigger;

    gsap.registerPlugin(ScrollTrigger, Flip);

    function initNoticias() {
        const section = document.querySelector('#noticias');
        const track = document.getElementById("carousel-track");
        if (!section || !track) return;

        const ctx = gsap.context(() => {
            let cards = gsap.utils.toArray(".news-card");
            let isAnimating = false;

            // 1. HERO ENTRANCE/EXIT SYNC
            const heroContent = document.querySelector(".hero-content");
            if (heroContent) {
                gsap.to(heroContent, {
                    y: -100,
                    scale: 0.9,
                    opacity: 0,
                    ease: "none",
                    scrollTrigger: {
                        trigger: section,
                        start: "top 100%",
                        end: "top 20%",
                        scrub: true,
                    }
                });
            }

            // 1b. HEADER ENTRANCE ANIMATION
            gsap.from(".news-header > *", {
                scrollTrigger: {
                    trigger: "#noticias",
                    start: "top 75%",
                },
                y: 30,
                opacity: 0,
                duration: 0.8,
                stagger: 0.12,
                ease: "power3.out"
            });

            // 1c. CAROUSEL ENTRANCE ANIMATION
            gsap.from("#carousel-track", {
                scrollTrigger: {
                    trigger: "#noticias",
                    start: "top 65%",
                },
                y: 40,
                opacity: 0,
                duration: 0.9,
                ease: "power3.out"
            });


            // 2. CAROUSEL CORE LOGIC
            // --------------------------------------------------
            
            function getVisibleCount() {
                if (window.innerWidth < 768) return 1;
                if (window.innerWidth < 1024) return 2;
                if (window.innerWidth < 1280) return 3;
                return 4;
            }

            function updateBorders() {
                cards.forEach(card => card.classList.remove("no-border-r"));
                const visibleCards = cards.filter(card => !card.classList.contains("is-hidden"));
                if (visibleCards.length > 0) {
                    visibleCards[visibleCards.length - 1].classList.add("no-border-r");
                }
            }

            function updateCarousel(direction) {
                if (isAnimating) return;
                isAnimating = true;

                const visibleCount = getVisibleCount();
                
                // --- STEP 1: CAPTURE STATE ---
                // We capture the state of ALL cards, including the ones about to be hidden/shown
                const state = Flip.getState(cards);

                // --- STEP 2: REORDER DOM CONSECUTIVELY ---
                if (direction === "next") {
                    // Move the first card to the end of the track
                    track.appendChild(cards[0]);
                    // Update our internal array to match the new DOM order
                    cards.push(cards.shift());
                } else {
                    // Move the last card to the beginning of the track
                    track.insertBefore(cards[cards.length - 1], cards[0]);
                    // Update our internal array to match the new DOM order
                    cards.unshift(cards.pop());
                }

                // --- STEP 3: UPDATE VISIBILITY ---
                cards.forEach((card, index) => {
                    // Only the first 'visibleCount' cards in the array are shown
                    card.classList.toggle("is-hidden", index >= visibleCount);
                });
                
                updateBorders();

                // --- STEP 4: FLIP ANIMATION (THE MAGIC) ---
                Flip.from(state, {
                    targets: cards,
                    duration: 1, // Slightly slower for more "premium" feel
                    ease: "expo.inOut", // Very smooth acceleration/deceleration
                    absolute: true, // Crucial for elements changing visibility/position
                    stagger: 0.02,
                    onEnter: elements => {
                        // Elements appearing (Fade in + Scale up)
                        return gsap.fromTo(elements, 
                            { opacity: 0, scale: 0.85, y: 20 }, 
                            { opacity: 1, scale: 1, y: 0, duration: 0.8, delay: 0.2, ease: "power3.out" }
                        );
                    },
                    onLeave: elements => {
                        // Elements disappearing (Fade out + Scale down)
                        return gsap.to(elements, { 
                            opacity: 0, 
                            scale: 0.85, 
                            y: -20,
                            duration: 0.8, 
                            ease: "power3.inOut"
                        });
                    },
                    onComplete: () => {
                        isAnimating = false;
                        ScrollTrigger.refresh();
                    }
                });
            }

            // Initial State setup
            const initCarousel = () => {
                const visibleCount = getVisibleCount();
                cards.forEach((card, index) => {
                    card.classList.toggle("is-hidden", index >= visibleCount);
                });
                updateBorders();
            };

            // Event Listeners
            const btnNext = document.getElementById("btn-next");
            const btnPrev = document.getElementById("btn-prev");

            if (btnNext) btnNext.addEventListener("click", () => updateCarousel("next"));
            if (btnPrev) btnPrev.addEventListener("click", () => updateCarousel("prev"));
            
            // Resize handler with debounce
            let resizeTimer;
            window.addEventListener("resize", () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    if (!isAnimating) initCarousel();
                }, 150);
            });

            // Initial call
            initCarousel();



        }, section);
    }

    // Initialize on load
    if (document.readyState === 'complete') {
        initNoticias();
    } else {
        window.addEventListener('load', initNoticias);
    }

})();

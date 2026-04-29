/**
 * Footer Animations Module
 * Handles the fluid SVG curve based on scroll velocity and entry animations.
 * Harmonized with GSAP best practices for a premium, liquid-like feel.
 */

function initFooterAnimations() {
    // Ensure GSAP and ScrollTrigger are loaded
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn("GSAP or ScrollTrigger not found. Footer animations skipped.");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    /* ========================================================
       1. LIQUID BÉZIER CURVE (Velocity-based Elastic String)
       ======================================================== */
    const pathElement = document.getElementById("fluid-path");
    
    if (pathElement) {
        // Initial state: M 0 100 C 200 100 800 100 1000 100 L 1000 100 L 0 100 Z
        // We animate the Y of the control points (currently at 100)
        const curve = { y: 100 }; 

        // quickTo for high-performance real-time updates
        const updateCurveY = gsap.quickTo(curve, "y", {
            duration: 0.8,
            ease: "elastic.out(1.2, 0.45)", // Refined elastic for more 'liquid' tension
            onUpdate: () => {
                const y = curve.y;
                // Cubic Bézier (C) gives a much more organic "wave" than Quadratic (Q)
                // The points at 250 and 750 create a smoother center bulge
                pathElement.setAttribute("d", `M 0 100 C 250 ${y} 750 ${y} 1000 100 L 1000 100 L 0 100 Z`);
            }
        });

        let scrollTimeout;

        // Global ScrollTrigger for velocity monitoring
        ScrollTrigger.create({
            onUpdate: (self) => {
                const v = self.getVelocity();
                
                if (Math.abs(v) > 20) {
                    // Map velocity to Y with a subtle logarithmic-like feel
                    // Scroll down (positive v) pulls the curve down (higher Y)
                    // Scroll up (negative v) pushes the curve up (lower Y)
                    let targetY = 100 + (v * 0.045); 
                    
                    // Clamp to prevent visual breaking
                    targetY = gsap.utils.clamp(-60, 260, targetY);

                    updateCurveY(targetY);

                    // Auto-reset when scroll stops
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        updateCurveY(100);
                    }, 100);
                }
            }
        });
    }

    /* ========================================================
       2. FOOTER CONTENT HARMONIZATION (Velocity Lag)
       ======================================================== */
    const footerContent = document.querySelector('#site-footer .site-container');
    if (footerContent) {
        const quickY = gsap.quickTo(footerContent, "y", { duration: 0.6, ease: "power2.out" });
        
        ScrollTrigger.create({
            onUpdate: (self) => {
                const v = self.getVelocity();
                // Subtle content reaction to scroll velocity (harmonization)
                const yOffset = gsap.utils.clamp(-15, 15, v * 0.005);
                quickY(yOffset);
            }
        });
    }

    /* ========================================================
       3. PREMIUM ENTRY & INTERACTIVE ELEMENTS
       ======================================================== */
    const animElements = gsap.utils.toArray('.footer-anim');

    if (animElements.length > 0) {
        gsap.from(animElements, {
            scrollTrigger: {
                trigger: "#site-footer",
                start: "top 92%",
            },
            y: 30,
            autoAlpha: 0,
            duration: 1.2,
            stagger: 0.1,
            ease: "expo.out",
            clearProps: "all"
        });
    }

    // Magnetic effect for social links (The "Fun Stuff" part)
    const socialLinks = document.querySelectorAll('.footer-social-link');
    socialLinks.forEach(link => {
        link.addEventListener('mousemove', (e) => {
            const rect = link.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(link, {
                x: x * 0.4,
                y: y * 0.4,
                duration: 0.3,
                ease: "power2.out"
            });
            
            const icon = link.querySelector('svg');
            if (icon) {
                gsap.to(icon, {
                    x: x * 0.2,
                    y: y * 0.2,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });
        
        link.addEventListener('mouseleave', () => {
            gsap.to(link, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1, 0.3)" });
            const icon = link.querySelector('svg');
            if (icon) {
                gsap.to(icon, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1, 0.3)" });
            }
        });
    });

    // Premium hover effects for Grid Items (The "UI / Fun Stuff" part)
    const gridItems = document.querySelectorAll('.footer-grid-item');
    gridItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            gsap.to(item, {
                y: -4,
                backgroundColor: "var(--bg-soft)",
                borderColor: "rgba(251, 202, 56, 0.3)",
                duration: 0.4,
                ease: "power2.out"
            });
        });
        
        item.addEventListener('mouseleave', () => {
            gsap.to(item, {
                y: 0,
                backgroundColor: "var(--bg-surface)",
                borderColor: "transparent",
                duration: 0.4,
                ease: "power2.out"
            });
        });
    });
}

// Logic to initialize based on page-loader status
(function() {
    const hasLoader = document.getElementById('page-loader');
    const isLoaderHidden = hasLoader && hasLoader.classList.contains('is-hidden');

    if (hasLoader && !isLoaderHidden) {
        // Wait for loader to complete on home page
        window.addEventListener('page-loader:complete', () => {
            initFooterAnimations();
        }, { once: true });
    } else {
        // Direct initialization for other pages (like la-escuela)
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initFooterAnimations);
        } else {
            initFooterAnimations();
        }
    }
})();

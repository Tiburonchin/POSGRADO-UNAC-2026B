/**
 * Footer Animations Module
 * Handles the fluid SVG curve based on scroll velocity and entry animations.
 * Adapted from the working reference demo for optimal physics and performance.
 */

document.addEventListener("DOMContentLoaded", () => {
    // Ensure GSAP and ScrollTrigger are loaded
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn("GSAP or ScrollTrigger not found. Footer animations skipped.");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    /* ========================================================
       1. DYNAMIC BÉZIER CURVE (Velocity-based Elastic String)
       ======================================================== */
    const pathElement = document.getElementById("fluid-path");
    
    if (pathElement) {
        // Reactive object for the control point Y position
        // 100 is the flat state in our viewBox "M 0 100 Q 500 [Y] 1000 100..."
        const curve = { y: 100 }; 

        // quickTo is the most performant way to update values continuously in GSAP
        const updateCurveY = gsap.quickTo(curve, "y", {
            duration: 0.9,
            ease: "elastic.out(1.1, 0.4)", // More amplitude, slightly more 'loose' bounce
            onUpdate: () => {
                // Update the SVG path string in real-time
                pathElement.setAttribute("d", `M 0 100 Q 500 ${curve.y} 1000 100 L 1000 100 L 0 100 Z`);
            }
        });

        let scrollTimeout;

        // Global ScrollTrigger to monitor velocity
        ScrollTrigger.create({
            onUpdate: (self) => {
                // getVelocity() returns positive for scrolling down, negative for up
                const v = self.getVelocity();
                
                // Only trigger if movement is significant
                if (Math.abs(v) > 30) { // Lowered threshold for more sensitivity
                    // Map velocity to Y position
                    // Increased sensitivity from 0.05 to 0.08
                    let targetY = 100 - (v * 0.08); 
                    
                    // Clamp to prevent the curve from breaking the layout (expanded range)
                    targetY = gsap.utils.clamp(-80, 280, targetY);

                    // Push the value to the quickTo pipe
                    updateCurveY(targetY);

                    // Reset logic: Detect when scroll stops
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        updateCurveY(100);
                    }, 120); // Slightly longer wait for smoother return
                }
            }
        });
    }

    /* ========================================================
       2. FOOTER CONTENT ENTRY (Stagger)
       ======================================================== */
    const animElements = gsap.utils.toArray('.footer-anim');

    if (animElements.length > 0) {
        gsap.from(animElements, {
            scrollTrigger: {
                trigger: "#site-footer",
                start: "top 88%", // Trigger slightly before it fully enters
            },
            y: 40,
            opacity: 0,
            duration: 1.1,
            stagger: 0.15,
            ease: "power3.out",
            clearProps: "all"
        });
    }
});

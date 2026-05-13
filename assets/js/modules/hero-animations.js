class TextScramble {
    constructor(el) {
        this.el = el;
        this.chars = '!<>-_\\/[]{}—=+*^?#________';
        this.update = this.update.bind(this);
    }
    setText(newText) {
        const oldText = this.el.innerText;
        const length = Math.max(oldText.length, newText.length);
        const promise = new Promise((resolve) => this.resolve = resolve);
        this.queue = [];
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || '';
            const to = newText[i] || '';
            const start = Math.floor(Math.random() * 40);
            const end = start + Math.floor(Math.random() * 40);
            this.queue.push({ from, to, start, end });
        }
        cancelAnimationFrame(this.frameRequest);
        this.frame = 0;
        this.update();
        return promise;
    }
    update() {
        let output = '';
        let complete = 0;
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i];
            if (this.frame >= end) {
                complete++;
                output += to;
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar();
                    this.queue[i].char = char;
                }
                output += `<span class="opacity-50">${char}</span>`;
            } else {
                output += from;
            }
        }
        this.el.innerHTML = output;
        if (complete === this.queue.length) {
            this.resolve();
        } else {
            this.frameRequest = requestAnimationFrame(this.update);
            this.frame++;
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }
}

document.addEventListener('DOMContentLoaded', () => {
    try { lucide.createIcons(); } catch(e) { console.error("Lucide Error:", e); }
    gsap.registerPlugin(ScrollTrigger);

    const tagline = document.getElementById('hero-tagline');
    const scramble = new TextScramble(tagline);
    
    const phrases = [
        "Formación avanzada con excelencia científica e innovación técnica desde el Callao para el mundo.",
        "Nuevo récord de 2079 ingresantes este 2026-A.",
        "Contamos con 36 Maestrías, 12 Doctorados y 17 Especialidades."
    ];
    let phraseCounter = 0;

    const nextPhrase = () => {
        scramble.setText(phrases[phraseCounter]).then(() => {
            setTimeout(nextPhrase, 3000);
        });
        phraseCounter = (phraseCounter + 1) % phrases.length;
    };

    tagline.innerHTML = ""; // clear initial text

    // 1. Animación de Entrada
    const introTl = gsap.timeline({
        onComplete: () => {
            if (document.body.getAttribute('data-page') === 'home') {
                window.dispatchEvent(new Event('hero:animation:complete'));
                // Failsafe unlock en caso de que el listener de page-loader llegue tarde
                document.documentElement.classList.remove('is-loading');
                document.body.classList.remove('is-loading');
                if (window.lenis) window.lenis.start();
            }
        }
    });

    introTl.from("#hero-content h1 span", {
        y: 100,
        opacity: 0,
        rotateX: -20,
        duration: 1.5,
        stagger: 0.15,
        ease: "power4.out"
    })
    .add(() => {
        nextPhrase();
    }, "-=0.8")
    .from("#hero-action", {
        scale: 0.9,
        opacity: 0,
        y: 20,
        duration: 1,
        ease: "expo.out"
    }, "-=0.2")
    .from("#scroll-indicator", {
        opacity: 0,
        y: -20,
        duration: 1
    }, "-=0.5")
    .from("#hero-bg-img", {
        scale: 1.15,
        duration: 4,
        ease: "power2.out"
    }, 0);

    // 2. Lógica de Pinned Panel (El Hero se queda fijo mientras el panel inferior sube)
    gsap.to("#hero-content", {
        scrollTrigger: {
            trigger: "#hero-section",
            start: "top top",
            end: "bottom top",
            scrub: true,
        },
        opacity: 0,
        scale: 0.9,
        y: -50,
        filter: "blur(15px)",
        ease: "none"
    });

    // Fijamos la sección Hero para que la de abajo suba por encima (Cinta)
    // Se soltará exactamente cuando la cinta termine de cubrir la parte inferior, para irse con ella.
    const revealSection = document.getElementById('reveal-section');
    ScrollTrigger.create({
        trigger: "#hero-section",
        start: "top top",
        end: () => "+=" + (revealSection ? revealSection.offsetHeight : 0),
        pin: true,
        pinSpacing: false
    });

    // 3. Slider Infinito de Logos
    const logoSlider = document.getElementById('logo-slider');
    const sliderTween = gsap.to(logoSlider, {
        xPercent: -50,
        duration: 35,
        ease: "none",
        repeat: -1
    });

    // Ralentización suave al interactuar
    logoSlider.addEventListener('mouseenter', () => gsap.to(sliderTween, { timeScale: 0.15, duration: 1.2, ease: "power2.out" }));
    logoSlider.addEventListener('mouseleave', () => gsap.to(sliderTween, { timeScale: 1, duration: 1.2, ease: "power2.inOut" }));
});

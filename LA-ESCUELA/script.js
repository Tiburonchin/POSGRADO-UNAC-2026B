import { vertexShader, fragmentShader } from "./shaders.js";

gsap.registerPlugin(ScrollTrigger);

window.lenis = new Lenis();
function raf(time) {
  lenis.raf(time);
  ScrollTrigger.update();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);
lenis.on("scroll", ScrollTrigger.update);

const CONFIG = {
  color: "#060a12",
  spread: 0.5,
  speed: 2,
};

const canvas = document.querySelector(".hero-canvas");
const hero = document.querySelector(".hero");

const scene = new THREE.Scene();
const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
const renderer = new THREE.WebGLRenderer({
  canvas,
  alpha: true,
  antialias: false,
});

function hexToRgb(hex) {
  const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result
    ? {
        r: parseInt(result[1], 16) / 255,
        g: parseInt(result[2], 16) / 255,
        b: parseInt(result[3], 16) / 255,
      }
    : { r: 0.89, g: 0.89, b: 0.89 };
}

function resize() {
  const width = hero.offsetWidth;
  const height = hero.offsetHeight;
  renderer.setSize(width, height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
}

resize();
window.addEventListener("resize", resize);

const rgb = hexToRgb(CONFIG.color);
const geometry = new THREE.PlaneGeometry(2, 2);
const material = new THREE.ShaderMaterial({
  vertexShader,
  fragmentShader,
  uniforms: {
    uProgress: { value: 0 },
    uResolution: {
      value: new THREE.Vector2(hero.offsetWidth, hero.offsetHeight),
    },
    uColor: { value: new THREE.Vector3(rgb.r, rgb.g, rgb.b) },
    uSpread: { value: CONFIG.spread },
  },
  transparent: true,
});

const mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);

let scrollProgress = 0;

function animate() {
  if (window.scrollY <= hero.offsetHeight + 100) {
    material.uniforms.uProgress.value = scrollProgress;
    renderer.render(scene, camera);
  }
  requestAnimationFrame(animate);
}

animate();

lenis.on("scroll", ({ scroll }) => {
  const heroHeight = hero.offsetHeight;
  const windowHeight = window.innerHeight;
  const maxScroll = heroHeight - windowHeight;
  scrollProgress = Math.min((scroll / maxScroll) * CONFIG.speed, 1.1);


});

window.addEventListener("resize", () => {
  material.uniforms.uResolution.value.set(hero.offsetWidth, hero.offsetHeight);
});

const heroH2 = document.querySelector(".hero-content h2");
// Función para dividir el texto manualmente (Reemplaza a SplitText)
function manualSplitText(element) {
  const text = element.innerText;
  element.innerHTML = "";
  const wordsArray = text.split(/\s+/).filter(word => word.length > 0);
  
  return wordsArray.map((word, index) => {
    const span = document.createElement("span");
    span.textContent = word;
    span.style.display = "inline-block";
    if (index < wordsArray.length - 1) {
      span.style.marginRight = "0.3em"; // Espacio entre palabras
    }
    element.appendChild(span);
    return span;
  });
}

// Ahora usamos la función así:
const words = manualSplitText(heroH2);

gsap.set(words, { opacity: 0 });

ScrollTrigger.create({
  trigger: ".hero-content",
  start: "top 25%",
  end: "bottom 115%",
  onUpdate: (self) => {
    const progress = self.progress;
    const totalWords = words.length;
    words.forEach((word,index) => {
      const wordProgress = index / totalWords;
      const nextWordProgress = (index + 1) / totalWords;

      let opacity = 0;

      if (progress >= nextWordProgress){
        opacity= 1;
      } else if (progress >= wordProgress) {
        const fadeProgress = (progress - wordProgress) / (nextWordProgress - wordProgress);
        opacity = fadeProgress;
      }
      gsap.to(word, {
        opacity: opacity,
        duration: 0.1,
        overwrite: true,
      });
      });
    },
  });

const accordionItems = document.querySelectorAll('.f-item');
accordionItems.forEach(item => {
  const summary = item.querySelector('.f-summary');
  if (summary) {
    summary.addEventListener('click', () => {
      accordionItems.forEach(i => { if(i !== item) i.classList.remove('active'); });
      item.classList.toggle('active');
    });
  }
});


const marqueeTrack = document.querySelector('.marquee-track');
if (marqueeTrack) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        marqueeTrack.classList.add('animating');
      } else {
        marqueeTrack.classList.remove('animating');
      }
    });
  }, { threshold: 0 });
  
  observer.observe(document.querySelector('.partners-stripe'));
}


const stats = document.querySelectorAll('.stat-number');
stats.forEach(stat => {
  const target = +stat.getAttribute('data-target');
  const counter = { val: 0 };
  ScrollTrigger.create({
    trigger: stat.closest('.stat-circle'),
    start: "top 85%",
    once: true,
    onEnter: () => {
      gsap.to(counter, {
        val: target,
        duration: 1.8,
        ease: "power2.out",
        onUpdate: () => {
          stat.innerText = Math.floor(counter.val);
        }
      });
    }
  });
});


const certWrappers = document.querySelectorAll('.cert-img-wrapper');
certWrappers.forEach((wrapper, index) => {
  gsap.set(wrapper, { 
    opacity: 0, 
    rotationY: index === 0 ? 180 : -180, // Rotan en direcciones opuestas
    z: -400,
    transformOrigin: "center center"
  });

  gsap.to(wrapper, {
    opacity: 1,
    rotationY: 0, 
    z: 0,
    duration: 1.2,
    ease: "power3.out",
    scrollTrigger: {
      trigger: wrapper,
      start: "top 85%",
      toggleActions: "play none none reverse"
    }
  });
});

const rootElement = document.documentElement;
rootElement.setAttribute('data-theme', 'dark');

if (typeof material !== 'undefined' && material.uniforms) {
  const rgbColor = hexToRgb('#060a12');
  material.uniforms.uColor.value.set(rgbColor.r, rgbColor.g, rgbColor.b);
}

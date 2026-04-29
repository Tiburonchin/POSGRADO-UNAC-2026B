(function () {
  'use strict';

  if (!window.gsap || !window.ScrollTrigger) {
    return;
  }

  if (document.body.getAttribute('data-page') !== 'home') {
    return;
  }

  var gsap = window.gsap;
  var ScrollTrigger = window.ScrollTrigger;
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduceMotion) {
    return;
  }

  // Registrar ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // 1. Efecto Desvanecimiento del Hero (Armonía con la nueva sección)
  var heroContent = document.querySelector('.hero-content');
  if (heroContent) {
    gsap.to(heroContent, {
      y: -100,
      scale: 0.9,
      opacity: 0,
      ease: 'none',
      scrollTrigger: {
        trigger: '#admision',
        start: 'top 95%',
        end: 'top 20%',
        scrub: true
      }
    });
  }

  // 2. Animaciones de la Sección de Admisión (Entrada y Salida)
  var admisionSection = document.querySelector('#admision');
  var admisionTextElements = document.querySelectorAll('.admision-text > *');
  var admisionSteps = document.querySelectorAll('.admision-text .group');
  var admisionImage = document.querySelector('.admision-image');
  var admisionImageDecor = document.querySelector('.admision-image .bg-gradient-to-br');
  var admisionImageMain = document.querySelector('.admision-image .z-10');

  if (admisionSection) {
    // --- ANIMACIÓN DE ENTRADA ---
    var tlEntrance = gsap.timeline({
      scrollTrigger: {
        trigger: admisionSection,
        start: 'top 60%', // Dispara un poco antes para que se sienta más reactivo
        toggleActions: 'play none none reverse'
      }
    });

    // Label, Headline, Metrics, Description
    tlEntrance.from('.admision-text > div:first-child, .admision-text > h2, .admision-text > .flex-wrap, .admision-text > p.text-base', {
      y: 30,
      opacity: 0,
      duration: 0.5, // Más rápido (era 0.8)
      stagger: 0.08, // Stagger más corto (era 0.12)
      ease: 'power3.out'
    });

    // --- ANIMACIÓN DE LA IMAGEN (Entrada) ---
    if (admisionImage) {
      tlEntrance.from(admisionImageDecor, {
        x: 40,
        y: 30,
        opacity: 0,
        duration: 0.8, // Era 1.2
        ease: 'power3.out'
      }, 0.1);

      tlEntrance.from(admisionImageMain, {
        x: 30,
        y: -15,
        opacity: 0,
        scale: 0.97,
        duration: 0.6, // Era 1
        ease: 'power2.out'
      }, 0.2);
    }

    // Steps (Individualmente)
    if (admisionSteps.length) {
      tlEntrance.from(admisionSteps, {
        x: -15,
        opacity: 0,
        duration: 0.4, // Era 0.6
        stagger: 0.1,  // Era 0.15
        ease: 'power2.out'
      }, '-=0.4');
    }

    // Separator and Buttons
    tlEntrance.from('.admision-text > .my-10, .admision-text > .flex-row', {
      y: 15,
      opacity: 0,
      duration: 0.5,
      stagger: 0.08,
      ease: 'power2.out'
    }, '-=0.3');

    // --- ANIMACIÓN DE SALIDA (Fade out al hacer scroll hacia abajo) ---
    var exitElements = [
      admisionSection.querySelector('.max-w-\\[1440px\\]'),
      admisionImage
    ].filter(Boolean);

    if (exitElements.length) {
      gsap.to(exitElements, {
        opacity: 0,
        y: -30,
        scale: 0.99,
        ease: 'none',
        scrollTrigger: {
          trigger: admisionSection,
          start: 'bottom 35%', // Rango más corto para salida rápida
          end: 'bottom 5%',
          scrub: true
        }
      });
    }
  }

})();

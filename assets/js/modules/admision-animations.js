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
  // A medida que bajamos, el contenido del hero se difumina y escala hacia atrás
  var heroContent = document.querySelector('.hero-content');
  if (heroContent) {
    gsap.to(heroContent, {
      y: -100,
      scale: 0.9,
      opacity: 0,
      ease: 'none',
      scrollTrigger: {
        trigger: '#admision',
        start: 'top 95%', // Empieza cuando Admisión asoma
        end: 'top 20%',   // Termina cuando Admisión casi cubre el Hero
        scrub: true      // Se ata al movimiento del scroll
      }
    });
  }

  // 2. Animaciones de la Sección de Admisión (Ajustado al nuevo layout)
  var admisionTrigger = document.querySelector('#admision');
  if (admisionTrigger) {
    var tlAdmision = gsap.timeline({
      scrollTrigger: {
        trigger: '#admision',
        start: 'top 70%', // Se activa cuando el 70% del viewport llega al top de la sección
        toggleActions: 'play none none reverse'
      }
    });

    // Animar los textos de la izquierda en cascada
    tlAdmision.from('.admision-text > *', {
      y: 30,
      opacity: 0,
      duration: 0.8,
      stagger: 0.15, // Retraso entre título, pasos y botón
      ease: 'power3.out'
    })
    // Animar el bloque de la imagen revelándose desde la derecha
    .from('.admision-image', {
      x: 50,
      opacity: 0,
      duration: 1,
      ease: 'power3.out'
    }, '-=0.6'); // Comienza un poco antes de que terminen los textos
  }

})();

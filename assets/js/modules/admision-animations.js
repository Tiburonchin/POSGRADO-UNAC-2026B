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
        start: 'top 40%', // Retrasado aún más, casi al llegar al centro/superior
        toggleActions: 'play none none reverse'
      }
    });

    // Label, Headline, Metrics, Description
    tlEntrance.from('.admision-text > p:first-child, .admision-text > h2, .admision-text > .flex-wrap, .admision-text > p.text-base', {
      y: 40,
      opacity: 0,
      duration: 0.8,
      stagger: 0.12,
      ease: 'power3.out'
    });

    // Steps (Individualmente)
    if (admisionSteps.length) {
      tlEntrance.from(admisionSteps, {
        x: -20,
        opacity: 0,
        duration: 0.6,
        stagger: 0.15,
        ease: 'power2.out'
      }, '-=0.4');
    }

    // Separator and Buttons
    tlEntrance.from('.admision-text > .my-10, .admision-text > .flex-row', {
      y: 20,
      opacity: 0,
      duration: 0.6,
      stagger: 0.1,
      ease: 'power2.out'
    }, '-=0.3');

    // Imagen y Decoración
    if (admisionImage) {
      tlEntrance.from(admisionImageDecor, {
        scale: 0.8,
        opacity: 0,
        duration: 1.2,
        ease: 'expo.out'
      }, '0.2');

      tlEntrance.from(admisionImageMain, {
        y: 60,
        scale: 0.95,
        opacity: 0,
        duration: 1,
        ease: 'power4.out'
      }, '0.4');
    }

    // --- ANIMACIÓN DE SALIDA (Fade out al hacer scroll hacia abajo) ---
    gsap.to([admisionSection.querySelector('.max-w-7xl')], {
      opacity: 0,
      y: -30,
      scale: 0.98,
      ease: 'none',
      scrollTrigger: {
        trigger: admisionSection,
        start: 'bottom 40%', // Comienza a desvanecerse mucho más tarde
        end: 'bottom 0%',   // Termina justo cuando sale de la pantalla
        scrub: true
      }
    });

    // Efectos de Hover para la Imagen (Sutil Parallax)
    admisionSection.addEventListener('mousemove', function(e) {
      if (!admisionImage) return;
      
      var rect = admisionSection.getBoundingClientRect();
      var xPos = (e.clientX - rect.left) / rect.width - 0.5;
      var yPos = (e.clientY - rect.top) / rect.height - 0.5;

      gsap.to(admisionImageMain, {
        x: xPos * 20,
        y: yPos * 20,
        duration: 0.6,
        ease: 'power2.out'
      });

      gsap.to(admisionImageDecor, {
        x: xPos * -30,
        y: yPos * -30,
        duration: 0.8,
        ease: 'power2.out'
      });
    });

    admisionSection.addEventListener('mouseleave', function() {
      if (!admisionImage) return;
      
      gsap.to([admisionImageMain, admisionImageDecor], {
        x: 0,
        y: 0,
        duration: 1,
        ease: 'elastic.out(1, 0.3)'
      });
    });
  }

})();

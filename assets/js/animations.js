(function () {
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduceMotion) {
    return;
  }

  if (!window.gsap) {
    return;
  }

  var gsap = window.gsap;
  var revealTargets = document.querySelectorAll('[data-reveal]');
  var heroButtons = document.querySelectorAll('.hero-content a');
  var navItems = document.querySelectorAll('.primary-nav > ul > li');
  var cards = document.querySelectorAll('#programas article, #noticias article, #ubicacion article');

  gsap.from('.site-header', {
    y: -12,
    opacity: 0,
    duration: 0.45,
    ease: 'power2.out'
  });

  if (navItems.length) {
    gsap.from(navItems, {
      y: -8,
      opacity: 0,
      duration: 0.4,
      stagger: 0.05,
      ease: 'power2.out',
      delay: 0.12
    });
  }

  var heroTimeline = gsap.timeline();

  heroTimeline.from('.hero-content > *', {
    y: 24,
    opacity: 0,
    duration: 0.66,
    stagger: 0.08,
    ease: 'power2.out'
  })
  .from('.hero-media', {
    y: 26,
    opacity: 0,
    scale: 0.985,
    duration: 0.8,
    ease: 'power3.out'
  }, '-=0.54');

  if (heroButtons.length) {
    gsap.from(heroButtons, {
      y: 16,
      opacity: 0,
      duration: 0.5,
      stagger: 0.07,
      ease: 'power2.out',
      delay: 0.24
    });
  }

  cards.forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      gsap.to(card, {
        y: -4,
        duration: 0.22,
        ease: 'power2.out'
      });
    });

    card.addEventListener('mouseleave', function () {
      gsap.to(card, {
        y: 0,
        duration: 0.24,
        ease: 'power2.out'
      });
    });
  });

  if (window.ScrollTrigger) {
    gsap.registerPlugin(window.ScrollTrigger);

    revealTargets.forEach(function (target) {
      gsap.from(target, {
        y: 24,
        opacity: 0,
        duration: 0.62,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: target,
          start: 'top 84%',
          once: true
        }
      });
    });

    gsap.utils.toArray('.hero-media img').forEach(function (image) {
      gsap.to(image, {
        yPercent: 8,
        ease: 'none',
        scrollTrigger: {
          trigger: image,
          start: 'top top',
          end: 'bottom top',
          scrub: 1.2
        }
      });
    });
  }
})();

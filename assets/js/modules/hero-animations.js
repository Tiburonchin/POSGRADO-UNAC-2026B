(function () {
  'use strict';

  if (!window.gsap) {
    return;
  }

  if (document.body.getAttribute('data-page') !== 'home') {
    return;
  }

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var gsap = window.gsap;
  var hero = document.querySelector('.hero--fullscreen');
  var heroContent = document.querySelector('#hero-home');
  var heroImage = document.querySelector('.hero-bg-image');
  var titleLines = document.querySelectorAll('.hero-title-line');
  var infoRotatorTarget = document.querySelector('.hero-description');
  var sloganTextTarget = document.querySelector('.hero-slogan-text');
  var ctaItems = document.querySelectorAll('.hero-cta-group a');
  var headerBrand = document.querySelector('.brand');
  var headerNavItems = document.querySelectorAll('.primary-nav > ul > li');
  var headerDesktopCta = document.querySelector('.header-cta:not(.header-cta-mobile)');
  var mobileHeaderItems = document.querySelectorAll('.header-cta-mobile, #menu-toggle');
  var infoRotationStarted = false;

  if (!hero || !heroContent) {
    return;
  }

  function isMobileLayout() {
    return window.matchMedia('(max-width: 1023px)').matches;
  }

  function buildScrambledFrame(finalText, revealCount, chars) {
    var output = '';

    for (var i = 0; i < finalText.length; i += 1) {
      var currentChar = finalText.charAt(i);
      if (/\s|[,.!?]/.test(currentChar)) {
        output += currentChar;
        continue;
      }

      if (i < revealCount) {
        output += currentChar;
      } else {
        output += chars.charAt(Math.floor(Math.random() * chars.length));
      }
    }

    return output;
  }

  function runScramble(target, finalText, options) {
    if (!target || !finalText) {
      return;
    }

    var chars = (options && options.chars) || 'XO#@!%&ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var revealDelay = (options && options.revealDelay) || 0.2;
    var startDelay = (options && options.startDelay) || 0;
    var speed = (options && options.speed) || 1;
    var duration = ((options && options.duration) || 0.74) * speed;
    var state = { progress: 0 };

    gsap.killTweensOf(target);
    target.textContent = buildScrambledFrame(finalText, 0, chars);

    gsap.to(state, {
      progress: 1,
      duration: duration,
      delay: startDelay,
      ease: (options && options.ease) || 'power2.out',
      onUpdate: function () {
        var normalized = Math.max(0, (state.progress - revealDelay) / (1 - revealDelay));
        var revealCount = Math.floor(finalText.length * normalized);
        target.textContent = buildScrambledFrame(finalText, revealCount, chars);
      },
      onComplete: function () {
        target.textContent = finalText;
        if (options && typeof options.onComplete === 'function') {
          options.onComplete();
        }
      }
    });
  }

  function startInfoRotation(isMobile, useReducedMotion) {
    if (!infoRotatorTarget || infoRotationStarted) {
      return;
    }

    infoRotationStarted = true;

    var phrases = [
      'Potenciamos lideres con vision global mediante programas de maestria, doctorado y especializacion orientados a la investigacion y la innovacion.',
      'Nuevo record: 2076 postulantes en el ciclo 2026A de Posgrado UNAC.',
      'Maestrias, doctorados y especialidades con enfoque en investigacion aplicada y transformacion profesional.',
      'Formacion avanzada para liderar innovacion en el sector publico y privado con impacto nacional.'
    ];

    var index = 0;
    var phaseDuration = useReducedMotion ? (isMobile ? 2.1 : 2.45) : (isMobile ? 1.28 : 1.72);
    var phaseRevealDelay = useReducedMotion ? (isMobile ? 0.16 : 0.2) : (isMobile ? 0.2 : 0.28);
    var phaseWait = useReducedMotion ? (isMobile ? 2400 : 2900) : (isMobile ? 1900 : 2400);
    var phaseChars = useReducedMotion
      ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
      : 'XO#@!%&ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    var cyclePhrase = function () {
      var phrase = phrases[index];

      runScramble(infoRotatorTarget, phrase, {
        duration: phaseDuration,
        revealDelay: phaseRevealDelay,
        startDelay: 0,
        chars: phaseChars,
        speed: 1,
        ease: 'power2.out',
        onComplete: function () {
          index = (index + 1) % phrases.length;
          window.setTimeout(cyclePhrase, phaseWait);
        }
      });
    };

    cyclePhrase();
  }

  function setupSloganHoverScramble() {
    if (!sloganTextTarget) {
      return;
    }

    var finalText = sloganTextTarget.textContent || '';
    if (!finalText) {
      return;
    }

    var sloganHoverLocked = false;

    var playHoverScramble = function () {
      if (sloganHoverLocked) {
        return;
      }

      sloganHoverLocked = true;
      runScramble(sloganTextTarget, finalText, {
        duration: reduceMotion ? 0.42 : 0.62,
        revealDelay: reduceMotion ? 0.48 : 0.34,
        startDelay: 0,
        chars: reduceMotion
          ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
          : 'XO#@!%&ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
        ease: 'power2.out',
        onComplete: function () {
          sloganHoverLocked = false;
        }
      });
    };

    sloganTextTarget.addEventListener('mouseenter', playHoverScramble);
    sloganTextTarget.addEventListener('focus', playHoverScramble);
  }

  function runHeroEntryAnimation() {
    var isMobile = isMobileLayout();
    var heroTitle = document.querySelector('.hero-title');
    var headerNodes = [headerBrand].filter(Boolean);

    if (isMobile) {
      mobileHeaderItems.forEach(function (node) {
        headerNodes.push(node);
      });
    } else {
      headerNavItems.forEach(function (node) {
        headerNodes.push(node);
      });
      if (headerDesktopCta) {
        headerNodes.push(headerDesktopCta);
      }
    }

    if (reduceMotion) {
      gsap.set(headerNodes, { autoAlpha: 1, y: 0 });
      gsap.set('.hero-kicker, .hero-description, .hero-slogan', { autoAlpha: 1, y: 0 });
      gsap.set(titleLines, { autoAlpha: 1, y: 0 });
      gsap.set(ctaItems, { autoAlpha: 1, y: 0 });
      startInfoRotation(isMobile, true);
      setupSloganHoverScramble();
      return;
    }

    gsap.set(headerNodes, { autoAlpha: 0, y: -14 });
    gsap.set('.hero-kicker', { autoAlpha: 0, y: 12 });
    gsap.set(titleLines, { autoAlpha: 0, y: 38 });
    gsap.set('.hero-description', { autoAlpha: 0, y: 18 });
    gsap.set(ctaItems, { autoAlpha: 0, y: 16 });
    gsap.set('.hero-slogan', { autoAlpha: 0, y: 16 });

    var timeline = gsap.timeline({ defaults: { overwrite: 'auto' } });

    timeline.to(headerBrand, {
      autoAlpha: 1,
      y: 0,
      duration: isMobile ? 0.34 : 0.38,
      ease: 'power2.out'
    });

    if (isMobile) {
      if (mobileHeaderItems.length) {
        timeline.to(mobileHeaderItems, {
          autoAlpha: 1,
          y: 0,
          duration: 0.28,
          stagger: 0.05,
          ease: 'power2.out'
        }, '-=0.16');
      }
    } else {
      if (headerNavItems.length) {
        timeline.to(headerNavItems, {
          autoAlpha: 1,
          y: 0,
          duration: 0.34,
          stagger: 0.045,
          ease: 'power2.out'
        }, '-=0.18');
      }

      if (headerDesktopCta) {
        timeline.to(headerDesktopCta, {
          autoAlpha: 1,
          y: 0,
          duration: 0.3,
          ease: 'power2.out'
        }, '-=0.18');
      }
    }

    timeline
      .to('.hero-kicker', {
        autoAlpha: 1,
        y: 0,
        duration: isMobile ? 0.3 : 0.36,
        ease: 'power2.out'
      }, '-=0.05')
      .to(titleLines, {
        autoAlpha: 1,
        y: 0,
        duration: isMobile ? 0.46 : 0.54,
        stagger: isMobile ? 0.05 : 0.06,
        ease: 'power3.out'
      }, '-=0.12');

    timeline
      .to('.hero-description', {
        autoAlpha: 1,
        y: 0,
        duration: isMobile ? 0.34 : 0.46,
        ease: 'power2.out'
      }, '-=0.2')
      .to(ctaItems, {
        autoAlpha: 1,
        y: 0,
        duration: isMobile ? 0.3 : 0.4,
        stagger: isMobile ? 0.06 : 0.08,
        ease: 'power2.out'
      }, '-=0.2')
      .to('.hero-slogan', {
        autoAlpha: 1,
        y: 0,
        duration: isMobile ? 0.32 : 0.44,
        ease: 'power2.out'
      }, '-=0.15')
      .add(function () {
        startInfoRotation(isMobile, false);
        setupSloganHoverScramble();
      }, '+=0.08');

    if (heroTitle) {
      gsap.fromTo(heroTitle, {
        opacity: 0.96
      }, {
        opacity: 1,
        duration: 0.5,
        ease: 'power1.out'
      });
    }

    if (window.ScrollTrigger && heroImage) {
      gsap.registerPlugin(window.ScrollTrigger);
      gsap.to(heroImage, {
        yPercent: isMobile ? 2 : 4,
        scale: isMobile ? 1.03 : 1.05,
        ease: 'none',
        scrollTrigger: {
          trigger: hero,
          start: 'top top',
          end: 'bottom top',
          scrub: 1.1
        }
      });
    }
  }

  var played = false;
  function playOnce() {
    if (played) {
      return;
    }
    played = true;
    runHeroEntryAnimation();
  }

  window.addEventListener('page-loader:complete', playOnce, { once: true });

  window.addEventListener('load', function () {
    window.setTimeout(playOnce, 80);
  }, { once: true });
})();

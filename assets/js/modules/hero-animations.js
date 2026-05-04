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
  var ScrollTrigger = window.ScrollTrigger;
  var hero = document.querySelector('.hero--fullscreen');
  var heroContent = document.querySelector('#hero-home');
  var heroMedia = document.querySelector('.hero-media--bg');
  var heroImage = document.querySelector('.hero-bg-image');
  var heroOverlay = document.querySelector('.hero-overlay');
  var heroAtmosphere = document.querySelector('.hero-atmosphere');
  var nextSection = hero ? hero.nextElementSibling : null;
  var headerMain = document.getElementById('header-main');
  var heroTitleRevealLines = document.querySelectorAll('.hero-title-line[data-hero-title-line-reveal]');
  var titleLines = document.querySelectorAll('.hero-title-line');
  var infoRotatorTarget = document.querySelector('.hero-description');
  var sloganTextTarget = document.querySelector('.hero-slogan-text');
  var ctaItems = document.querySelectorAll('.hero-cta-group a');
  var headerBrand = document.querySelector('.brand');
  var headerNavItems = document.querySelectorAll('.primary-nav > ul > li');
  var headerDesktopCta = document.querySelector('.header-cta:not(.header-cta-mobile)');
  var mobileHeaderItems = document.querySelectorAll('.header-cta-mobile, #menu-toggle');
  var heroTitleImageYNudge = 32;
  var infoRotationStarted = false;
  var infoRotationTimer = null;
  var visibilityListenerBound = false;
  var sloganHoverSetup = false;
  var heroRevealSyncSetup = false;
  var heroAnimationMedia = null;
  var heroParallaxMedia = null;

  if (!hero || !heroContent) {
    return;
  }

  if (ScrollTrigger && typeof gsap.registerPlugin === 'function') {
    gsap.registerPlugin(ScrollTrigger);
  }

  function getHeaderAnimationNodes(isMobile) {
    var nodes = [headerBrand].filter(Boolean);

    if (isMobile) {
      mobileHeaderItems.forEach(function (node) {
        nodes.push(node);
      });
    } else {
      headerNavItems.forEach(function (node) {
        nodes.push(node);
      });

      if (headerDesktopCta) {
        nodes.push(headerDesktopCta);
      }
    }

    return nodes;
  }

  function setInitialHeroAnimationState() {
    var isMobile = isMobileLayout();
    var headerNodes = getHeaderAnimationNodes(isMobile);

    if (headerMain) {
      gsap.set(headerMain, {
        autoAlpha: 0,
        y: -18,
        scale: 0.985,
        filter: 'blur(12px)'
      });
    }

    if (headerNodes.length) {
      gsap.set(headerNodes, {
        autoAlpha: 0,
        y: -10,
        filter: 'blur(6px)'
      });
    }

    gsap.set('.hero-kicker, .hero-description, .hero-slogan', {
      autoAlpha: 0,
      y: 12,
      filter: 'blur(8px)'
    });

    gsap.set(titleLines, {
      autoAlpha: 0,
      y: isMobile ? 26 : 30,
      filter: 'blur(10px)'
    });

    if (ctaItems.length) {
      gsap.set(ctaItems, {
        autoAlpha: 0,
        y: 14,
        filter: 'blur(8px)'
      });
    }
  }

  // Pre-set hero and header states while the loader is still visible to avoid flash of unstyled content.
  setInitialHeroAnimationState();

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

    var clearRotationTimer = function () {
      if (infoRotationTimer) {
        window.clearTimeout(infoRotationTimer);
        infoRotationTimer = null;
      }
    };

    var cyclePhrase = function () {
      if (document.hidden) {
        clearRotationTimer();
        return;
      }

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
          clearRotationTimer();
          infoRotationTimer = window.setTimeout(cyclePhrase, phaseWait);
        }
      });
    };

    if (!visibilityListenerBound) {
      visibilityListenerBound = true;
      document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
          clearRotationTimer();
          gsap.killTweensOf(infoRotatorTarget);
          return;
        }

        if (!infoRotationStarted) {
          return;
        }

        clearRotationTimer();
        infoRotationTimer = window.setTimeout(cyclePhrase, 120);
      });
    }

    cyclePhrase();
  }

  function setupSloganHoverScramble() {
    if (!sloganTextTarget || sloganHoverSetup) {
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
    sloganHoverSetup = true;
  }

  function setupHeroTitleImageRevealSync() {
    if (!heroTitleRevealLines.length || !heroImage || heroRevealSyncSetup) {
      return;
    }

    heroRevealSyncSetup = true;

    var geometryRafHandle = null;

    var queueGeometryUpdate = function () {
      if (geometryRafHandle) {
        return;
      }

      geometryRafHandle = window.requestAnimationFrame(function () {
        geometryRafHandle = null;
        updateImageGeometry();
      });
    };

    var parseObjectPositionToken = function (token, freeSpace) {
      if (!token) {
        return freeSpace * 0.5;
      }

      var normalized = String(token).trim().toLowerCase();
      if (normalized === 'left' || normalized === 'top') {
        return 0;
      }
      if (normalized === 'center') {
        return freeSpace * 0.5;
      }
      if (normalized === 'right' || normalized === 'bottom') {
        return freeSpace;
      }

      if (normalized.indexOf('%') !== -1) {
        var percentValue = parseFloat(normalized);
        if (!isNaN(percentValue)) {
          return freeSpace * (percentValue / 100);
        }
      }

      var pixelValue = parseFloat(normalized);
      if (!isNaN(pixelValue)) {
        return pixelValue;
      }

      return freeSpace * 0.5;
    };

    var updateImageGeometry = function () {
      var imageRect = heroImage.getBoundingClientRect();

      if (!imageRect.width || !imageRect.height) {
        return;
      }

      var imageWidth = imageRect.width;
      var imageHeight = imageRect.height;
      var naturalWidth = heroImage.naturalWidth || imageWidth;
      var naturalHeight = heroImage.naturalHeight || imageHeight;

      if (!naturalWidth || !naturalHeight) {
        return;
      }

      var containerRatio = imageWidth / imageHeight;
      var imageRatio = naturalWidth / naturalHeight;
      var renderedWidth = imageWidth;
      var renderedHeight = imageHeight;

      if (imageRatio > containerRatio) {
        renderedHeight = imageHeight;
        renderedWidth = renderedHeight * imageRatio;
      } else {
        renderedWidth = imageWidth;
        renderedHeight = renderedWidth / imageRatio;
      }

      var freeX = imageWidth - renderedWidth;
      var freeY = imageHeight - renderedHeight;
      var objectPosition = window.getComputedStyle(heroImage).objectPosition || '50% 50%';
      var objectTokens = objectPosition.split(/\s+/);
      var objectXToken = objectTokens[0] || '50%';
      var objectYToken = objectTokens[1] || objectTokens[0] || '50%';
      var imageOffsetX = parseObjectPositionToken(objectXToken, freeX);
      var imageOffsetY = parseObjectPositionToken(objectYToken, freeY);
      var renderedImageLeft = imageRect.left + imageOffsetX;
      var renderedImageTop = imageRect.top + imageOffsetY;

      heroTitleRevealLines.forEach(function (lineNode) {
        var lineRect = lineNode.getBoundingClientRect();
        if (!lineRect.width || !lineRect.height) {
          return;
        }

        var imageX = -(lineRect.left - renderedImageLeft);
        var imageY = -(lineRect.top - renderedImageTop) + heroTitleImageYNudge;

        lineNode.style.setProperty('--hero-title-line-image-width', renderedWidth + 'px');
        lineNode.style.setProperty('--hero-title-line-image-height', renderedHeight + 'px');
        lineNode.style.setProperty('--hero-title-line-image-x', imageX + 'px');
        lineNode.style.setProperty('--hero-title-line-image-y', imageY + 'px');
      });
    };

    window.addEventListener('resize', function () {
      queueGeometryUpdate();
    });

    if (!heroImage.complete) {
      heroImage.addEventListener('load', queueGeometryUpdate, { once: true });
    }

    queueGeometryUpdate();

    // Keep mapping static after initial layout; avoid scroll-driven remapping drift.
  }

  function runHeroEntryAnimation() {
    function setupHeroScrollParallax() {
      if (reduceMotion || !ScrollTrigger) {
        return;
      }

      if (heroParallaxMedia) {
        heroParallaxMedia.revert();
        heroParallaxMedia = null;
      }

      heroParallaxMedia = gsap.matchMedia();

      var createParallaxTimeline = function (isMobile) {
        if (heroMedia) {
          gsap.set(heroMedia, {
            x: 0,
            xPercent: 0,
            transformOrigin: '50% 50%'
          });
        }

        if (heroImage) {
          gsap.set(heroImage, {
            x: 0,
            xPercent: 0,
            transformOrigin: '50% 50%'
          });
        }

        var parallaxTimeline = gsap.timeline({
          defaults: { ease: 'none' },
          scrollTrigger: {
            trigger: hero,
            start: 'top top',
            end: isMobile ? '+=56%' : '+=82%',
            pin: true,
            pinSpacing: true, // Maintain the space
            pinType: 'fixed', // Use fixed pinning to avoid spacer width bugs
            scrub: isMobile ? 0.58 : 0.78,
            anticipatePin: 1,
            invalidateOnRefresh: true,
            refreshPriority: 1
          }
        });

        if (heroMedia) {
          parallaxTimeline.to(heroMedia, {
            x: 0,
            xPercent: 0,
            scale: isMobile ? 1.14 : 1.22,
            yPercent: 0,
            transformOrigin: '50% 50%'
          }, 0);

          // Subtle glitch/mirror effect just before the section is covered
          parallaxTimeline.to(heroMedia, {
            skewX: 1.2,
            filter: 'brightness(1.4) contrast(1.1)',
            duration: 0.08,
            repeat: 1,
            yoyo: true,
            ease: 'power2.inOut'
          }, isMobile ? 0.78 : 0.82);
        }

        if (heroImage) {
          parallaxTimeline.to(heroImage, {
            x: 0,
            xPercent: 0,
            scale: isMobile ? 1.22 : 1.34,
            opacity: 0,
            transformOrigin: '50% 50%'
          }, 0);
        }

        if (heroTitleRevealLines.length) {
          parallaxTimeline.to(heroTitleRevealLines, {
            '--hero-title-line-scroll-shift': '0px',
            '--hero-title-line-image-zoom': isMobile ? 1.26 : 1.56,
            opacity: 0,
            ease: 'none'
          }, 0);
        }

        if (heroOverlay) {
          parallaxTimeline.to(heroOverlay, {
            opacity: 0
          }, 0);
        }

        if (heroAtmosphere) {
          parallaxTimeline.to(heroAtmosphere, {
            opacity: 0
          }, 0);
        }

        parallaxTimeline.to(heroContent, {
          y: 0,
          autoAlpha: 0
        }, 0);

        parallaxTimeline.to(hero, {
          autoAlpha: 0
        }, isMobile ? 0.16 : 0.12);

        if (nextSection) {
          parallaxTimeline.fromTo(nextSection, {
            yPercent: isMobile ? 10 : 20,
            scale: isMobile ? 1.08 : 1.2,
            autoAlpha: 0.08,
            transformOrigin: '50% 50%'
          }, {
            yPercent: 0,
            scale: 1,
            autoAlpha: 1,
            transformOrigin: '50% 50%'
          }, 0);
        }

      };

      heroParallaxMedia.add('(max-width: 1023px)', function () {
        createParallaxTimeline(true);
      });

      heroParallaxMedia.add('(min-width: 1024px)', function () {
        createParallaxTimeline(false);
      });

      window.requestAnimationFrame(function () {
        ScrollTrigger.refresh();
      });
    }

    function runHeroEntryVariant(isMobile) {
      var heroTitle = document.querySelector('.hero-title');
      var headerNodes = getHeaderAnimationNodes(isMobile);

      if (reduceMotion) {
        if (headerMain) {
          gsap.set(headerMain, { autoAlpha: 1, y: 0, scale: 1 });
        }
        gsap.set(headerNodes, { autoAlpha: 1, y: 0 });
        gsap.set('.hero-kicker, .hero-description, .hero-slogan', { autoAlpha: 1, y: 0 });
        gsap.set(titleLines, { autoAlpha: 1, y: 0 });
        gsap.set(ctaItems, { autoAlpha: 1, y: 0 });
        if (heroImage) {
          gsap.set(heroImage, {
            yPercent: 0,
            scale: 1.01,
            transformOrigin: 'center center'
          });
        }
        setupHeroTitleImageRevealSync();
        startInfoRotation(isMobile, true);
        setupSloganHoverScramble();
        // Signal page-loader: hero entry complete
        window.dispatchEvent(new Event('hero:animation:complete'));
        return;
      }

      // Ensure the image-reveal mask is measured before the title enters.
      setupHeroTitleImageRevealSync();

      var timeline = gsap.timeline({
        delay: 0.1,
        defaults: { overwrite: 'auto', ease: 'power2.out' }
      });

        timeline.fromTo(headerMain, {
          autoAlpha: 0,
          y: -15,
          scale: 0.99,
          filter: 'blur(10px)'
        }, {
          autoAlpha: 1,
          y: 0,
          scale: 1,
          filter: 'blur(0px)',
          duration: isMobile ? 0.6 : 0.7, // Reducido de 0.85
          ease: 'power3.out'
        });

      if (headerBrand) {
        timeline.fromTo(headerBrand, {
          autoAlpha: 0,
          y: -10,
          filter: 'blur(5px)'
        }, {
          autoAlpha: 1,
          y: 0,
          filter: 'blur(0px)',
          duration: isMobile ? 0.35 : 0.45 // Reducido de 0.55
        }, '-=0.5');
      }

      if (isMobile) {
        if (mobileHeaderItems.length) {
          timeline.fromTo(mobileHeaderItems, {
            autoAlpha: 0,
            y: -8,
            filter: 'blur(4px)'
          }, {
            autoAlpha: 1,
            y: 0,
            filter: 'blur(0px)',
            duration: 0.3,
            stagger: 0.05
          }, '-=0.3');
        }
      } else {
        if (headerNavItems.length) {
          timeline.fromTo(headerNavItems, {
            autoAlpha: 0,
            y: -8,
            filter: 'blur(4px)'
          }, {
            autoAlpha: 1,
            y: 0,
            filter: 'blur(0px)',
            duration: 0.35, // Reducido de 0.45
            stagger: 0.04  // Reducido de 0.05
          }, '-=0.35');
        }

        if (headerDesktopCta) {
          timeline.fromTo(headerDesktopCta, {
            autoAlpha: 0,
            y: -8,
            filter: 'blur(4px)'
          }, {
            autoAlpha: 1,
            y: 0,
            filter: 'blur(0px)',
            duration: 0.35
          }, '-=0.35');
        }
      }

      timeline.fromTo('.hero-kicker', {
        autoAlpha: 0,
        y: 10,
        filter: 'blur(6px)'
      }, {
        autoAlpha: 1,
        y: 0,
        filter: 'blur(0px)',
        duration: isMobile ? 0.4 : 0.5
      }, '-=0.1');

      timeline.fromTo(titleLines, {
        autoAlpha: 0,
        y: isMobile ? 22 : 26,
        filter: 'blur(10px) drop-shadow(0px 6px 12px rgba(0,0,0,0.75)) brightness(1.12) saturate(1.08)'
      }, {
        autoAlpha: 1,
        y: 0,
        filter: 'blur(0px) drop-shadow(0px 6px 12px rgba(0,0,0,0.75)) brightness(1.12) saturate(1.08)',
        duration: isMobile ? 0.85 : 1.0,
        stagger: isMobile ? 0.08 : 0.12,
        ease: 'power4.out'
      }, '-=0.25');

      if (heroTitle) {
        timeline.fromTo(heroTitle, {
          autoAlpha: 0.96
        }, {
          autoAlpha: 1,
          duration: 0.6,
          ease: 'power3.out'
        }, '<');
      }

      timeline.fromTo('.hero-description', {
        autoAlpha: 0,
        y: 12,
        filter: 'blur(6px)'
      }, {
        autoAlpha: 1,
        y: 0,
        filter: 'blur(0px)',
        duration: isMobile ? 0.4 : 0.5 // Reducido de 0.65
      }, '-=0.3');

      if (ctaItems.length) {
        timeline.fromTo(ctaItems, {
          autoAlpha: 0,
          y: 12,
          filter: 'blur(6px)'
        }, {
          autoAlpha: 1,
          y: 0,
          filter: 'blur(0px)',
          duration: isMobile ? 0.35 : 0.45,
          stagger: isMobile ? 0.06 : 0.08 // Reducido de 0.12
        }, '-=0.35');
      }

      timeline
        .fromTo('.hero-slogan', {
          autoAlpha: 0,
          y: 12,
          filter: 'blur(6px)'
        }, {
          autoAlpha: 1,
          y: 0,
          filter: 'blur(0px)',
          duration: isMobile ? 0.4 : 0.5 // Reducido de 0.65
        }, '-=0.25')
        .add(function () {
          startInfoRotation(isMobile, false);
          setupSloganHoverScramble();
          setupHeroScrollParallax();
        }, '+=0.02')
        .add(function () {
          // Signal page-loader that hero animations are complete
          window.dispatchEvent(new Event('hero:animation:complete'));
        });

      if (heroImage) {
        gsap.set(heroImage, {
          yPercent: 0,
          scale: 1.01,
          transformOrigin: 'center center'
        });
      }
    }

    heroAnimationMedia = gsap.matchMedia();
    heroAnimationMedia.add('(max-width: 1023px)', function () {
      runHeroEntryVariant(true);
    });
    heroAnimationMedia.add('(min-width: 1024px)', function () {
      runHeroEntryVariant(false);
    });
  }

  var played = false;
  function playOnce() {
    if (played) {
      return;
    }
    played = true;
    runHeroEntryAnimation();
  }

  function cleanupHeroRuntime() {
    if (infoRotationTimer) {
      window.clearTimeout(infoRotationTimer);
      infoRotationTimer = null;
    }

    if (heroAnimationMedia) {
      heroAnimationMedia.revert();
      heroAnimationMedia = null;
    }

    if (heroParallaxMedia) {
      heroParallaxMedia.revert();
      heroParallaxMedia = null;
    }
  }

  function isLoaderSettled() {
    var pageLoader = document.getElementById('page-loader');

    if (!pageLoader) {
      return true;
    }

    return pageLoader.classList.contains('is-hidden');
  }

  window.addEventListener('page-loader:complete', playOnce, { once: true });
  window.addEventListener('pagehide', cleanupHeroRuntime);

  window.addEventListener('load', function () {
    if (isLoaderSettled()) {
      playOnce();
      return;
    }

    var attempts = 0;
    var maxAttempts = 30;

    function waitForLoaderSettle() {
      if (played) {
        return;
      }

      if (isLoaderSettled() || attempts >= maxAttempts) {
        playOnce();
        return;
      }

      attempts += 1;
      window.setTimeout(waitForLoaderSettle, 60);
    }

    window.setTimeout(waitForLoaderSettle, 80);
  }, { once: true });
})();

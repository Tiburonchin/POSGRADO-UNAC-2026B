(function () {
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var rootStyle = document.documentElement.style;
  var header = document.getElementById('site-header');
  var headerMain = document.getElementById('header-main');

  function debounce(fn, wait) {
    var timer = null;
    return function () {
      var args = arguments;
      window.clearTimeout(timer);
      timer = window.setTimeout(function () {
        fn.apply(null, args);
      }, wait);
    };
  }

  function updateHeaderMetrics() {
    if (!headerMain) {
      return;
    }

    var mainHeight = headerMain.offsetHeight || 0;
    var totalHeight = mainHeight;

    if (header) {
      var computedHeaderStyle = window.getComputedStyle(header);
      var paddingTop = parseFloat(computedHeaderStyle.paddingTop) || 0;
      var paddingBottom = parseFloat(computedHeaderStyle.paddingBottom) || 0;
      totalHeight = mainHeight + paddingTop + paddingBottom;
    }

    rootStyle.setProperty('--header-main-height', mainHeight + 'px');
    rootStyle.setProperty('--header-total-height', totalHeight + 'px');
  }

  var debouncedHeaderMetrics = debounce(updateHeaderMetrics, 80);

  updateHeaderMetrics();
  window.addEventListener('resize', debouncedHeaderMetrics);

  if (header) {
    header.addEventListener('header:layout-change', debouncedHeaderMetrics);
  }

  window.addEventListener('load', updateHeaderMetrics, { once: true });
  window.addEventListener('pageshow', debouncedHeaderMetrics);

  if (reduceMotion) {
    return;
  }

  if (!window.gsap) {
    return;
  }

  var gsap = window.gsap;
  var isHomePage = document.body.getAttribute('data-page') === 'home';

  // Unify Smooth Scroll (Lenis) globally if available
  if (window.Lenis && window.gsap && window.ScrollTrigger) {
    const lenis = new Lenis();

    function raf(time) {
      lenis.raf(time);
      ScrollTrigger.update();
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
    
    window.lenis = lenis;
  }
  var revealTargets = document.querySelectorAll('[data-reveal]');
  var headerBrand = document.querySelector('.brand');
  var headerDesktopCta = document.querySelector('.header-cta:not(.header-cta-mobile)');
  var headerMobileItems = document.querySelectorAll('.header-cta-mobile, #menu-toggle');
  var navItems = document.querySelectorAll('.primary-nav > ul > li');
  var cards = document.querySelectorAll('#noticias article, #ubicacion article');
  var admissionSection = document.querySelector('[data-admission-reveal]');
  var admissionItems = document.querySelectorAll('[data-admission-item]');
  var admissionTextTargets = document.querySelectorAll('[data-admission-text]');
  var headerEntryPlayed = false;

  function isLoaderSettled() {
    var pageLoader = document.getElementById('page-loader');

    if (!pageLoader) {
      return true;
    }

    return pageLoader.classList.contains('is-hidden');
  }

  function runHeaderEntry() {
    if (headerEntryPlayed || isHomePage) {
      return;
    }

    headerEntryPlayed = true;

    var isMobile = window.matchMedia('(max-width: 1023px)').matches;
    var timeline = gsap.timeline({ defaults: { overwrite: 'auto', ease: 'power2.out' } });

    if (headerMain) {
      timeline.fromTo(headerMain, {
        autoAlpha: 0,
        y: -18,
        scale: 0.985
      }, {
        autoAlpha: 1,
        y: 0,
        scale: 1,
        duration: 0.62,
        ease: 'power3.out'
      });
    }

    if (headerBrand) {
      timeline.fromTo(headerBrand, {
        autoAlpha: 0,
        y: -10
      }, {
        autoAlpha: 1,
        y: 0,
        duration: 0.34
      }, '-=0.36');
    }

    if (isMobile) {
      if (headerMobileItems.length) {
        timeline.fromTo(headerMobileItems, {
          autoAlpha: 0,
          y: -8
        }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.3,
          stagger: 0.05
        }, '-=0.26');
      }
    } else {
      if (navItems.length) {
        timeline.fromTo(navItems, {
          autoAlpha: 0,
          y: -10
        }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.34,
          stagger: 0.045
        }, '-=0.3');
      }

      if (headerDesktopCta) {
        timeline.fromTo(headerDesktopCta, {
          autoAlpha: 0,
          y: -10
        }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.32
        }, '-=0.28');
      }
    }
  }

  if (!isHomePage) {
    window.addEventListener('page-loader:complete', runHeaderEntry, { once: true });

    window.addEventListener('load', function () {
      if (isLoaderSettled()) {
        runHeaderEntry();
        return;
      }

      var attempts = 0;
      var maxAttempts = 25;

      function waitForLoaderSettle() {
        if (headerEntryPlayed) {
          return;
        }

        if (isLoaderSettled() || attempts >= maxAttempts) {
          runHeaderEntry();
          return;
        }

        attempts += 1;
        window.setTimeout(waitForLoaderSettle, 60);
      }

      window.setTimeout(waitForLoaderSettle, 80);
    }, { once: true });
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

    if (admissionSection) {
      var admissionTimeline = gsap.timeline({
        defaults: { ease: 'power3.out' },
        scrollTrigger: {
          trigger: admissionSection,
          start: 'top 95%',
          once: true
        }
      });

      admissionTimeline.from(admissionSection, {
        y: 64,
        opacity: 0,
        scale: 0.98,
        filter: 'blur(8px)',
        duration: 1
      });

      if (admissionItems.length) {
        admissionTimeline.from(admissionItems, {
          y: 38,
          opacity: 0,
          duration: 0.7,
          stagger: 0.16
        }, '-=0.58');
      }

      if (admissionTextTargets.length && window.SplitType) {
        var splits = [];
        var allLines = [];
        var internalScroller = document.querySelector('.admission-premium-info-body');

        admissionTextTargets.forEach(function (target) {
          var isStats = target.classList.contains('admission-stat-number');
          var isTag = target.classList.contains('admission-strength-tag');

          if (!isStats && !isTag) {
            var s = new SplitType(target, { types: 'lines', lineClass: 'split-line' });
            splits.push(s);
            if (s.lines) {
              for (var i = 0; i < s.lines.length; i++) {
                allLines.push(s.lines[i]);
              }
            }
          } else {
            allLines.push(target);
          }
        });

        // Animación vinculada al scroll interno de la clase .admission-premium-info-body
        if (internalScroller) {
          allLines.forEach(function (line) {
            gsap.from(line, {
              y: 20,
              opacity: 0,
              duration: 1,
              ease: 'power2.out',
              scrollTrigger: {
                trigger: line,
                scroller: internalScroller,
                start: 'bottom 98%',
                end: 'top 85%',
                scrub: 1.2, // "poco a poco" y suave
                once: false // Queremos que sea reversible al scrollear
              }
            });
          });
        }

        // Manejo de responsividad: re-split al cambiar tamaño
        var reSplit = debounce(function () {
          splits.forEach(function (s) { s.revert(); });
          splits = [];
          admissionTextTargets.forEach(function (target) {
            var isStats = target.classList.contains('admission-stat-number');
            var isTag = target.classList.contains('admission-strength-tag');
            if (!isStats && !isTag) {
              splits.push(new SplitType(target, { types: 'lines', lineClass: 'split-line' }));
            }
          });
          ScrollTrigger.refresh();
        }, 400);

        window.addEventListener('resize', reSplit);
      } else if (admissionTextTargets.length) {
        // Fallback
        admissionTimeline.from(admissionTextTargets, {
          y: 44,
          opacity: 0,
          duration: 0.62,
          stagger: 0.07
        }, '-=0.62');
      }
    }


  }

  // Animación elegante para CTA principal "Informate Ya"
  if (headerDesktopCta && !isHomePage) {
    // Pulso inicial sutil para destacar
    var ctaTimeline = gsap.timeline({ delay: 0.8 });
    ctaTimeline
      .to(headerDesktopCta, {
        scale: 1.02,
        duration: 0.45,
        ease: 'power2.out'
      })
      .to(headerDesktopCta, {
        scale: 1,
        duration: 0.32,
        ease: 'power2.out'
      }, '-=0.08');

    // Efectos interactivos de hover
    headerDesktopCta.addEventListener('mouseenter', function () {
      gsap.to(headerDesktopCta, {
        scale: 1.04,
        boxShadow: '0 8px 20px rgba(242, 196, 91, 0.2)',
        duration: 0.28,
        ease: 'power2.out'
      });
    });

    headerDesktopCta.addEventListener('mouseleave', function () {
      gsap.to(headerDesktopCta, {
        scale: 1,
        boxShadow: 'none',
        duration: 0.32,
        ease: 'power2.out'
      });
    });
  }

  // Carrusel de imágenes en la sección de admisión con activación por scroll
  var admissionCarousel = document.querySelector('[data-admission-carousel]');
  if (admissionCarousel && window.gsap && window.ScrollTrigger) {
    var carouselImages = admissionCarousel.querySelectorAll('.admission-carousel-img');
    
    if (carouselImages.length > 1) {
      var currentIndex = 0;
      var carouselTimer = null;
      
      // Establecer la primera imagen como activa
      carouselImages[0].classList.add('is-active');
      
      var nextImage = function() {
        // Animar salida de la imagen actual
        gsap.to(carouselImages[currentIndex], {
          opacity: 0,
          scale: 0.98,
          duration: 0.8,
          ease: 'power2.inOut'
        });
        
        carouselImages[currentIndex].classList.remove('is-active');
        
        // Ir a la siguiente imagen
        currentIndex = (currentIndex + 1) % carouselImages.length;
        
        // Animar entrada de la nueva imagen
        carouselImages[currentIndex].classList.add('is-active');
        gsap.fromTo(carouselImages[currentIndex],
          {
            opacity: 0,
            scale: 1.02
          },
          {
            opacity: 1,
            scale: 1,
            duration: 0.8,
            ease: 'power2.inOut'
          }
        );
      };

      var startCarousel = function() {
        if (!carouselTimer) {
          carouselTimer = setInterval(nextImage, 3500);
        }
      };

      var stopCarousel = function() {
        if (carouselTimer) {
          clearInterval(carouselTimer);
          carouselTimer = null;
        }
      };

      // Activar carrusel solo cuando la sección es visible
      ScrollTrigger.create({
        trigger: admissionSection || admissionCarousel,
        start: 'top 90%',
        onEnter: startCarousel,
        onEnterBack: startCarousel,
        onLeave: stopCarousel,
        onLeaveBack: stopCarousel
      });
    }
  }
})();

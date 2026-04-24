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
  var revealTargets = document.querySelectorAll('[data-reveal]');
  var headerBrand = document.querySelector('.brand');
  var headerDesktopCta = document.querySelector('.header-cta:not(.header-cta-mobile)');
  var headerMobileItems = document.querySelectorAll('.header-cta-mobile, #menu-toggle');
  var navItems = document.querySelectorAll('.primary-nav > ul > li');
  var cards = document.querySelectorAll('#ubicacion article');
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


})();

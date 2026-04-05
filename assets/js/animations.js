(function () {
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var rootStyle = document.documentElement.style;
  var headerMain = document.getElementById('header-main');
  var announcementBar = document.getElementById('announcement-bar');

  function updateHeaderMetrics() {
    if (!headerMain) {
      return;
    }

    var mainHeight = headerMain.offsetHeight || 0;
    var announcementHeight = 0;

    if (announcementBar) {
      announcementHeight = announcementBar.offsetHeight || 0;
    }

    rootStyle.setProperty('--header-main-height', mainHeight + 'px');
    rootStyle.setProperty('--announcement-height', announcementHeight + 'px');
    rootStyle.setProperty('--header-total-height', mainHeight + announcementHeight + 'px');
  }

  updateHeaderMetrics();
  window.addEventListener('resize', updateHeaderMetrics);

  if (reduceMotion) {
    return;
  }

  if (!window.gsap) {
    return;
  }

  var gsap = window.gsap;
  var isHomePage = document.body.getAttribute('data-page') === 'home';
  var revealTargets = document.querySelectorAll('[data-reveal]');
  var navItems = document.querySelectorAll('.primary-nav > ul > li');
  var cards = document.querySelectorAll('#programas article, #noticias article, #ubicacion article');

  if (!isHomePage && navItems.length) {
    gsap.from(navItems, {
      y: -8,
      opacity: 0,
      duration: 0.4,
      stagger: 0.05,
      ease: 'power2.out',
      delay: 0.12
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

    var isAnnouncementVisible = true;
    if (announcementBar && announcementBar.offsetHeight > 0) {
      var setAnnouncementState = function (show, immediate) {
        if (show === isAnnouncementVisible) {
          return;
        }

        isAnnouncementVisible = show;
        gsap.to(announcementBar, {
          height: show ? announcementBar.scrollHeight : 0,
          autoAlpha: show ? 1 : 0,
          duration: immediate ? 0 : 0.26,
          ease: 'power2.out',
          overwrite: 'auto',
          onComplete: updateHeaderMetrics
        });
      };

      setAnnouncementState(window.scrollY <= 0, true);
      updateHeaderMetrics();

      ScrollTrigger.create({
        start: 0,
        end: 'max',
        onUpdate: function (self) {
          setAnnouncementState(self.scroll() <= 0, false);
        }
      });

      window.addEventListener('resize', function () {
        if (window.scrollY <= 0) {
          gsap.set(announcementBar, { height: announcementBar.scrollHeight || 'auto', autoAlpha: 1 });
        }
        updateHeaderMetrics();
      });
    }

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
  var headerCTA = document.querySelector('.header-cta:not(.header-cta-mobile)');
  if (headerCTA && !isHomePage) {
    // Pulso inicial sutil para destacar
    var ctaTimeline = gsap.timeline({ delay: 0.8 });
    ctaTimeline
      .to(headerCTA, {
        scale: 1.02,
        duration: 0.45,
        ease: 'power2.out'
      })
      .to(headerCTA, {
        scale: 1,
        duration: 0.32,
        ease: 'power2.out'
      }, '-=0.08');

    // Efectos interactivos de hover
    headerCTA.addEventListener('mouseenter', function () {
      gsap.to(headerCTA, {
        scale: 1.04,
        boxShadow: '0 8px 20px rgba(242, 196, 91, 0.2)',
        duration: 0.28,
        ease: 'power2.out'
      });
    });

    headerCTA.addEventListener('mouseleave', function () {
      gsap.to(headerCTA, {
        scale: 1,
        boxShadow: '0 4px 12px rgba(242, 196, 91, 0.16)',
        duration: 0.32,
        ease: 'power2.out'
      });
    });
  }
})();

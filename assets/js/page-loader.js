(function () {
  'use strict';

  var MIN_VISIBLE_MS = 1400;
  var FAILSAFE_HIDE_MS = 12000;
  var INTRO_SWITCH_MS = 380;
  var SETTLE_PHASE_MS = 0.35;
  var ENTRY_DURATION_MS = 0.75;
  var CONTENT_EXIT_DURATION_MS = 0.8;
  var OVERLAY_EXIT_DURATION_MS = 0.78;
  var FINAL_HOLD_MS = 0;
  var FALLBACK_TRANSITION_MS = 40;
  var SCROLLBAR_COMPENSATION_VAR = '--loader-scrollbar-compensation';
  var loader = document.getElementById('page-loader');

  if (!loader) {
    return;
  }

  var shownAt = Date.now();
  var hidden = false;
  var exiting = false;
  var loaderInner = loader.querySelector('.page-loader-inner');
  var logoWrap = loader.querySelector('.page-loader-logo-wrap');
  var copyWrap = loader.querySelector('.page-loader-copy');
  var title = loader.querySelector('.page-loader-title');
  var subtitle = loader.querySelector('.page-loader-subtitle');
  var hasGSAP = typeof window.gsap !== 'undefined';
  var introTimer = null;

  function getContentTargets() {
    var targets = [logoWrap, copyWrap].filter(Boolean);
    return targets.length ? targets : [loaderInner].filter(Boolean);
  }

  var unlockTimeout = null;

  function lockScroll() {
    if (unlockTimeout) {
      window.clearTimeout(unlockTimeout);
      unlockTimeout = null;
    }
    var scrollbarWidth = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
    document.documentElement.style.setProperty(SCROLLBAR_COMPENSATION_VAR, scrollbarWidth + 'px');
    document.documentElement.classList.add('is-loading');
    document.body.classList.add('is-loading');
  }

  function unlockScroll() {
    if (unlockTimeout) {
      window.clearTimeout(unlockTimeout);
      unlockTimeout = null;
    }
    document.documentElement.classList.remove('is-loading');
    document.body.classList.remove('is-loading');
    document.documentElement.style.removeProperty(SCROLLBAR_COMPENSATION_VAR);
  }

  function dispatchLoaderComplete() {
    if (window.ScrollTrigger && typeof window.ScrollTrigger.refresh === 'function') {
      window.ScrollTrigger.refresh();
    }

    window.dispatchEvent(new Event('page-loader:complete'));
  }

  function showLoader() {
    if (introTimer) {
      window.clearTimeout(introTimer);
      introTimer = null;
    }

    loader.classList.remove('is-settling');
    loader.classList.remove('is-content-exiting');
    loader.classList.remove('is-overlay-exiting');
    loader.classList.remove('is-hidden');
    loader.classList.remove('is-animated');
    loader.classList.remove('is-gsap-exit');
    hidden = false;
    exiting = false;
    shownAt = Date.now();
    lockScroll();

    introTimer = window.setTimeout(function () {
      loader.classList.add('is-animated');
    }, INTRO_SWITCH_MS);

    if (hasGSAP && loaderInner) {
      window.gsap.killTweensOf(loader);
      window.gsap.killTweensOf(loaderInner);
      if (logoWrap) {
        window.gsap.killTweensOf(logoWrap);
      }
      if (copyWrap) {
        window.gsap.killTweensOf(copyWrap);
      }
      if (title) {
        window.gsap.killTweensOf(title);
      }
      if (subtitle) {
        window.gsap.killTweensOf(subtitle);
      }

      window.gsap.set(loader, { autoAlpha: 1 });

      var intro = window.gsap.timeline({ defaults: { overwrite: 'auto' } });
      intro.fromTo(
        loaderInner,
        { autoAlpha: 0.8 },
        { duration: 0.28, autoAlpha: 1, ease: 'power1.out' }
      );
      intro.fromTo(
        logoWrap || loaderInner,
        { autoAlpha: 0, y: 16, scale: 0.94 },
        { duration: ENTRY_DURATION_MS, autoAlpha: 1, y: 0, scale: 1, ease: 'power3.out' },
        0
      );
      intro.fromTo(
        copyWrap || loaderInner,
        { autoAlpha: 0, y: 10 },
        { duration: ENTRY_DURATION_MS * 0.92, autoAlpha: 1, y: 0, ease: 'power2.out' },
        0.1
      );

      if (title || subtitle) {
        intro.fromTo(
          [title, subtitle].filter(Boolean),
          { autoAlpha: 0, y: 6 },
          { duration: 0.48, autoAlpha: 1, y: 0, ease: 'power2.out' },
          0.18
        );
      }
    }
  }

  function completeHide() {
    if (introTimer) {
      window.clearTimeout(introTimer);
      introTimer = null;
    }

    loader.classList.add('is-hidden');
    loader.classList.remove('is-settling');
    loader.classList.remove('is-content-exiting');
    loader.classList.remove('is-overlay-exiting');
    loader.classList.remove('is-animated');
    loader.classList.remove('is-gsap-exit');
    hidden = true;
    exiting = false;

    if (hasGSAP) {
      window.gsap.set(loader, { clearProps: 'all' });
      if (loaderInner) {
        window.gsap.set(loaderInner, { clearProps: 'all' });
      }
      if (logoWrap) {
        window.gsap.set(logoWrap, { clearProps: 'all' });
      }
      if (copyWrap) {
        window.gsap.set(copyWrap, { clearProps: 'all' });
      }
      if (title) {
        window.gsap.set(title, { clearProps: 'all' });
      }
      if (subtitle) {
        window.gsap.set(subtitle, { clearProps: 'all' });
      }
    }

    // Delay scroll unlock and completion dispatch by 1.5 seconds
    unlockTimeout = window.setTimeout(function () {
      unlockScroll();
      window.requestAnimationFrame(dispatchLoaderComplete);
    }, 2300);
  }

  function hideLoader() {
    if (hidden) {
      return;
    }

    var elapsed = Date.now() - shownAt;
    var waitMs = Math.max(0, MIN_VISIBLE_MS - elapsed);

    window.setTimeout(function () {
      if (hidden) {
        return;
      }

      if (exiting) {
        return;
      }

      exiting = true;
      loader.classList.add('is-settling');

      if (hasGSAP && loaderInner) {
        loader.classList.add('is-gsap-exit');
        window.gsap.killTweensOf(loader);
        window.gsap.killTweensOf(loaderInner);
        var exitTimeline = window.gsap.timeline({
          defaults: { overwrite: 'auto' }
        });

        exitTimeline.to(loaderInner, {
          duration: SETTLE_PHASE_MS,
          autoAlpha: 1,
          y: -1,
          scale: 1.008,
          ease: 'power1.inOut'
        });

        exitTimeline.to(getContentTargets(), {
          duration: CONTENT_EXIT_DURATION_MS,
          autoAlpha: 0,
          y: -6,
          scale: 1.01,
          ease: 'power2.out'
        });

        exitTimeline.add(function () {
          loader.classList.remove('is-settling');
        });

        exitTimeline.to(loader, {
          duration: OVERLAY_EXIT_DURATION_MS,
          autoAlpha: 0,
          scale: 1,
          ease: 'power1.inOut',
          overwrite: 'auto',
          onComplete: function () {
            window.setTimeout(completeHide, FINAL_HOLD_MS);
          }
        });
      } else {
        var settleMs = Math.round(SETTLE_PHASE_MS * 1000);
        var contentExitMs = Math.round(CONTENT_EXIT_DURATION_MS * 1000);
        var overlayExitMs = Math.round(OVERLAY_EXIT_DURATION_MS * 1000);

        window.setTimeout(function () {
          loader.classList.remove('is-settling');
          loader.classList.add('is-content-exiting');
        }, settleMs);

        window.setTimeout(function () {
          loader.classList.remove('is-content-exiting');
          loader.classList.add('is-overlay-exiting');
        }, settleMs + contentExitMs);

        window.setTimeout(function () {
          if (!hidden) {
            window.setTimeout(completeHide, FINAL_HOLD_MS);
          }
        }, settleMs + contentExitMs + overlayExitMs + FALLBACK_TRANSITION_MS);
      }
    }, waitMs);
  }

  function isIgnoredLink(anchor) {
    var rawHref = anchor.getAttribute('href') || '';

    if (!rawHref || rawHref.charAt(0) === '#') {
      return true;
    }

    if (anchor.hasAttribute('download')) {
      return true;
    }

    var target = (anchor.getAttribute('target') || '').toLowerCase();
    if (target && target !== '_self') {
      return true;
    }

    if (/^(mailto:|tel:|javascript:)/i.test(rawHref)) {
      return true;
    }

    var url;
    try {
      url = new URL(anchor.href, window.location.href);
    } catch (error) {
      return true;
    }

    if (url.origin !== window.location.origin) {
      return true;
    }

    if (url.pathname === window.location.pathname && url.search === window.location.search && url.hash) {
      return true;
    }

    return false;
  }

  function bindNavigationInterception() {
    document.addEventListener('click', function (event) {
      if (event.defaultPrevented || event.button !== 0) {
        return;
      }

      if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) {
        return;
      }

      var trigger = event.target.closest('a[href], [data-loader-url]');
      if (!trigger) {
        return;
      }

      if (trigger.matches('a[href]')) {
        if (isIgnoredLink(trigger)) {
          return;
        }

        showLoader();
        return;
      }

      var customUrl = trigger.getAttribute('data-loader-url');
      if (!customUrl) {
        return;
      }

      showLoader();
      window.location.href = customUrl;
    }, true);

    window.addEventListener('beforeunload', function () {
      showLoader();
    });
  }

  window.PageLoader = {
    show: showLoader,
    hide: hideLoader,
    navigate: function (url) {
      showLoader();
      window.location.href = url;
    }
  };

  showLoader();
  bindNavigationInterception();

  window.addEventListener('load', hideLoader, { once: true });

  window.setTimeout(function () {
    if (!hidden) {
      completeHide();
    }
  }, FAILSAFE_HIDE_MS);
})();

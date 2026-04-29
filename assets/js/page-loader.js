(function () {
  'use strict';

  var MIN_VISIBLE_MS = 2200; 
  var FAILSAFE_HIDE_MS = 10000;
  var OVERLAY_EXIT_DURATION_MS = 0.6;
  var SCROLLBAR_COMPENSATION_VAR = '--loader-scrollbar-compensation';
  
  var loader = document.getElementById('page-loader');

  if (!loader) {
    return;
  }

  var shownAt = Date.now();
  var hidden = false;
  var exiting = false;
  
  var loaderInner = loader.querySelector('.page-loader-inner');
  var letters = loader.querySelectorAll('.loader svg.inline-block');
  var phrase = loader.querySelector('.page-loader-phrase');
  var hasGSAP = typeof window.gsap !== 'undefined';

  function lockScroll() {
    var scrollbarWidth = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
    document.documentElement.style.setProperty(SCROLLBAR_COMPENSATION_VAR, scrollbarWidth + 'px');
    document.documentElement.classList.add('is-loading');
    document.body.classList.add('is-loading');
  }

  function unlockScroll() {
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
    loader.classList.remove('is-hidden');
    hidden = false;
    exiting = false;
    shownAt = Date.now();
    lockScroll();

    if (hasGSAP) {
      window.gsap.killTweensOf([loader, loaderInner, letters, phrase]);
      window.gsap.set(loader, { autoAlpha: 1, display: 'flex' });
      window.gsap.set(loaderInner, { autoAlpha: 1 });
      
      var intro = window.gsap.timeline();
      
      intro.fromTo(letters, 
        { autoAlpha: 0, y: 15, scale: 0.8, rotateX: -45 }, 
        { 
          duration: 0.8, 
          autoAlpha: 1, 
          y: 0, 
          scale: 1, 
          rotateX: 0, 
          stagger: 0.12, 
          ease: 'back.out(1.7)',
          overwrite: 'auto' 
        }
      );
      
      if (phrase) {
        intro.fromTo(phrase,
          { autoAlpha: 0, y: 15 },
          { duration: 0.7, autoAlpha: 1, y: 0, ease: 'power2.out' },
          "+=0.1"
        );
      }
    }
  }

  function completeHide() {
    // Add class first to ensure CSS 'display: none' is applied
    loader.classList.add('is-hidden');
    hidden = true;
    exiting = false;

    if (hasGSAP) {
      // Clear properties only on children, NEVER on the loader container
      // to avoid it popping back into view for a split second.
      window.gsap.set([loaderInner, letters, phrase], { clearProps: 'all' });
    }

    // Extend scroll lock for 1.8 seconds after loader is hidden as requested
    window.setTimeout(function () {
      unlockScroll();
      if (window.ScrollTrigger) window.ScrollTrigger.refresh();
      window.requestAnimationFrame(dispatchLoaderComplete);
    }, 1800);
  }

  function hideLoader() {
    if (hidden || exiting) return;

    var elapsed = Date.now() - shownAt;
    var waitMs = Math.max(0, MIN_VISIBLE_MS - elapsed);

    window.setTimeout(function () {
      if (hidden || exiting) return;
      exiting = true;

      if (hasGSAP && loaderInner) {
        var exitTimeline = window.gsap.timeline({
          onComplete: completeHide
        });

        if (phrase) {
          exitTimeline.to(phrase, {
            duration: 0.45,
            autoAlpha: 0,
            y: 15,
            ease: 'power2.in'
          });
        }
    
        exitTimeline.to(letters, {
          duration: 0.4,
          autoAlpha: 0,
          y: -20,
          scale: 1.05,
          stagger: 0.06,
          ease: 'power4.in'
        }, "-=0.25");
    
        exitTimeline.to(loader, {
          duration: OVERLAY_EXIT_DURATION_MS,
          autoAlpha: 0,
          ease: 'power2.inOut'
        }, "-=0.25");

      } else {
        completeHide();
      }
    }, waitMs);
  }

  function isIgnoredLink(anchor) {
    var rawHref = anchor.getAttribute('href') || '';
    if (!rawHref || rawHref.charAt(0) === '#' || anchor.hasAttribute('download')) return true;
    var target = (anchor.getAttribute('target') || '').toLowerCase();
    if (target && target !== '_self') return true;
    if (/^(mailto:|tel:|javascript:)/i.test(rawHref)) return true;
    try {
      var url = new URL(anchor.href, window.location.href);
      if (url.origin !== window.location.origin) return true;
      if (url.pathname === window.location.pathname && url.search === window.location.search && url.hash) return true;
    } catch (e) { return true; }
    return false;
  }

  function bindNavigationInterception() {
    document.addEventListener('click', function (event) {
      if (event.defaultPrevented || event.button !== 0) return;
      if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
      var trigger = event.target.closest('a[href], [data-loader-url]');
      if (!trigger) return;
      if (trigger.matches('a[href]')) {
        if (isIgnoredLink(trigger)) return;
        showLoader();
        return;
      }
      var customUrl = trigger.getAttribute('data-loader-url');
      if (customUrl) {
        showLoader();
        window.location.href = customUrl;
      }
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
    if (!hidden) completeHide();
  }, FAILSAFE_HIDE_MS);
})();

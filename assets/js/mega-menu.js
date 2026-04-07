(function () {
  'use strict';

  function MegaMenu() {
    this.header = document.getElementById('site-header');
    this.main = document.getElementById('header-main');
    this.shell = document.getElementById('mega-nav-shell');
    this.panel = document.getElementById('mega-nav-panel');
    this.sectionsRoot = document.getElementById('mega-sections');
    this.sections = Array.prototype.slice.call(document.querySelectorAll('.mega-panel-content'));
    this.triggers = Array.prototype.slice.call(document.querySelectorAll('.mega-trigger'));
    this.navItems = Array.prototype.slice.call(document.querySelectorAll('.nav-item'));
    this.mobileToggle = document.getElementById('menu-toggle');
    this.mobileNav = document.getElementById('mobile-nav');
    this.mobileSectionToggles = Array.prototype.slice.call(document.querySelectorAll('.mobile-section-toggle'));

    this.activeSection = 'escuela';
    this.isOpen = false;
    this.closeTimer = null;
    this.duration = 0.28;
    this.sectionTimeline = null;
    this.menuTimeline = null;

    this.init();
  }

  MegaMenu.prototype.hasGSAP = function () {
    return typeof window.gsap !== 'undefined';
  };

  MegaMenu.prototype.init = function () {
    if (!this.header || !this.shell || !this.sectionsRoot || !this.sections.length) {
      return;
    }

    this.calculateSharedHeight();
    this.bindDesktop();
    this.bindMobile();
    this.bindGlobal();
    this.updateActiveStates(this.activeSection);
  };

  MegaMenu.prototype.calculateSharedHeight = function () {
    var maxHeight = 0;
    this.sections.forEach(function (section) {
      var wasActive = section.classList.contains('is-active');
      if (!wasActive) {
        section.classList.add('is-active');
        section.setAttribute('aria-hidden', 'false');
      }
      var sectionHeight = section.scrollHeight;
      if (sectionHeight > maxHeight) {
        maxHeight = sectionHeight;
      }
      if (!wasActive) {
        section.classList.remove('is-active');
        section.setAttribute('aria-hidden', 'true');
      }
    });

    this.sectionsRoot.style.setProperty('--mega-height', Math.max(maxHeight, 330) + 'px');
  };

  MegaMenu.prototype.getMenuOpenHeight = function () {
    if (!this.panel) {
      return 650;
    }

    var panelHeight = this.panel.scrollHeight || 0;
    var visualBuffer = 10;
    return Math.max(panelHeight + visualBuffer, 330 + visualBuffer);
  };

  MegaMenu.prototype.debounce = function (fn, wait) {
    var timer = null;
    return function () {
      var args = arguments;
      window.clearTimeout(timer);
      timer = window.setTimeout(function () {
        fn.apply(null, args);
      }, wait);
    };
  };

  MegaMenu.prototype.notifyLayoutChange = function () {
    if (!this.header) {
      return;
    }

    this.header.dispatchEvent(new window.CustomEvent('header:layout-change'));
  };

  MegaMenu.prototype.bindDesktop = function () {
    var self = this;

    this.triggers.forEach(function (trigger) {
      var section = trigger.getAttribute('data-section');

      trigger.addEventListener('mouseenter', function () {
        self.clearCloseTimer();
        self.openMenu();
        self.switchSection(section);
      });

      trigger.addEventListener('focus', function () {
        self.clearCloseTimer();
        self.openMenu();
        self.switchSection(section);
      });

      trigger.addEventListener('click', function (event) {
        event.preventDefault();
      });
    });

    this.header.addEventListener('mouseenter', function () {
      self.clearCloseTimer();
    });

    this.header.addEventListener('mouseleave', function () {
      self.scheduleClose();
    });
  };

  MegaMenu.prototype.bindMobile = function () {
    var self = this;

    if (this.mobileToggle && this.mobileNav) {
      this.mobileToggle.addEventListener('click', function () {
        var open = self.mobileToggle.getAttribute('aria-expanded') !== 'true';
        self.toggleMobile(open);
      });
    }

    this.mobileSectionToggles.forEach(function (toggle) {
      toggle.addEventListener('click', function () {
        var submenu = toggle.nextElementSibling;
        var isOpen = toggle.getAttribute('data-open') === 'true';

        self.mobileSectionToggles.forEach(function (otherToggle) {
          if (otherToggle === toggle) {
            return;
          }
          var otherSubmenu = otherToggle.nextElementSibling;
          otherToggle.setAttribute('data-open', 'false');
          otherToggle.setAttribute('aria-expanded', 'false');
          if (otherSubmenu) {
            otherSubmenu.classList.add('hidden');
          }
        });

        toggle.setAttribute('data-open', isOpen ? 'false' : 'true');
        toggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');

        if (submenu) {
          submenu.classList.toggle('hidden', isOpen);
        }
      });
    });
  };

  MegaMenu.prototype.bindGlobal = function () {
    var self = this;

    var onResize = this.debounce(function () {
      self.calculateSharedHeight();
      if (window.innerWidth >= 1024 && self.mobileNav) {
        self.toggleMobile(false);
      }
      if (window.innerWidth < 1024) {
        self.closeMenu();
      }
    }, 120);

    window.addEventListener('resize', onResize);

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') {
        self.closeMenu();
        self.toggleMobile(false);
      }
    });

    document.addEventListener('click', function (event) {
      if (!event.target.closest('#site-header')) {
        self.closeMenu();
        self.toggleMobile(false);
      }
    });
  };

  MegaMenu.prototype.openMenu = function () {
    if (this.isOpen || window.innerWidth < 1024) {
      return;
    }
    this.isOpen = true;
    this.shell.classList.remove('hidden');
    this.shell.classList.add('is-open');
    this.shell.setAttribute('aria-hidden', 'false');
    this.header.classList.add('menu-open');
    this.notifyLayoutChange();
    this.calculateSharedHeight();

    var openHeight = this.getMenuOpenHeight();

    if (this.hasGSAP()) {
      if (this.menuTimeline) {
        this.menuTimeline.kill();
      }

      this.menuTimeline = window.gsap.timeline();
      this.menuTimeline
        .fromTo(
          this.shell,
          { maxHeight: 0, opacity: 0 },
          { duration: this.duration, maxHeight: openHeight, opacity: 1, ease: 'power2.out' }
        )
        .fromTo(
          this.panel,
          { y: -10, opacity: 0.82 },
          { duration: this.duration, y: 0, opacity: 1, ease: 'power2.out' },
          0
        );

      this.animateColumnsIn(this.getCurrentSection());
    } else {
      this.shell.style.maxHeight = openHeight + 'px';
      this.shell.style.opacity = '1';
    }
  };

  MegaMenu.prototype.closeMenu = function () {
    if (!this.isOpen) {
      return;
    }
    this.isOpen = false;
    this.shell.setAttribute('aria-hidden', 'true');
    this.header.classList.remove('menu-open');
    this.notifyLayoutChange();
    this.navItems.forEach(function (item) {
      item.removeAttribute('data-active');
    });

    if (this.hasGSAP()) {
      var self = this;
      if (this.menuTimeline) {
        this.menuTimeline.kill();
      }
      if (this.sectionTimeline) {
        this.sectionTimeline.kill();
      }

      window.gsap.to(this.shell, {
        duration: this.duration,
        maxHeight: 0,
        opacity: 0,
        ease: 'power2.inOut',
        onComplete: function () {
          self.shell.classList.remove('is-open');
          self.shell.classList.add('hidden');
        }
      });
    } else {
      this.shell.style.maxHeight = '0px';
      this.shell.style.opacity = '0';
      this.shell.classList.remove('is-open');
      this.shell.classList.add('hidden');
    }
  };

  MegaMenu.prototype.switchSection = function (sectionName) {
    if (this.activeSection === sectionName) {
      this.updateActiveStates(sectionName);
      return;
    }

    var current = this.sections.find(function (section) {
      return section.getAttribute('data-section') === sectionName;
    });

    if (!current) {
      return;
    }

    this.activeSection = sectionName;
    this.updateActiveStates(sectionName);

    if (this.hasGSAP()) {
      if (this.sectionTimeline) {
        this.sectionTimeline.kill();
      }

      // Hard reset of non-active sections avoids stale ghost states on rapid hover changes.
      this.sections.forEach(function (section) {
        if (section !== current) {
          section.classList.remove('is-active');
          section.setAttribute('aria-hidden', 'true');
          window.gsap.set(section, { opacity: 0, x: 0, clearProps: 'x' });
        }
      });

      current.classList.add('is-active');
      current.setAttribute('aria-hidden', 'false');

      window.gsap.killTweensOf(current);
      this.sectionTimeline = window.gsap.timeline();

      this.sectionTimeline
        .fromTo(
          current,
          { opacity: 0, x: 10 },
          { duration: 0.2, opacity: 1, x: 0, ease: 'power2.out', overwrite: 'auto' }
        );

      this.animateColumnsIn(current, 0.03);
    } else {
      this.sections.forEach(function (section) {
        if (section !== current) {
          section.classList.remove('is-active');
          section.setAttribute('aria-hidden', 'true');
        }
      });
      current.classList.add('is-active');
      current.setAttribute('aria-hidden', 'false');
    }
  };

  MegaMenu.prototype.getCurrentSection = function () {
    return this.sections.find(function (section) {
      return section.classList.contains('is-active');
    });
  };

  MegaMenu.prototype.animateColumnsIn = function (section, delay) {
    if (!section || !this.hasGSAP()) {
      return;
    }

    var columns = Array.prototype.slice.call(section.querySelectorAll('.mega-column'));
    if (!columns.length) {
      return;
    }

    window.gsap.killTweensOf(columns);
    window.gsap.fromTo(
      columns,
      { y: 10, opacity: 0 },
      {
        duration: 0.22,
        y: 0,
        opacity: 1,
        stagger: 0.045,
        ease: 'power2.out',
        delay: typeof delay === 'number' ? delay : 0
      }
    );
  };

  MegaMenu.prototype.updateActiveStates = function (sectionName) {
    this.navItems.forEach(function (item) {
      var itemSection = item.getAttribute('data-section');
      item.setAttribute('data-active', itemSection === sectionName ? 'true' : 'false');
    });

    this.triggers.forEach(function (trigger) {
      var expanded = trigger.getAttribute('data-section') === sectionName;
      trigger.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });
  };

  MegaMenu.prototype.scheduleClose = function () {
    var self = this;
    this.clearCloseTimer();
    this.closeTimer = window.setTimeout(function () {
      self.closeMenu();
    }, 180);
  };

  MegaMenu.prototype.clearCloseTimer = function () {
    if (this.closeTimer) {
      window.clearTimeout(this.closeTimer);
      this.closeTimer = null;
    }
  };

  MegaMenu.prototype.toggleMobile = function (open) {
    if (!this.mobileToggle || !this.mobileNav) {
      return;
    }

    this.mobileToggle.setAttribute('aria-expanded', open ? 'true' : 'false');

    if (!open) {
      this.mobileNav.classList.add('hidden');
      this.mobileSectionToggles.forEach(function (toggle) {
        var submenu = toggle.nextElementSibling;
        toggle.setAttribute('data-open', 'false');
        toggle.setAttribute('aria-expanded', 'false');
        if (submenu) {
          submenu.classList.add('hidden');
        }
      });
      this.notifyLayoutChange();
      return;
    }

    this.mobileNav.classList.remove('hidden');
    this.notifyLayoutChange();

    if (this.hasGSAP()) {
      window.gsap.fromTo(
        this.mobileNav,
        { opacity: 0, y: -10 },
        { duration: 0.24, opacity: 1, y: 0, ease: 'power2.out' }
      );
    }
  };

  function initMegaMenu() {
    new MegaMenu();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMegaMenu);
  } else {
    initMegaMenu();
  }
})();

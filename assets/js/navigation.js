(function () {
  var menuToggle = document.getElementById('menu-toggle');
  var primaryNav = document.getElementById('primary-nav');
  var submenuToggles = document.querySelectorAll('.submenu-toggle');
  var navLinks = document.querySelectorAll('#primary-nav a');

  function setMenuState(isOpen) {
    if (!primaryNav || !menuToggle) {
      return;
    }

    primaryNav.classList.toggle('open', isOpen);
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    document.body.style.overflow = isOpen ? 'hidden' : '';
  }

  function closeAllSubmenus(except) {
    submenuToggles.forEach(function (toggle) {
      var parent = toggle.closest('.has-submenu');
      if (!parent) return;
      if (except && parent === except) return;
      parent.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    });
  }

  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function () {
      var parent = toggle.closest('.has-submenu');
      var isOpen = parent.classList.contains('open');

      closeAllSubmenus(isOpen ? null : parent);
      parent.classList.toggle('open', !isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
    });
  });

  document.addEventListener('click', function (event) {
    if (!event.target.closest('.has-submenu')) {
      closeAllSubmenus();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeAllSubmenus();
      if (primaryNav) {
        primaryNav.classList.remove('open');
        document.body.style.overflow = '';
      }
      if (menuToggle) {
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    }
  });

  if (menuToggle && primaryNav) {
    menuToggle.addEventListener('click', function () {
      var isOpen = !primaryNav.classList.contains('open');
      setMenuState(isOpen);
    });
  }

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      setMenuState(false);
    });
  });
})();

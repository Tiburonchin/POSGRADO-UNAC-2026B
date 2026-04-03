(function () {
  var root = document.documentElement;
  var toggles = [
    document.getElementById('theme-toggle'),
    document.getElementById('theme-toggle-mobile')
  ].filter(Boolean);
  var media = window.matchMedia('(prefers-color-scheme: dark)');

  function getStoredTheme() {
    return localStorage.getItem('epg-theme');
  }

  function systemTheme() {
    return media.matches ? 'dark' : 'light';
  }

  function applyTheme(theme) {
    root.setAttribute('data-theme', theme);
    toggles.forEach(function (toggle) {
      toggle.setAttribute('aria-label', theme === 'dark' ? 'Cambiar a tema claro' : 'Cambiar a tema oscuro');
    });
  }

  function resolveTheme() {
    return getStoredTheme() || systemTheme();
  }

  applyTheme(resolveTheme());

  toggles.forEach(function (toggle) {
    toggle.addEventListener('click', function () {
      var nextTheme = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
      localStorage.setItem('epg-theme', nextTheme);
      applyTheme(nextTheme);
    });
  });

  media.addEventListener('change', function () {
    if (!getStoredTheme()) {
      applyTheme(systemTheme());
    }
  });
})();

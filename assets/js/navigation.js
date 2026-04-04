/**
 * Navigation - Complementary helper functions
 * Main mega-menu logic is now handled by mega-menu.js
 * This file is kept for backward compatibility and other navigation utilities
 */

(function () {
  'use strict';

  // ESC key to close all menus
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      // Close mobile nav if open
      var mobileNav = document.getElementById('mobile-nav');
      var menuToggle = document.getElementById('menu-toggle');
      
      if (mobileNav && !mobileNav.classList.contains('hidden')) {
        mobileNav.classList.add('hidden');
        if (menuToggle) {
          menuToggle.setAttribute('aria-expanded', 'false');
        }
      }
    }
  });

  // Close mobile menu when resizing to desktop
  var lastWidth = window.innerWidth;
  window.addEventListener('resize', function () {
    var currentWidth = window.innerWidth;
    
    if (lastWidth < 1024 && currentWidth >= 1024) {
      var mobileNav = document.getElementById('mobile-nav');
      var menuToggle = document.getElementById('menu-toggle');
      
      if (mobileNav && !mobileNav.classList.contains('hidden')) {
        mobileNav.classList.add('hidden');
        if (menuToggle) {
          menuToggle.setAttribute('aria-expanded', 'false');
        }
      }
    }
    
    lastWidth = currentWidth;
  });

})();

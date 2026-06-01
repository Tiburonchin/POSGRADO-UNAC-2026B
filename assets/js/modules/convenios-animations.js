document.addEventListener('DOMContentLoaded', () => {
    // Only run if GSAP is available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      console.warn('GSAP or ScrollTrigger not loaded. Animations disabled.');
      return;
    }
  
    gsap.registerPlugin(ScrollTrigger);
  
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;
  
    // Helper to detect if page loader is already hidden or disabled
    const isLoaderHidden = () => {
      const loader = document.getElementById('page-loader');
      return !loader || loader.classList.contains('is-hidden') || document.documentElement.classList.contains('page-loader-disabled');
    };

    function startAnimations() {
      // 1. Hero Animations (Requirements Style Entrance)
      const heroTl = gsap.timeline();
      
      heroTl.fromTo('.hero h1',
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 1.2, ease: "power4.out", delay: 0.2 }
      )
      .fromTo('.hero p',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 1.0, ease: "power3.out" },
        "-=0.8"
      )
      .fromTo('.hero-actions',
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" },
        "-=0.6"
      )
      .fromTo('.hero-scroll-indicator',
        { opacity: 0 },
        { opacity: 1, duration: 0.5 },
        "-=0.4"
      );
    
      // Hero content smooth parallax, scale down & fade on scroll (optimized to avoid trigger jumping)
      if (document.querySelector('#hero') && document.querySelector('.hero-content')) {
        gsap.to('.hero-content', {
          scrollTrigger: {
            trigger: '#hero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
          },
          yPercent: 15,
          scale: 0.96,
          opacity: 0,
          filter: 'blur(10px)',
          ease: 'none'
        });
      }
    
      // 2. Sections fade up
      gsap.utils.toArray('.conv-section').forEach(section => {
        gsap.fromTo(section,
          { opacity: 0, y: 50 },
          {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
              trigger: section,
              start: "top 85%",
              toggleActions: "play none none reverse"
            }
          }
        );
      });
  
      // 3. Stagger reveal on the main highlighted benefit banner
      gsap.fromTo('#beneficio-destacado .glass-card',
        { scale: 0.95, opacity: 0 },
        {
          scale: 1,
          opacity: 1,
          duration: 1,
          ease: "back.out(1.15)",
          scrollTrigger: {
            trigger: '#beneficio-destacado',
            start: "top 80%"
          }
        }
      );
    
      // 4. Stagger reveal on contact cards
      gsap.fromTo('#contacto .glass-card',
        { y: 50, opacity: 0 },
        {
          y: 0,
          opacity: 1,
          duration: 0.8,
          stagger: 0.2,
          ease: "power3.out",
          scrollTrigger: {
            trigger: '#contacto',
            start: "top 80%"
          }
        }
      );
    }

    // Run animations after page-loader is finished to prevent ScrollTrigger clamping on locked document body
    if (isLoaderHidden()) {
      startAnimations();
    } else {
      window.addEventListener('page-loader:complete', startAnimations, { once: true });
    }
  
    // 5. Convenios Interactive Filtration & Staggering Card Reveal
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.convenio-card');
    const loadMoreBtn = document.getElementById('btn-load-more');
    const searchInput = document.getElementById('convenios-search');
    const clearSearchBtn = document.getElementById('btn-clear-search');
    const searchStatus = document.getElementById('search-status');
    const searchCount = document.getElementById('search-count');
    
    let currentFilter = 'all';
    let visibleLimit = 6;
  
    function updateCardVisibility(isFilterChange = false) {
      const searchVal = searchInput ? searchInput.value.toLowerCase().trim() : '';
      let visibleCount = 0;
      let totalMatchCount = 0;
      let hasMore = false;
      const cardsToAnimate = [];
  
      // Control clear search button
      if (clearSearchBtn) {
        if (searchVal.length > 0) {
          clearSearchBtn.classList.remove('hidden');
        } else {
          clearSearchBtn.classList.add('hidden');
        }
      }
  
      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        const name = card.querySelector('h3').textContent.toLowerCase();
        const benefit = card.querySelector('.border-t').textContent.toLowerCase();
        const type = card.querySelector('p').textContent.toLowerCase();
  
        const matchesFilter = (currentFilter === 'all' || category === currentFilter);
        const matchesSearch = !searchVal || name.includes(searchVal) || benefit.includes(searchVal) || type.includes(searchVal);
  
        if (matchesFilter && matchesSearch) {
          totalMatchCount++;
          
          // When searching, we bypass standard pagination to show all matches
          const isUnderLimit = (searchVal.length > 0) || (visibleCount < visibleLimit);
          
          if (isUnderLimit) {
            if (card.style.display === 'none' || isFilterChange) {
              card.style.display = 'flex';
              cardsToAnimate.push(card);
            } else {
              card.style.display = 'flex';
            }
            visibleCount++;
          } else {
            card.style.display = 'none';
            hasMore = true;
          }
        } else {
          card.style.display = 'none';
        }
      });
  
      // Show Search Results Count
      if (searchStatus && searchCount) {
        if (searchVal.length > 0) {
          searchStatus.classList.remove('hidden');
          searchCount.textContent = totalMatchCount;
        } else {
          searchStatus.classList.add('hidden');
        }
      }
  
      // Animate newly shown cards
      if (cardsToAnimate.length > 0) {
        gsap.fromTo(cardsToAnimate,
          { opacity: 0, scale: 0.93, y: 25 },
          { opacity: 1, scale: 1, y: 0, duration: 0.45, stagger: 0.05, ease: "back.out(1.15)", clearProps: "transform" }
        );
      }
  
      // Show or hide load more button
      if (loadMoreBtn) {
        // Hide load more if search is active since search shows all items directly
        if (hasMore && searchVal.length === 0) {
          loadMoreBtn.style.display = 'inline-flex';
        } else {
          loadMoreBtn.style.display = 'none';
        }
      }
  
      // Re-initialize Lucide icons just in case
      if (typeof lucide !== 'undefined' && lucide.createIcons) {
        lucide.createIcons();
      }
    }
  
    // Set initial card visibility on page load
    updateCardVisibility(true);
  
    // Handle filter switching
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        if (btn.classList.contains('active')) return;

        // Toggle active styling
        filterButtons.forEach(b => {
          b.classList.remove('active');
        });
        btn.classList.add('active');
  
        currentFilter = btn.getAttribute('data-filter');
        visibleLimit = 6; // Reset showing count to 6
  
        // Smooth container transition animation
        gsap.to('#convenios-container', {
          opacity: 0.15,
          y: 8,
          duration: 0.22,
          onComplete: () => {
            updateCardVisibility(true);
            gsap.to('#convenios-container', { opacity: 1, y: 0, duration: 0.32, ease: "power2.out" });
          }
        });
      });
    });
  
    // Handle load more clicks
    if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', () => {
        visibleLimit += 6;
        updateCardVisibility(false);
      });
    }

    // Handle real-time searching inputs
    if (searchInput) {
      searchInput.addEventListener('input', () => {
        // Run update visibility on input change
        updateCardVisibility(true);
      });
    }

    // Handle clear search clicks
    if (clearSearchBtn && searchInput) {
      clearSearchBtn.addEventListener('click', () => {
        searchInput.value = '';
        updateCardVisibility(true);
        searchInput.focus();
      });
    }
});

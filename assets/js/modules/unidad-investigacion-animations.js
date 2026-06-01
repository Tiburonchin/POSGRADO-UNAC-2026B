document.addEventListener('DOMContentLoaded', () => {
    // Only run if GSAP is available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      console.warn('GSAP or ScrollTrigger not loaded. Animations disabled.');
      return;
    }
  
    gsap.registerPlugin(ScrollTrigger);
  
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;
  
    // 1. Hero Animations
    const heroTl = gsap.timeline();
    
    heroTl.fromTo('.hero h1',
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1, duration: 1.2, ease: "power4.out", delay: 0.3 }
    )
    .fromTo('.hero p',
      { y: 30, opacity: 0 },
      { y: 0, opacity: 1, duration: 1.0, ease: "power3.out" },
      "-=0.7"
    )
    .fromTo('.hero-scroll-indicator',
      { opacity: 0 },
      { opacity: 1, duration: 0.5 },
      "-=0.4"
    );

    // Hero background smooth parallax & fade on scroll
    if (document.querySelector('#hero')) {
      gsap.to('#hero', {
        scrollTrigger: {
          trigger: '#hero',
          start: 'top top',
          end: 'bottom top',
          scrub: true
        },
        yPercent: 12,
        ease: 'none'
      });
      
      gsap.to('.hero-content', {
        scrollTrigger: {
          trigger: '#hero',
          start: 'top top',
          end: 'bottom top',
          scrub: true
        },
        yPercent: 20,
        opacity: 0,
        ease: 'none'
      });
    }
  
    // 2. Sections fade up
    gsap.utils.toArray('.ui-section').forEach(section => {
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

    // 3. Profile Welcome animation
    gsap.fromTo('.ui-profile',
      { x: -50, opacity: 0 },
      {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.ui-profile',
          start: "top 80%"
        }
      }
    );

    gsap.fromTo('.ui-welcome',
      { x: 50, opacity: 0 },
      {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.ui-welcome',
          start: "top 80%"
        }
      }
    );

    // 4. Mision / Vision & Image split
    gsap.fromTo('.ui-mision > div',
      { x: -50, opacity: 0 },
      {
        x: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.ui-mision',
          start: "top 80%"
        }
      }
    );

    gsap.fromTo('.ui-mv-img',
      { x: 50, opacity: 0 },
      {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.ui-mv-img',
          start: "top 80%"
        }
      }
    );

    // 5. Committees Animation
    gsap.fromTo('.ui-committees .group',
      { y: 50, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.ui-committees',
          start: "top 80%"
        }
      }
    );

    // 6. Capacitaciones & Flujogramas
    gsap.fromTo('.ui-capacitaciones a',
      { y: 30, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 0.6,
        stagger: 0.1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: '.ui-capacitaciones',
          start: "top 85%"
        }
      }
    );

    gsap.fromTo('.ui-flujogramas a',
      { y: 30, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 0.6,
        stagger: 0.1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: '.ui-flujogramas',
          start: "top 85%"
        }
      }
    );

    // 7. Conferencias Filter & Dynamic Load More
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.conf-card');
    const loadMoreBtn = document.getElementById('btn-load-more');
    let currentFilter = 'all';
    let visibleLimit = 6;

    function updateCardVisibility(isFilterChange = false) {
      let visibleCount = 0;
      let hasMore = false;
      const cardsToAnimate = [];

      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        const matchesFilter = (currentFilter === 'all' || category === currentFilter);

        if (matchesFilter) {
          if (visibleCount < visibleLimit) {
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

      // Animate newly shown cards
      if (cardsToAnimate.length > 0) {
        gsap.fromTo(cardsToAnimate,
          { opacity: 0, scale: 0.95, y: 30 },
          { opacity: 1, scale: 1, y: 0, duration: 0.5, stagger: 0.08, ease: "back.out(1.1)", clearProps: "transform" }
        );
      }

      // Show or hide load more button
      if (loadMoreBtn) {
        if (hasMore) {
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
        // Toggle active styling
        filterButtons.forEach(b => {
          b.classList.remove('active', 'text-text-primary', 'border-brand-primary');
          b.classList.add('text-text-muted');
        });
        btn.classList.add('active', 'text-text-primary', 'border-brand-primary');
        btn.classList.remove('text-text-muted');

        currentFilter = btn.getAttribute('data-filter');
        visibleLimit = 6; // Reset showing count to 6

        // Smooth container transit animation
        gsap.to('#conferencias-container', {
          opacity: 0.1,
          y: 10,
          duration: 0.25,
          onComplete: () => {
            updateCardVisibility(true);
            gsap.to('#conferencias-container', { opacity: 1, y: 0, duration: 0.35, ease: "power2.out" });
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

    // 8. Marquee Infinite Animation
    const track = document.getElementById('ui-collab-track');
    if(track) {
      gsap.to(track, {
        x: "-50%",
        ease: "none",
        duration: 35,
        repeat: -1
      });
    }

});

document.addEventListener("DOMContentLoaded", () => {
  // Ensure GSAP is registered
  if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  // 1. Hero Animation
  if (document.querySelectorAll('.gsap-hero').length > 0 && typeof gsap !== 'undefined') {
    gsap.fromTo(".gsap-hero", 
      { opacity: 0, y: 30 }, 
      { 
        opacity: 1, 
        y: 0, 
        duration: 1, 
        stagger: 0.15, 
        ease: "power3.out",
        delay: 0.2
      }
    );
  }

  // 2. Sidebar and Content Fade In
  if (document.querySelector('#documentos-sgi') && typeof gsap !== 'undefined') {
    gsap.fromTo([".gsap-sidebar", ".gsap-content"], 
      { opacity: 0, y: 20 }, 
      { 
        scrollTrigger: {
          trigger: "#documentos-sgi",
          start: "top 80%",
        },
        opacity: 1, 
        y: 0, 
        duration: 0.8, 
        stagger: 0.2, 
        ease: "power2.out" 
      }
    );
  }

  // 3. Tab Logic
  const tabBtns = document.querySelectorAll('.sgi-tab-btn');
  const tabContents = document.querySelectorAll('.sgi-tab-content');
  const indicator = document.getElementById('tab-indicator');
  const tabsContainer = document.getElementById('sgi-tabs-container');

  function updateIndicator(activeBtn) {
    if (!indicator || !tabsContainer || window.innerWidth < 768) {
      if (indicator) indicator.style.display = 'none';
      return;
    }
    indicator.style.display = 'block';
    
    const containerRect = tabsContainer.getBoundingClientRect();
    const btnRect = activeBtn.getBoundingClientRect();
    
    // Calculate relative position
    const topPos = btnRect.top - containerRect.top;
    
    if (typeof gsap !== 'undefined') {
      gsap.to(indicator, {
        y: topPos,
        height: btnRect.height,
        duration: 0.4,
        ease: "power3.out"
      });
    } else {
      indicator.style.transform = `translateY(${topPos}px)`;
      indicator.style.height = `${btnRect.height}px`;
    }
  }

  // Activa una pestaña por su selector de ID (ej. '#tab-manuales')
  function activateTab(targetId, shouldScroll = false) {
    const targetBtn = Array.from(tabBtns).find(btn => btn.getAttribute('data-target') === targetId);
    const targetContent = document.querySelector(targetId);

    if (!targetBtn || !targetContent) return;

    // Desactivar todos los botones y contenidos
    tabBtns.forEach(b => {
      b.classList.remove('active', 'text-white', 'bg-white/5', 'border-white/10');
      b.classList.add('text-white/60', 'border-transparent');
      
      const icon = b.querySelector('.fa-chevron-right');
      if (icon) {
        icon.classList.remove('opacity-100');
        icon.classList.add('opacity-0');
      }
    });

    tabContents.forEach(content => {
      if (typeof gsap !== 'undefined') {
        gsap.killTweensOf(content);
      }
      content.classList.add('hidden');
      content.style.opacity = 0;
    });

    // Activar botón seleccionado
    targetBtn.classList.remove('text-white/60', 'border-transparent');
    targetBtn.classList.add('active', 'text-white', 'bg-white/5', 'border-white/10');
    
    const activeIcon = targetBtn.querySelector('.fa-chevron-right');
    if (activeIcon) {
      activeIcon.classList.remove('opacity-0');
      activeIcon.classList.add('opacity-100');
    }

    // Activar contenido seleccionado con animación
    targetContent.classList.remove('hidden');
    
    if (typeof gsap !== 'undefined') {
      gsap.fromTo(targetContent,
        { opacity: 0, y: 15 },
        { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
      );
    } else {
      targetContent.style.opacity = 1;
    }

    // Actualizar indicador visual
    updateIndicator(targetBtn);

    // Scroll si es necesario
    if (shouldScroll) {
      const targetElement = document.getElementById('documentos-sgi');
      if (targetElement) {
        if (window.lenis) {
          window.lenis.scrollTo(targetElement, { offset: -80, duration: 1.2 });
        } else {
          targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    }
  }

  // Inicializar estado con hash URL o pestaña activa por defecto
  function handleUrlHash(shouldScroll = false) {
    const hash = window.location.hash;
    // Las opciones son: #tab-capacitaciones, #tab-manuales, #tab-flujogramas, #tab-reglamento
    if (hash && document.querySelector(hash) && document.querySelector(hash).classList.contains('sgi-tab-content')) {
      activateTab(hash, shouldScroll);
    } else {
      // Por defecto activar la activa por clase
      const defaultActiveBtn = document.querySelector('.sgi-tab-btn.active');
      if (defaultActiveBtn) {
        const targetId = defaultActiveBtn.getAttribute('data-target');
        activateTab(targetId, false);
      }
    }
  }

  // Bind clics a los botones
  tabBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('data-target');
      // Actualizar hash silenciosamente o disparar activateTab
      activateTab(targetId, false);
      // Actualizar el hash en la URL para consistencia de navegación del usuario
      history.pushState(null, null, targetId);
    });
  });

  // Escuchar hashchange por si viene desde el mega menu (ej. sgi.php#tab-manuales)
  window.addEventListener('hashchange', () => {
    handleUrlHash(true);
  });

  // Ejecución inicial con retraso pequeño para asegurar renderizado correcto del layout
  setTimeout(() => {
    handleUrlHash(false);
  }, 100);

  window.addEventListener('resize', () => {
    const btn = document.querySelector('.sgi-tab-btn.active');
    if (btn) updateIndicator(btn);
  });
});

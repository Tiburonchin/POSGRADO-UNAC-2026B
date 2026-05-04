<section class="hero hero--fullscreen relative isolate overflow-hidden" id="inicio">
  <figure class="hero-media hero-media--bg absolute inset-0 z-0">
    <picture>
      <source srcset="img/hero/fachada.webp" type="image/webp" />
      <img
        src="img/epg-unac-fachada.png"
        alt="Fachada de la Escuela de Posgrado UNAC"
        class="hero-bg-image h-full w-full object-cover object-center"
        fetchpriority="high"
        decoding="async"
        width="1920"
        height="1080"
      />
    </picture>
  </figure>

  <div class="hero-overlay pointer-events-none absolute inset-0 z-10"></div>
  <div class="hero-atmosphere pointer-events-none absolute inset-0 z-[11]"></div>

  <div class="site-container relative z-20 flex min-h-[inherit] items-center pt-10 pb-20 md:pt-10 md:pb-10 lg:pt-4 lg:pb-12">
    <div class="hero-content max-w-[920px]" id="hero-home">
      <div class="hero-kicker-wrapper mb-10 md:mb-8">
        <div class="hero-kicker inline-flex items-center gap-3 rounded-full border border-border-base bg-bg-soft/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-unac-yellow backdrop-blur-md transition-colors hover:border-border-bright hover:bg-bg-soft sm:text-[12px]">
          <span class="relative flex h-2 w-2">
            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-unac-yellow opacity-75"></span>
            <span class="relative inline-flex h-2 w-2 rounded-full bg-unac-yellow shadow-[0_0_8px_rgba(251,202,56,0.8)]"></span>
          </span>
          <span>Bienvenido</span>
        </div>
      </div>

      <h1 class="hero-title mb-10 text-balance text-white md:mb-8">
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>ESCUELA DE</span>
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>POSGRADO</span>
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>UNAC</span>
      </h1>

      <p class="hero-description mb-10 max-w-[65ch] font-semibold text-[rgba(238,242,255,0.85)] md:mb-7">
        Formacion avanzada para liderar innovacion en el sector publico y privado con impacto nacional.
      </p>

      <div class="hero-cta-group flex flex-col gap-3 sm:flex-row sm:gap-4">
        <a href="#admision-proceso" class="hero-btn-primary w-full sm:w-auto">Iniciar postulacion</a>
        <a href="#admision-proceso" class="hero-btn-secondary w-full sm:w-auto">Explorar admision</a>
      </div>

      <div class="hero-slogan mt-8 flex items-center gap-2 bg-transparent md:mt-5">
        <i class="ph-fill ph-target text-[color:var(--unac-yellow)] text-xs sm:text-sm opacity-90"></i>
        <span class="hero-slogan-text text-xs font-medium tracking-wide text-gray-400">Peru es la clave, y Posgrado UNAC es la llave</span>
      </div>
    </div>

    <!-- Indicador de Scroll -->
    <div class="hero-scroll absolute bottom-8 left-1/2 flex -translate-x-1/2 flex-col items-center gap-2 lg:bottom-10">
      <span class="text-[8px] font-black uppercase tracking-[0.4em] text-[color:var(--text-muted)] transition-colors duration-300 hover:text-[color:var(--unac-yellow)] sm:text-[9px]">Scroll</span>
      <div class="relative h-10 w-[2px] overflow-hidden rounded-full bg-[color:var(--border-base)] sm:h-14">
        <div class="hero-scroll-line absolute left-0 top-0 h-1/2 w-full bg-gradient-to-b from-[color:var(--unac-yellow)] to-[color:var(--unac-yellow-dark)]"></div>
      </div>
    </div>
  </div>
</section>

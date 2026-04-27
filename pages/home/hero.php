<section class="hero hero--fullscreen relative isolate overflow-hidden" id="inicio">
  <figure class="hero-media hero-media--bg absolute inset-0 z-0">
    <img
      src="img/epg-unac-fachada.png"
      alt="Fachada de la Escuela de Posgrado UNAC"
      class="hero-bg-image h-full w-full object-cover object-center"
      fetchpriority="high"
      decoding="async"
      width="1920"
      height="1080"
    />
  </figure>

  <div class="hero-overlay pointer-events-none absolute inset-0 z-10"></div>
  <div class="hero-atmosphere pointer-events-none absolute inset-0 z-[11]"></div>

  <div class="site-container relative z-20 flex min-h-[inherit] items-center pt-4 pb-8 md:pt-10 md:pb-10 lg:pt-4 lg:pb-12">
    <div class="hero-content max-w-[920px]" id="hero-home">
      <div class="hero-kicker-wrapper mb-8">
        <p class="hero-kicker inline-flex items-center gap-3 rounded-full border border-[color:var(--border-base)] bg-[color:var(--bg-soft)]/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-[color:var(--unac-yellow)] backdrop-blur-md transition-colors hover:border-[color:var(--border-bright)] hover:bg-[color:var(--bg-soft)] sm:text-[12px]">
          <span class="relative flex h-2 w-2">
            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-[color:var(--unac-yellow)] opacity-75"></span>
            <span class="relative inline-flex h-2 w-2 rounded-full bg-[color:var(--unac-yellow)] shadow-[0_0_8px_var(--unac-yellow)]"></span>
          </span>
          <span>Bienvenido</span>
        </p>
      </div>

      <h1 class="hero-title mb-8 text-balance text-white">
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>ESCUELA DE</span>
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>POSGRADO</span>
        <span class="hero-title-line hero-title-line--image-reveal block" data-hero-title-line-reveal>UNAC</span>
      </h1>

      <p class="hero-description max-w-[58ch] text-sm font-semibold text-[rgba(238,242,255,0.9)] sm:text-base md:text-lg">
        Potenciamos lideres con vision global mediante programas de maestria,
        doctorado y especializacion orientados a la investigacion y la innovacion.
      </p>

      <div class="hero-cta-group mt-8 flex flex-wrap gap-3">
        <a href="#admision-proceso" class="hero-btn-primary">Iniciar postulacion</a>
        <a href="#admision-proceso" class="hero-btn-secondary">Explorar admision</a>
      </div>

      <div class="hero-slogan mt-6 flex items-center gap-2 bg-transparent">
        <i class="ph-fill ph-target text-[color:var(--unac-yellow)] text-sm opacity-90"></i>
        <span class="hero-slogan-text text-xs font-medium tracking-wide text-gray-400 sm:text-[13px]">Peru es la clave, y Posgrado UNAC es la llave</span>
      </div>
    </div>

    <!-- Indicador de Scroll -->
    <div class="hero-scroll absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 md:flex">
      <span class="text-[9px] font-black uppercase tracking-[0.4em] text-[color:var(--text-muted)] transition-colors duration-300 hover:text-[color:var(--unac-yellow)]">Scroll</span>
      <div class="relative h-14 w-[2px] overflow-hidden rounded-full bg-[color:var(--border-base)]">
        <div class="hero-scroll-line absolute left-0 top-0 h-1/2 w-full bg-gradient-to-b from-[color:var(--unac-yellow)] to-[color:var(--unac-yellow-dark)]"></div>
      </div>
    </div>
  </div>
</section>

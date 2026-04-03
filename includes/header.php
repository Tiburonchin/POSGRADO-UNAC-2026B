<header class="site-header sticky top-0 z-40" id="site-header">
  <div class="announcement-bar bg-gradient-to-r from-[#1cdc5e] to-[#a6ec7d] text-slate-900">
    <div class="site-container flex min-h-[2.05rem] items-center justify-center gap-2 px-3 text-center text-xs font-semibold sm:text-sm">
      <span aria-hidden="true">📢</span>
      <p>Inscripciones 2026 abiertas: vacantes limitadas para maestrias y doctorados.</p>
    </div>
  </div>

  <div class="header-shell border-b border-slate-800/90 bg-[#05080f]/95 text-slate-100 backdrop-blur-xl">
    <div class="site-container grid min-h-[5.4rem] grid-cols-[auto_auto_auto] items-center gap-3 lg:grid-cols-[auto_1fr_auto]">
      <a href="index.php" class="brand flex items-center" aria-label="Escuela de Posgrado UNAC">
        <img src="img/epg-logo.png" alt="Logo EPG UNAC" class="h-16 w-16 object-contain sm:h-20 sm:w-20" />
      </a>

      <button class="menu-toggle grid h-11 w-11 place-items-center gap-1 rounded-full border border-slate-700 bg-slate-900/70 text-slate-100 lg:hidden" id="menu-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="Abrir menu">
        <span class="block h-0.5 w-5 rounded-full bg-current"></span><span class="block h-0.5 w-5 rounded-full bg-current"></span><span class="block h-0.5 w-5 rounded-full bg-current"></span>
      </button>

      <nav class="primary-nav fixed inset-x-0 top-[7.45rem] z-30 border-b border-slate-700 bg-[#070b14]/98 px-4 py-4 text-slate-100 lg:static lg:block lg:border-0 lg:bg-transparent lg:p-0" id="primary-nav" aria-label="Navegacion principal">
        <ul class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-center">
          <li><a href="#inicio" class="inline-flex rounded-full px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800/75 hover:text-white">Inicio</a></li>
          <li><a href="#noticias" class="inline-flex rounded-full px-4 py-2 text-sm font-semibold text-slate-200 transition hover:bg-slate-800/75 hover:text-white">Noticias</a></li>
          <li class="has-submenu relative">
            <button class="submenu-toggle inline-flex items-center gap-2 rounded-full border border-slate-700/90 px-4 py-2 text-left text-sm font-semibold text-slate-100 transition hover:bg-slate-800/80 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400" aria-expanded="false">Explorar secciones <span aria-hidden="true">▾</span></button>
            <ul class="nav-submenu mega-panel mt-2 rounded-2xl border border-slate-700 bg-[#0b1220]/95 p-3 shadow-soft lg:absolute lg:left-1/2 lg:top-full lg:w-[min(1040px,calc(100vw-2rem))] lg:-translate-x-1/2">
              <li>
                <div class="grid gap-3 lg:grid-cols-4">
                  <section class="rounded-xl border border-slate-700/90 bg-slate-900/55 p-3">
                    <h3 class="mb-2 text-sm font-extrabold uppercase tracking-[0.12em] text-amber-300">La Escuela</h3>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Presentacion</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Autoridades</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Normativas</a>
                  </section>
                  <section class="rounded-xl border border-slate-700/90 bg-slate-900/55 p-3">
                    <h3 class="mb-2 text-sm font-extrabold uppercase tracking-[0.12em] text-amber-300">Admision</h3>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Proceso</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Cronograma</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Requisitos y Costos</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Formatos y Tutoriales</a>
                  </section>
                  <section class="rounded-xl border border-slate-700/90 bg-slate-900/55 p-3">
                    <h3 class="mb-2 text-sm font-extrabold uppercase tracking-[0.12em] text-amber-300">Programas</h3>
                    <a href="#programas" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Maestrias</a>
                    <a href="#programas" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Doctorados</a>
                    <a href="#programas" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Especialidades</a>
                  </section>
                  <section class="rounded-xl border border-slate-700/90 bg-slate-900/55 p-3">
                    <h3 class="mb-2 text-sm font-extrabold uppercase tracking-[0.12em] text-amber-300">SGI</h3>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Inicio</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Sistema</a>
                    <a href="#faq" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">FAQ</a>
                    <a href="#" class="block rounded-lg px-2 py-1.5 text-sm text-slate-300 hover:bg-slate-800 hover:text-white">Videos Tutoriales</a>
                  </section>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="ml-auto hidden items-center gap-3 lg:flex">
        <a href="#admision" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-amber-400 to-amber-300 px-5 py-2 text-sm font-extrabold text-slate-950 shadow-[0_10px_24px_rgba(245,158,11,0.3)] transition hover:-translate-y-0.5">Inscripcion rapida</a>
        <div class="h-8 w-px bg-slate-700" aria-hidden="true"></div>
        <button class="theme-toggle inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-900/65 px-2 py-2" id="theme-toggle" aria-label="Cambiar tema">
          <span class="theme-toggle-text hidden text-sm font-semibold text-slate-200 sm:inline">Tema</span>
          <span class="inline-flex h-[22px] w-[42px] items-center rounded-full bg-slate-800 p-[2px]"><span class="theme-dot h-[18px] w-[18px] rounded-full bg-gradient-to-r from-[color:var(--accent)] to-[color:var(--accent-2)]"></span></span>
        </button>
      </div>

      <div class="ml-auto flex items-center gap-2 lg:hidden">
        <a href="#admision" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-amber-400 to-amber-300 px-4 py-2 text-xs font-extrabold text-slate-950">Inscribete</a>
        <button class="theme-toggle inline-flex items-center gap-2 rounded-full border border-slate-700 bg-slate-900/65 px-2 py-2" id="theme-toggle-mobile" aria-label="Cambiar tema">
          <span class="inline-flex h-[22px] w-[42px] items-center rounded-full bg-slate-800 p-[2px]"><span class="theme-dot h-[18px] w-[18px] rounded-full bg-gradient-to-r from-[color:var(--accent)] to-[color:var(--accent-2)]"></span></span>
        </button>
      </div>
    </div>
  </div>
</header>

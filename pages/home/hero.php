<section id="hero-section" class="relative h-screen w-full flex items-center justify-center overflow-hidden">
    <!-- Image Background -->
    <div class="hero-image-container absolute inset-0 z-0">
        <img src="<?= $baseUrl ?>img/hero/fachada.webp" alt="EPG UNAC Fachada" class="w-full h-full object-cover scale-105" id="hero-bg-img" style="object-position: center 30%;">
        <!-- Modern gradients and overlays -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[var(--surface-base)]/60 to-[var(--surface-base)]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[var(--surface-base)]/80 via-transparent to-[var(--surface-base)]/80"></div>
        <div class="absolute inset-0 bg-[var(--brand-primary-dark)]/20 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+')] opacity-20 pointer-events-none"></div>
    </div>

    <div id="hero-content" class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-10 sm:mt-12">
        <div class="flex w-full min-w-0 flex-col items-center">
            
            <!-- Enhanced Typography for Title -->
            <h1 class="mb-8 flex max-w-full flex-col items-center justify-center gap-1 md:gap-2 select-none">
                <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl tracking-[0.2em] sm:tracking-[0.4em] font-medium text-white/70" style="font-family: var(--font-base);">
                    ESCUELA DE
                </span>
                <span class="block text-5xl sm:text-6xl md:text-8xl lg:text-[9rem] font-black tracking-tighter leading-[0.85] bg-clip-text text-transparent bg-gradient-to-b from-white via-white/90 to-white/60 drop-shadow-2xl" style="font-family: var(--font-display);">
                    POSGRADO
                </span>
                <span class="block text-3xl sm:text-4xl md:text-6xl lg:text-[4.5rem] font-extrabold tracking-[0.18em] sm:tracking-widest text-[var(--brand-accent)] mt-2" style="font-family: var(--font-display); text-shadow: 0 0 40px rgba(251,202,56,0.4);">
                    UNAC
                </span>
            </h1>
            
            <!-- Text Scrambling Element -->
            <p id="hero-tagline" class="w-full max-w-[min(42rem,calc(100vw-2rem))] sm:max-w-2xl mx-auto px-2 sm:px-0 text-lg md:text-xl text-[var(--text-secondary)] font-light mb-12 leading-relaxed h-[7rem] sm:h-[5rem] flex items-center justify-center text-pretty break-words overflow-hidden" style="text-wrap: balance;" data-text="Formación avanzada con excelencia científica e innovación técnica desde el Callao para el mundo.">
                <!-- Text will be injected via JS -->
            </p>

            <!-- Modern CTA Button -->
            <div id="hero-action" class="flex flex-wrap justify-center gap-4">
                <a href="<?= $baseUrl ?>programas/programas.php" class="px-8 py-4 bg-white/10 backdrop-blur-lg border border-white/20 rounded-full text-white font-semibold text-sm tracking-wider uppercase hover:bg-white hover:text-black transition-all duration-500 flex items-center gap-3 group">
                    Explorar Programas 
                    <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php" class="px-8 py-4 bg-[var(--brand-accent)] rounded-full text-[var(--surface-base)] font-bold text-sm tracking-wider uppercase hover:scale-105 active:scale-95 transition-all duration-500 shadow-[0_0_30px_rgba(251,202,56,0.3)] flex items-center gap-3 group">
                    Ver Cronograma
                    <i data-lucide="calendar" class="w-4 h-4 group-hover:rotate-12 transition-transform"></i>
                </a>
            </div>
            
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-60 z-20" id="scroll-indicator">
        <span class="text-[10px] uppercase tracking-[0.3em] font-semibold text-white">Descubre más</span>
        <div class="w-[1px] h-12 bg-gradient-to-b from-white/50 to-transparent"></div>
    </div>
</section>



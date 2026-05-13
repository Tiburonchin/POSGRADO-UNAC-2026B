<section id="hero-section" class="relative h-screen w-full flex items-center justify-center overflow-hidden">
    <!-- Image Background -->
    <div class="hero-image-container absolute inset-0 z-0">
        <img src="<?= $baseUrl ?>img/epg-unac-fachada.png" alt="EPG UNAC Fachada" class="w-full h-full object-cover scale-105" id="hero-bg-img" style="object-position: center 30%;">
        <!-- Modern gradients and overlays -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[var(--surface-base)]/60 to-[var(--surface-base)]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[var(--surface-base)]/80 via-transparent to-[var(--surface-base)]/80"></div>
        <div class="absolute inset-0 bg-[var(--brand-primary-dark)]/20 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+')] opacity-20 pointer-events-none"></div>
    </div>

    <div id="hero-content" class="relative z-10 container mx-auto px-6 text-center mt-12">
        <div class="flex flex-col items-center">
            
            <!-- Enhanced Typography for Title -->
            <h1 class="mb-8 flex flex-col items-center justify-center gap-1 md:gap-2 select-none">
                <span class="block text-xl md:text-2xl lg:text-3xl tracking-[0.4em] font-medium text-white/70" style="font-family: var(--font-base);">
                    ESCUELA DE
                </span>
                <span class="block text-6xl md:text-8xl lg:text-[9rem] font-black tracking-tighter leading-[0.85] bg-clip-text text-transparent bg-gradient-to-b from-white via-white/90 to-white/60 drop-shadow-2xl" style="font-family: var(--font-display);">
                    POSGRADO
                </span>
                <span class="block text-4xl md:text-6xl lg:text-[4.5rem] font-extrabold tracking-widest text-[var(--brand-accent)] mt-2" style="font-family: var(--font-display); text-shadow: 0 0 40px rgba(251,202,56,0.4);">
                    UNAC
                </span>
            </h1>
            
            <!-- Text Scrambling Element -->
            <p id="hero-tagline" class="max-w-2xl text-lg md:text-xl text-[var(--text-secondary)] font-light mb-12 text-balance leading-relaxed h-[3rem] flex items-center justify-center" data-text="Formación avanzada con excelencia científica e innovación técnica desde el Callao para el mundo.">
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

<section id="reveal-section" class="reveal-panel py-10 md:py-14 relative z-20 border-b border-white/5 bg-gradient-to-b from-[var(--surface-base)]/80 to-[var(--surface-base)] backdrop-blur-xl">
    <!-- Subtle glow line at the top -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-[1px] bg-gradient-to-r from-transparent via-[var(--brand-accent)]/20 to-transparent"></div>
    
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16">
            <!-- Etiqueta lateral -->
            <div class="w-full md:w-auto md:border-r border-white/10 md:pr-10 text-center md:text-right shrink-0">
                <div class="flex items-center justify-center md:justify-end gap-3 opacity-70 hover:opacity-100 transition-opacity">
                    <span class="w-1.5 h-1.5 rounded-full bg-[var(--brand-accent)] animate-pulse"></span>
                    <span class="text-[11px] uppercase tracking-[0.35em] text-white/60 font-bold">
                        Red Institucional
                    </span>
                </div>
            </div>

            <!-- Slider Infinito con Blur -->
            <div class="flex-1 overflow-hidden relative py-4 w-full">
                <div id="logo-slider" class="logo-track flex items-center opacity-60 hover:opacity-100 transition-opacity duration-700">
                    <!-- Logos Simbolizados -->
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">SUNEDU</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">SINEACE</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">CONCYTEC</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">ISO 9001</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">RED IDI</div>
                    
                    <!-- Duplicados para el Loop -->
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">SUNEDU</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">SINEACE</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">CONCYTEC</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">ISO 9001</div>
                    <div class="flex items-center justify-center min-w-[200px] text-xl md:text-2xl tracking-[0.2em] font-black text-white/30 hover:text-white/80 transition-colors uppercase">RED IDI</div>
                </div>

                <!-- Difuminados laterales adaptados al fondo -->
                <div class="absolute inset-y-0 left-0 w-16 md:w-24 bg-gradient-to-r from-[var(--surface-base)] to-transparent z-10 pointer-events-none"></div>
                <div class="absolute inset-y-0 right-0 w-16 md:w-24 bg-gradient-to-l from-[var(--surface-base)] to-transparent z-10 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>

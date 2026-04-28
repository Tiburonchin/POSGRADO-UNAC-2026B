    <!-- ========================================== -->
    <!-- SECCIÓN: PROGRAMAS DESTACADOS -->
    <!-- ========================================== -->
    <section class="relative pt-32 pb-32 z-10" id="programas-destacados">
        
        <!-- Local Atmosphere Glows -->
        <div class="absolute left-[-10%] top-1/4 w-[500px] h-[500px] bg-brand-primary blur-[120px] rounded-full pointer-events-none z-0 opacity-10"></div>
        <div class="absolute right-[10%] bottom-0 w-[400px] h-[400px] bg-brand-accent blur-[120px] rounded-full pointer-events-none z-0 opacity-5"></div>

        <div class="site-container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
                
                <!-- CONTENT: TEXT & CTA (Sticky) -->
                <div class="lg:col-span-5 lg:sticky lg:top-32 left-content-anim opacity-0">
                    <p class="hero-kicker inline-flex items-center gap-3 rounded-full border border-[color:var(--border-base)] bg-[color:var(--bg-soft)]/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-[color:var(--unac-yellow)] backdrop-blur-md transition-colors hover:border-[color:var(--border-bright)] hover:bg-[color:var(--bg-soft)] mb-8 sm:text-[12px]">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-[color:var(--unac-yellow)] opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-[color:var(--unac-yellow)] shadow-[0_0_8px_var(--unac-yellow)]"></span>
                        </span>
                        <span>Programas Destacados</span>
                    </p>

                    <h2 class="text-5xl lg:text-6xl font-bold text-text-base tracking-tight mb-6 leading-[1.1]">
                        Elige el programa que <span class="text-grad-mixed">transformará</span> tu futuro
                    </h2>
                    
                    <p class="text-text-muted text-lg mb-10 leading-relaxed max-w-lg">
                        Explora una selección exclusiva de nuestras Maestrías, Doctorados y Especialidades. Programas diseñados con rigor académico para potenciar tu liderazgo y visión estratégica.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-8 py-3.5 rounded-xl bg-brand-primary text-white font-semibold glow-primary hover:bg-brand-primary-light transition-all duration-300 ease-in-out flex items-center justify-center gap-2 group">
                            Ver catálogo completo
                            <i class="ph ph-arrow-right font-bold group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="px-8 py-3.5 rounded-xl bg-transparent border border-border-bright text-text-base font-medium hover:bg-surface-elevated hover:border-brand-primary transition-all duration-300 ease-in-out flex items-center justify-center gap-2">
                            <i class="ph ph-magnifying-glass"></i>
                            Buscar programa
                        </button>
                    </div>

                    <!-- Metrics -->
                    <div class="grid grid-cols-3 gap-6 mt-16 pt-8 border-t border-border-base">
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">20+</div>
                            <div class="text-xs text-text-muted uppercase tracking-wider">Maestrías</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">10+</div>
                            <div class="text-xs text-text-muted uppercase tracking-wider">Doctorados</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">15+</div>
                            <div class="text-xs text-text-muted uppercase tracking-wider">Especialidades</div>
                        </div>
                    </div>
                </div>

                <!-- CONTENT: DYNAMIC GRID -->
                <div class="lg:col-span-7 relative">
                    <div id="dynamic-cards-container" class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-start">
                        <!-- Content injected via JavaScript -->
                    </div>
                </div>

            </div>
        </div>
    </section>

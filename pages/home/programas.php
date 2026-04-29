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
                    
                    <!-- Badge (Pattern: Armonía total) -->
                    <div class="hero-kicker-wrapper mb-8">
                        <div class="hero-kicker inline-flex items-center gap-3 rounded-full border border-border-base bg-bg-soft/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-unac-yellow backdrop-blur-md transition-colors hover:border-border-bright hover:bg-bg-soft sm:text-[12px]">
                            <span class="relative flex h-2 w-2">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-unac-yellow opacity-75"></span>
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-unac-yellow shadow-[0_0_8px_rgba(251,202,56,0.8)]"></span>
                            </span>
                            <span>Excelencia Académica</span>
                        </div>
                    </div>

                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-text-base tracking-tight mb-6 leading-[1.1]">
                        Impulsa tu <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow via-unac-yellow-dark to-unac-yellow">trayectoria</span> con programas de élite
                    </h2>
                    
                    <p class="text-text-muted text-lg mb-10 leading-relaxed max-w-lg">
                        Desarrolla las competencias críticas para el mercado global. Nuestra oferta de Maestrías, Doctorados y Segundas Especialidades combina rigor científico con aplicación estratégica.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-8 py-4 rounded-xl bg-unac-yellow text-slate-950 font-bold uppercase tracking-wider text-xs shadow-lg hover:-translate-y-0.5 hover:shadow-unac-yellow/20 transition-all duration-300 flex items-center justify-center gap-2 group">
                            Ver catálogo completo
                            <i class="ph ph-arrow-right font-bold group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="px-8 py-4 rounded-xl bg-transparent border border-border-base text-text-base text-xs font-bold uppercase tracking-wider hover:bg-bg-soft hover:border-border-bright transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="ph ph-magnifying-glass"></i>
                            Buscar programa
                        </button>
                    </div>

                    <!-- Metrics -->
                    <div class="grid grid-cols-3 gap-6 mt-16 pt-8 border-t border-border-base">
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">20+</div>
                            <div class="text-[10px] text-unac-yellow font-bold uppercase tracking-widest">Maestrías</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">10+</div>
                            <div class="text-[10px] text-unac-yellow font-bold uppercase tracking-widest">Doctorados</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-text-base mb-1">15+</div>
                            <div class="text-[10px] text-unac-yellow font-bold uppercase tracking-widest">Especialidades</div>
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

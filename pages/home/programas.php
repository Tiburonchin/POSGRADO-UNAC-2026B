<!-- ========================================== -->
    <!-- SECCIÓN: PROGRAMAS DESTACADOS (SPLIT SCREEN) -->
    <!-- ========================================== -->
    <section class="relative pt-32 pb-32 bg-bg-base z-10" id="programas-destacados">
        
        <!-- Glows de fondo (Usando nuevas variables de opacidad) -->
        <div class="absolute left-[-10%] top-1/4 w-[500px] h-[500px] bg-brand-primary blur-[120px] rounded-unac-full pointer-events-none z-0 op-10"></div>
        <div class="absolute right-[10%] bottom-0 w-[400px] h-[400px] bg-brand-accent blur-[120px] rounded-unac-full pointer-events-none z-0 op-5"></div>

        <div class="site-container relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
                
                <!-- LADO IZQUIERDO: TEXTOS (Sticky) -->
                <div class="lg:col-span-5 lg:sticky lg:top-32 left-content-anim opacity-0">
                    
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-unac-full border border-border-bright bg-bg-surface shadow-unac-sm mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-unac-full bg-unac-yellow opacity-75"></span>
                            <span class="relative inline-flex rounded-unac-full h-2 w-2 bg-unac-yellow"></span>
                        </span>
                        <span class="text-xs font-bold text-text-base tracking-wide uppercase">Programas Destacados</span>
                    </div>

                    <h2 class="text-5xl lg:text-6xl font-bold text-text-base tracking-tight mb-6 leading-[1.1]">
                        Elige el programa que <span class="text-grad-mixed">transformará</span> tu futuro
                    </h2>
                    
                    <p class="text-text-muted text-lg mb-10 leading-relaxed max-w-lg">
                        Explora una selección exclusiva de nuestras Maestrías, Doctorados y Especialidades. Programas diseñados con rigor académico para potenciar tu liderazgo y visión estratégica.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-8 py-3.5 rounded-unac-full bg-brand-primary text-white font-semibold glow-primary hover:bg-brand-primary-light transition-all duration-unac-base ease-unac-ease flex items-center justify-center gap-2 group">
                            Ver catálogo completo
                            <i class="ph ph-arrow-right font-bold group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="px-8 py-3.5 rounded-unac-full bg-transparent border border-border-bright text-text-base font-medium hover:bg-surface-elevated hover:border-brand-primary transition-all duration-unac-base ease-unac-ease flex items-center justify-center gap-2">
                            <i class="ph ph-magnifying-glass"></i>
                            Buscar programa
                        </button>
                    </div>

                    <!-- Métricas rápidas opcionales -->
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

                <!-- LADO DERECHO: GRID DE CARDS ASIMÉTRICO (Dinámico) -->
                <div class="lg:col-span-7 relative">
                    <!-- Contenedor que recibirá las cards inyectadas por JS -->
                    <div id="dynamic-cards-container" class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-start">
                        <!-- El contenido se inyecta vía JavaScript -->
                    </div>
                </div>

            </div>
        </div>
    </section>

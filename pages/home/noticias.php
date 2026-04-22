<section class="antialiased py-20 relative overflow-hidden" id="noticias">
    <div class="w-full max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Cabecera estilo Tailwind UI -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight mb-4">
                Noticias y Eventos UNAC
            </h2>
            <p class="text-muted text-lg max-w-2xl mx-auto">
                Mantente informado sobre los últimos logros, investigaciones y oportunidades para nuestra comunidad de posgrado.
            </p>
        </div>

        <!-- Contenedor del Carrusel -->
        <div class="relative w-full overflow-hidden py-4">
            
            <!-- mx-auto y w-max son cruciales para que el carrusel se mantenga en el centro -->
            <div id="news-track" class="flex gap-6 w-max mx-auto items-center justify-start relative">
                
                <!-- Tarjeta 1 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-03-16">Mar 16, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Optimización de procesos industriales con IA
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Dr. Carlos Mendoza" class="w-8 h-8 rounded-full border border-gray-600 bg-gray-800">
                            <span class="text-sm font-medium text-gray-200">Dr. C. Mendoza</span>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 2 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-03-10">Mar 10, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Nuevas metodologías en la enseñanza virtual
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Mg. Laura Silva" class="w-8 h-8 rounded-full border border-gray-600 bg-gray-800">
                            <span class="text-sm font-medium text-gray-200">Mg. L. Silva</span>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 3 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-02-28">Feb 28, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Impacto del análisis de datos en gestión pública
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Ing. Roberto Gomez" class="w-8 h-8 rounded-full border border-gray-600 bg-gray-800">
                            <span class="text-sm font-medium text-gray-200">Ing. R. Gomez</span>
                        </div>
                    </div>
                </article>

                <!-- Tarjeta 4 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-02-15">Feb 15, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Apertura de inscripciones: Maestrías 2024-I
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <span class="w-8 h-8 rounded-full bg-accent text-bg flex items-center justify-center font-bold text-xs">UN</span>
                            <span class="text-sm font-medium text-gray-200">Posgrado UNAC</span>
                        </div>
                    </div>
                </article>
                
                <!-- Tarjeta 5 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-01-30">Ene 30, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Simposio Internacional de Sistemas Avanzados
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Dra. Ana Rojas" class="w-8 h-8 rounded-full border border-gray-600 bg-gray-800">
                            <span class="text-sm font-medium text-gray-200">Dra. A. Rojas</span>
                        </div>
                    </div>
                </article>
                
                <!-- Tarjeta 6 -->
                <article class="news-card relative w-[280px] h-[400px] rounded-2xl overflow-hidden shadow-soft cursor-pointer flex-shrink-0 card-zoom-effect group border border-white/5 ring-1 ring-white/10">
                    <div class="bg-layer absolute inset-0 bg-[url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=600')] bg-cover bg-center transition-transform duration-700 ease-out z-0"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#060a12] via-[#060a12]/80 to-transparent z-10"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-5 z-20 flex flex-col justify-end h-full">
                        <div class="flex items-center gap-2 mb-2 text-xs text-gray-300">
                            <time datetime="2024-01-15">Ene 15, 2024</time>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-tight mb-4 group-hover:text-accent transition-colors duration-300">
                            Convocatoria de Proyectos Investigación 2024
                        </h3>
                        <div class="flex items-center gap-3 pt-3 border-t border-white/10">
                            <span class="w-8 h-8 rounded-full bg-accent text-bg flex items-center justify-center font-bold text-xs">UN</span>
                            <span class="text-sm font-medium text-gray-200">Posgrado UNAC</span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
        
        <!-- Controles de Navegación -->
        <div class="flex items-center justify-center gap-4 mt-8">
            <button id="btn-prev" class="group px-6 py-2 rounded-full border border-gray-700 bg-gray-800/50 text-gray-300 hover:text-white hover:border-accent hover:bg-accent/10 transition-all duration-300 flex items-center gap-2">
                <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="font-medium text-sm">Anterior</span>
            </button>
            <button id="btn-next" class="group px-6 py-2 rounded-full border border-gray-700 bg-gray-800/50 text-gray-300 hover:text-white hover:border-accent hover:bg-accent/10 transition-all duration-300 flex items-center gap-2">
                <span class="font-medium text-sm">Siguiente</span>
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
        
    </div>

    <style>
        /* Estilos específicos para el componente de Noticias */
        #noticias {
            background-color: var(--bg);
            color: var(--text);
            font-family: var(--font-base);
        }

        .card-zoom-effect:hover .bg-layer {
            transform: scale(1.05);
        }

        /* Soporte para animaciones FLIP */
        .news-card {
            will-change: transform, opacity;
        }
    </style>

    <!-- Librerías de animación (GSAP + Flip Plugin) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>

    <!-- Lógica del componente -->
    <script src="assets/js/modules/noticias-animations.js"></script>
</section>

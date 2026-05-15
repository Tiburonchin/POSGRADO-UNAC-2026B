<?php
/**
 * Sección de Ubicación y Testimonios - Premium Design
 */
?>

<section id="location-reviews-section" class="relative py-24 md:py-32 overflow-hidden">
    
    <div class="site-container relative z-10">
        
        <!-- Cabecera Principal -->
        <div class="mb-16 md:mb-24">
            <div class="hero-kicker-wrapper mb-6 flex justify-start">
                <div class="hero-kicker inline-flex items-center gap-3 rounded-full border border-border-base bg-bg-soft/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-unac-yellow backdrop-blur-md transition-colors hover:border-border-bright hover:bg-bg-soft sm:text-[12px]">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-unac-yellow opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-unac-yellow shadow-[0_0_8px_rgba(251,202,56,0.8)]"></span>
                    </span>
                    <span>Ubicación y Comunidad</span>
                </div>
            </div>

            <h2 class="text-5xl md:text-6xl lg:text-7xl font-light text-text-base tracking-tight leading-[1.05] max-w-4xl">
                El epicentro de la <br>
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow via-unac-yellow-dark to-unac-yellow">
                    excelencia académica
                </span>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
            
            <!-- Columna de TESTIMONIOS (Lado Derecho en Desktop) -->
            <div class="lg:col-span-5 flex flex-col order-1 lg:order-2">
                
                <div class="mb-8 border-l-2 border-unac-yellow/20 pl-6">
                    <span class="text-unac-yellow text-[10px] font-black uppercase tracking-[0.2em] mb-2 block">Voces UNAC</span>
                    <h3 class="text-2xl md:text-3xl font-bold text-text-base tracking-tight">Experiencias reales en <span class="text-unac-yellow">Google Maps</span></h3>
                </div>

                <div class="testimonial-slot min-h-[580px] relative">
                    <?php 
                    // Simulamos una "conexión" de datos real estructurada
                    $testimonios = [
                        [
                            'nombre' => 'Carlos Ramírez',
                            'cargo' => 'Visitante / Comunidad',
                            'texto' => 'Su infraestructura ordenada, con buen mantenimiento, personal respetuoso. Se nota el cambio positivo en la gestión de la universidad.',
                            'img' => null, 
                            'tiempo' => 'Hace 1 semana',
                            'badge' => 'Local Guide',
                            'verificado' => true
                        ],
                        [
                            'nombre' => 'Dra. Martha Gutiérrez',
                            'cargo' => 'Egresada de Pregrado',
                            'texto' => 'Ha mejorado muchísimo la infraestructura, también han mejorado con los baños. Todas las facultades han sido pintadas de celeste, quedando bien presentables. De cuando era estudiante ya se ve una gran diferencia.',
                            'img' => null,
                            'tiempo' => 'Hace 2 semanas',
                            'badge' => 'Verified Reviewer',
                            'verificado' => true
                        ],
                        [
                            'nombre' => 'Mag. Roberto Vizcarra',
                            'cargo' => 'Egresado Maestría en Finanzas',
                            'texto' => 'Tuve muy buena experiencia en la Maestría en Finanzas que estudié allí. La recomiendo totalmente por el nivel de sus docentes y la exigencia académica.',
                            'img' => null,
                            'tiempo' => 'Hace 1 mes',
                            'badge' => 'Alumni UNAC',
                            'verificado' => true
                        ],
                        [
                            'nombre' => 'Kevin Espinoza',
                            'cargo' => 'Comunidad UNAC',
                            'texto' => 'Para mí es una gran universidad; ahora la pusieron a color vivo y se ve muy bonita. Su cafetín del estacionamiento tiene gran variedad de alimentos, sin duda mi lugar favorito es la FIEE.',
                            'img' => null,
                            'tiempo' => 'Hace 3 días',
                            'badge' => 'Local Guide',
                            'verificado' => true
                        ],
                        [
                            'nombre' => 'Ing. Luis Valdivia',
                            'cargo' => 'Egresado Posgrado',
                            'texto' => 'La atención es ahora más esmerada. La remodelación ha sido total y se siente un ambiente mucho más moderno y profesional para estudiar.',
                            'img' => null,
                            'tiempo' => 'Hace 5 días',
                            'badge' => 'Local Guide',
                            'verificado' => true
                        ],
                        [
                            'nombre' => 'Sofía Mendoza',
                            'cargo' => 'Estudiante de Doctorado',
                            'texto' => 'Destaco la calidad de los docentes y la nueva imagen de la universidad. El cambio en la infraestructura motiva a seguir investigando y creciendo profesionalmente.',
                            'img' => null,
                            'tiempo' => 'Hace 2 semanas',
                            'badge' => 'Verified Reviewer',
                            'verificado' => true
                        ]
                    ];

                    $chunks = array_chunk($testimonios, 2);

                    foreach($chunks as $groupIndex => $group): 
                    ?>
                    <div class="testimonial-group flex flex-col gap-5 <?php echo $groupIndex === 0 ? 'active' : ''; ?>" data-group="<?php echo $groupIndex; ?>">
                        <?php foreach($group as $t): ?>
                        <div class="review-card bg-bg-elevated/40 backdrop-blur-xl border border-white/5 p-6 md:p-7 rounded-3xl shadow-xl relative group transition-all duration-500 hover:bg-bg-elevated/80 hover:border-unac-yellow/20">
                            <div class="absolute top-4 right-6 text-white/5 font-serif text-6xl group-hover:text-unac-yellow/10 transition-colors duration-500">"</div>
                            
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex text-unac-yellow gap-0.5">
                                    <?php for($i=0; $i<5; $i++): ?>
                                    <i class="ph ph-star-fill text-[10px]"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-[9px] uppercase tracking-widest text-text-muted ml-1 font-bold"><?php echo $t['tiempo']; ?></span>
                                <div class="ml-auto">
                                    <span class="text-[8px] uppercase font-bold tracking-[0.1em] text-unac-yellow/60 border border-unac-yellow/20 px-2 py-0.5 rounded-full"><?php echo $t['badge']; ?></span>
                                </div>
                            </div>

                            <p class="text-text-muted text-sm md:text-[15px] leading-relaxed mb-6 italic font-medium">
                                "<?php echo $t['texto']; ?>"
                            </p>

                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <?php if($t['img']): ?>
                                        <img src="<?php echo $t['img']; ?>" alt="<?php echo $t['nombre']; ?>" class="w-10 h-10 md:w-11 md:h-11 rounded-full border-2 border-unac-yellow/10 shadow-lg object-cover group-hover:border-unac-yellow/30 transition-all">
                                    <?php else: 
                                        $initial = substr($t['nombre'], 0, 1);
                                        $colors = ['bg-blue-600', 'bg-red-600', 'bg-green-600', 'bg-purple-600', 'bg-orange-600'];
                                        $randomColor = $colors[array_rand($colors)];
                                    ?>
                                        <div class="w-10 h-10 md:w-11 md:h-11 rounded-full border-2 border-unac-yellow/10 shadow-lg flex items-center justify-center <?php echo $randomColor; ?> text-white font-bold text-lg group-hover:border-unac-yellow/30 transition-all">
                                            <?php echo $initial; ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if($t['verificado']): ?>
                                    <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-blue-500 rounded-full border-2 border-[#1a1a1a] flex items-center justify-center">
                                        <i class="ph ph-check text-[8px] text-white font-bold"></i>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <h4 class="text-text-base text-sm font-bold tracking-tight"><?php echo $t['nombre']; ?></h4>
                                    <p class="text-[10px] text-unac-yellow font-bold uppercase tracking-wider"><?php echo $t['cargo']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Botón de acción -->
                <div class="mt-8">
                    <a href="https://www.google.com/search?q=posgrado+unac+opiniones" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-4 text-xs font-black uppercase tracking-[0.2em] text-text-base hover:text-unac-yellow transition-all group">
                        <span class="border-b border-unac-yellow/20 pb-1 group-hover:border-unac-yellow transition-all">Ver todos los testimonios</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-unac-yellow group-hover:text-slate-900 group-hover:scale-110 transition-all duration-500">
                            <i class="ph ph-arrow-right text-lg"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Columna de MAPA (Lado Izquierdo en Desktop) -->
            <div class="lg:col-span-7 relative group order-2 lg:order-1">
                <div class="absolute -inset-4 bg-gradient-to-br from-unac-yellow/20 via-unac-blue/5 to-unac-yellow/10 rounded-[3rem] blur-3xl opacity-30 group-hover:opacity-60 transition duration-700 pointer-events-none"></div>
                
                <div id="map-interactive-container" class="relative bg-bg-elevated border border-white/10 rounded-[2.5rem] overflow-hidden shadow-2xl h-[450px] md:h-[550px] lg:h-[700px] transform-gpu transition-all duration-700 hover:border-white/20 cursor-pointer group/map">
                    
                    <!-- Placeholder del Mapa (Carga Instantánea) -->
                    <div id="map-placeholder" class="absolute inset-0 z-10 transition-all duration-1000 group-hover/map:scale-105">
                        <img src="img/map-placeholder.png" alt="Mapa UNAC" class="w-full h-full object-cover grayscale-[0.5] contrast-[1.1] brightness-[0.6]">
                        
                        <!-- Overlay de Interacción -->
                        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-[2px] flex flex-col items-center justify-center transition-all duration-500 group-hover/map:backdrop-blur-0 group-hover/map:bg-slate-900/20">
                            <div class="w-20 h-20 rounded-full bg-unac-yellow/90 flex items-center justify-center shadow-[0_0_30px_rgba(251,202,56,0.4)] mb-6 transform transition-all duration-500 group-hover/map:scale-110 group-hover/map:bg-unac-yellow">
                                <i class="ph ph-hand-pointing text-slate-900 text-3xl animate-bounce"></i>
                            </div>
                            <h4 class="text-white font-bold text-xl md:text-2xl tracking-tight mb-2">Explorar el Campus</h4>
                            <p class="text-white/70 text-sm font-medium">Click para activar mapa interactivo</p>
                        </div>
                    </div>

                    <!-- Loader (Oculto inicialmente) -->
                    <div id="map-loader" class="absolute inset-0 z-20 bg-slate-900 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 border-4 border-unac-yellow/20 border-t-unac-yellow rounded-full animate-spin mb-4"></div>
                            <p class="text-unac-yellow text-xs font-bold uppercase tracking-widest">Cargando Experiencia...</p>
                        </div>
                    </div>

                    <!-- Etiqueta Flotante Original (Z-index superior) -->
                    <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-30 bg-slate-900/60 backdrop-blur-xl border border-white/10 p-2 pr-6 rounded-full shadow-2xl flex items-center gap-4 group/label transition-all hover:pr-8 hover:bg-slate-900/80">
                        <div class="w-10 h-10 md:w-11 md:h-11 rounded-full bg-unac-yellow flex items-center justify-center shadow-lg shadow-unac-yellow/20">
                            <i class="ph ph-map-pin text-slate-900 text-xl font-bold"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-xs md:text-sm tracking-tight uppercase">Sede Posgrado UNAC</p>
                            <p class="text-white/60 text-[9px] md:text-[10px] uppercase tracking-widest font-medium">Callao, Perú</p>
                        </div>
                    </div>
 
                    <!-- Contenedor del Iframe (Carga bajo demanda) -->
                    <div id="map-iframe-wrapper" class="w-full h-full grayscale-[0.3] contrast-[1.2] brightness-[0.8] map-dark-filter opacity-0 transition-opacity duration-1000">
                        <!-- El iframe se inyectará vía JS -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

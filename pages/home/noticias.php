<section class="content-section pt-32 pb-32 overflow-hidden" id="noticias">
            
            <!-- Aura brillante de fondo -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] md:w-[70%] xl:w-[80%] h-[70%] bg-gradient-to-r from-unac-info/20 via-unac-accent/10 to-unac-accent2/20 blur-[140px] rounded-full pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                
                <!-- Header de la Sección (Limpio y Elegante) -->
                <div class="max-w-3xl mb-16 news-header">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 tracking-tight">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-accent via-unac-accent2 to-unac-accent">NOTICIAS Y EVENTOS</span>
                    </h2>
                    <p class="text-unac-muted text-lg md:text-xl leading-relaxed">
                        Explora los hitos académicos e investigaciones que definen el futuro de nuestra Escuela de Posgrado.
                    </p>
                </div>

                <!-- CONTENEDOR RELATIVO PARA EL CARRUSEL Y NAVEGACIÓN -->
                <div class="relative group/carousel">
                    
                    <!-- Navegación Lateral Derecha (Floating Dock) -->
                    <div class="absolute -right-4 md:-right-8 top-1/2 -translate-y-1/2 z-30 flex flex-col gap-1 p-1.5 bg-unac-elevated/80 backdrop-blur-2xl border border-unac-border rounded-[20px] shadow-deep opacity-0 group-hover/carousel:opacity-100 md:opacity-100 transition-opacity duration-300">
                        <button id="btn-prev" class="w-12 h-12 rounded-2xl text-unac-text hover:bg-unac-accent/20 hover:text-unac-accent transition-all flex items-center justify-center group/btn">
                            <i class="ph-bold ph-caret-left text-xl group-hover/btn:-translate-x-1 transition-transform"></i>
                        </button>
                        <div class="h-[1px] w-8 mx-auto bg-unac-border"></div>
                        <button id="btn-next" class="w-12 h-12 rounded-2xl text-unac-text hover:bg-unac-accent/20 hover:text-unac-accent transition-all flex items-center justify-center group/btn">
                            <i class="ph-bold ph-caret-right text-xl group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                    </div>

                    <!-- CONTENEDOR PRINCIPAL DEL BLOQUE -->
                    <div class="bg-unac-elevated border border-unac-border rounded-3xl shadow-deep main-block-container" id="carousel-track">
                    
                    <!-- Tarjeta 1 -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Investigación" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Impacto de la Inteligencia Artificial en la Investigación</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Nuevos modelos algorítmicos aplicados a la predicción de tendencias económicas globales.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Tecnología</span>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Conferencia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Seminario Internacional de Ciencias Empresariales 2026</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Ciclo de conferencias magistrales con ponentes invitados de las mejores universidades del mundo.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Eventos</span>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Campus" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Inauguración de la Nueva Biblioteca Virtual de Posgrado</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Más de 50,000 papers y libros especializados disponibles para toda nuestra comunidad académica.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Comunidad</span>
                        </div>
                    </div>

                    <!-- Tarjeta 4 (Oculta inicialmente) -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group is-hidden">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tesis" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Líneas de Investigación en Ingeniería Ambiental</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Nuevas oportunidades de financiamiento para proyectos enfocados en la sostenibilidad portuaria.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Convocatoria</span>
                        </div>
                    </div>

                    <!-- Tarjeta 5 (Oculta inicialmente) -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group is-hidden">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1542626991-cbc4e32524cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Foro" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Foro Nacional sobre Políticas de Salud Pública</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Análisis de retos y propuestas junto a expertos del Ministerio de Salud y nuestra facultad.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Eventos</span>
                        </div>
                    </div>

                    <!-- Tarjeta 6 (Oculta inicialmente) -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group is-hidden">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Convenio" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Convenios de Movilidad con Universidades Europeas</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Ampliamos redes globales para ofrecer pasantías en España, Francia y Alemania.</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Internacional</span>
                        </div>
                    </div>

                    <!-- Tarjeta 7 (Oculta inicialmente) -->
                    <div class="news-card flex flex-col p-6 md:p-8 hover:bg-unac-soft/40 cursor-pointer group is-hidden">
                        <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-unac-soft">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1220]/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <img src="https://images.unsplash.com/photo-1454165833767-027ffea9e778?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Taller" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-lg font-medium text-unac-text mb-2 leading-tight group-hover:text-unac-accent transition-colors">Taller de Redacción de Artículos Científicos</h3>
                            <p class="text-[13px] text-unac-muted mb-6 flex-1 leading-relaxed">Técnicas avanzadas para publicar en revistas indexadas de alto impacto (Scopus y WoS).</p>
                            <span class="text-[10px] font-bold text-unac-muted uppercase tracking-widest">Capacitación</span>
                        </div>
                    </div>

                    </div> <!-- Cierre de relative group/carousel -->
                </div>

                <!-- Elementos fuera del contenedor (Abajo) -->
                <div class="mt-12 flex justify-center">
                    <!-- Link Read All -->
                    <a href="#" class="group relative inline-flex items-center gap-2 text-unac-text/80 text-base font-semibold py-3 px-8 rounded-full border border-unac-border bg-unac-elevated/50 backdrop-blur-md hover:text-unac-accent hover:border-unac-accent/50 transition-all shadow-soft">
                        <span>Explorar todas las publicaciones</span>
                        <i class="ph-bold ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

            </div>
        </section>
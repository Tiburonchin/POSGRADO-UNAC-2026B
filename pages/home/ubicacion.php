<?php
/**
 * Seccion de Ubicacion y Testimonios - Premium Design
 */
?>

<section id="location-reviews-section" class="relative py-20 md:py-32 overflow-hidden">
    
    <div class="site-container relative z-10">
        
        <!-- Cabecera de la sección (Layout responsivo y armonioso) -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-8 md:gap-12 mb-12 md:mb-20">
            
            <!-- Lado Izquierdo: Badge y Título -->
            <div class="w-full lg:w-7/12">
                <div class="hero-kicker-wrapper mb-6 flex justify-start">
                    <div class="hero-kicker inline-flex items-center gap-3 rounded-full border border-border-base bg-bg-soft/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-unac-yellow backdrop-blur-md transition-colors hover:border-border-bright hover:bg-bg-soft sm:text-[12px]">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-unac-yellow opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-unac-yellow shadow-[0_0_8px_rgba(251,202,56,0.8)]"></span>
                        </span>
                        <span>Ubicación y Comunidad</span>
                    </div>
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-text-base tracking-tight leading-[1.1]">
                    El epicentro de la <br><span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow via-unac-yellow-dark to-unac-yellow">excelencia académica</span>
                </h2>
            </div>

            <!-- Lado Derecho: Descripción -->
            <div class="w-full lg:w-5/12">
                <p class="text-text-muted text-sm md:text-base lg:text-lg leading-relaxed border-l-2 border-unac-yellow/30 pl-6 md:pl-8">
                    Visita nuestra sede principal y descubre el entorno donde se forjan los líderes del país. Conoce las experiencias reales de nuestra comunidad global.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Columna de TESTIMONIOS (Texto/Contenido) -->
            <!-- Aparece primero en mobile (order-1) y a la derecha en desktop (lg:order-2) -->
            <div class="lg:col-span-5 flex flex-col gap-6 testimonials-wrapper relative order-1 lg:order-2">
                
                <!-- Tarjeta de Testimonio 1 -->
                <div class="review-card bg-[color:var(--bg-elevated)]/80 backdrop-blur-sm border border-white/5 p-6 md:p-8 rounded-2xl shadow-lg relative group transition-all duration-300 hover:bg-[color:var(--bg-elevated)]">
                    <div class="absolute top-4 right-4 text-white/5 font-serif text-6xl group-hover:text-[color:var(--accent)]/10 transition-colors duration-500">"</div>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-[color:var(--accent)]">
                            <?php for($i=0; $i<5; $i++): ?>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <span class="text-[10px] uppercase tracking-wider text-[color:var(--text-muted)] ml-2">Hace 2 semanas</span>
                    </div>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-8 italic">
                        "El nivel de exigencia y la calidad de los docentes en la maestría superaron mis expectativas. Los conocimientos adquiridos los aplico diariamente en mi gestión como líder de proyectos."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2&w=100&h=100&q=80" alt="Usuario" class="w-12 h-12 rounded-full border-2 border-[color:var(--accent)]/20 shadow-lg">
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-blue-500 rounded-full border-2 border-[color:var(--bg-elevated)] flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-bold tracking-tight">Ing. Carlos Ramírez</h4>
                            <p class="text-[11px] text-[color:var(--text-muted)] uppercase tracking-widest">Egresado Maestría</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Testimonio 2 -->
                <div class="review-card bg-[color:var(--bg-elevated)]/80 backdrop-blur-sm border border-white/5 p-6 md:p-8 rounded-2xl shadow-lg relative group transition-all duration-300 hover:bg-[color:var(--bg-elevated)]">
                    <div class="absolute top-4 right-4 text-white/5 font-serif text-6xl group-hover:text-[color:var(--accent)]/10 transition-colors duration-500">"</div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-[color:var(--accent)]">
                            <?php for($i=0; $i<5; $i++): ?>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <span class="text-[10px] uppercase tracking-wider text-[color:var(--text-muted)] ml-2">Hace 1 mes</span>
                    </div>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-8 italic">
                        "Excelente plana docente y malla curricular actualizada a las necesidades del mercado tecnológico y científico actual. Las instalaciones son de primer nivel."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2&w=100&h=100&q=80" alt="Usuario" class="w-12 h-12 rounded-full border-2 border-[color:var(--accent)]/20 shadow-lg">
                        </div>
                        <div>
                            <h4 class="text-white text-sm font-bold tracking-tight">Dra. María Fernandez</h4>
                            <p class="text-[11px] text-[color:var(--text-muted)] uppercase tracking-widest">Doctorado UNAC</p>
                        </div>
                    </div>
                </div>

                <!-- Botón "Ver más reseñas" -->
                <div class="mt-4 flex items-center justify-center lg:justify-start">
                    <a href="https://www.google.com/search?q=posgrado+unac+opiniones" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 text-sm font-bold text-white hover:text-unac-yellow transition-all group py-2">
                        <span>Leer más testimonios en Google</span>
                        <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-unac-yellow group-hover:text-slate-900 transition-all duration-300">
                            <i class="ph ph-arrow-right text-lg"></i>
                        </div>
                    </a>
                </div>
            </div> <!-- End col-testimonials -->

            <!-- Columna de MAPA (Media/Imagen) -->
            <!-- Aparece después en mobile (order-2) y a la izquierda en desktop (lg:order-1) -->
            <div class="lg:col-span-7 relative group map-wrapper order-2 lg:order-1">
                <!-- Efecto de resplandor optimizado -->
                <div class="absolute -inset-4 bg-gradient-to-r from-unac-yellow/10 to-unac-blue/10 rounded-[2rem] blur-2xl opacity-50 group-hover:opacity-100 transition duration-700 pointer-events-none"></div>
                
                <div class="map-card relative bg-[color:var(--bg-elevated)] border border-white/10 rounded-[2rem] overflow-hidden shadow-2xl h-[400px] md:h-[500px] lg:h-[600px] transform-gpu transition-transform duration-500 hover:scale-[1.01]">
                    <!-- Etiqueta Flotante Premium -->
                    <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-20 bg-slate-900/60 backdrop-blur-xl border border-white/10 p-2 pr-6 rounded-full shadow-2xl flex items-center gap-4 group/label transition-all hover:pr-8 hover:bg-slate-900/80">
                        <div class="w-10 h-10 md:w-11 md:h-11 rounded-full bg-unac-yellow flex items-center justify-center shadow-lg shadow-unac-yellow/20">
                            <i class="ph ph-map-pin text-slate-900 text-xl font-bold"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold text-xs md:text-sm tracking-tight">Sede Posgrado UNAC</p>
                            <p class="text-white/60 text-[9px] md:text-[10px] uppercase tracking-widest font-medium">Callao, Perú</p>
                        </div>
                    </div>
 
                    <!-- Iframe de Google Maps -->
                    <div class="dark-map w-full h-full grayscale-[0.2] contrast-[1.1] brightness-[0.9]">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.743110991196!2d-77.1198236240203!3d-12.061214042172703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cb910984762b%3A0x104327c627fa29ad!2sUniversidad%20Nacional%20del%20Callao!5e0!3m2!1ses!2spe!4v1777482384661!5m2!1ses!2spe" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div> <!-- End col-map -->

        </div> <!-- End grid -->
    </div> <!-- End site-container -->
</section>

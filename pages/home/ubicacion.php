<?php
/**
 * Seccion de Ubicacion y Testimonios - Premium Design
 */
?>

<section id="location-reviews-section" class="relative py-32 cinematic-glow overflow-hidden">
    
    <!-- Fondo decorativo -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAzNHYtNGgtMnY0aC00djJoNHY0aDJ2LTRoNHYtMmgtNHptMC0zMFYwaC0ydjRoLTR2Mmg0djRoMnYtNGg0VjRoLTR6bS0zMCAwVjBoLTJ2NGgtNHYyaDR2NGgydi00aDRWNGgtNHpNMzYgNjR2LTRoLTJ2NGgtNHYyaDR2NGgydi00aDR2LTJoLTR6bS0zMCAwdj00aC0ydjRoLTR2Mmg0djRoMnYtNGg0di0yaC00eiIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utb3BhY2l0eT0iMC4wMyIvPjwvZz48L3N2Zz4=')] opacity-50 z-0"></div>

    <div class="site-container relative z-10">
        
        <!-- Cabecera de la sección -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="cinematic-title text-4xl md:text-5xl lg:text-6xl font-black text-[color:var(--text)] tracking-tight mb-6">
                El Centro de tu <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[color:var(--accent)] to-yellow-200">Crecimiento Profesional</span>
            </h2>
            <p class="cinematic-text text-[color:var(--text-muted)] text-lg">
                Descubre dónde se forjan los líderes del mañana y lo que nuestra comunidad dice sobre la experiencia de posgrado en la UNAC.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-start">
            
            <!-- Columna Izquierda: MAPA -->
            <div class="lg:col-span-7 relative group map-wrapper perspective-1000">
                <!-- Efecto de resplandor -->
                <div class="absolute -inset-1 bg-gradient-to-r from-[color:var(--accent)]/20 to-blue-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="map-card relative bg-[color:var(--bg-elevated)] border border-white/10 rounded-3xl overflow-hidden shadow-2xl h-[500px] lg:h-[600px] transform-gpu">
                    <!-- Etiqueta Flotante -->
                    <div class="absolute top-6 left-6 z-20 bg-[color:var(--bg)]/80 backdrop-blur-md border border-white/10 px-4 py-3 rounded-2xl shadow-lg flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[color:var(--accent)]/20 flex items-center justify-center border border-[color:var(--accent)]/30">
                            <svg class="w-5 h-5 text-[color:var(--accent)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Sede Posgrado UNAC</p>
                            <p class="text-[color:var(--text-muted)] text-xs">Callao, Perú</p>
                        </div>
                    </div>

                    <!-- Iframe de Google Maps -->
                    <div class="dark-map w-full h-full">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.6683887019623!2d-77.11903672412856!3d-12.066343542263857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cb79c50b73cb%3A0xc6cf604618e4bcbd!2sUniversidad%20Nacional%20del%20Callao!5e0!3m2!1ses!2spe!4v1700000000000!5m2!1ses!2spe" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Gradiente superpuesto inferior -->
                    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-[color:var(--bg-elevated)] to-transparent pointer-events-none"></div>
                </div>
            </div>

            <!-- Columna Derecha: TESTIMONIOS -->
            <div class="lg:col-span-5 flex flex-col gap-6 pt-4 lg:pt-12 testimonials-wrapper">
                
                <!-- Tarjeta de Testimonio 1 -->
                <div class="review-card bg-[color:var(--bg-elevated)]/80 backdrop-blur-sm border border-white/5 p-6 rounded-2xl shadow-lg relative group">
                    <div class="absolute top-4 right-4 text-white/5 font-serif text-6xl group-hover:text-[color:var(--accent)]/10 transition-colors duration-500">"</div>
                    
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex text-[color:var(--accent)]">
                            <?php for($i=0; $i<5; $i++): ?>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <span class="text-xs text-[color:var(--text-muted)] ml-2">Hace 2 semanas</span>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        "El nivel de exigencia y la calidad de los docentes en la maestría superaron mis expectativas. Los conocimientos adquiridos los aplico diariamente en mi gestión como líder de proyectos. Totalmente recomendado."
                    </p>
                    <div class="flex items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2&w=100&h=100&q=80" alt="Usuario" class="w-10 h-10 rounded-full border-2 border-[color:var(--accent)]/20">
                        <div>
                            <h4 class="text-white text-sm font-bold">Ing. Carlos Ramírez</h4>
                            <p class="text-xs text-[color:var(--text-muted)] flex items-center gap-1">
                                <svg class="w-3 h-3 text-blue-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                Egresado de Maestría
                            </p>
                        </div>
                        <div class="ml-auto opacity-40 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#4285F4" d="M23.745 12.27c0-.827-.067-1.626-.202-2.395h-11.54v4.51h6.59c-.285 1.46-1.074 2.696-2.28 3.504v2.92h3.69c2.158-1.99 3.402-4.91 3.402-8.239z"/><path fill="#34A853" d="M12.003 24c3.305 0 6.075-1.096 8.1-2.96l-3.69-2.92c-1.095.733-2.493 1.168-4.41 1.168-3.393 0-6.264-2.29-7.29-5.367H.924v3.013C2.96 20.976 7.15 24 12.003 24z"/><path fill="#FBBC05" d="M4.713 14.92A7.167 7.167 0 014.34 12c0-1.018.18-2.002.512-2.92v-3.012H.924A11.966 11.966 0 000 12c0 1.942.464 3.782 1.282 5.413l3.431-2.493z"/><path fill="#EA4335" d="M12.003 4.71c1.796 0 3.412.617 4.678 1.828l3.51-3.51C18.07 1.096 15.302 0 12.003 0 7.15 0 2.96 3.024.924 7.068l3.789 2.934c1.026-3.076 3.897-5.292 7.29-5.292z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de Testimonio 2 -->
                <div class="review-card bg-[color:var(--bg-elevated)]/80 backdrop-blur-sm border border-white/5 p-6 rounded-2xl shadow-lg relative group">
                    <div class="absolute top-4 right-4 text-white/5 font-serif text-6xl group-hover:text-[color:var(--accent)]/10 transition-colors duration-500">"</div>
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex text-[color:var(--accent)]">
                            <?php for($i=0; $i<5; $i++): ?>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <span class="text-xs text-[color:var(--text-muted)] ml-2">Hace 1 mes</span>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        "Excelente plana docente y malla curricular actualizada a las necesidades del mercado tecnológico y científico actual. Las instalaciones son muy buenas."
                    </p>
                    <div class="flex items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2&w=100&h=100&q=80" alt="Usuario" class="w-10 h-10 rounded-full border-2 border-[color:var(--accent)]/20">
                        <div>
                            <h4 class="text-white text-sm font-bold">Dra. María Fernandez</h4>
                            <p class="text-xs text-[color:var(--text-muted)]">Doctorado UNAC</p>
                        </div>
                        <div class="ml-auto opacity-40 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#4285F4" d="M23.745 12.27c0-.827-.067-1.626-.202-2.395h-11.54v4.51h6.59c-.285 1.46-1.074 2.696-2.28 3.504v2.92h3.69c2.158-1.99 3.402-4.91 3.402-8.239z"/><path fill="#34A853" d="M12.003 24c3.305 0 6.075-1.096 8.1-2.96l-3.69-2.92c-1.095.733-2.493 1.168-4.41 1.168-3.393 0-6.264-2.29-7.29-5.367H.924v3.013C2.96 20.976 7.15 24 12.003 24z"/><path fill="#FBBC05" d="M4.713 14.92A7.167 7.167 0 014.34 12c0-1.018.18-2.002.512-2.92v-3.012H.924A11.966 11.966 0 000 12c0 1.942.464 3.782 1.282 5.413l3.431-2.493z"/><path fill="#EA4335" d="M12.003 4.71c1.796 0 3.412.617 4.678 1.828l3.51-3.51C18.07 1.096 15.302 0 12.003 0 7.15 0 2.96 3.024.924 7.068l3.789 2.934c1.026-3.076 3.897-5.292 7.29-5.292z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Botón "Ver más reseñas" -->
                <div class="mt-4 flex items-center justify-center lg:justify-start review-btn">
                    <a href="https://www.google.com/search?q=posgrado+unac+opiniones" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-white hover:text-[color:var(--accent)] transition-colors group">
                        Leer más testimonios en Google
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

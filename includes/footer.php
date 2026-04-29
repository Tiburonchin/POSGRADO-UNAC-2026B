<footer id="site-footer" class="site-footer-premium">
    
    <!-- FLUID SVG WAVE LINE -->
    <div class="footer-fluid-container">
        <svg id="fluid-svg" class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1000 100" style="display: block;">
            <path id="fluid-path" fill="var(--footer-bg)" d="M 0 100 C 250 100 750 100 1000 100 L 1000 100 L 0 100 Z"></path>
        </svg>
    </div>

    <div class="site-container max-w-[1400px]">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 mb-20 items-start">
            
            <!-- Columna Izquierda: Brand & Titular -->
            <div class="lg:col-span-4 footer-anim pr-4 flex flex-col items-start">
                <div class="relative mb-12 group">
                    <!-- Subtle Glow behind logo -->
                    <div class="absolute -inset-8 bg-unac-yellow/10 blur-[60px] rounded-full pointer-events-none group-hover:bg-unac-yellow/20 transition-all duration-700"></div>
                    <div class="w-48 h-48 lg:w-60 lg:h-60 flex items-center justify-center relative z-10">
                        <img src="img/epg-logo.png" alt="Logo EPG UNAC" class="w-full h-full object-contain transform-gpu transition-transform duration-500 group-hover:scale-105" />
                    </div>
                </div>
                
                <div class="border-l-2 border-unac-yellow/30 pl-8">
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-white leading-[1.2]">
                        Excelencia y liderazgo.<br>
                        Investigación de calidad<br>
                        para el país.
                    </h2>
                </div>
            </div>

            <!-- Columna Central: Grid matemático estilo SaaS -->
            <div class="lg:col-span-4 footer-anim">
                <div class="footer-grid-saas">
                    <div class="footer-grid-item group">
                        <span class="text-sm font-medium text-gray-300 group-hover:text-white transition-colors">Sede Central</span>
                    </div>
                    <div class="footer-grid-item group">
                        <span class="text-sm font-medium text-gray-300 group-hover:text-white transition-colors">Bellavista, Callao</span>
                    </div>
                    
                    <a href="tel:+51900969591" class="footer-grid-item group">
                        <span class="font-mono text-sm text-gray-400 group-hover:text-accent transition-colors">+51 900 969 591</span>
                    </a>
                    <a href="tel:+51900970371" class="footer-grid-item group">
                        <span class="font-mono text-sm text-gray-400 group-hover:text-accent transition-colors">+51 900 970 371</span>
                    </a>

                    <div class="footer-grid-item group">
                        <span class="text-sm font-medium text-gray-300">Horario (L-V)</span>
                        <span class="ml-auto font-mono text-xs text-gray-500">08 - 17h</span>
                    </div>
                    <a href="mailto:posgrado.admision@unac.edu.pe" class="footer-grid-item group">
                        <span class="text-sm font-medium text-gray-300 group-hover:text-white transition-colors">Admisión Correo</span>
                    </a>
                </div>
            </div>

            <!-- Columna Derecha: Newsletter / CTA Box -->
            <div class="lg:col-span-4 footer-anim pl-0 lg:pl-6">
                <div class="footer-newsletter-card">
                    <div class="footer-input-group">
                        <input 
                            type="email" 
                            placeholder="Tu correo electrónico" 
                            class="bg-transparent text-sm text-white px-3 py-2 w-full focus:outline-none placeholder-gray-600 font-mono"
                        >
                        <button class="bg-accent hover:bg-yellow-400 text-black p-2 rounded transition-colors flex-shrink-0 flex items-center justify-center group">
                            <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                    
                    <p class="text-[11px] text-gray-500 leading-relaxed font-mono">
                        Al proporcionar esta información, aceptas mantenerte informado sobre los programas, actualizaciones e investigaciones de UNAC Posgrado.
                    </p>

                    <div class="mt-8 pt-6 border-t border-white/5">
                        <h3 class="text-lg text-white font-medium tracking-tight mb-2">Recibe noticias e investigaciones.</h3>
                        <p class="text-sm text-gray-400">Únete a la comunidad académica líder del Callao.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Row: Social & Legal -->
        <div class="footer-bottom-bar footer-anim">
            
            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-6">
                <div class="flex items-center gap-4">
                    <a href="#" class="footer-social-link" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="footer-social-link" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
                <span class="hidden md:block w-px h-4 bg-white/10"></span>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-[13px] text-gray-400 hover:text-white transition-colors">Privacidad</a>
                    <a href="#" class="text-[13px] text-gray-400 hover:text-white transition-colors">Términos</a>
                    <a href="#" class="text-[13px] text-gray-400 hover:text-white transition-colors hidden sm:block">Intranet</a>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-6 text-[13px] text-gray-500 font-mono">
                <span>© <?= date('Y') ?> UNAC Posgrado.</span>
                <span class="hidden md:inline text-white/10">|</span>
                <span>Desarrollado por <span class="text-accent/80">EPG-UNAC</span></span>
            </div>

        </div>
    </div>
</footer>

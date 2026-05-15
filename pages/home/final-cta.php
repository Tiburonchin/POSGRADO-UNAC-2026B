<?php
/**
 * Final CTA Section - Refined for Home Page
 */
?>

<section class="final-cta relative py-32 overflow-hidden bg-transparent">
    <!-- Difuminado Superior para transición suave -->
    <div class="absolute top-0 left-0 w-full h-24 bg-gradient-to-b from-[color:var(--bg-base)] to-transparent z-10 pointer-events-none opacity-50"></div>
    
    <!-- Enhanced Background Illumination (Brighter & Clearer) -->
    <div class="cta-overlay absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.08)_0%,_rgba(59,130,246,0.15)_35%,_transparent_70%)] pointer-events-none"></div>
    
    <!-- Atmospheric Ambient Glows (Increased Clarity) -->
    <div class="absolute left-1/3 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-brand-primary/20 blur-[180px] rounded-full pointer-events-none z-0"></div>
    <div class="absolute right-1/4 top-1/4 translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-unac-yellow/15 blur-[150px] rounded-full pointer-events-none z-0"></div>
    <div class="absolute left-1/2 bottom-0 -translate-x-1/2 w-[900px] h-[400px] bg-brand-primary/10 blur-[140px] rounded-full pointer-events-none z-0"></div>
    
    <div class="site-container relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight mb-8 leading-[1.1]">
                ¿Listo para ser parte de la <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-unac-yellow-dark">excelencia académica</span>?
            </h2>
            <p class="text-gray-400 text-lg md:text-xl mb-12 leading-relaxed max-w-2xl mx-auto">
                Únete a nuestra comunidad académica y transforma tu visión profesional con programas de posgrado de clase mundial.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="programas.php" class="px-8 py-4 rounded-xl bg-unac-yellow text-slate-950 font-bold uppercase tracking-wider text-xs shadow-lg hover:-translate-y-0.5 hover:shadow-unac-yellow/20 transition-all duration-300 flex items-center justify-center gap-2 group w-full sm:w-auto">
                    <i class="ph ph-graduation-cap font-bold text-lg"></i>
                    Ver Programas
                </a>
                <a href="admision.php" class="px-8 py-4 rounded-xl bg-transparent border border-border-base text-text-base text-xs font-bold uppercase tracking-wider hover:bg-bg-soft hover:border-border-bright transition-all duration-300 flex items-center justify-center gap-2 w-full sm:w-auto">
                    <i class="ph ph-file-text font-bold text-lg"></i>
                    Proceso de Admisión
                </a>
            </div>
        </div>
    </div>
</section>

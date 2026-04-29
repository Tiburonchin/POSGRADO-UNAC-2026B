<?php
/**
 * Final CTA Section - Refined for Home Page
 */
?>

<section class="final-cta relative py-32 overflow-hidden bg-transparent">
    <!-- Difuminado Superior para transición suave -->
    <div class="absolute top-0 left-0 w-full h-24 bg-gradient-to-b from-[color:var(--bg-base)] to-transparent z-10 pointer-events-none opacity-50"></div>
    
    <div class="cta-overlay absolute inset-0 bg-radial-at-center from-[color:var(--unac-blue)]/5 via-transparent to-transparent pointer-events-none"></div>
    
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

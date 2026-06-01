<?php 
$baseUrl = '../../';
$pageTitle = 'Cronograma Académico | La Escuela';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
<script src="' . $baseUrl . 'Admision/admision.js"></script>
<script defer src="' . $baseUrl . 'assets/js/modules/social-animations.js"></script>
';
require_once __DIR__ . '/../../includes/header.php';
?>

    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestro
                <span class="highlight">CRONOGRAMA ACADÉMICO 2026-B</span>
            </h1>
            <p>Fechas importantes para el proceso de admisión y ciclo académico 2026-B.</p>

            <!-- Dynamic Action Buttons -->
            <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 w-full justify-center mt-8 relative z-10">
                <a href="#admission-route" class="hero-btn-primary group relative flex items-center justify-center gap-3 px-8 py-4 bg-unac-yellow text-bg-base font-black rounded-2xl overflow-hidden shadow-[0_20px_40px_rgba(251,202,56,0.2)]">
                    <span class="relative z-10">VER CALENDARIO</span>
                    <i class="fas fa-arrow-down relative z-10 group-hover:translate-y-1 transition-transform"></i>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                </a>
                <a href="../../INSCRIPCION/" class="hero-btn-secondary group relative flex items-center justify-center gap-3 px-8 py-4 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-md">
                    <span>INSCRIBIRSE AHORA</span>
                    <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Scroll Down indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 pointer-events-none">
            <span class="text-[9px] text-white/20 font-bold uppercase tracking-[0.2em]">Desplazar</span>
            <div class="w-5 h-8 rounded-full border border-white/20 flex justify-center p-1">
                <div class="w-1 h-1 bg-unac-yellow rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>
    <!-- Contenido del Cronograma -->
    <section class="admission-route-container relative bg-[#060a12] pt-24 pb-48 overflow-hidden" id="admission-route">
        <div class="site-container max-w-[1400px] mx-auto px-6">
            <!-- Cabecera de la Sección -->
            <header class="max-w-3xl mb-32 reveal">
                <div class="inline-flex items-center gap-3 mb-6">
                    <span class="w-12 h-px bg-unac-yellow"></span>
                    <span class="text-unac-yellow text-xs font-bold uppercase tracking-[0.3em]">Calendario Oficial</span>
                </div>
                <h2 class="text-5xl lg:text-7xl font-bold text-white mb-8 tracking-tighter leading-[1.1]">
                    Fases y Fechas <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-white/80">Académicas 2026-B</span>
                </h2>
                <p class="text-lg text-white/40 font-medium leading-relaxed">
                    Planifica tu año académico. Aquí encontrarás las fechas clave para tu inscripción, matrículas y desarrollo de clases de posgrado.
                </p>
            </header>

            <div class="process-main-grid grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 relative">
                
                <!-- Indicador Lateral (Pinned) -->
                <aside class="lg:col-span-4 hidden lg:block">
                    <div class="sidebar-sticky-wrapper sticky top-32 py-4">
                        <div class="relative pl-[52px]">
                            <!-- Línea de Progreso Maestra -->
                            <div class="absolute left-0 top-4 bottom-4 w-px bg-white/5"></div>
                            <div id="scroll-progress-line" class="absolute left-0 top-4 w-[2px] bg-unac-yellow origin-top h-0 shadow-[0_0_15px_rgba(251,202,56,0.6)]"></div>
                            
                            <nav class="step-navigation flex flex-col gap-14">
                                <?php 
                                $steps = [
                                    ['fase' => '01', 'title' => 'Proceso de Admisión', 'desc' => 'Fechas de inscripción y evaluación'],
                                    ['fase' => '02', 'title' => 'Calendario Académico', 'desc' => 'Matrículas y desarrollo de clases'],
                                    ['fase' => '03', 'title' => 'Subsanación', 'desc' => 'Inscripción y evaluación de subsanación']
                                ];
                                foreach($steps as $index => $step): 
                                    $num = $index + 1;
                                ?>
                                    <div class="step-nav-link group relative flex items-start cursor-pointer" data-step="<?= $num ?>">
                                        <div class="step-marker absolute left-[-52px] top-2 w-3.5 h-3.5 rounded-full border-2 border-white/10 bg-[#060a12] transition-all duration-500 z-10">
                                            <div class="absolute inset-0 rounded-full bg-unac-yellow opacity-0 group-[.active]:animate-ping"></div>
                                        </div>
                                        
                                        <div class="step-label opacity-30 group-[.active]:opacity-100 transition-all duration-500">
                                            <span class="text-[10px] font-black text-unac-yellow uppercase tracking-widest block mb-1">Sección <?= $step['fase'] ?></span>
                                            <h4 class="text-white text-xl font-bold group-[.active]:translate-x-2 transition-transform duration-500 leading-none"><?= $step['title'] ?></h4>
                                            <p class="text-xs text-white/40 mt-2"><?= $step['desc'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                </aside>

                <!-- Contenido de Pasos (Scroll) -->
                <div class="lg:col-span-8 flex flex-col gap-24 lg:gap-32 pb-32">
                    
                    <!-- Paso 01 -->
                    <article class="step-card-v2 group w-full" id="step-v2-1" data-step="1">
                        <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-8 lg:p-12 transition-all duration-700 hover:border-unac-yellow/20">
                            <!-- Admission Process Timeline -->
                            <div class="w-full">
                                <div class="flex flex-col items-start mb-12">
                                    <span class="px-4 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-widest inline-block mb-4">Sección 01</span>
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-text-base mb-2">Proceso de Admisión <span class="text-unac-yellow">2026-B</span></h2>
                                    <div class="h-1 w-24 bg-gradient-to-r from-unac-yellow to-transparent rounded-full"></div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative">
                                    <!-- Timeline line -->
                                    <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-border-bright transform -translate-x-1/2"></div>
                                    
                                    <!-- Items -->
                                    <div class="group/item relative bg-bg-surface/80 backdrop-blur-md border border-border-bright rounded-2xl p-6 md:pr-12 md:text-right hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_15px_30px_-10px_rgba(251,202,56,0.15)]">
                                        <div class="hidden md:flex absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full bg-unac-yellow border-4 border-bg-base shadow-[0_0_15px_rgba(251,202,56,0.8)] group-hover/item:scale-125 transition-transform duration-300 z-10"></div>
                                        <div class="crono-timeline-badge mb-3">
                                            <i class="far fa-calendar-alt mr-2"></i> Del 01 de Junio al 10 de Agosto del 2026
                                        </div>
                                        <h3 class="text-xl text-text-base font-bold">Inscripción de postulantes en línea</h3>
                                    </div>
                                    <div class="hidden md:block"></div>
                                    
                                    <div class="hidden md:block"></div>
                                    <div class="group/item relative bg-bg-surface/80 backdrop-blur-md border border-border-bright rounded-2xl p-6 md:pl-12 hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_15px_30px_-10px_rgba(251,202,56,0.15)]">
                                        <div class="hidden md:flex absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full bg-unac-yellow border-4 border-bg-base shadow-[0_0_15px_rgba(251,202,56,0.8)] group-hover/item:scale-125 transition-transform duration-300 z-10"></div>
                                        <div class="crono-timeline-badge mb-3">
                                            <i class="far fa-calendar-alt mr-2"></i> Del 19 al 20 de Agosto del 2026
                                        </div>
                                        <h3 class="text-xl text-text-base font-bold">Evaluación de CV y entrevista virtual</h3>
                                    </div>
                                    
                                    <div class="group/item relative bg-bg-surface/80 backdrop-blur-md border border-border-bright rounded-2xl p-6 md:pr-12 md:text-right hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_15px_30px_-10px_rgba(251,202,56,0.15)]">
                                        <div class="hidden md:flex absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full bg-unac-yellow border-4 border-bg-base shadow-[0_0_15px_rgba(251,202,56,0.8)] group-hover/item:scale-125 transition-transform duration-300 z-10"></div>
                                        <div class="crono-timeline-badge mb-3">
                                            <i class="far fa-calendar-alt mr-2"></i> 21 de Agosto de 2026
                                        </div>
                                        <h3 class="text-xl text-text-base font-bold">Publicación de resultados de admisión</h3>
                                    </div>
                                    <div class="hidden md:block"></div>
                                    
                                    <div class="hidden md:block"></div>
                                    <div class="group/item relative bg-bg-surface/80 backdrop-blur-md border border-border-bright rounded-2xl p-6 md:pl-12 hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_15px_30px_-10px_rgba(251,202,56,0.15)]">
                                        <div class="hidden md:flex absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-5 h-5 rounded-full bg-unac-yellow border-4 border-bg-base shadow-[0_0_15px_rgba(251,202,56,0.8)] group-hover/item:scale-125 transition-transform duration-300 z-10"></div>
                                        <div class="crono-timeline-badge mb-3">
                                            <i class="far fa-calendar-alt mr-2"></i> 24 de Agosto de 2026
                                        </div>
                                        <h3 class="text-xl text-text-base font-bold">Presentación de documentos de admitidos</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Paso 02 -->
                    <article class="step-card-v2 group w-full" id="step-v2-2" data-step="2">
                        <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-8 lg:p-12 transition-all duration-700 hover:border-unac-yellow/20">
                            <!-- Academic Calendar Table -->
                            <div class="w-full">
                                <div class="flex flex-col items-start mb-12">
                                    <span class="px-4 py-1 rounded-full bg-unac-blue-light/10 border border-unac-blue-light/20 text-unac-blue-light text-[10px] font-bold uppercase tracking-widest inline-block mb-4">Sección 02</span>
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-text-base mb-2">Calendario Académico <span class="text-unac-yellow">2026-B</span></h2>
                                    <div class="h-1 w-24 bg-gradient-to-r from-unac-blue-light to-transparent rounded-full"></div>
                                </div>
                                
                                <div class="overflow-x-auto bg-transparent border-0 shadow-none relative">
                                    
                                    <table class="w-full text-left border-collapse min-w-[600px]">
                                        <thead>
                                            <tr class="bg-bg-soft/80 backdrop-blur-sm text-text-base">
                                                <th class="py-5 px-6 font-bold text-lg border-b-2 border-unac-yellow uppercase tracking-wider">Actividad</th>
                                                <th class="py-5 px-6 font-bold text-lg border-b-2 border-unac-yellow uppercase tracking-wider text-center w-[260px]">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-border-base text-text-muted relative z-10 text-sm md:text-base">
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Solicitudes de reingreso y reserva de matrícula</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">01 Jul - 14 Ago</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Entrega de Programación Horaria 2026-B a URA (registrado en el SGA).</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">17 Ago - 21 Ago</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Matrícula regular (Virtual - SGA)</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">24 Ago - 26 Ago</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Matrícula extemporánea</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">27 de Ago.</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Matrícula especial (cursos dirigidos)</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">28 de Ago.</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Rectificación de matrícula</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">31 de Ago.</span></td>
                                            </tr>
                                            
                                            <!-- Spacing row before Start Row -->
                                            <tr class="h-6 bg-gradient-to-r from-unac-blue/5 to-transparent/5"><td colspan="2" class="py-2 border-b-0"></td></tr>
                                            
                                            <!-- Highlighted Start Row -->
                                            <tr class="hover:bg-unac-blue/15 transition-all duration-300 bg-gradient-to-r from-unac-blue/20 to-transparent border-y border-unac-blue/30 relative overflow-hidden group/row shadow-[inset_4px_0_0_#3b82f6]">
                                                <td class="py-8 px-6 font-extrabold text-white text-lg flex items-center gap-4">
                                                    <span class="flex items-center justify-center w-10 h-10 rounded-full bg-unac-blue text-white shadow-[0_0_15px_rgba(59,130,246,0.6)] group-hover/row:scale-110 transition-transform duration-300">
                                                        <i class="fas fa-play text-sm ml-0.5 animate-pulse"></i>
                                                    </span>
                                                    Inicio de clases
                                                </td>
                                                <td class="py-8 px-6 text-center"><span class="crono-date-tag crono-date-tag-primary">01 de Set.</span></td>
                                            </tr>
                                            
                                            <!-- Spacing row after Start Row -->
                                            <tr class="h-6 bg-gradient-to-r from-unac-blue/5 to-transparent/5"><td colspan="2" class="py-2 border-b-0"></td></tr>

                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Fin de clases</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">21 de Dic.</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Ingreso de notas y Actas (SGA)</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">22 y 23 Dic.</span></td>
                                            </tr>
                                            <tr class="hover:bg-bg-soft/60 transition-colors duration-300 group/row">
                                                <td class="py-5 px-6 font-medium text-text-base group-hover/row:text-unac-yellow transition-colors">Entrega de actas a la URA (físico y digital)</td>
                                                <td class="py-5 px-6 text-center"><span class="crono-date-tag crono-date-tag-standard">24 de Dic.</span></td>
                                            </tr>
                                            
                                            <!-- Spacing row before End Row -->
                                            <tr class="h-6 bg-gradient-to-r from-red-500/5 to-transparent/5"><td colspan="2" class="py-2 border-b-0"></td></tr>
                                            
                                            <!-- Highlighted End Row -->
                                            <tr class="hover:bg-red-500/15 transition-all duration-300 bg-gradient-to-r from-red-500/20 to-transparent border-y border-red-500/30 relative overflow-hidden group/row shadow-[inset_4px_0_0_#ef4444]">
                                                <td class="py-8 px-6 font-extrabold text-white text-lg flex items-center gap-4">
                                                    <span class="flex items-center justify-center w-10 h-10 rounded-full bg-red-500 text-white shadow-[0_0_15px_rgba(239,68,68,0.6)] group-hover/row:scale-110 transition-transform duration-300">
                                                        <i class="fas fa-flag-checkered text-sm"></i>
                                                    </span>
                                                    Fin del Semestre 2026-B
                                                </td>
                                                <td class="py-8 px-6 text-center"><span class="crono-date-tag crono-date-tag-alert">24 de Dic.</span></td>
                                            </tr>
                                            
                                            <!-- Spacing row after End Row -->
                                            <tr class="h-6 bg-gradient-to-r from-red-500/5 to-transparent/5"><td colspan="2" class="py-2 border-b-0"></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Paso 03 -->
                    <article class="step-card-v2 group w-full" id="step-v2-3" data-step="3">
                        <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-8 lg:p-12 transition-all duration-700 hover:border-unac-yellow/20">
                            <!-- Exámenes de subsanación Cards -->
                            <div class="w-full">
                                <div class="flex flex-col items-start mb-12">
                                    <span class="px-4 py-1 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-[10px] font-bold uppercase tracking-widest inline-block mb-4">Sección 03</span>
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-text-base mb-2">Exámenes de Subsanación</h2>
                                    <div class="h-1 w-24 bg-gradient-to-r from-green-500 to-transparent rounded-full"></div>
                                </div>
                                
                                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                                    <!-- Card 1 -->
                                    <div class="group/card bg-bg-surface/60 backdrop-blur-sm border border-border-bright rounded-3xl p-8 flex flex-col items-center text-center hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-unac-yellow/10 relative overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-b from-unac-yellow/5 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500"></div>
                                        <div class="w-16 h-16 rounded-2xl bg-bg-base text-unac-yellow flex items-center justify-center text-2xl mb-6 border border-border-bright group-hover/card:border-unac-yellow/30 group-hover/card:scale-110 group-hover/card:rotate-3 transition-all duration-500 shadow-lg relative z-10">
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-text-base mb-3 relative z-10 group-hover/card:text-white transition-colors">Inscripción en SGA</h3>
                                        <p class="text-text-muted text-xs mb-6 relative z-10 flex-grow">Inscripción a través del sistema.</p>
                                        <div class="crono-card-badge relative z-10">
                                            04 al 06 Mar 2027
                                        </div>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="group/card bg-bg-surface/60 backdrop-blur-sm border border-border-bright rounded-3xl p-8 flex flex-col items-center text-center hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-unac-yellow/10 relative overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-b from-unac-yellow/5 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500"></div>
                                        <div class="w-16 h-16 rounded-2xl bg-bg-base text-unac-yellow flex items-center justify-center text-2xl mb-6 border border-border-bright group-hover/card:border-unac-yellow/30 group-hover/card:scale-110 group-hover/card:rotate-3 transition-all duration-500 shadow-lg relative z-10">
                                            <i class="fas fa-file-signature"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-text-base mb-3 relative z-10 group-hover/card:text-white transition-colors">Exámenes y Registro</h3>
                                        <p class="text-text-muted text-xs mb-6 relative z-10 flex-grow">Rendición y registro de notas.</p>
                                        <div class="crono-card-badge relative z-10">
                                            07 y 08 Mar 2027
                                        </div>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="group/card bg-bg-surface/60 backdrop-blur-sm border border-border-bright rounded-3xl p-8 flex flex-col items-center text-center hover:border-unac-yellow hover:bg-bg-surface transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-unac-yellow/10 relative overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-b from-unac-yellow/5 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500"></div>
                                        <div class="w-16 h-16 rounded-2xl bg-bg-base text-unac-yellow flex items-center justify-center text-2xl mb-6 border border-border-bright group-hover/card:border-unac-yellow/30 group-hover/card:scale-110 group-hover/card:rotate-3 transition-all duration-500 shadow-lg relative z-10">
                                            <i class="fas fa-archive"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-text-base mb-3 relative z-10 group-hover/card:text-white transition-colors">Entrega de Actas</h3>
                                        <p class="text-text-muted text-xs mb-6 relative z-10 flex-grow">Entrega de actas URA física/digital.</p>
                                        <div class="crono-card-badge relative z-10">
                                            11 y 13 Mar 2027
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<!-- direct scroll trigger fallback initialization to prevent loading lag/conflict -->
<script>
    (function() {
        console.log("=== INICIALIZANDO DETECTORES DE CRONOGRAMA ===");
        
        function setupFallbackScrollBehavior() {
            var cards = document.querySelectorAll('.step-card-v2');
            var navLinks = document.querySelectorAll('.step-nav-link');
            var progressBar = document.getElementById('scroll-progress-line');
            
            if (!cards.length || !navLinks.length) {
                console.warn("No se encontraron tarjetas o links del cronograma para el Scrollspy.");
                return;
            }
            
            console.log("Scrollspy local configurado con " + cards.length + " tarjetas.");
            
            // Native fallback intersection observer for card active states (safe and fast!)
            var observerOptions = {
                root: null,
                rootMargin: '-30% 0px -40% 0px', // triggers when card is in the center view
                threshold: 0
            };
            
            var activeCardIndex = 0;
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var cardId = entry.target.getAttribute('id');
                        var stepNum = parseInt(entry.target.getAttribute('data-step'));
                        var index = stepNum - 1;
                        
                        console.log("Card interactivo activo:", cardId, "Paso:", stepNum);
                        
                        // Update active state in nav
                        navLinks.forEach(function(link, i) {
                            if (i === index) {
                                link.classList.add('active');
                                // update progress bar natively as well
                                if (progressBar) {
                                    var progress = ((i + 1) / cards.length) * 100;
                                    progressBar.style.height = progress + "%";
                                }
                            } else {
                                link.classList.remove('active');
                            }
                        });
                    }
                });
            }, observerOptions);
            
            cards.forEach(function(card) {
                observer.observe(card);
            });
            
            // Nav Link click smooth scroll fallback
            navLinks.forEach(function(link, index) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var card = cards[index];
                    if (card) {
                        var yOffset = -120;
                        var y = card.getBoundingClientRect().top + window.pageYOffset + yOffset;
                        
                        if (window.lenis) {
                            window.lenis.scrollTo(card, { offset: -120, duration: 1.2 });
                        } else {
                            window.scrollTo({ top: y, behavior: 'smooth' });
                        }
                    }
                });
            });
        }
        
        // Run safely
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupFallbackScrollBehavior);
        } else {
            setupFallbackScrollBehavior();
        }
    })();
</script>

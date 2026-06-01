<?php 
$baseUrl = '../';
$pageTitle = 'Transparencia Universitaria | Escuela de Posgrado UNAC';
$bodyType = 'admision';
$extraCss = '
<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">
<link rel="stylesheet" href="' . $baseUrl . 'transparencia/transparencia.css">
';
$extraJs = '
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
<script src="' . $baseUrl . 'Admision/admision.js"></script>
<script src="' . $baseUrl . 'transparencia/transparencia.js"></script>
<script defer src="' . $baseUrl . 'assets/js/modules/social-animations.js"></script>
';
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Portal de
                <span class="highlight">TRANSPARENCIA EPG</span>
            </h1>
            <p>Acceso libre e inmediato a resoluciones, actas, reglamentos, estadísticas y documentos oficiales de la Escuela de Posgrado de la Universidad Nacional del Callao.</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="relative bg-[#060a12] pt-20 pb-36 overflow-hidden">
        <div class="site-container max-w-[1400px] mx-auto px-6">
            
            <!-- Section Header -->
            <header class="max-w-3xl mb-16 reveal-header">
                <div class="inline-flex items-center gap-3 mb-6">
                    <span class="w-12 h-px bg-unac-yellow"></span>
                    <span class="text-unac-yellow text-xs font-bold uppercase tracking-[0.3em]">Acceso a la Información Pública</span>
                </div>
                <h2 class="text-4xl lg:text-6xl font-bold text-white mb-6 tracking-tighter leading-tight">
                    Documentación Oficial <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-white/80">y Rendición de Cuentas</span>
                </h2>
                <p class="text-lg text-white/40 leading-relaxed font-medium">
                    En cumplimiento de la Ley de Transparencia y Acceso a la Información Pública, ponemos a disposición de la comunidad académica y el público en general la información administrativa y estadística de nuestra institución.
                </p>
            </header>

            <!-- Dashboard Dynamic Tabs Switcher -->
            <div id="dashboard-tabs-container" class="border-b border-white/5 mb-16 flex flex-wrap gap-4 lg:gap-8 justify-start">
                <button class="transparency-tab-btn active px-6 py-4 border-b-2 border-transparent font-bold text-white text-lg flex items-center gap-3 transition-all" data-target="tab-gestion">
                    <i class="fa-solid fa-file-shield text-unac-yellow text-xl"></i>
                    <span>Documentos de Gestión</span>
                </button>
                <button class="transparency-tab-btn px-6 py-4 border-b-2 border-transparent font-bold text-white/60 text-lg flex items-center gap-3 transition-all" data-target="tab-resoluciones">
                    <i class="fa-solid fa-gavel text-unac-yellow text-xl"></i>
                    <span>Resoluciones y Actas</span>
                </button>
                <button class="transparency-tab-btn px-6 py-4 border-b-2 border-transparent font-bold text-white/60 text-lg flex items-center gap-3 transition-all" data-target="tab-estadisticas">
                    <i class="fa-solid fa-chart-pie text-unac-yellow text-xl"></i>
                    <span>Estadísticas de Ingresantes</span>
                </button>
            </div>

            <!-- Tab Content Panes -->
            <div class="relative min-h-[400px]">

                <!-- 1. TAB: DOCUMENTOS DE GESTIÓN -->
                <div class="transparency-tab-pane block" id="tab-gestion">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                        
                        <!-- Card: TUPA 2025 -->
                        <div class="reveal-card glass-panel glow-card rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-unac-yellow/10 border border-unac-yellow/20 rounded-2xl flex items-center justify-center text-unac-yellow text-2xl">
                                        <i class="fa-solid fa-calculator"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-unac-yellow/15 border border-unac-yellow/30 text-unac-yellow rounded-full text-[10px] font-bold uppercase tracking-wider">TUPA 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Texto Único de Procedimientos Administrativos (TUPA)</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Tasas de derechos de trámites académicos y administrativos vigentes.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar PDF Oficial</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Reglamento General de Estudios -->
                        <div class="reveal-card glass-panel glow-card rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-unac-blue-light/10 border border-unac-blue-light/20 rounded-2xl flex items-center justify-center text-unac-blue-light text-2xl">
                                        <i class="fa-solid fa-book-bookmark"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-unac-blue-light/15 border border-unac-blue-light/30 text-unac-blue-light rounded-full text-[10px] font-bold uppercase tracking-wider">Estudios</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Reglamento General de Estudios</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Modificaciones y normativas vigentes del plan curricular y académico.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/flujogramas/285-24-CU%20MODIFICACION%20DEL%20REGLAMENTO%20GENERAL%20DE%20ESTUDIOS.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar PDF Oficial</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Reglamento de Grados y Títulos -->
                        <div class="reveal-card glass-panel glow-card rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-unac-blue-light/10 border border-unac-blue-light/20 rounded-2xl flex items-center justify-center text-unac-blue-light text-2xl">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-unac-blue-light/15 border border-unac-blue-light/30 text-unac-blue-light rounded-full text-[10px] font-bold uppercase tracking-wider">Grados</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Reglamento de Grados y Títulos</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Lineamientos y condiciones para la obtención de maestría y doctorado.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/reglamento-gyt.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar PDF Oficial</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Directiva Elaboración de Proyecto Informe -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-file-signature"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">Investigación</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Directiva de Proyecto de Tesis 004-2022</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Pautas y estructuras oficiales para el desarrollo de proyectos e informes de tesis.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/DIRECTIVA-ELABORACION-PROYECTO-INFORME-004-2022.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar PDF Oficial</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Plan Estratégico Institucional -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-compass"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">PEI 2024-2030</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Plan Estratégico Institucional</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Objetivos, rutas estratégicas y metas de desarrollo para el periodo 2024-2030.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/transparencia/ryn/plan-estrategico-2024.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar PDF Oficial</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Organigrama Estructural -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-sitemap"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">Organigrama</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Organigrama Estructural EPG</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Estructura jerárquica y áreas administrativas funcionales de la Escuela de Posgrado.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/ORGANIGRAMA-ESTRUCTURAL-EPG-2025.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar Estructural 2025</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: Organigrama Nominal -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-users-gear"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">Organigrama</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Organigrama Nominal EPG</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Distribución nominal de cargos y autoridades vigentes de la institución.</p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/ORGANIGRAMA-EPG-UNAC-20ABR-2026.pdf" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Descargar Nominal 2026</span>
                                <i class="fa-solid fa-arrow-down transform group-hover:translate-y-1 transition-transform"></i>
                            </a>
                        </div>

                        <!-- Card: MOF -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">MOF</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Manual de Organización y Funciones (MOF)</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Detalle del perfil, responsabilidades y funciones de las áreas internas.</p>
                            </div>
                            <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/actas-consejo/2023/" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Ver Resoluciones de Consejo</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                        <!-- Card: ROF UNAC -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[300px]">
                            <div>
                                <div class="flex justify-between items-start mb-6">
                                    <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl">
                                        <i class="fa-solid fa-passport"></i>
                                    </div>
                                    <span class="px-3 py-1 bg-white/5 border border-white/15 text-white/60 rounded-full text-[10px] font-bold uppercase tracking-wider">ROF UNAC</span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3">Reglamentos de Org. y Funciones UNAC</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Disposiciones y normativas estructurales generales a nivel universitario.</p>
                            </div>
                            <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/actas-consejo/2022/" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Ver Resoluciones de Consejo</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- 2. TAB: RESOLUCIONES Y ACTAS -->
                <div class="transparency-tab-pane hidden" id="tab-resoluciones">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                        
                        <!-- Card: Resoluciones de Consejo de Escuela -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[320px]">
                            <div>
                                <div class="w-14 h-14 bg-unac-yellow/10 border border-unac-yellow/20 rounded-2xl flex items-center justify-center text-unac-yellow text-2xl mb-6">
                                    <i class="fa-solid fa-gavel"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-3">Resoluciones de Consejo</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Acceso a las resoluciones emitidas por el Consejo de la Escuela de Posgrado.</p>
                            </div>
                            <a href="https://unac.edu.pe/transparencia/resoluciones-de-consejo-de-escuela-de-posgrado/" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Visitar Repositorio de Resoluciones</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                        <!-- Card: Actas de Consejo -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[320px]">
                            <div>
                                <div class="w-14 h-14 bg-unac-blue-light/10 border border-unac-blue-light/20 rounded-2xl flex items-center justify-center text-unac-blue-light text-2xl mb-6">
                                    <i class="fa-solid fa-file-lines"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-3">Actas de la EPG</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Consulta las actas de sesiones ordinarias y extraordinarias del Consejo de Posgrado.</p>
                            </div>
                            <a href="https://unac.edu.pe/transparencia/actas-de-escuela-de-posgrado/" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Ver Historial de Actas</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                        <!-- Card: Resoluciones de Grados -->
                        <div class="reveal-card glass-panel rounded-3xl p-8 flex flex-col justify-between h-[320px]">
                            <div>
                                <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white/70 text-2xl mb-6">
                                    <i class="fa-solid fa-stamp"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-3">Resoluciones de Grados</h3>
                                <p class="text-white/40 text-sm leading-relaxed">Registro y resoluciones oficiales de aprobación de grados de maestros y doctorados.</p>
                            </div>
                            <a href="https://unac.edu.pe/transparencia/resoluciones-de-grados/" target="_blank" class="flex items-center gap-3 text-white font-bold group mt-6 hover:text-unac-yellow transition-colors w-fit">
                                <span class="border-b border-white/20 group-hover:border-unac-yellow transition-colors pb-0.5">Consultar Resoluciones</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- 3. TAB: ESTADÍSTICAS DE INGRESANTES -->
                <div class="transparency-tab-pane hidden" id="tab-estadisticas">
                    <div class="max-w-4xl mx-auto flex flex-col gap-6">

                        <!-- SECTION: MAESTRÍAS -->
                        <div class="reveal-card glass-panel rounded-3xl overflow-hidden">
                            <button class="stat-group-header w-full px-8 py-6 text-left flex justify-between items-center bg-white/[0.01] hover:bg-white/[0.03] transition-colors focus:outline-none">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-xl border border-unac-yellow/20">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-white">Estadísticas de Ingresantes a Maestrías</h3>
                                        <p class="text-xs text-white/40">Reportes consolidados semestrales (2020 a 2025)</p>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-down text-white/50 transition-transform duration-300 accordion-icon text-lg"></i>
                            </button>
                            
                            <div class="accordion-wrapper max-h-0 overflow-hidden transition-all duration-500 border-t border-white/5 bg-white/[0.005]">
                                <div class="p-6 md:p-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    
                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20MAESTRIAS%202025-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2025 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>
                                    
                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20MAESTRIAS%202024-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2024 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20MAESTRIAS%202024-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2024 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20MAESTRIAS%202023-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2023 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20MAESTRIAS%202023-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2023 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Mae_2022_B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2022 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Mae_2022_A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2022 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Mae_2021_B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2021 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/Est_Maes_Consolidado_2020-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2020 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/Est_Maes_Consolidado_2020-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2020 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- SECTION: DOCTORADOS -->
                        <div class="reveal-card glass-panel rounded-3xl overflow-hidden">
                            <button class="stat-group-header w-full px-8 py-6 text-left flex justify-between items-center bg-white/[0.01] hover:bg-white/[0.03] transition-colors focus:outline-none">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-unac-blue-light/10 text-unac-blue-light flex items-center justify-center text-xl border border-unac-blue-light/20">
                                        <i class="fa-solid fa-award"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-white">Estadísticas de Ingresantes a Doctorados</h3>
                                        <p class="text-xs text-white/40">Reportes consolidados semestrales (2020 a 2025)</p>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-down text-white/50 transition-transform duration-300 accordion-icon text-lg"></i>
                            </button>
                            
                            <div class="accordion-wrapper max-h-0 overflow-hidden transition-all duration-500 border-t border-white/5 bg-white/[0.005]">
                                <div class="p-6 md:p-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    
                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20DOCTORADOS%202025-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2025 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>
                                    
                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20DOCTORADOS%202024-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2024 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20DOCTORADOS%202024-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2024 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20DOCTORADOS%202023-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2023 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/ESTADISTICAS%20DOCTORADOS%202023-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2023 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Doc_2022B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2022 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Doc_2022A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2022 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Doc_2021B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2021 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/EPG_Estad_Doc_2021A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2021 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/Est_Doc_Consolidado_2020-B.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2020 - Periodo B</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/transparencia/ingresantes/Est_Doc_Consolidado_2020-A.pdf" target="_blank" class="flex items-center justify-between p-4 bg-white/5 border border-white/5 hover:border-unac-yellow/30 hover:bg-white/10 rounded-2xl group transition-all">
                                        <span class="text-white/80 font-semibold group-hover:text-white text-sm">Año 2020 - Periodo A</span>
                                        <i class="fa-solid fa-file-pdf text-red-500 text-lg group-hover:scale-110 transition-transform"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

<?php include_once __DIR__ . '/../includes/social-sidebar.php'; ?>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>

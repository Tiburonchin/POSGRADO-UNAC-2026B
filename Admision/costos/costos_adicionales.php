<?php 
$baseUrl = '../../';
$pageTitle = 'Costos Adicionales | La Escuela';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '
<!-- Lenis for Smooth Scroll -->
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
<script src="' . $baseUrl . 'Admision/admision.js"></script>
<script src="' . $baseUrl . 'Admision/costos/costos.js"></script>
<script defer src="' . $baseUrl . 'assets/js/modules/social-animations.js"></script>
';
require_once __DIR__ . '/../../includes/header.php';
?>

<main id="content">
    <!-- Hero Section -->
    <section class="hero animate-fade-in" id="hero">
        <div class="hero-content">
            <h1 class="font-sans">
                Conoce nuestros
                <span class="highlight">COSTOS ADICIONALES</span>
            </h1>
            <p>Tasas de tesis, asesorías, sustentación y obtención de grados académicos.</p>

            <!-- Dynamic Action Buttons -->
            <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 w-full justify-center mt-8 relative z-10">
                <a href="#costos-content" class="hero-btn-primary group relative flex items-center justify-center gap-3 px-8 py-4 bg-unac-yellow text-bg-base font-black rounded-2xl overflow-hidden shadow-[0_20px_40px_rgba(251,202,56,0.2)]">
                    <span class="relative z-10">VER COSTOS ADICIONALES</span>
                    <i class="fas fa-arrow-down relative z-10 group-hover:translate-y-1 transition-transform"></i>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                </a>
                <a href="costos_admision.php" class="hero-btn-secondary group relative flex items-center justify-center gap-3 px-8 py-4 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-md">
                    <span>COSTOS DE ENSEÑANZA</span>
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

    <!-- Contenido Principal -->
    <section class="pt-32 pb-20 px-4 bg-bg-base flex flex-col items-center relative overflow-hidden req-section scroll-mt-32 mt-12 md:mt-16" id="costos-content">
        
        <!-- Decoration Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-unac-blue/5 blur-[120px]"></div>
            <div class="absolute bottom-[20%] right-[-10%] w-[30%] h-[30%] rounded-full bg-unac-yellow/5 blur-[100px]"></div>
        </div>

        <div class="site-container relative z-10 flex flex-col gap-16 w-full max-w-[1400px]">
            
            <!-- Cabecera de la Sección -->
            <div class="mb-2 text-center req-header">
                <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Ruta Financiera <span class="text-unac-yellow">de Grados</span></h2>
                <p class="text-text-muted text-base md:text-lg max-w-2xl mx-auto">Todas las tasas que necesitarás durante tu investigación, aprobación y sustentación.</p>
                <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
            </div>

            <!-- Selector de Tabs -->
            <div class="flex justify-center mb-4">
                <div class="inline-flex p-1.5 bg-bg-surface/30 backdrop-blur-xl border border-border-base rounded-2xl relative shadow-2xl tab-navs" data-group="tesis">
                    <button class="tab-btn active px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 bg-unac-yellow text-bg-base shadow-lg shadow-unac-yellow/20" data-target="timeline-maestria">
                        <i class="fas fa-user-graduate text-base"></i> Maestría
                    </button>
                    <button class="tab-btn px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 text-text-muted hover:text-text-base" data-target="timeline-doctorado">
                        <i class="fas fa-graduation-cap text-base"></i> Doctorado
                    </button>
                    <button class="tab-btn px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 text-text-muted hover:text-text-base" data-target="timeline-segunda">
                        <i class="fas fa-certificate text-base"></i> Segunda Especialidad
                    </button>
                </div>
            </div>

            <!-- Contenedor de Paneles de Tabs -->
            <div class="relative w-full transition-all duration-300 min-h-[400px]">
                
                <!-- ═══════════════ PANE 1: MAESTRÍA ═══════════════ -->
                <div class="tab-pane block opacity-100 z-10 w-full" id="timeline-maestria">
                    <div class="max-w-5xl mx-auto space-y-6">

                        <!-- FASE 1: Proyecto -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-yellow/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 1</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Proyecto de Investigación</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-4 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-text-base font-bold text-sm md:text-base">Inscripción del Proyecto</span>
                                    <span class="text-2xl md:text-3xl font-black text-unac-yellow tracking-tight">S/ 100</span>
                                </div>
                                <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-4 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-text-base font-bold text-sm md:text-base">Aprobación del Proyecto</span>
                                    <span class="text-2xl md:text-3xl font-black text-unac-yellow tracking-tight">S/ 350</span>
                                </div>
                            </div>
                        </div>

                        <!-- FASE 2: Asesoría -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-blue/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/15 flex items-center justify-center text-unac-blue text-2xl shrink-0">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div>
                                    <span class="text-unac-blue text-xs font-black uppercase tracking-widest">Fase 2</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Asesoría de Tesis</h3>
                                </div>
                            </div>
                            <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-5 hover:border-unac-blue/30 transition-all">
                                <div>
                                    <span class="text-text-base font-bold text-base md:text-lg">Derecho del Asesor</span>
                                    <span class="text-text-muted text-sm block mt-1">Tutoría académica durante la redacción</span>
                                </div>
                                <span class="text-3xl md:text-4xl font-black text-unac-blue tracking-tight shrink-0 ml-4">S/ 1,296</span>
                            </div>
                        </div>

                        <!-- FASE 3: Revisión -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-yellow/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 3</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Revisión y Dictamen</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 100</span>
                                    <span class="text-text-base font-bold text-sm">Software Antiplagio</span>
                                    <span class="text-text-muted text-xs mt-1">Turnitin oficial</span>
                                </div>
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 400</span>
                                    <span class="text-text-base font-bold text-sm">Nombramiento de Jurado</span>
                                    <span class="text-text-muted text-xs mt-1">Comité dictaminador</span>
                                </div>
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 160</span>
                                    <span class="text-text-base font-bold text-sm">Levantamiento de Obs.</span>
                                    <span class="text-text-muted text-xs mt-1">Tesis Final: S/ 100</span>
                                </div>
                            </div>
                        </div>

                        <!-- FASE 4: Graduación -->
                        <div class="adic-card bg-gradient-to-br from-unac-yellow/10 to-bg-surface/40 backdrop-blur-xl border-2 border-unac-yellow/30 rounded-3xl p-8 shadow-xl hover:border-unac-yellow/50 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/20 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 4 — Final</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Defensa y Obtención de Grado</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center justify-between bg-bg-base/60 border border-unac-yellow/20 rounded-2xl px-6 py-5 hover:border-unac-yellow/40 transition-all">
                                    <div>
                                        <span class="text-text-base font-bold text-base md:text-lg">Sustentación de Tesis</span>
                                        <span class="text-text-muted text-sm block mt-1">Defensa pública ante el jurado</span>
                                    </div>
                                    <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0 ml-4">S/ 2,000</span>
                                </div>
                                <div class="flex items-center justify-between bg-bg-base/60 border border-unac-yellow/20 rounded-2xl px-6 py-5 hover:border-unac-yellow/40 transition-all">
                                    <div>
                                        <span class="text-text-base font-bold text-base md:text-lg">Obtención del Grado</span>
                                        <span class="text-text-muted text-sm block mt-1">Diploma e inscripción SUNEDU</span>
                                    </div>
                                    <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0 ml-4">S/ 400</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ═══════════════ PANE 2: DOCTORADO ═══════════════ -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="timeline-doctorado">
                    <div class="max-w-5xl mx-auto space-y-6">

                        <!-- FASE 1: Proyecto -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-yellow/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 1</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Proyecto de Investigación</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-4 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-text-base font-bold text-sm md:text-base">Inscripción del Proyecto</span>
                                    <span class="text-2xl md:text-3xl font-black text-unac-yellow tracking-tight">S/ 100</span>
                                </div>
                                <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-4 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-text-base font-bold text-sm md:text-base">Aprobación del Proyecto</span>
                                    <span class="text-2xl md:text-3xl font-black text-unac-yellow tracking-tight">S/ 400</span>
                                </div>
                            </div>
                        </div>

                        <!-- FASE 2: Asesoría -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-blue/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/15 flex items-center justify-center text-unac-blue text-2xl shrink-0">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div>
                                    <span class="text-unac-blue text-xs font-black uppercase tracking-widest">Fase 2</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Asesoría de Tesis</h3>
                                </div>
                            </div>
                            <div class="flex items-center justify-between bg-bg-base/50 border border-border-base rounded-2xl px-6 py-5 hover:border-unac-blue/30 transition-all">
                                <div>
                                    <span class="text-text-base font-bold text-base md:text-lg">Derecho del Asesor</span>
                                    <span class="text-text-muted text-sm block mt-1">Tutoría académica durante la redacción</span>
                                </div>
                                <span class="text-3xl md:text-4xl font-black text-unac-blue tracking-tight shrink-0 ml-4">S/ 1,512</span>
                            </div>
                        </div>

                        <!-- FASE 3: Revisión -->
                        <div class="adic-card bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-3xl p-8 shadow-lg hover:border-unac-yellow/30 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 3</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Revisión y Dictamen</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 100</span>
                                    <span class="text-text-base font-bold text-sm">Software Antiplagio</span>
                                    <span class="text-text-muted text-xs mt-1">Turnitin oficial</span>
                                </div>
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 480</span>
                                    <span class="text-text-base font-bold text-sm">Nombramiento de Jurado</span>
                                    <span class="text-text-muted text-xs mt-1">Comité dictaminador</span>
                                </div>
                                <div class="flex flex-col items-center text-center bg-bg-base/50 border border-border-base rounded-2xl px-5 py-5 hover:border-unac-yellow/30 transition-all">
                                    <span class="text-3xl font-black text-unac-yellow mb-2">S/ 160</span>
                                    <span class="text-text-base font-bold text-sm">Levantamiento de Obs.</span>
                                    <span class="text-text-muted text-xs mt-1">Tesis Final: S/ 150</span>
                                </div>
                            </div>
                        </div>

                        <!-- FASE 4: Graduación -->
                        <div class="adic-card bg-gradient-to-br from-unac-yellow/10 to-bg-surface/40 backdrop-blur-xl border-2 border-unac-yellow/30 rounded-3xl p-8 shadow-xl hover:border-unac-yellow/50 transition-all duration-400">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/20 flex items-center justify-center text-unac-yellow text-2xl shrink-0">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <span class="text-unac-yellow text-xs font-black uppercase tracking-widest">Fase 4 — Final</span>
                                    <h3 class="text-xl md:text-2xl font-extrabold text-text-base leading-tight">Defensa y Obtención de Grado</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-center justify-between bg-bg-base/60 border border-unac-yellow/20 rounded-2xl px-6 py-5 hover:border-unac-yellow/40 transition-all">
                                    <div>
                                        <span class="text-text-base font-bold text-base md:text-lg">Sustentación de Tesis</span>
                                        <span class="text-text-muted text-sm block mt-1">Defensa pública ante el jurado</span>
                                    </div>
                                    <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0 ml-4">S/ 2,500</span>
                                </div>
                                <div class="flex items-center justify-between bg-bg-base/60 border border-unac-yellow/20 rounded-2xl px-6 py-5 hover:border-unac-yellow/40 transition-all">
                                    <div>
                                        <span class="text-text-base font-bold text-base md:text-lg">Obtención del Grado</span>
                                        <span class="text-text-muted text-sm block mt-1">Diploma e inscripción SUNEDU</span>
                                    </div>
                                    <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0 ml-4">S/ 450</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ═══════════════ PANE 3: SEGUNDA ESPECIALIDAD ═══════════════ -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="timeline-segunda">
                    <div class="max-w-4xl mx-auto space-y-5">

                        <!-- Row items con precio grande -->
                        <div class="adic-card flex flex-col sm:flex-row items-center justify-between bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-2xl px-8 py-6 shadow-md hover:border-unac-yellow/30 transition-all gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-lg shrink-0"><i class="fas fa-folder-plus"></i></div>
                                <div>
                                    <span class="text-unac-yellow text-[11px] font-black uppercase tracking-widest">Paso 1</span>
                                    <h4 class="text-text-base font-extrabold text-base md:text-lg leading-tight">Inscripción del Proyecto</h4>
                                </div>
                            </div>
                            <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0">S/ 50</span>
                        </div>

                        <div class="adic-card flex flex-col sm:flex-row items-center justify-between bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-2xl px-8 py-6 shadow-md hover:border-unac-blue/30 transition-all gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-unac-blue/15 flex items-center justify-center text-unac-blue text-lg shrink-0"><i class="fas fa-stamp"></i></div>
                                <div>
                                    <span class="text-unac-blue text-[11px] font-black uppercase tracking-widest">Paso 2</span>
                                    <h4 class="text-text-base font-extrabold text-base md:text-lg leading-tight">Aprobación del Proyecto</h4>
                                </div>
                            </div>
                            <span class="text-3xl md:text-4xl font-black text-unac-blue tracking-tight shrink-0">S/ 320</span>
                        </div>

                        <div class="adic-card flex flex-col sm:flex-row items-center justify-between bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-2xl px-8 py-6 shadow-md hover:border-unac-yellow/30 transition-all gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-lg shrink-0"><i class="fas fa-user-tie"></i></div>
                                <div>
                                    <span class="text-unac-yellow text-[11px] font-black uppercase tracking-widest">Paso 3</span>
                                    <h4 class="text-text-base font-extrabold text-base md:text-lg leading-tight">Derecho del Asesor</h4>
                                </div>
                            </div>
                            <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0">S/ 600</span>
                        </div>

                        <div class="adic-card flex flex-col sm:flex-row items-center justify-between bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-2xl px-8 py-6 shadow-md hover:border-unac-blue/30 transition-all gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-unac-blue/15 flex items-center justify-center text-unac-blue text-lg shrink-0"><i class="fas fa-users"></i></div>
                                <div>
                                    <span class="text-unac-blue text-[11px] font-black uppercase tracking-widest">Paso 4</span>
                                    <h4 class="text-text-base font-extrabold text-base md:text-lg leading-tight">Nombramiento de Jurado</h4>
                                </div>
                            </div>
                            <span class="text-3xl md:text-4xl font-black text-unac-blue tracking-tight shrink-0">S/ 320</span>
                        </div>

                        <div class="adic-card flex flex-col sm:flex-row items-center justify-between bg-bg-surface/40 backdrop-blur-xl border border-border-base rounded-2xl px-8 py-6 shadow-md hover:border-unac-yellow/30 transition-all gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-unac-yellow/15 flex items-center justify-center text-unac-yellow text-lg shrink-0"><i class="fas fa-check-double"></i></div>
                                <div>
                                    <span class="text-unac-yellow text-[11px] font-black uppercase tracking-widest">Paso 5</span>
                                    <h4 class="text-text-base font-extrabold text-base md:text-lg leading-tight">Levantamiento de Observaciones</h4>
                                </div>
                            </div>
                            <span class="text-3xl md:text-4xl font-black text-unac-yellow tracking-tight shrink-0">S/ 120</span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- ═══════════════ ENLACES RÁPIDOS ═══════════════ -->
            <div class="w-full mt-8 py-14 px-2" id="quick-routes-section">
                <div class="mb-12 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-sm tracking-widest uppercase mb-5">
                        <i class="fas fa-map-signs"></i> Recursos Complementarios
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-text-base mb-4 tracking-tight">¿Necesitas más <span class="text-unac-yellow">información?</span></h2>
                    <p class="text-text-muted text-base md:text-lg max-w-xl mx-auto">Accede rápidamente a los portales y recursos de tu posgrado.</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7">
                    <!-- Link 1 -->
                    <a href="<?= $baseUrl ?>Admision/costos/costos_admision.php" class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-yellow/50 p-8 rounded-3xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-2 flex flex-col gap-4 group">
                        <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3 class="font-extrabold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Costos de Admisión</h3>
                        <p class="text-text-muted text-sm leading-relaxed">Inscripción, matrículas semestrales y pensiones mensuales.</p>
                        <span class="flex items-center gap-2 text-unac-yellow font-bold text-sm mt-auto pt-2">
                            Ver costos <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1.5"></i>
                        </span>
                    </a>
                    <!-- Link 2 -->
                    <a href="<?= $baseUrl ?>Admision/requisitos/requisitos_posgrado.php" class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-yellow/50 p-8 rounded-3xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-2 flex flex-col gap-4 group">
                        <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <h3 class="font-extrabold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Normativas y Egreso</h3>
                        <p class="text-text-muted text-sm leading-relaxed">Reglamentos de grados, directivas metodológicas y tesis.</p>
                        <span class="flex items-center gap-2 text-unac-yellow font-bold text-sm mt-auto pt-2">
                            Ver requisitos <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1.5"></i>
                        </span>
                    </a>
                    <!-- Link 3 -->
                    <a href="<?= $baseUrl ?>Admision/formato/formato.php" class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-yellow/50 p-8 rounded-3xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-2 flex flex-col gap-4 group">
                        <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <h3 class="font-extrabold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Formatos y Guías</h3>
                        <p class="text-text-muted text-sm leading-relaxed">Plantillas oficiales para proyecto de tesis y asesoría.</p>
                        <span class="flex items-center gap-2 text-unac-yellow font-bold text-sm mt-auto pt-2">
                            Descargar <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1.5"></i>
                        </span>
                    </a>
                    <!-- Link 4 -->
                    <a href="<?= $baseUrl ?>sgi.php" class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-yellow/50 p-8 rounded-3xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-2 flex flex-col gap-4 group">
                        <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="font-extrabold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Portal SGI</h3>
                        <p class="text-text-muted text-sm leading-relaxed">Inscribir proyectos, convalidar pagos y gestionar trámites.</p>
                        <span class="flex items-center gap-2 text-unac-yellow font-bold text-sm mt-auto pt-2">
                            Ingresar <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1.5"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- ═══════════════ NOTA INFORMATIVA ═══════════════ -->
            <div class="w-full mt-4" id="info-section-adicionales">
                <div class="flex items-start gap-4 bg-unac-blue/10 border-l-4 border-unac-blue border-y border-r border-y-unac-blue/20 border-r-unac-blue/20 rounded-r-xl p-6 shadow-lg">
                    <i class="fas fa-info-circle text-unac-blue text-2xl mt-0.5 shrink-0"></i>
                    <div class="text-text-base leading-relaxed text-sm md:text-base">
                        <strong>Método de Pago:</strong> Todas las tasas se abonan mediante la cuenta corriente de la universidad en <strong>Scotiabank</strong>. Registra tu comprobante digital en la plataforma institucional.<br>
                        <span class="text-text-muted text-xs italic mt-2 inline-block">Tarifas sujetas a actualizaciones según el <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" class="text-unac-blue underline font-semibold">TUPA</a> vigente.</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>

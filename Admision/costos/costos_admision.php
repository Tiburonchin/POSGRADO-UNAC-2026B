<?php 
$baseUrl = '../../';
$pageTitle = 'Costos de Admisión | La Escuela';
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
                Conoce nuestra
                <span class="highlight">INVERSIÓN ACADÉMICA</span>
            </h1>
            <p>Detalles claros sobre derechos de inscripción, matrículas por ciclo y pensiones de enseñanza para tu formación de posgrado.</p>
        </div>
    </section>

    <!-- Contenido de Costos Rediseñado con Tailwind -->
    <section class="py-20 px-4 bg-bg-base flex flex-col items-center relative overflow-hidden req-section" id="costos-content">
        
        <!-- Decoration Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-unac-blue/5 blur-[120px]"></div>
            <div class="absolute bottom-[20%] right-[-10%] w-[30%] h-[30%] rounded-full bg-unac-yellow/5 blur-[100px]"></div>
        </div>

        <div class="site-container relative z-10 flex flex-col gap-16 w-full max-w-[1400px]">
            
            <!-- Cabecera de la Sección -->
            <div class="mb-6 text-center req-header">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-sm tracking-widest uppercase mb-4">
                    <i class="fas fa-coins"></i> Tarifas Oficiales 2026-B
                </div>
                <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Tasas e <span class="text-unac-yellow">Inversión de Enseñanza</span></h2>
                <p class="text-text-muted text-lg max-w-2xl mx-auto">Invierte en tu futuro académico. Ofrecemos una estructura de costos clara y predecible adaptada a cada nivel de especialización.</p>
                <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
            </div>

            <!-- Selector de Tabs Unificados (Glassmorphic Pill Bar) -->
            <div class="flex justify-center mb-8">
                <div class="inline-flex p-1.5 bg-bg-surface/30 backdrop-blur-xl border border-border-base rounded-2xl relative shadow-2xl tab-navs" data-group="inv-economica">
                    <button class="tab-btn active px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 bg-unac-yellow text-bg-base shadow-lg shadow-unac-yellow/20" data-target="inv-maestria">
                        <i class="fas fa-user-graduate text-base"></i> Maestría
                    </button>
                    <button class="tab-btn px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 text-text-muted hover:text-text-base" data-target="inv-doctorado">
                        <i class="fas fa-graduation-cap text-base"></i> Doctorado
                    </button>
                    <button class="tab-btn px-6 py-3.5 rounded-xl font-extrabold text-sm md:text-base uppercase tracking-wider transition-all duration-300 relative z-10 flex items-center gap-2.5 text-text-muted hover:text-text-base" data-target="inv-segunda">
                        <i class="fas fa-certificate text-base"></i> Segunda Especialidad
                    </button>
                </div>
            </div>

            <!-- Contenedor de Paneles de Tabs -->
            <div class="relative w-full transition-all duration-300 min-h-[450px]">
                
                <!-- PANE 1: MAESTRÍA -->
                <div class="tab-pane block opacity-100 z-10 w-full" id="inv-maestria">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Derecho de Inscripción -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-blue/40 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-blue/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Admisión</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-blue group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Derecho de Inscripción</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago único obligatorio por concepto de postulación, evaluación de expediente y derecho a examen del proceso de admisión.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Inversión Inicial Pago Único</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow transition-colors duration-500 tracking-tight">200</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2. Matrícula Regular -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-border-bright rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-white/5 rounded-full blur-2xl group-hover:bg-white/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-text-muted text-[10px] font-black uppercase tracking-widest block mb-2">Fase Académica</span>
                                <div class="w-14 h-14 rounded-2xl bg-bg-soft border border-border-base text-text-muted flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-text-base group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Matrícula Semestral</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago regular que se abona al inicio de cada uno de los ciclos académicos correspondientes del programa.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Costo por Ciclo Semestral</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-text-base tracking-tight">100</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Pensión de Enseñanza -->
                        <div class="bg-bg-surface/40 backdrop-blur-xl border border-unac-yellow/40 hover:border-unac-yellow rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all duration-500"></div>
                            <div class="absolute top-4 right-6 bg-unac-yellow text-bg-base text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Inversión Mensual</div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2 mt-2">Financiamiento</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-yellow group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Pensión Mensual</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Costo de enseñanza fraccionado de forma estándar en <strong>4 cuotas mensuales</strong> por cada semestre regular.
                                </p>
                            </div>
                            <div>
                                <div class="bg-unac-yellow/10 rounded-2xl p-4 mb-4 border border-unac-yellow/20">
                                    <div class="text-xs text-text-base font-bold flex items-center gap-2">
                                        <i class="fas fa-info-circle text-unac-yellow"></i> Duración: 3 ciclos (1.5 años)
                                    </div>
                                </div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow tracking-tight">500</span>
                                    <span class="text-text-muted text-sm ml-1">.00 / mes</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- PANE 2: DOCTORADO -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="inv-doctorado">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Derecho de Inscripción -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-blue/40 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-blue/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Admisión</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-blue group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Derecho de Inscripción</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago único obligatorio por concepto de postulación, evaluación de expediente y derecho a examen del proceso de admisión.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Inversión Inicial Pago Único</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow transition-colors duration-500 tracking-tight">250</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2. Matrícula Regular -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-border-bright rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-white/5 rounded-full blur-2xl group-hover:bg-white/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-text-muted text-[10px] font-black uppercase tracking-widest block mb-2">Fase Académica</span>
                                <div class="w-14 h-14 rounded-2xl bg-bg-soft border border-border-base text-text-muted flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-text-base group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Matrícula Semestral</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago regular que se abona al inicio de cada uno de los ciclos académicos correspondientes del programa.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Costo por Ciclo Semestral</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-text-base tracking-tight">100</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Pensión de Enseñanza -->
                        <div class="bg-bg-surface/40 backdrop-blur-xl border border-unac-yellow/40 hover:border-unac-yellow rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all duration-500"></div>
                            <div class="absolute top-4 right-6 bg-unac-yellow text-bg-base text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Inversión Mensual</div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2 mt-2">Financiamiento</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-yellow group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Pensión Mensual</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Costo de enseñanza fraccionado de forma estándar en <strong>4 cuotas mensuales</strong> por cada semestre regular.
                                </p>
                            </div>
                            <div>
                                <div class="bg-unac-yellow/10 rounded-2xl p-4 mb-4 border border-unac-yellow/20">
                                    <div class="text-xs text-text-base font-bold flex items-center gap-2">
                                        <i class="fas fa-info-circle text-unac-yellow"></i> Duración: 6 ciclos (3 años)
                                    </div>
                                </div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow tracking-tight">500</span>
                                    <span class="text-text-muted text-sm ml-1">.00 / mes</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- PANE 3: SEGUNDA ESPECIALIDAD -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="inv-segunda">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Derecho de Inscripción -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-unac-blue/40 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-blue/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Admisión</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-blue group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Derecho de Inscripción</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago único obligatorio por concepto de postulación, evaluación de expediente y derecho a examen del proceso de admisión.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Inversión Inicial Pago Único</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow transition-colors duration-500 tracking-tight">120</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2. Matrícula Regular -->
                        <div class="bg-bg-surface/30 backdrop-blur-xl border border-border-base hover:border-border-bright rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-white/5 rounded-full blur-2xl group-hover:bg-white/10 transition-all duration-500"></div>
                            <div>
                                <span class="text-text-muted text-[10px] font-black uppercase tracking-widest block mb-2">Fase Académica</span>
                                <div class="w-14 h-14 rounded-2xl bg-bg-soft border border-border-base text-text-muted flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-text-base group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Matrícula Semestral</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago regular que se abona al inicio de cada uno de los ciclos académicos correspondientes del programa.
                                </p>
                            </div>
                            <div>
                                <div class="text-xs text-text-muted font-semibold mb-2">Costo por Ciclo Semestral</div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-text-base tracking-tight">200</span>
                                    <span class="text-text-muted text-sm ml-1">.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Inversión Semestral -->
                        <div class="bg-bg-surface/40 backdrop-blur-xl border border-unac-yellow/40 hover:border-unac-yellow rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-500 hover:shadow-2xl hover:shadow-unac-yellow/5 hover:-translate-y-1.5 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all duration-500"></div>
                            <div class="absolute top-4 right-6 bg-unac-yellow text-bg-base text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Pago por Semestre</div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2 mt-2">Financiamiento</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 group-hover:bg-unac-yellow group-hover:text-bg-base transition-all duration-500">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Inversión Semestral</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Pago único realizado de forma directa e integral por cada semestre regular dictado en este programa.
                                </p>
                            </div>
                            <div>
                                <div class="bg-unac-yellow/10 rounded-2xl p-4 mb-4 border border-unac-yellow/20">
                                    <div class="text-xs text-text-base font-bold flex items-center gap-2">
                                        <i class="fas fa-info-circle text-unac-yellow"></i> Duración: 2 ciclos (1 año)
                                    </div>
                                </div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-2xl font-bold text-text-base">S/</span>
                                    <span class="text-5xl font-black text-unac-yellow tracking-tight">1200</span>
                                    <span class="text-text-muted text-sm ml-1">.00 / ciclo</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- SECCIÓN REDIRECCIÓN A COSTOS ADICIONALES (CTA PREMIUM CON HOVER EMISIVO) -->

            <!-- SECCIÓN REDIRECCIÓN A COSTOS ADICIONALES (CTA PREMIUM CON HOVER EMISIVO) -->
            <div class="w-full mt-12 mb-6" id="redirect-adicionales-section">
                <div class="bg-gradient-to-r from-unac-blue via-bg-surface to-bg-surface border border-border-bright rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden group transition-all duration-500 hover:border-unac-yellow/40 flex flex-col md:flex-row items-center justify-between gap-8">
                    <!-- Efecto de luz ambiental en hover -->
                    <div class="absolute -right-24 -bottom-24 w-80 h-80 bg-unac-yellow/5 rounded-full blur-[100px] pointer-events-none group-hover:bg-unac-yellow/15 transition-all duration-700"></div>
                    <div class="absolute -left-24 -top-24 w-80 h-80 bg-unac-blue/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-unac-blue/20 transition-all duration-700"></div>

                    <div class="flex items-center gap-6 z-10 text-center md:text-left flex-col md:flex-row">
                        <div class="w-20 h-20 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-4xl shrink-0 shadow-lg group-hover:scale-105 group-hover:bg-unac-yellow group-hover:text-bg-base transition-all duration-500">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Trámites y Graduación</span>
                            <h3 class="text-2xl md:text-3xl font-black text-text-base mb-2 tracking-tight">¿Buscas los Costos de Tesis y Titulación?</h3>
                            <p class="text-text-muted text-sm md:text-base max-w-xl leading-relaxed">
                                Conoce las tasas oficiales de asesoría académica, revisiones antiplagio, jurados de tesis y trámites de obtención del grado correspondiente.
                            </p>
                        </div>
                    </div>

                    <div class="z-10 shrink-0">
                        <a href="<?= $baseUrl ?>Admision/costos/costos_adicionales.php" class="relative inline-flex items-center gap-3 px-8 py-4 bg-unac-yellow hover:bg-unac-yellow/90 text-bg-base text-sm font-bold uppercase tracking-wider rounded-2xl shadow-xl hover:shadow-[0_0_30px_rgba(251,202,56,0.5)] transition-all duration-300 group/btn">
                            Ver Costos Adicionales
                            <i class="fas fa-arrow-right transition-transform duration-300 group-hover/btn:translate-x-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECCIÓN 4: INFORMACIÓN Y PREGUNTAS -->
            <div class="w-full mt-8" id="info-section">
                <!-- Métodos de Pago e Información (Alert Banner) -->
                <div class="flex items-start gap-4 bg-unac-blue/10 border-l-4 border-unac-blue border-y border-r border-y-unac-blue/20 border-r-unac-blue/20 rounded-r-xl p-6 shadow-lg mb-16 alert-box">
                    <i class="fas fa-info-circle text-unac-blue text-2xl mt-1"></i>
                    <div class="text-text-base leading-relaxed text-sm md:text-base">
                        <strong>Método de Pago Oficial:</strong> Todos los pagos por derecho de inscripción, matrículas y tasas de posgrado se realizan únicamente mediante la <strong>Cuenta Corriente de la Universidad en Scotiabank</strong>. Una vez efectuado el abono, registra y valida tu voucher digital en nuestro sistema académico. <br>
                        <span class="text-xs text-text-muted italic mt-2 inline-block">Nota: Las tarifas se encuentran sujetas a actualizaciones de acuerdo con el Texto Único de Procedimientos Administrativos (<a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" class="text-unac-blue underline">TUPA</a>) vigente de la institución.</span>
                    </div>
                </div>

                <!-- Preguntas Frecuentes (Acordeón Financiero) -->
                <div class="max-w-4xl mx-auto">
                    <div class="mb-10 text-center section-header">
                        <h2 class="text-2xl md:text-4xl font-extrabold text-text-base mb-4 tracking-tight">Preguntas <span class="text-unac-yellow">Frecuentes de Pagos</span></h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                    </div>

                    <div class="space-y-4 accordion-container">
                        <!-- Item 1 -->
                        <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item faq-card">
                            <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                                <span class="font-bold text-text-base text-sm md:text-base flex items-center gap-3">
                                    <i class="fas fa-question-circle text-unac-yellow"></i> ¿Cómo realizo los pagos de inscripción y matrícula?
                                </span>
                                <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                            </button>
                            <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                                <div class="py-4">Todos los pagos se efectúan en ventanilla, agentes o banca por internet de Scotiabank, utilizando el código asignado para posgrado. Posteriormente, debes registrar tu comprobante digital en el portal académico para su validación oficial.</div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item faq-card">
                            <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                                <span class="font-bold text-text-base text-sm md:text-base flex items-center gap-3">
                                    <i class="fas fa-question-circle text-unac-yellow"></i> ¿Existen becas, descuentos o convenios?
                                </span>
                                <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                            </button>
                            <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                                <div class="py-4">Sí, la Escuela de Posgrado ofrece descuentos parciales en las pensiones de enseñanza para graduados de la UNAC, personal docente y administrativo, así como convenios específicos con diversas instituciones públicas y colegios profesionales del Callao.</div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item faq-card">
                            <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                                <span class="font-bold text-text-base text-sm md:text-base flex items-center gap-3">
                                    <i class="fas fa-question-circle text-unac-yellow"></i> ¿Se pueden fraccionar los pagos de pensión mensual?
                                </span>
                                <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                            </button>
                            <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                                <div class="py-4">La pensión semestral está dividida de forma estándar en 4 cuotas mensuales por ciclo para facilitar el financiamiento del estudiante de posgrado. Cualquier solicitud de fraccionamiento extraordinario debe gestionarse ante la Unidad de Posgrado respectiva.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>

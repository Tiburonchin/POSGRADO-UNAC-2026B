<?php 
$baseUrl = '../../';
$pageTitle = 'Requisitos y Costos | La Escuela';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '
<script src="' . $baseUrl . 'Admision/admision.js"></script>
<script src="' . $baseUrl . 'Admision/requisitos/requisitos.js"></script>
<script defer src="' . $baseUrl . 'assets/js/modules/social-animations.js"></script>
';
require_once __DIR__ . '/../../includes/header.php';
?>

<main id="content">
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestros
                <span class="highlight">REQUISITOS Y COSTOS</span>
            </h1>
            <p>Descubre los documentos necesarios y las tarifas para los programas de posgrado.</p>
        </div>
    </section>

    <!-- Contenido de Requisitos Rediseñado con Tailwind -->
    <section class="py-20 px-4 bg-bg-base flex flex-col items-center relative overflow-hidden" id="requisitos-content">
        
        <!-- Decoration Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-unac-blue/5 blur-[120px]"></div>
            <div class="absolute bottom-[20%] right-[-10%] w-[30%] h-[30%] rounded-full bg-unac-yellow/5 blur-[100px]"></div>
        </div>

        <div class="max-w-6xl w-full relative z-10 flex flex-col gap-24 md:gap-32">
            
            <!-- 1. Requisitos Generales (Diseño Asimétrico) -->
            <div class="req-section w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-stretch">
                    <!-- Left: Intro & Downloads -->
                    <div class="lg:col-span-5 flex flex-col justify-between lg:sticky lg:top-24 lg:h-full lg:space-y-0 space-y-8">
                        <div>
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-sm tracking-widest uppercase mb-4">
                                <i class="fas fa-folder-open"></i> Expediente Digital
                            </div>
                            <h2 class="text-4xl md:text-5xl font-extrabold text-text-base tracking-tight leading-tight mb-6">Requisitos <br><span class="text-unac-yellow">Generales</span></h2>
                            <p class="text-text-muted text-lg leading-relaxed">
                                El expediente completo debe ser enviado en formato digital al correo electrónico de la Unidad de Posgrado de la facultad correspondiente.
                            </p>
                        </div>
                        
                        <div class="bg-bg-surface/50 border border-border-bright rounded-2xl p-6 backdrop-blur-sm">
                            <h4 class="text-sm font-bold text-text-muted uppercase tracking-widest mb-4"><i class="fas fa-download mr-2"></i>Formatos Oficiales</h4>
                            <div class="flex flex-col gap-3">
                                <a href="https://posgrado.unac.edu.pe/formatos/hoja_vida.pdf" target="_blank" class="flex items-center justify-between bg-bg-surface hover:bg-unac-yellow hover:text-bg-base text-text-base border border-border-bright hover:border-unac-yellow px-5 py-4 rounded-xl font-bold transition-all duration-300 shadow-sm hover:shadow-md group">
                                    <span class="flex items-center gap-3"><i class="fas fa-file-pdf text-unac-yellow group-hover:text-bg-base transition-colors text-xl"></i> Hoja de Vida</span>
                                    <i class="fas fa-arrow-right opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </a>
                                <a href="https://posgrado.unac.edu.pe/formatos/ficha_inscripcion.pdf" target="_blank" class="flex items-center justify-between bg-bg-surface hover:bg-unac-yellow hover:text-bg-base text-text-base border border-border-bright hover:border-unac-yellow px-5 py-4 rounded-xl font-bold transition-all duration-300 shadow-sm hover:shadow-md group">
                                    <span class="flex items-center gap-3"><i class="fas fa-file-pdf text-unac-yellow group-hover:text-bg-base transition-colors text-xl"></i> Ficha de Inscripción</span>
                                    <i class="fas fa-arrow-right opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </a>
                                <a href="https://posgrado.unac.edu.pe/formatos/declaracion_jurada.pdf" target="_blank" class="flex items-center justify-between bg-bg-surface hover:bg-unac-yellow hover:text-bg-base text-text-base border border-border-bright hover:border-unac-yellow px-5 py-4 rounded-xl font-bold transition-all duration-300 shadow-sm hover:shadow-md group">
                                    <span class="flex items-center gap-3"><i class="fas fa-file-pdf text-unac-yellow group-hover:text-bg-base transition-colors text-xl"></i> Declaración Jurada</span>
                                    <i class="fas fa-arrow-right opacity-50 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right: Cards -->
                    <div class="lg:col-span-7 flex flex-col justify-between lg:h-full lg:space-y-0 space-y-6">
                        <div class="bg-bg-surface border border-border-bright rounded-2xl p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-lg hover:shadow-xl hover:border-unac-yellow/50 transition-all duration-300 req-item group">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-base text-xl mb-1 group-hover:text-unac-yellow transition-colors">Identidad</h4>
                                <p class="text-text-muted">Copia legible del DNI, Carnet de Extranjería o Pasaporte vigente.</p>
                            </div>
                        </div>
                        <div class="bg-bg-surface border border-border-bright rounded-2xl p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-lg hover:shadow-xl hover:border-unac-yellow/50 transition-all duration-300 req-item group">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-base text-xl mb-1 group-hover:text-unac-yellow transition-colors">Fotografía</h4>
                                <p class="text-text-muted">Actual a color, tamaño carnet y con fondo blanco (según normas SUNEDU).</p>
                            </div>
                        </div>
                        <div class="bg-bg-surface border border-border-bright rounded-2xl p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-lg hover:shadow-xl hover:border-unac-yellow/50 transition-all duration-300 req-item group">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-base text-xl mb-1 group-hover:text-unac-yellow transition-colors">Traslados</h4>
                                <p class="text-text-muted">Constancia de admisión de la universidad de origen y sílabos autenticados.</p>
                            </div>
                        </div>
                        <div class="bg-bg-surface border border-border-bright rounded-2xl p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-lg hover:shadow-xl hover:border-unac-yellow/50 transition-all duration-300 req-item group">
                            <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-base text-xl mb-1 group-hover:text-unac-yellow transition-colors">Grados Extranjeros</h4>
                                <p class="text-text-muted">Los grados obtenidos en el extranjero deben estar debidamente registrados en SUNEDU.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Requisitos Específicos -->
            <div class="req-section w-full">
                <div class="mb-12 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Requisitos <span class="text-unac-yellow">Específicos</span></h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                </div>

                <div class="flex flex-wrap justify-center gap-4 mb-10 tab-navs" data-group="req-especificos">
                    <button class="tab-btn active px-8 py-3 rounded-xl border-2 border-unac-yellow bg-unac-yellow text-bg-base font-bold transition-all hover:shadow-[0_0_20px_rgba(251,202,56,0.5)] flex items-center gap-2" data-target="req-maestria"><i class="fas fa-user-graduate"></i> Maestría</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all flex items-center gap-2" data-target="req-doctorado"><i class="fas fa-graduation-cap"></i> Doctorado</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all flex items-center gap-2" data-target="req-segunda"><i class="fas fa-certificate"></i> Segunda Especialidad</button>
                </div>

                <div class="relative w-full">
                    <div class="tab-pane block opacity-100 z-10" id="req-maestria">
                        <div class="bg-bg-surface border-l-4 border-l-unac-yellow border-y border-r border-y-border-bright border-r-border-bright rounded-r-2xl p-8 shadow-lg flex items-center gap-6 inv-card">
                            <div class="hidden sm:flex flex-shrink-0 w-16 h-16 rounded-full bg-unac-yellow/10 text-unac-yellow items-center justify-center text-3xl">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-text-base mb-2">Grado de Bachiller</h4>
                                <p class="text-text-muted text-lg">Copia del Grado Académico de Bachiller. Se acepta la ficha de registro de SUNEDU.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane hidden opacity-0 z-0" id="req-doctorado">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-bg-surface border-l-4 border-l-unac-yellow border-y border-r border-y-border-bright border-r-border-bright rounded-r-2xl p-8 shadow-lg flex items-center gap-6 inv-card">
                                <div class="hidden sm:flex flex-shrink-0 w-16 h-16 rounded-full bg-unac-yellow/10 text-unac-yellow items-center justify-center text-3xl">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-bold text-text-base mb-2">Grado de Maestro</h4>
                                    <p class="text-text-muted">Copia del Grado Académico de Maestro o constancia de egresado (Registro SUNEDU).</p>
                                </div>
                            </div>
                            <div class="bg-bg-surface border-l-4 border-l-unac-yellow border-y border-r border-y-border-bright border-r-border-bright rounded-r-2xl p-8 shadow-lg flex items-center gap-6 inv-card">
                                <div class="hidden sm:flex flex-shrink-0 w-16 h-16 rounded-full bg-unac-yellow/10 text-unac-yellow items-center justify-center text-3xl">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-bold text-text-base mb-2">Proyecto Doctoral</h4>
                                    <p class="text-text-muted">Proyecto de Investigación estructurado que se desarrollará como tesis doctoral.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane hidden opacity-0 z-0" id="req-segunda">
                        <div class="bg-bg-surface border-l-4 border-l-unac-yellow border-y border-r border-y-border-bright border-r-border-bright rounded-r-2xl p-8 shadow-lg flex items-center gap-6 inv-card">
                            <div class="hidden sm:flex flex-shrink-0 w-16 h-16 rounded-full bg-unac-yellow/10 text-unac-yellow items-center justify-center text-3xl">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-text-base mb-2">Título Profesional</h4>
                                <p class="text-text-muted text-lg">Copia del Título Profesional universitario. Se acepta la ficha de registro de SUNEDU.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Inversión (Pricing Cards) -->
            <div class="req-section w-full">
                <div class="mb-12 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Inversión <span class="text-unac-yellow">Económica</span></h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                </div>

                <div class="flex flex-wrap justify-center gap-4 mb-12 tab-navs" data-group="inv-economica">
                    <button class="tab-btn active px-8 py-3 rounded-xl border-2 border-unac-yellow bg-unac-yellow text-bg-base font-bold transition-all hover:shadow-[0_0_20px_rgba(251,202,56,0.5)]" data-target="inv-maestria">Maestría</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all" data-target="inv-doctorado">Doctorado</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all" data-target="inv-segunda">Segunda Especialidad</button>
                </div>

                <div class="relative w-full">
                    <!-- Maestría Pricing -->
                    <div class="tab-pane block opacity-100 z-10" id="inv-maestria">
                        <div class="flex flex-col lg:flex-row items-stretch justify-center gap-6 lg:gap-0 max-w-4xl mx-auto py-4">
                            <div class="bg-bg-surface border border-border-bright rounded-2xl lg:rounded-r-none lg:rounded-l-2xl p-8 flex flex-col justify-center w-full lg:w-1/2 shadow-lg inv-card relative">
                                <span class="text-sm font-bold text-text-muted uppercase tracking-widest mb-6 text-center lg:text-left">Pagos Únicos</span>
                                <div class="space-y-6">
                                    <div class="flex justify-between items-center border-b border-border-bright pb-4">
                                        <span class="text-text-base font-bold">Inscripción</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 200</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-text-base font-bold">Matrícula (x ciclo)</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 100</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Featured Pricing -->
                            <div class="bg-gradient-to-b from-unac-yellow/20 to-bg-surface border-2 border-unac-yellow rounded-2xl p-10 flex flex-col items-center text-center shadow-[0_0_30px_rgba(251,202,56,0.2)] w-full lg:w-1/2 transform lg:scale-105 z-20 relative inv-card">
                                <div class="absolute -top-4 bg-unac-yellow text-bg-base text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Inversión Principal</div>
                                <span class="text-sm font-bold text-unac-yellow uppercase tracking-widest mt-4 mb-4">Pensión Mensual</span>
                                <div class="flex items-start justify-center gap-1 mb-6">
                                    <span class="text-2xl text-text-base mt-2 font-bold">S/</span>
                                    <span class="text-6xl font-black text-text-base tracking-tighter">500</span>
                                </div>
                                <div class="bg-unac-yellow/10 rounded-xl p-4 w-full">
                                    <p class="text-text-base font-bold">4 pagos por semestre</p>
                                    <p class="text-sm text-text-muted mt-1">Duración total: 3 ciclos (1 año y medio)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctorado Pricing -->
                    <div class="tab-pane hidden opacity-0 z-0" id="inv-doctorado">
                        <div class="flex flex-col lg:flex-row items-stretch justify-center gap-6 lg:gap-0 max-w-4xl mx-auto py-4">
                            <div class="bg-bg-surface border border-border-bright rounded-2xl lg:rounded-r-none lg:rounded-l-2xl p-8 flex flex-col justify-center w-full lg:w-1/2 shadow-lg inv-card relative">
                                <span class="text-sm font-bold text-text-muted uppercase tracking-widest mb-6 text-center lg:text-left">Pagos Únicos</span>
                                <div class="space-y-6">
                                    <div class="flex justify-between items-center border-b border-border-bright pb-4">
                                        <span class="text-text-base font-bold">Inscripción</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 250</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-text-base font-bold">Matrícula (x ciclo)</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 100</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-b from-unac-yellow/20 to-bg-surface border-2 border-unac-yellow rounded-2xl p-10 flex flex-col items-center text-center shadow-[0_0_30px_rgba(251,202,56,0.2)] w-full lg:w-1/2 transform lg:scale-105 z-20 relative inv-card">
                                <div class="absolute -top-4 bg-unac-yellow text-bg-base text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Inversión Principal</div>
                                <span class="text-sm font-bold text-unac-yellow uppercase tracking-widest mt-4 mb-4">Pensión Mensual</span>
                                <div class="flex items-start justify-center gap-1 mb-6">
                                    <span class="text-2xl text-text-base mt-2 font-bold">S/</span>
                                    <span class="text-6xl font-black text-text-base tracking-tighter">500</span>
                                </div>
                                <div class="bg-unac-yellow/10 rounded-xl p-4 w-full">
                                    <p class="text-text-base font-bold">4 pagos por semestre</p>
                                    <p class="text-sm text-text-muted mt-1">Duración total: 6 ciclos (3 años)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda Especialidad Pricing -->
                    <div class="tab-pane hidden opacity-0 z-0" id="inv-segunda">
                        <div class="flex flex-col lg:flex-row items-stretch justify-center gap-6 lg:gap-0 max-w-4xl mx-auto py-4">
                            <div class="bg-bg-surface border border-border-bright rounded-2xl lg:rounded-r-none lg:rounded-l-2xl p-8 flex flex-col justify-center w-full lg:w-1/2 shadow-lg inv-card relative">
                                <span class="text-sm font-bold text-text-muted uppercase tracking-widest mb-6 text-center lg:text-left">Pagos Únicos</span>
                                <div class="space-y-6">
                                    <div class="flex justify-between items-center border-b border-border-bright pb-4">
                                        <span class="text-text-base font-bold">Inscripción</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 120</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-text-base font-bold">Matrícula (x ciclo)</span>
                                        <span class="text-xl font-black text-unac-yellow">S/ 200</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-b from-unac-yellow/20 to-bg-surface border-2 border-unac-yellow rounded-2xl p-10 flex flex-col items-center text-center shadow-[0_0_30px_rgba(251,202,56,0.2)] w-full lg:w-1/2 transform lg:scale-105 z-20 relative inv-card">
                                <div class="absolute -top-4 bg-unac-yellow text-bg-base text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg">Inversión Principal</div>
                                <span class="text-sm font-bold text-unac-yellow uppercase tracking-widest mt-4 mb-4">Inversión Semestral</span>
                                <div class="flex items-start justify-center gap-1 mb-6">
                                    <span class="text-2xl text-text-base mt-2 font-bold">S/</span>
                                    <span class="text-6xl font-black text-text-base tracking-tighter">1200</span>
                                </div>
                                <div class="bg-unac-yellow/10 rounded-xl p-4 w-full">
                                    <p class="text-text-base font-bold">Pago único por semestre</p>
                                    <p class="text-sm text-text-muted mt-1">Duración total: 2 ciclos (1 año)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex items-start gap-4 bg-unac-blue/10 border-l-4 border-unac-blue border-y border-r border-y-unac-blue/20 border-r-unac-blue/20 rounded-r-xl p-6 shadow-lg req-alert">
                    <i class="fas fa-info-circle text-unac-blue text-2xl mt-1"></i>
                    <div class="text-text-base leading-relaxed">
                        <strong>Método de Pago:</strong> Todos los pagos por derecho de inscripción deben realizarse en la <strong>Cta. Cte. del Banco Scotiabank</strong>. No olvide adjuntar el comprobante en su expediente digital. <br>
                        <span class="text-sm text-text-muted italic">Nota: Sujeto a reajuste según el TUPA.</span>
                    </div>
                </div>
            </div>

            <!-- 4. Presentación e Informe de Tesis (Timeline Design) -->
            <div class="req-section w-full">
                <div class="mb-12 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Proceso de <span class="text-unac-yellow">Tesis</span></h2>
                    <p class="text-text-muted text-lg">Costos asociados al desarrollo, presentación y sustentación de la tesis.</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
                </div>

                <div class="flex flex-wrap justify-center gap-4 mb-12 tab-navs" data-group="tesis">
                    <button class="tab-btn active px-8 py-3 rounded-xl border-2 border-unac-yellow bg-unac-yellow text-bg-base font-bold transition-all hover:shadow-[0_0_20px_rgba(251,202,56,0.5)]" data-target="timeline-maestria">Maestría</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all" data-target="timeline-doctorado">Doctorado</button>
                    <button class="tab-btn px-8 py-3 rounded-xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all" data-target="timeline-segunda">Segunda Especialidad</button>
                </div>

                <div class="relative w-full">
                    <!-- Maestria Timeline -->
                    <div class="tab-pane block opacity-100 z-10" id="timeline-maestria">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative max-w-5xl mx-auto py-4">
                            <!-- Conector línea -->
                            <div class="hidden lg:block absolute top-12 left-[12%] w-[76%] h-1 bg-border-bright z-0 timeline-line"></div>
                            
                            <!-- Paso 1 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 1</span>
                                    <i class="fas fa-file-signature text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Inscripción del Proyecto</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 100</span>
                            </div>
                            
                            <!-- Paso 2 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 2</span>
                                    <i class="fas fa-user-tie text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Derecho del Asesor</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 1296</span>
                            </div>

                            <!-- Paso 3 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 3</span>
                                    <i class="fas fa-users text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Nombramiento de Jurado</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 400</span>
                            </div>

                            <!-- Paso 4 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 4</span>
                                    <i class="fas fa-graduation-cap text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Sustentación</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 2000</span>
                            </div>
                        </div>

                        <!-- Otros costos Maestria -->
                        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 border-t border-border-bright pt-8 inv-card max-w-4xl mx-auto">
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Aprobación Proyecto</span>
                                <span class="text-text-base font-black">S/ 350</span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Levant. Observaciones</span>
                                <span class="text-text-base font-black">S/ 160 <small class="opacity-50">(Tesis: S/ 100)</small></span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Obtención Grado</span>
                                <span class="text-text-base font-black">S/ 400 <small class="opacity-50">(Antiplagio: S/ 100)</small></span>
                            </div>
                        </div>
                    </div>

                    <!-- Doctorado Timeline -->
                    <div class="tab-pane hidden opacity-0 z-0" id="timeline-doctorado">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative max-w-5xl mx-auto py-4">
                            <!-- Conector línea -->
                            <div class="hidden lg:block absolute top-12 left-[12%] w-[76%] h-1 bg-border-bright z-0 timeline-line"></div>
                            
                            <!-- Paso 1 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 1</span>
                                    <i class="fas fa-file-signature text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Inscripción del Proyecto</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 100</span>
                            </div>
                            
                            <!-- Paso 2 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 2</span>
                                    <i class="fas fa-user-tie text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Derecho del Asesor</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 1512</span>
                            </div>

                            <!-- Paso 3 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 3</span>
                                    <i class="fas fa-users text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Nombramiento de Jurado</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 480</span>
                            </div>

                            <!-- Paso 4 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 4</span>
                                    <i class="fas fa-graduation-cap text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Sustentación</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 2500</span>
                            </div>
                        </div>

                        <!-- Otros costos Doctorado -->
                        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 border-t border-border-bright pt-8 inv-card max-w-4xl mx-auto">
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Aprobación Proyecto</span>
                                <span class="text-text-base font-black">S/ 400</span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Levant. Observaciones</span>
                                <span class="text-text-base font-black">S/ 160 <small class="opacity-50">(Tesis: S/ 150)</small></span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Obtención Grado</span>
                                <span class="text-text-base font-black">S/ 450 <small class="opacity-50">(Antiplagio: S/ 100)</small></span>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda Especialidad Timeline -->
                    <div class="tab-pane hidden opacity-0 z-0" id="timeline-segunda">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 relative max-w-2xl mx-auto py-4">
                            <!-- Conector línea -->
                            <div class="hidden sm:block absolute top-12 left-[25%] w-[50%] h-1 bg-border-bright z-0 timeline-line"></div>
                            
                            <!-- Paso 1 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 1</span>
                                    <i class="fas fa-file-signature text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Inscripción del Proyecto</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 50</span>
                            </div>
                            
                            <!-- Paso 2 -->
                            <div class="relative z-10 flex flex-col items-center text-center group inv-card">
                                <div class="w-24 h-24 rounded-full bg-bg-surface border-4 border-unac-yellow flex flex-col items-center justify-center shadow-lg group-hover:bg-unac-yellow group-hover:text-bg-base transition-colors duration-300 mb-6 relative">
                                    <span class="text-xs font-black uppercase mb-1 opacity-70">Paso 2</span>
                                    <i class="fas fa-user-tie text-2xl"></i>
                                </div>
                                <h4 class="font-bold text-text-base mb-2 px-2 text-lg leading-tight group-hover:text-unac-yellow transition-colors">Derecho del Asesor</h4>
                                <span class="text-2xl font-black text-text-base bg-bg-surface border border-border-bright px-4 py-2 rounded-xl shadow-md">S/ 600</span>
                            </div>
                        </div>

                        <!-- Otros costos Segunda Especialidad -->
                        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 border-t border-border-bright pt-8 inv-card max-w-4xl mx-auto">
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Aprobación Proyecto</span>
                                <span class="text-text-base font-black">S/ 320</span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Levant. Observaciones</span>
                                <span class="text-text-base font-black">S/ 120</span>
                            </div>
                            <div class="bg-bg-surface/50 rounded-xl p-4 flex items-center justify-between border border-border-bright">
                                <span class="text-text-muted font-bold text-sm">Nomb. de Jurado</span>
                                <span class="text-text-base font-black">S/ 320</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Procedimientos y Reglamentos -->
            <div class="req-section w-full">
                <div class="mb-10 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Procedimientos y <span class="text-unac-yellow">Reglamentos</span></h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/resoluciones-consejo-universitario/2024/286-24-CU%20MODIFICACION%20DEL%20REGLAMENTO%20DE%20GRADOS%20Y%20TITULOS--.pdf" target="_blank" class="bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-xl p-6 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-5 group inv-card">
                        <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex flex-shrink-0 items-center justify-center group-hover:bg-unac-blue group-hover:text-white transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-file-pdf text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Reglamento de Grados y Títulos</h4>
                            <p class="text-sm text-text-muted mt-1">Obtención de grado de Maestro, Doctor y Segundas Especialidades.</p>
                        </div>
                    </a>
                    <a href="https://posgrado.unac.edu.pe/formatos/DIRECTIVA-ELABORACION-PROYECTO-INFORME-004-2022.pdf" target="_blank" class="bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-xl p-6 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-5 group inv-card">
                        <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex flex-shrink-0 items-center justify-center group-hover:bg-unac-blue group-hover:text-white transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-file-pdf text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Directiva de Investigación</h4>
                            <p class="text-sm text-text-muted mt-1">Lineamientos para proyectos e informes de tesis.</p>
                        </div>
                    </a>
                    <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/resoluciones-consejo-universitario/2024/285-24-CU%20MODIFICACI%C3%93N%20DEL%20REGLAMENTO%20GENERAL%20DE%20ESTUDIOS--.pdf" target="_blank" class="bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-xl p-6 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-5 group inv-card">
                        <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex flex-shrink-0 items-center justify-center group-hover:bg-unac-blue group-hover:text-white transition-all duration-300 group-hover:rotate-6">
                            <i class="fas fa-file-pdf text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Reglamento General de Estudios</h4>
                            <p class="text-sm text-text-muted mt-1">Procedimientos para estudios de posgrado.</p>
                        </div>
                    </a>
                    <a href="https://posgrado.unac.edu.pe/PDF/UNIVERSIDAD%20NACIONAL%20DEL%20CALLAO_guia%20de%20postulante.pdf" target="_blank" class="bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-xl p-6 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-5 group inv-card">
                        <div class="w-14 h-14 rounded-2xl bg-unac-yellow/15 text-unac-yellow flex flex-shrink-0 items-center justify-center group-hover:bg-unac-yellow group-hover:text-bg-base transition-all duration-300 group-hover:-translate-y-1">
                            <i class="fas fa-download text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors">Guía del Postulante</h4>
                            <p class="text-sm text-text-muted mt-1">Descarga la guía y formatos para completar tu inscripción.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 6. Preguntas Frecuentes (Acordeón) -->
            <div class="req-section w-full max-w-4xl mx-auto mb-12">
                <div class="mb-10 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Preguntas <span class="text-unac-yellow">Frecuentes</span></h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                </div>

                <div class="space-y-4 accordion-container">
                    <!-- Item 1 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow"></i> ¿Cómo realizo los pagos de inscripción?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-lg leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Todos los pagos se realizan a través de la cuenta corriente del Banco Scotiabank. Es indispensable adjuntar el comprobante de pago en tu expediente digital al momento de postular.</div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow"></i> ¿Son válidos los grados obtenidos en el extranjero?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-lg leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Sí, los grados y títulos obtenidos en el extranjero son completamente válidos, siempre y cuando estén debidamente registrados y reconocidos en la SUNEDU antes de iniciar el proceso de admisión.</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow"></i> ¿Qué grado previo requiero para postular?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-lg leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Para programas de <strong>Maestría</strong>, se requiere obligatoriamente el grado de Bachiller. Para programas de <strong>Doctorado</strong>, se acepta la constancia de egresado de maestría o el grado de Maestro.</div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow"></i> ¿Existen descuentos o beneficios?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-lg leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Sí, la Escuela de Posgrado ofrece descuentos exclusivos para el personal administrativo y docentes nombrados o contratados de la UNAC. Consulta en la unidad de posgrado respectiva.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>

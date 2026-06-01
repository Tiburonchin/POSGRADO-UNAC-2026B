<?php 
$baseUrl = '../../';
$pageTitle = 'Requisitos de Admisión | La Escuela';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
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
                <span class="highlight">REQUISITOS DE ADMISIÓN</span>
            </h1>
            <p>Descubre los documentos académicos y expedientes necesarios para postular a los programas de posgrado.</p>

            <!-- Dynamic Action Buttons -->
            <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 w-full justify-center mt-8 relative z-10">
                <a href="#requisitos-content" class="hero-btn-primary group relative flex items-center justify-center gap-3 px-8 py-4 bg-unac-yellow text-bg-base font-black rounded-2xl overflow-hidden shadow-[0_20px_40px_rgba(251,202,56,0.2)]">
                    <span class="relative z-10">VER REQUISITOS</span>
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

    <!-- Contenido de Requisitos Rediseñado con Bento Grid Sétrico y Tailwind -->
    <section class="py-20 px-4 bg-bg-base flex flex-col items-center relative overflow-hidden req-section" id="requisitos-content">
        
        <!-- Decoration Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-unac-blue/5 blur-[120px]"></div>
            <div class="absolute bottom-[20%] right-[-10%] w-[30%] h-[30%] rounded-full bg-unac-yellow/5 blur-[100px]"></div>
        </div>

        <div class="site-container relative z-10 flex flex-col gap-12 w-full max-w-[1400px]">
            
            <!-- Cabecera de la Sección -->
            <div class="mb-6 text-center req-header">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-sm tracking-widest uppercase mb-4">
                    <i class="fas fa-id-badge"></i> Proceso 2026-B
                </div>
                <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight font-sans">Requisitos <span class="text-unac-yellow">por Tipo de Programa</span></h2>
                <p class="text-text-muted text-sm sm:text-base md:text-lg max-w-2xl mx-auto">Selecciona tu programa de interés para visualizar sus requisitos de ingreso, documentos de carpeta general y formatos oficiales de descarga en un solo lugar.</p>
                <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
            </div>

            <!-- Selector de Tabs Unificados -->
            <div class="flex flex-wrap justify-center gap-4 mb-8 tab-navs" data-group="req-admision-grupos">
                <button class="tab-btn active px-8 py-4 rounded-2xl border-2 border-unac-yellow bg-unac-yellow text-bg-base font-bold transition-all hover:shadow-[0_0_25px_rgba(251,202,56,0.4)] flex items-center gap-3 text-sm md:text-base uppercase tracking-wider" data-target="req-maestria">
                    <i class="fas fa-user-graduate text-lg"></i> Maestría
                </button>
                <button class="tab-btn px-8 py-4 rounded-2xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all flex items-center gap-3 text-sm md:text-base uppercase tracking-wider" data-target="req-doctorado">
                    <i class="fas fa-graduation-cap text-lg"></i> Doctorado
                </button>
                <button class="tab-btn px-8 py-4 rounded-2xl border-2 border-border-bright text-text-muted hover:text-text-base hover:border-unac-yellow/50 font-bold transition-all flex items-center gap-3 text-sm md:text-base uppercase tracking-wider" data-target="req-segunda">
                    <i class="fas fa-certificate text-lg"></i> Segunda Especialidad
                </button>
            </div>

            <!-- Contenedor de Paneles de Tabs -->
            <div class="relative w-full transition-all duration-300 min-h-[500px]">
                
                <!-- PANE 1: MAESTRÍA -->
                <div class="tab-pane block opacity-100 z-10 w-full" id="req-maestria">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Requisito Académico Específico -->
                        <div class="bg-gradient-to-br from-unac-blue/20 via-bg-surface to-bg-surface border border-unac-blue/30 group-hover:border-unac-blue/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/15 transition-all"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Requisito Específico</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Grado de Bachiller</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Copia simple del **Grado Académico de Bachiller** registrado oficialmente ante la SUNEDU (o constancia de egreso original para egresados recientes, sujeta a regularización posterior).
                                </p>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-blue/10 border border-unac-blue/20 text-unac-blue text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-check-circle"></i> Verificación SUNEDU
                                </span>
                            </div>
                        </div>
                        
                        <!-- 2. Requisitos de Carpeta General -->
                        <div class="bg-bg-surface border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -bottom-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Expediente General</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-6 leading-tight tracking-tight">Carpeta Personal</h3>
                                
                                <ul class="space-y-4 text-xs text-text-muted">
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-id-card text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Identidad:</strong> Copia legible de DNI, CE o Pasaporte vigente.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-camera text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Fotografía:</strong> Reciente a color con fondo blanco, tamaño carnet (JPG).</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-receipt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Derecho:</strong> Recibo de pago oficial de inscripción al proceso de selección.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-exchange-alt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Constancias:</strong> Para traslados externos o grados extranjeros.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-file-invoice"></i> Archivos Digitales
                                </span>
                            </div>
                        </div>

                        <!-- 3. Formatos & Descargas -->
                        <div class="bg-gradient-to-b from-bg-surface to-bg-surface/40 border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300">
                            <div class="absolute -right-20 -top-20 w-44 h-44 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Descargas Oficiales</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Expediente Digital</h3>
                                
                                <div class="space-y-3.5 mt-6">
                                    <a href="https://posgrado.unac.edu.pe/formatos/FORMATO%20HOJA%20DE%20VIDA_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Hoja de Vida Académica</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/FICHA%20DE%20INSCRIPCION%20ADMISION_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Ficha de Inscripción</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/declaracion-jurada-2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Declaración Jurada</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/PDF/UNIVERSIDAD%20NACIONAL%20DEL%20CALLAO_guia%20de%20postulante.pdf" target="_blank" class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-pdf"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Guía del Postulante</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">Formato PDF</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="text-text-muted text-[10px] italic">
                                    * Documentación obligatoria para el expediente.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANE 2: DOCTORADO -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="req-doctorado">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Requisitos Académicos Específicos -->
                        <div class="bg-gradient-to-br from-unac-blue/20 via-bg-surface to-bg-surface border border-unac-blue/30 group-hover:border-unac-blue/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/15 transition-all"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Requisitos Específicos</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Estudios de Doctorado</h3>
                                
                                <div class="space-y-4 mt-6">
                                    <div>
                                        <h4 class="font-bold text-text-base text-sm mb-1">1. Grado de Maestro</h4>
                                        <p class="text-text-muted text-xs leading-relaxed">
                                            Copia simple del Grado Académico de Maestro registrado oficialmente ante la SUNEDU.
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-text-base text-sm mb-1">2. Proyecto de Tesis</h4>
                                        <p class="text-text-muted text-xs leading-relaxed">
                                            Propuesta preliminar de investigación alineada con las líneas doctorales oficiales de la EPG.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-blue/10 border border-unac-blue/20 text-unac-blue text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-check-circle"></i> Doble Requisito Académico
                                </span>
                            </div>
                        </div>
                        
                        <!-- 2. Requisitos de Carpeta General -->
                        <div class="bg-bg-surface border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -bottom-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Expediente General</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-6 leading-tight tracking-tight">Carpeta Personal</h3>
                                
                                <ul class="space-y-4 text-xs text-text-muted">
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-id-card text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Identidad:</strong> Copia legible de DNI, CE o Pasaporte vigente.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-camera text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Fotografía:</strong> Reciente a color con fondo blanco, tamaño carnet (JPG).</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-receipt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Derecho:</strong> Recibo de pago oficial de inscripción al proceso de selección.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-exchange-alt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Constancias:</strong> Para traslados externos o grados extranjeros.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-file-invoice"></i> Archivos Digitales
                                </span>
                            </div>
                        </div>

                        <!-- 3. Formatos & Descargas -->
                        <div class="bg-gradient-to-b from-bg-surface to-bg-surface/40 border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300">
                            <div class="absolute -right-20 -top-20 w-44 h-44 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Descargas Oficiales</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Expediente Digital</h3>
                                
                                <div class="space-y-3.5 mt-6">
                                    <a href="https://posgrado.unac.edu.pe/formatos/FORMATO%20HOJA%20DE%20VIDA_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Hoja de Vida Académica</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/FICHA%20DE%20INSCRIPCION%20ADMISION_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Ficha de Inscripción</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/declaracion-jurada-2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Declaración Jurada</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/modelo-propuesta-proyecto-investigacion.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Modelo Proyecto Tesis</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="text-text-muted text-[10px] italic">
                                    * Propuesta doctoral de investigación obligatoria.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANE 3: SEGUNDA ESPECIALIDAD -->
                <div class="tab-pane hidden opacity-0 z-0 w-full" id="req-segunda">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full items-stretch">
                        
                        <!-- 1. Requisito Académico Específico -->
                        <div class="bg-gradient-to-br from-unac-blue/20 via-bg-surface to-bg-surface border border-unac-blue/30 group-hover:border-unac-blue/50 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/15 transition-all"></div>
                            <div>
                                <span class="text-unac-blue text-[10px] font-black uppercase tracking-widest block mb-2">Requisito Específico</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Título Profesional</h3>
                                <p class="text-text-muted text-sm leading-relaxed mb-6">
                                    Copia legalizada del **Título Profesional universitario** registrado oficialmente ante la SUNEDU.
                                </p>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-blue/10 border border-unac-blue/20 text-unac-blue text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-check-circle"></i> Verificación SUNEDU
                                </span>
                            </div>
                        </div>
                        
                        <!-- 2. Requisitos de Carpeta General -->
                        <div class="bg-bg-surface border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300 inv-card">
                            <div class="absolute -right-16 -bottom-16 w-36 h-36 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Expediente General</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-6 leading-tight tracking-tight">Carpeta Personal</h3>
                                
                                <ul class="space-y-4 text-xs text-text-muted">
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-id-card text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Identidad:</strong> Copia legible de DNI, CE o Pasaporte vigente.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-camera text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Fotografía:</strong> Reciente a color con fondo blanco, tamaño carnet (JPG).</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-receipt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Derecho:</strong> Recibo de pago oficial de inscripción al proceso de selección.</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <i class="fas fa-exchange-alt text-unac-yellow mt-0.5 shrink-0 text-sm"></i>
                                        <span><strong>Constancias:</strong> Para traslados externos o grados extranjeros.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-wider">
                                    <i class="fas fa-file-invoice"></i> Archivos Digitales
                                </span>
                            </div>
                        </div>

                        <!-- 3. Formatos & Descargas -->
                        <div class="bg-gradient-to-b from-bg-surface to-bg-surface/40 border border-border-bright hover:border-unac-yellow/30 rounded-3xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden group transition-all duration-300">
                            <div class="absolute -right-20 -top-20 w-44 h-44 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                            <div>
                                <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest block mb-2">Descargas Oficiales</span>
                                <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-3xl mb-6 shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </div>
                                <h3 class="text-2xl font-black text-text-base mb-3 leading-tight tracking-tight">Expediente Digital</h3>
                                
                                <div class="space-y-3.5 mt-6">
                                    <a href="https://posgrado.unac.edu.pe/formatos/FORMATO%20HOJA%20DE%20VIDA_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Hoja de Vida Académica</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/FICHA%20DE%20INSCRIPCION%20ADMISION_2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Ficha de Inscripción</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/formatos/declaracion-jurada-2026-A.docx" download class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-word"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Declaración Jurada</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">DOCX</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-down text-xs transition-transform duration-300 group-hover/btn:translate-y-0.5"></i>
                                    </a>

                                    <a href="https://posgrado.unac.edu.pe/PDF/UNIVERSIDAD%20NACIONAL%20DEL%20CALLAO_guia%20de%20postulante.pdf" target="_blank" class="group/btn flex items-center justify-between p-3.5 bg-bg-base/80 hover:bg-unac-yellow text-text-base hover:text-bg-base border border-border-bright hover:border-transparent rounded-2xl transition-all duration-300 shadow-sm">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-9 rounded-xl bg-unac-yellow/10 text-unac-yellow group-hover/btn:bg-bg-base/20 group-hover/btn:text-bg-base flex items-center justify-center text-base transition-colors">
                                                <i class="far fa-file-pdf"></i>
                                            </div>
                                            <div class="text-left">
                                                <span class="font-bold text-xs block leading-none mb-1">Guía del Postulante</span>
                                                <span class="text-text-muted group-hover/btn:text-bg-base/80 text-[9px] uppercase font-bold tracking-wider">Formato PDF</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/btn:translate-x-0.5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="border-t border-border-bright pt-4 mt-6">
                                <span class="text-text-muted text-[10px] italic">
                                    * Documentación obligatoria para el expediente.
                                </span>
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

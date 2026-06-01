<?php 
$baseUrl = '../../';
$pageTitle = 'Formatos y Tutoriales | Admisión Posgrado';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
<script src="' . $baseUrl . 'Admision/admision.js"></script>
<script defer src="' . $baseUrl . 'assets/js/modules/social-animations.js"></script>
';
require_once __DIR__ . '/../../includes/header.php';
?>

    <!-- Estilos Adicionales Específicos para Efectos Premium -->
    <style>
        /* Gradiente radial personalizado para la atmósfera */
        .bg-radial-gradient {
            background: radial-gradient(circle at center, rgba(251, 202, 56, 0.04) 0%, transparent 65%);
        }
        /* Custom scrollbar para la página general */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #050811;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--unac-yellow, #fcca38);
        }
    </style>

    <!-- Hero Section (Intacto) -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Recursos de Admisión
                <span class="highlight">FORMATOS Y TUTORIALES</span>
            </h1>
            <p>Guías paso a paso y documentos oficiales para tu postulación</p>
        </div>
    </section>

    <!-- Contenido Principal: Recursos y Guías en Flujo Vertical Natural -->
    <section class="relative bg-[#050811] py-20 lg:py-28 overflow-hidden" id="recursos-section">
        <!-- Luces de Atmósfera en el Fondo -->
        <div class="absolute top-1/4 left-1/10 w-[500px] h-[500px] rounded-full bg-unac-yellow/5 blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/10 w-[600px] h-[600px] rounded-full bg-unac-blue/5 blur-[130px] pointer-events-none"></div>
        
        <div class="site-container max-w-5xl mx-auto px-6">
            <div class="flex flex-col gap-24 lg:gap-32 w-full">
                
                <!-- Sección 1: Formatos de Admisión -->
                <section id="seccion-formatos" class="scroll-mt-32">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <span class="w-8 h-px bg-unac-yellow"></span>
                        <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest">Recursos oficiales - Fase 01</span>
                    </div>
                    <h2 class="text-3xl lg:text-5xl font-black text-white mb-6 tracking-tight">
                        Formatos de <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-amber-400">Admisión</span>
                    </h2>
                    <p class="text-white/50 text-sm lg:text-base leading-relaxed mb-10 max-w-3xl">
                        Descarga y completa los documentos obligatorios requeridos para formalizar tu proceso de inscripción en los programas de la Escuela de Posgrado.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Ficha de Inscripción -->
                        <div class="group relative bg-white/[0.01] border border-white/5 backdrop-blur-md rounded-2xl p-6 hover:border-unac-yellow/30 hover:bg-white/[0.02] hover:-translate-y-1 transition-all duration-500 flex flex-col justify-between h-full">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-unac-yellow/0 via-unac-yellow/0 to-unac-yellow/[0.02] opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 border border-unac-yellow/10 flex items-center justify-center text-unac-yellow text-xl group-hover:scale-110 transition-transform duration-300">
                                        <i class="far fa-file-alt"></i>
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[9px] font-black uppercase tracking-wider">Word Editable</span>
                                </div>
                                <h3 class="text-lg lg:text-xl font-bold text-white mb-2 group-hover:text-unac-yellow transition-colors">Formato Ficha de Inscripción</h3>
                                <p class="text-white/40 text-xs lg:text-sm leading-relaxed mb-6">
                                    Documento principal para registrar tus datos personales, académicos y el programa de posgrado al cual postulas.
                                </p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/FICHA%20DE%20INSCRIPCION%20ADMISION_2026-A.docx" class="inline-flex items-center justify-center gap-2.5 w-full bg-white/[0.03] border border-white/5 text-white/80 font-bold py-3.5 px-4 rounded-xl group-hover:bg-gradient-to-r group-hover:from-unac-yellow group-hover:to-amber-500 group-hover:text-bg-base group-hover:border-transparent group-hover:shadow-[0_4px_15px_rgba(251,202,56,0.15)] transition-all duration-300 text-xs tracking-wider uppercase" download>
                                <i class="fas fa-download"></i> Descargar Documento
                            </a>
                        </div>

                        <!-- Hoja de Vida -->
                        <div class="group relative bg-white/[0.01] border border-white/5 backdrop-blur-md rounded-2xl p-6 hover:border-unac-yellow/30 hover:bg-white/[0.02] hover:-translate-y-1 transition-all duration-500 flex flex-col justify-between h-full">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-unac-yellow/0 via-unac-yellow/0 to-unac-yellow/[0.02] opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 border border-unac-yellow/10 flex items-center justify-center text-unac-yellow text-xl group-hover:scale-110 transition-transform duration-300">
                                        <i class="far fa-address-card"></i>
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[9px] font-black uppercase tracking-wider">Word Editable</span>
                                </div>
                                <h3 class="text-lg lg:text-xl font-bold text-white mb-2 group-hover:text-unac-yellow transition-colors">Formato Hoja de Vida - CV</h3>
                                <p class="text-white/40 text-xs lg:text-sm leading-relaxed mb-6">
                                    Plantilla estructurada para el llenado de tu trayectoria profesional, méritos académicos e investigación científica.
                                </p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/FORMATO%20HOJA%20DE%20VIDA_2026-A.docx" class="inline-flex items-center justify-center gap-2.5 w-full bg-white/[0.03] border border-white/5 text-white/80 font-bold py-3.5 px-4 rounded-xl group-hover:bg-gradient-to-r group-hover:from-unac-yellow group-hover:to-amber-500 group-hover:text-bg-base group-hover:border-transparent group-hover:shadow-[0_4px_15px_rgba(251,202,56,0.15)] transition-all duration-300 text-xs tracking-wider uppercase" download>
                                <i class="fas fa-download"></i> Descargar Documento
                            </a>
                        </div>

                        <!-- Declaración Jurada -->
                        <div class="group relative bg-white/[0.01] border border-white/5 backdrop-blur-md rounded-2xl p-6 hover:border-unac-yellow/30 hover:bg-white/[0.02] hover:-translate-y-1 transition-all duration-500 flex flex-col justify-between h-full md:col-span-2">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-unac-yellow/0 via-unac-yellow/0 to-unac-yellow/[0.02] opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 border border-unac-yellow/10 flex items-center justify-center text-unac-yellow text-xl group-hover:scale-110 transition-transform duration-300">
                                        <i class="far fa-handshake"></i>
                                    </div>
                                    <div>
                                        <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[9px] font-black uppercase tracking-wider block w-max mb-1">Word Editable</span>
                                        <h3 class="text-lg lg:text-xl font-bold text-white group-hover:text-unac-yellow transition-colors">Declaración Jurada (2026-A)</h3>
                                    </div>
                                </div>
                                <p class="text-white/40 text-xs lg:text-sm leading-relaxed max-w-md">
                                    Declaración formal obligatoria que certifica la veracidad de los documentos presentados y tu compromiso académico.
                                </p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/declaracion-jurada-2026-A.docx" class="inline-flex items-center justify-center gap-2.5 w-full bg-white/[0.03] border border-white/5 text-white/80 font-bold py-3.5 px-4 rounded-xl group-hover:bg-gradient-to-r group-hover:from-unac-yellow group-hover:to-amber-500 group-hover:text-bg-base group-hover:border-transparent group-hover:shadow-[0_4px_15px_rgba(251,202,56,0.15)] transition-all duration-300 text-xs tracking-wider uppercase" download>
                                <i class="fas fa-download"></i> Descargar Documento
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Sección 2: Proyectos de Investigación -->
                <section id="seccion-proyectos" class="scroll-mt-32">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <span class="w-8 h-px bg-unac-yellow"></span>
                        <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest">Recursos oficiales - Fase 02</span>
                    </div>
                    <h2 class="text-3xl lg:text-5xl font-black text-white mb-6 tracking-tight">
                        Proyectos de <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-amber-400">Investigación</span>
                    </h2>
                    <p class="text-white/50 text-sm lg:text-base leading-relaxed mb-10 max-w-3xl">
                        Estructura tu propuesta científica siguiendo la metodología y la directiva formal de la Escuela de Posgrado para tu ingreso y tesis.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Esquema de Proyecto -->
                        <div class="group relative bg-white/[0.01] border border-white/5 backdrop-blur-md rounded-2xl p-6 hover:border-unac-yellow/30 hover:bg-white/[0.02] hover:-translate-y-1 transition-all duration-500 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 border border-unac-yellow/10 flex items-center justify-center text-unac-yellow text-xl group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[9px] font-black uppercase tracking-wider">Formato Word</span>
                                </div>
                                <h3 class="text-lg lg:text-xl font-bold text-white mb-2 group-hover:text-unac-yellow transition-colors">Formato Proyecto de Investigación</h3>
                                <p class="text-white/40 text-xs lg:text-sm leading-relaxed mb-6">
                                    Esquema y plantilla sugerida para plantear la fundamentación, objetivos y metodología de tu propuesta de tesis.
                                </p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/modelo-propuesta-proyecto-investigacion.docx" class="inline-flex items-center justify-center gap-2.5 w-full bg-white/[0.03] border border-white/5 text-white/80 font-bold py-3.5 px-4 rounded-xl group-hover:bg-gradient-to-r group-hover:from-unac-yellow group-hover:to-amber-500 group-hover:text-bg-base group-hover:border-transparent group-hover:shadow-[0_4px_15px_rgba(251,202,56,0.15)] transition-all duration-300 text-xs tracking-wider uppercase" download>
                                <i class="fas fa-download"></i> Descargar Documento
                            </a>
                        </div>

                        <!-- Directiva de Proyecto -->
                        <div class="group relative bg-white/[0.01] border border-white/5 backdrop-blur-md rounded-2xl p-6 hover:border-unac-yellow/30 hover:bg-white/[0.02] hover:-translate-y-1 transition-all duration-500 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-12 h-12 rounded-xl bg-red-500/10 border border-red-500/20 flex items-center justify-center text-red-400 text-xl group-hover:scale-110 transition-transform duration-300">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-[9px] font-black uppercase tracking-wider">Normativa PDF</span>
                                </div>
                                <h3 class="text-lg lg:text-xl font-bold text-white mb-2 group-hover:text-unac-yellow transition-colors">Directiva de Investigación</h3>
                                <p class="text-white/40 text-xs lg:text-sm leading-relaxed mb-6">
                                    Manual normativo oficial que describe todos los lineamientos éticos, estructurales y metodológicos requeridos.
                                </p>
                            </div>
                            <a href="https://posgrado.unac.edu.pe/formatos/directiva-proyecto-investigacion.pdf" class="inline-flex items-center justify-center gap-2.5 w-full bg-white/[0.03] border border-white/5 text-white/80 font-bold py-3.5 px-4 rounded-xl group-hover:bg-gradient-to-r group-hover:from-unac-yellow group-hover:to-amber-500 group-hover:text-bg-base group-hover:border-transparent group-hover:shadow-[0_4px_15px_rgba(251,202,56,0.15)] transition-all duration-300 text-xs tracking-wider uppercase" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Visualizar Directiva
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Sección 3: Guías y Manuales -->
                <section id="seccion-guias" class="scroll-mt-32">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <span class="w-8 h-px bg-unac-yellow"></span>
                        <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest">Recursos oficiales - Fase 03</span>
                    </div>
                    <h2 class="text-3xl lg:text-5xl font-black text-white mb-6 tracking-tight">
                        Guías y <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-amber-400">Manuales de Usuario</span>
                    </h2>
                    <p class="text-white/50 text-sm lg:text-base leading-relaxed mb-10 max-w-3xl">
                        Herramientas didácticas de apoyo para aprender a gestionar tu ingreso, habilitar tus credenciales institucionales, realizar pagos e interactuar con el sistema académico.
                    </p>
                    
                    <div class="flex flex-col gap-4">
                        <!-- Manual Ingresantes -->
                        <a href="https://posgrado.unac.edu.pe/tutoriales/Manual_para_ingresantes_de_%20Posgrado_1.pdf" target="_blank" class="group flex items-center justify-between p-5 bg-white/[0.01] border border-white/5 rounded-2xl hover:border-unac-yellow/30 hover:bg-white/[0.02] transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center w-11 h-11 rounded-xl bg-red-500/10 text-red-400 shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="far fa-file-pdf text-lg"></i>
                                </div>
                                <div class="truncate">
                                    <span class="text-white font-bold block text-sm lg:text-base group-hover:text-unac-yellow transition-colors truncate">Manual para Ingresantes Posgrado</span>
                                    <span class="text-[11px] text-white/30 block mt-0.5 truncate">Procedimiento general e inducción para el estudiante matriculado</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/40 group-hover:border-unac-yellow/50 group-hover:text-unac-yellow transition-all duration-300 shrink-0">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </div>
                        </a>

                        <!-- Correo Institucional -->
                        <a href="https://posgrado.unac.edu.pe/tutoriales/Manual_para_ingresar_al_correo_institucional.pdf" target="_blank" class="group flex items-center justify-between p-5 bg-white/[0.01] border border-white/5 rounded-2xl hover:border-unac-yellow/30 hover:bg-white/[0.02] transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center w-11 h-11 rounded-xl bg-red-500/10 text-red-400 shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="far fa-file-pdf text-lg"></i>
                                </div>
                                <div class="truncate">
                                    <span class="text-white font-bold block text-sm lg:text-base group-hover:text-unac-yellow transition-colors truncate">Manual Correo Institucional</span>
                                    <span class="text-[11px] text-white/30 block mt-0.5 truncate">Activación del buzón institucional UNAC y primer ingreso</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/40 group-hover:border-unac-yellow/50 group-hover:text-unac-yellow transition-all duration-300 shrink-0">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </div>
                        </a>

                        <!-- Pagos y Trámites -->
                        <a href="https://posgrado.unac.edu.pe/tutoriales/manual-pagos-tramites-academicos.pdf" target="_blank" class="group flex items-center justify-between p-5 bg-white/[0.01] border border-white/5 rounded-2xl hover:border-unac-yellow/30 hover:bg-white/[0.02] transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center w-11 h-11 rounded-xl bg-red-500/10 text-red-400 shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="far fa-file-pdf text-lg"></i>
                                </div>
                                <div class="truncate">
                                    <span class="text-white font-bold block text-sm lg:text-base group-hover:text-unac-yellow transition-colors truncate">Manual para Realizar y Pagar Trámite Académico</span>
                                    <span class="text-[11px] text-white/30 block mt-0.5 truncate">Guía de facturación, pasarelas bancarias y gestiones internas</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/40 group-hover:border-unac-yellow/50 group-hover:text-unac-yellow transition-all duration-300 shrink-0">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </div>
                        </a>

                        <!-- Constancia SUNEDU -->
                        <a href="https://posgrado.unac.edu.pe/tutoriales/guia-constancia-de-inscripcion-2025-v06.pdf" target="_blank" class="group flex items-center justify-between p-5 bg-white/[0.01] border border-white/5 rounded-2xl hover:border-unac-yellow/30 hover:bg-white/[0.02] transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center w-11 h-11 rounded-xl bg-red-500/10 text-red-400 shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="far fa-file-pdf text-lg"></i>
                                </div>
                                <div class="truncate">
                                    <span class="text-white font-bold block text-sm lg:text-base group-hover:text-unac-yellow transition-colors truncate">Manual Constancia de Inscripción de Grado o Título</span>
                                    <span class="text-[11px] text-white/30 block mt-0.5 truncate">Procedimiento formal de verificación ante el registro de la SUNEDU</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/40 group-hover:border-unac-yellow/50 group-hover:text-unac-yellow transition-all duration-300 shrink-0">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </div>
                        </a>

                        <!-- Sistema SGA -->
                        <a href="https://sga.unac.edu.pe/security/Login_FS.html" target="_blank" class="group flex items-center justify-between p-5 bg-white/[0.01] border border-white/5 rounded-2xl hover:border-unac-yellow/30 hover:bg-white/[0.02] transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center w-11 h-11 rounded-xl bg-unac-blue/10 text-unac-blue-light shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-laptop-code text-base"></i>
                                </div>
                                <div class="truncate">
                                    <span class="text-white font-bold block text-sm lg:text-base group-hover:text-unac-yellow transition-colors truncate">Sistema de Gestión Académico (SGA)</span>
                                    <span class="text-[11px] text-white/30 block mt-0.5 truncate">Acceso directo a la plataforma de intranet de alumnos y docentes</span>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/5 flex items-center justify-center text-white/40 group-hover:border-unac-yellow/50 group-hover:text-unac-yellow transition-all duration-300 shrink-0">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </div>
                        </a>
                    </div>
                </section>

                <!-- Sección 4: Video Tutorial -->
                <section id="seccion-video" class="scroll-mt-32">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <span class="w-8 h-px bg-unac-yellow"></span>
                        <span class="text-unac-yellow text-[10px] font-black uppercase tracking-widest">Recursos oficiales - Fase 04</span>
                    </div>
                    <h2 class="text-3xl lg:text-5xl font-black text-white mb-6 tracking-tight">
                        Video <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-amber-400">Guía de Admisión</span>
                    </h2>
                    <p class="text-white/50 text-sm lg:text-base leading-relaxed mb-10 max-w-3xl">
                        Visualiza paso a paso el procedimiento interactivo de postulación digital, desde el registro inicial de datos hasta la carga satisfactoria de tus requisitos.
                    </p>
                    
                    <!-- Browser Mockup Premium con resplandor -->
                    <div class="w-full bg-[#090d16]/80 border border-white/10 rounded-2xl p-2 shadow-2xl relative overflow-hidden backdrop-blur-xl group hover:border-unac-yellow/20 transition-all duration-500">
                        <!-- Top Bar del Navegador -->
                        <div class="flex items-center justify-between px-4 py-2 border-b border-white/5 mb-3">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <div class="bg-white/5 text-[9px] text-white/30 px-6 py-1 rounded-md tracking-wider font-bold uppercase truncate max-w-xs md:max-w-md">
                                Guía Interactiva de Postulación - YouTube
                            </div>
                            <div class="text-white/20 text-xs">
                                <i class="fas fa-redo"></i>
                            </div>
                        </div>
                        
                        <!-- Wrapper de video 16:9 con efecto glow radial -->
                        <div class="relative w-full aspect-video rounded-xl overflow-hidden shadow-[0_0_30px_rgba(251,202,56,0.03)] group-hover:shadow-[0_0_35px_rgba(251,202,56,0.08)] transition-shadow duration-500">
                            <iframe class="absolute inset-0 w-full h-full border-0" src="https://www.youtube.com/embed/RLyCEA-coEU?si=yLM9bIdPYCL3HgzA" title="Video Tutorial de Admisión Posgrado UNAC" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>

                <!-- Sección 5: Guía del Postulante -->
                <section id="seccion-postulante" class="scroll-mt-32 pb-16">
                    <div class="w-full relative bg-gradient-to-br from-white/[0.01] to-white/[0.03] border border-white/5 rounded-3xl p-8 lg:p-12 overflow-hidden hover:border-unac-yellow/20 transition-all duration-500 flex flex-col items-center text-center">
                        <!-- Background radial glow -->
                        <div class="absolute inset-0 bg-radial-gradient from-unac-yellow/[0.03] via-transparent to-transparent pointer-events-none"></div>
                        
                        <div class="relative z-10 max-w-2xl">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-unac-yellow/15 to-amber-500/10 border border-unac-yellow/20 flex items-center justify-center text-unac-yellow text-3xl mb-8 mx-auto shadow-[0_4px_20px_rgba(251,202,56,0.2)]">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/15 text-unac-yellow text-[9px] font-black uppercase tracking-widest block mb-4 w-max mx-auto">Catálogo Completo</span>
                            <h3 class="text-2xl lg:text-4xl font-black text-white mb-4 leading-tight tracking-tight">¿Tienes dudas sobre el proceso?</h3>
                            <p class="text-white/50 text-xs lg:text-sm leading-relaxed mb-8 max-w-md mx-auto">
                                Descarga la Guía de Postulante oficial completa en formato PDF. Incluye la estructura curricular de cada programa, costos por ciclo, cronogramas y temarios para el examen de suficiencia.
                            </p>
                            
                            <a href="https://posgrado.unac.edu.pe/PDF/UNIVERSIDAD%20NACIONAL%20DEL%20CALLAO_guia%20de%20postulante.pdf" target="_blank" class="inline-flex items-center gap-3 bg-gradient-to-r from-unac-yellow to-amber-500 text-bg-base font-black px-8 py-4 rounded-full shadow-lg shadow-unac-yellow/10 hover:shadow-unac-yellow/25 hover:scale-[1.03] hover:brightness-110 active:scale-95 transition-all duration-300 uppercase tracking-widest text-[11px] lg:text-xs">
                                <i class="fas fa-file-download text-base"></i>
                                Descargar Guía Completa (.pdf)
                            </a>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

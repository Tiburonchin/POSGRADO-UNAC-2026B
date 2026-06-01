<?php 
$baseUrl = '../../';
$pageTitle = 'Requisitos de Egresados y Normativas | La Escuela';
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
                Requisitos y Normativas de
                <span class="highlight">EGRESO Y POSGRADO</span>
            </h1>
            <p>Accede a los reglamentos oficiales, directivas de tesis y líneas de investigación para estudiantes de la Escuela de Posgrado.</p>

            <!-- Dynamic Action Buttons -->
            <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 w-full justify-center mt-8 relative z-10">
                <a href="#requisitos-content" class="hero-btn-primary group relative flex items-center justify-center gap-3 px-8 py-4 bg-unac-yellow text-bg-base font-black rounded-2xl overflow-hidden shadow-[0_20px_40px_rgba(251,202,56,0.2)]">
                    <span class="relative z-10">VER NORMATIVAS</span>
                    <i class="fas fa-arrow-down relative z-10 group-hover:translate-y-1 transition-transform"></i>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                </a>
                <a href="https://sgiepgunac.com/" target="_blank" class="hero-btn-secondary group relative flex items-center justify-center gap-3 px-8 py-4 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-md">
                    <span>ACCEDER AL SGI</span>
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

    <!-- Contenido de Requisitos Rediseñado con Tailwind -->
    <section class="py-20 px-4 bg-bg-base flex flex-col items-center relative overflow-hidden" id="requisitos-content">
        
        <!-- Decoration Gradients -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-unac-blue/5 blur-[120px]"></div>
            <div class="absolute bottom-[20%] right-[-10%] w-[30%] h-[30%] rounded-full bg-unac-yellow/5 blur-[100px]"></div>
        </div>

        <div class="site-container relative z-10 flex flex-col gap-16 md:gap-28 lg:gap-36 w-full">
            
            <!-- 3. REQUISITOS PARA EGRESAR Y NORMAS (Premium Bento Grid Layout) -->
            <div class="req-section w-full" id="requisitos-adicionales">
                <div class="mb-12 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-sm tracking-widest uppercase mb-4">
                        <i class="fas fa-scroll"></i> Finalización de Estudios
                    </div>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Requisitos <span class="text-unac-yellow">para Egresar y Normativas</span></h2>
                    <p class="text-text-muted text-lg max-w-2xl mx-auto">Reglamentos, directivas de investigación y guías complementarias de graduación estructuradas de forma limpia.</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full mt-6"></div>
                </div>
                
                <!-- Bento Grid Layout ultra premium -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 w-full">
                    <!-- Tarjeta Principal 1 (Proyecto Tesis) - md:col-span-1 lg:col-span-3 -->
                    <div class="md:col-span-1 lg:col-span-3 bg-gradient-to-br from-unac-blue/20 to-bg-surface border-2 border-unac-blue/20 rounded-3xl p-8 flex flex-col justify-between shadow-lg relative overflow-hidden group hover:border-unac-blue/50 transition-all duration-300">
                        <div class="absolute -right-16 -top-16 w-36 h-36 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/15 transition-all"></div>
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-unac-blue/10 text-unac-blue flex items-center justify-center text-2xl mb-6">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3 class="text-2xl font-black text-text-base mb-3 leading-tight">Proyecto de Tesis</h3>
                            <p class="text-text-muted text-base leading-relaxed mb-6">
                                Formulación e inscripción formal del proyecto. Puede iniciarse oficialmente desde el **primer ciclo aprobado** del programa a través de la plataforma institucional.
                            </p>
                        </div>
                        <a href="https://sgiepgunac.com/" target="_blank" class="inline-flex items-center gap-2 bg-unac-yellow hover:bg-unac-yellow/90 text-bg-base font-bold px-6 py-3.5 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg w-full justify-center text-sm">
                            <i class="fas fa-laptop-code"></i> Acceder SGA / SGI <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <!-- Tarjeta 2 (Reglamento de Grados) - md:col-span-1 lg:col-span-3 -->
                    <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/resoluciones-consejo-universitario/2024/286-24-CU%20MODIFICACION%20DEL%20REGLAMENTO%20DE%20GRADOS%20Y%20TITULOS--.pdf" target="_blank" class="md:col-span-1 lg:col-span-3 bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between group inv-card">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-2xl mb-6 group-hover:scale-105 transition-transform">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-text-base mb-3 group-hover:text-unac-yellow transition-colors leading-tight">Reglamento de Grados y Títulos</h3>
                            <p class="text-text-muted text-sm leading-relaxed">Lineamientos oficiales de la EPG para la obtención del Grado Académico de Maestro, Doctor y Segundas Especialidades.</p>
                        </div>
                        <div class="flex items-center gap-2 text-unac-yellow font-bold text-sm mt-6 hover:underline">
                            Descargar Reglamento <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </a>

                    <!-- Tarjeta 3 (Directiva de Investigación) - md:col-span-1 lg:col-span-2 -->
                    <a href="https://posgrado.unac.edu.pe/formatos/DIRECTIVA-ELABORACION-PROYECTO-INFORME-004-2022.pdf" target="_blank" class="md:col-span-1 lg:col-span-2 bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-3xl p-6 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between group inv-card">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-xl mb-4 group-hover:scale-105 transition-transform">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors leading-snug mb-2">Directiva N° 004-2022-R</h4>
                            <p class="text-xs text-text-muted leading-relaxed">Lineamientos metodológicos y estructura formal para la elaboración del proyecto e informe de tesis.</p>
                        </div>
                        <div class="flex items-center gap-2 text-unac-yellow font-bold text-xs mt-4">
                            Descargar Directiva <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </a>

                    <!-- Tarjeta 4 (Reglamento de Estudios) - md:col-span-1 lg:col-span-2 -->
                    <a href="https://unac.edu.pe/wp-content/uploads/documentos/transparencia/resoluciones-consejo-universitario/2024/285-24-CU%20MODIFICACI%C3%93N%20DEL%20REGLAMENTO%20GENERAL%20DE%20ESTUDIOS--.pdf" target="_blank" class="md:col-span-1 lg:col-span-2 bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-3xl p-6 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between group inv-card">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-xl mb-4 group-hover:scale-105 transition-transform">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors leading-snug mb-2">Reglamento General</h4>
                            <p class="text-xs text-text-muted leading-relaxed">Derechos, deberes académicos, procesos de convalidación y normativas de los estudiantes.</p>
                        </div>
                        <div class="flex items-center gap-2 text-unac-yellow font-bold text-xs mt-4">
                            Ver Reglamento <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </a>

                    <!-- Tarjeta 5 (Guía del Postulante) - md:col-span-2 lg:col-span-2 -->
                    <a href="https://posgrado.unac.edu.pe/PDF/UNIVERSIDAD%20NACIONAL%20DEL%20CALLAO_guia%20de%20postulante.pdf" target="_blank" class="md:col-span-2 lg:col-span-2 bg-bg-surface border border-border-bright hover:border-unac-yellow rounded-3xl p-6 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between group inv-card">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center text-xl mb-4 group-hover:scale-105 transition-transform">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h4 class="font-bold text-text-base text-lg group-hover:text-unac-yellow transition-colors leading-snug mb-2">Guía del Postulante</h4>
                            <p class="text-xs text-text-muted leading-relaxed">Manual integral para la inducción y acompañamiento en los procesos académicos de egreso.</p>
                        </div>
                        <div class="flex items-center gap-2 text-unac-yellow font-bold text-xs mt-4">
                            Descargar PDF <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 4. LÍNEAS DE INVESTIGACIÓN Y RSU (Rediseño Estético Unificado y Premium) -->
            <div class="req-section w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch w-full">
                    
                    <!-- Lado Izquierdo: Líneas de Investigación (md:col-span-7) -->
                    <div class="lg:col-span-7 bg-bg-surface border border-border-bright rounded-3xl p-8 md:p-10 shadow-lg flex flex-col justify-between relative overflow-hidden group hover:border-unac-yellow/30 transition-all duration-300 inv-card">
                        <div class="absolute -right-20 -bottom-20 w-44 h-44 bg-unac-yellow/5 rounded-full blur-2xl group-hover:bg-unac-yellow/10 transition-all"></div>
                        <div>
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow font-bold text-xs tracking-widest uppercase mb-6">
                                <i class="fas fa-project-diagram"></i> Rigor Científico
                            </div>
                            <h3 class="text-3xl font-black text-text-base mb-6 leading-tight">Líneas de <span class="text-unac-yellow">Investigación</span></h3>
                            
                            <!-- Lista en Dos Columnas Limpias -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ciencias de la Tierra y del Ambiente</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ciencias Sociales y Desarrollo Humano</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ingeniería y Tecnología</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ciencias de la Salud</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ciencias de la Educación</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-check-circle text-unac-yellow text-lg mt-1 flex-shrink-0"></i>
                                    <span class="text-text-muted font-medium text-base">Ciencias Naturales</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 border-t border-border-bright pt-6">
                            <a href="https://www.unac.edu.pe/images/transparencia/documentos/resoluciones-consejo-universitario/2019/261-19-CU%20LINEAS%20DE%20INVESTIGACI%C3%93N%20UNAC%20-%20MODIFICADA%20%20%20anexo.pdf" target="_blank" class="inline-flex items-center gap-2 text-unac-yellow hover:text-unac-yellow/90 font-bold transition-all text-sm group">
                                Ver Resolución Rectoral Oficial <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lado Derecho: Compromiso RSU (md:col-span-5) -->
                    <div class="lg:col-span-5 bg-gradient-to-b from-unac-blue/20 to-bg-surface border-2 border-unac-blue/20 rounded-3xl p-8 md:p-10 shadow-lg flex flex-col justify-between relative overflow-hidden group hover:border-unac-blue/50 transition-all duration-300">
                        <div class="absolute -right-20 -top-20 w-44 h-44 bg-unac-blue/5 rounded-full blur-2xl group-hover:bg-unac-blue/10 transition-all"></div>
                        <div>
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-unac-blue/10 border border-unac-blue/20 text-unac-blue font-bold text-xs tracking-widest uppercase mb-6">
                                <i class="fas fa-hand-holding-heart"></i> Responsabilidad Social
                            </div>
                            <h3 class="text-3xl font-black text-text-base mb-6 leading-tight">Compromiso <span class="text-unac-blue">con la RSU</span></h3>
                            
                            <p class="text-text-muted text-base leading-relaxed mb-6">
                                Fundamentamos nuestra labor en la formación con sentido ético, la investigación aplicada al territorio y la transferencia científica.
                            </p>
                            
                            <!-- Lista con Checkmarks de la RSU -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-2.5 h-2.5 rounded-full bg-unac-blue"></div>
                                    <span class="text-sm font-semibold text-text-base">Formación de Alto Nivel Ético</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-2.5 h-2.5 rounded-full bg-unac-blue"></div>
                                    <span class="text-sm font-semibold text-text-base">Investigación de Impacto Territorial</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-2.5 h-2.5 rounded-full bg-unac-blue"></div>
                                    <span class="text-sm font-semibold text-text-base">Gestión de Conocimiento Abierto</span>
                                </div>
                            </div>
                        </div>
                        
                        <p class="text-xs text-text-muted italic mt-8 pt-4 border-t border-border-bright">
                            Optar por la Escuela de Posgrado-UNAC es convertirte en un líder de cambio para el bien común.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5. Preguntas Frecuentes (Acordeón Académico) -->
            <div class="req-section w-full max-w-4xl mx-auto mb-12">
                <div class="mb-10 text-center">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-text-base mb-4 tracking-tight">Preguntas <span class="text-unac-yellow">Frecuentes Académicas</span></h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-unac-yellow to-transparent mx-auto rounded-full"></div>
                </div>

                <div class="space-y-4 accordion-container">
                    <!-- Item 1 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-base md:text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow shrink-0"></i> ¿Cuándo se puede iniciar la presentación del proyecto de tesis?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon shrink-0"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">De acuerdo con las directivas vigentes de la Escuela de Posgrado, la formulación y presentación formal del proyecto de tesis puede iniciarse a partir del primer ciclo académico aprobado por el estudiante. Todo trámite debe canalizarse vía el Sistema de Gestión de Investigación (SGI).</div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-base md:text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow shrink-0"></i> ¿Son obligatorios los registros SUNEDU para posgrados extranjeros?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon shrink-0"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Sí. Todo grado o título obtenido en universidades extranjeras debe contar con el registro correspondiente emitido por la SUNEDU (Superintendencia Nacional de Educación Superior Universitaria) para ser validado legalmente en el expediente de admisión.</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-bg-surface border border-border-bright rounded-2xl overflow-hidden shadow-sm transition-colors transition-shadow duration-300 hover:border-unac-yellow/50 accordion-item inv-card">
                        <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none accordion-header">
                            <span class="font-bold text-text-base text-base md:text-lg flex items-center gap-3">
                                <i class="fas fa-question-circle text-unac-yellow shrink-0"></i> ¿Qué grados académicos previos se necesitan para postular?
                            </span>
                            <i class="fas fa-chevron-down text-text-muted transition-transform duration-300 accordion-icon shrink-0"></i>
                        </button>
                        <div class="accordion-content px-6 h-0 overflow-hidden text-text-muted text-sm md:text-base leading-relaxed border-t-0 border-border-bright opacity-0">
                            <div class="py-4">Para ingresar a una Maestría se requiere contar con el Grado Académico de Bachiller. Para programas de Doctorado, se requiere el Grado de Maestro o, de ser admitido temporalmente, constancia oficial de egresado de maestría. Las Segundas Especialidades exigen contar con el Título Profesional universitario.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../../includes/social-sidebar.php'; ?>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>

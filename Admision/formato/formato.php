<?php 
$baseUrl = '../../';
$pageTitle = 'Formatos y Tutoriales | Admisión Posgrado';
require_once __DIR__ . '/../../includes/header.php';
?>

    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Recursos de Admisión
                <span class="highlight">FORMATOS Y TUTORIALES</span>
            </h1>
            <p>Guías paso a paso y documentos oficiales para tu postulación</p>
        </div>
    </section>

    <section class="formats-section reveal">
        <div class="formats-container">
            <div class="formats-grid">
                <!-- Card 1: Proceso de Admisión -->
                <div class="format-card">
                    <div class="card-icon-wrapper">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="card-header">
                        <h3>Formatos</h3>
                        <span class="card-subtitle">PROCESO DE ADMISIÓN</span>
                        <div class="card-divider"></div>
                    </div>
                    <div class="format-list">
                        <a href="Documentos/declaracion-jurada-2026-A.docx" class="format-item" download>
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Declaración Jurada (2026-A)</span>
                            </div>
                        </a>
                        <a href="Documentos/FORMATO HOJA DE VIDA_2026-A.docx" class="format-item" download>
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Formato Hoja de Vida - CV (2026-A)</span>
                            </div>
                        </a>
                        <a href="Documentos/FICHA DE INSCRIPCION ADMISION_2026-A.docx" class="format-item" download>
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Formato Ficha de Inscripción (2026-A)</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Proyectos de Investigación -->
                <div class="format-card">
                    <div class="card-icon-wrapper">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="card-header">
                        <h3>Formatos</h3>
                        <span class="card-subtitle">PROYECTOS DE INVESTIGACIÓN</span>
                        <div class="card-divider"></div>
                    </div>
                    <div class="format-list">
                        <a href="Documentos/Formato Proyecto de Investigación.docx" class="format-item" download>
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Formato Proyecto de Investigación</span>
                            </div>
                        </a>
                        <a href="https://posgrado.unac.edu.pe/formatos/directiva-proyecto-investigacion.pdf" class="format-item" target="_blank">
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Directiva Proyecto de Investigación</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Guías y MANUALES -->
                <div class="format-card">
                    <div class="card-icon-wrapper">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="card-header">
                        <h3>Guías y</h3>
                        <span class="card-subtitle">MANUALES</span>
                        <div class="card-divider"></div>
                    </div>
                    <div class="format-list">
                        <a href="https://posgrado.unac.edu.pe/tutoriales/Manual_para_ingresantes_de_%20Posgrado_1.pdf" class="format-item" target="_blank">
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Manual para Ingresantes Posgrado</span>
                            </div>
                        </a>
                        <a href="https://posgrado.unac.edu.pe/tutoriales/Manual_para_ingresar_al_correo_institucional.pdf" class="format-item" target="_blank">
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Manual para Ingresar al correo institucional</span>
                            </div>
                        </a>
                        <a href="Documentos/Guia_Inscripcion_GED.pdf" class="format-item" download>
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Sistema de Gestión Académico</span>
                            </div>
                        </a>
                        <a href="https://posgrado.unac.edu.pe/tutoriales/manual-pagos-tramites-academicos.pdf" class="format-item" target="_blank">
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Manual para realizar y pagar trámite académico</span>
                            </div>
                        </a>
                        <a href="https://posgrado.unac.edu.pe/tutoriales/guia-constancia-de-inscripcion-2025-v06.pdf" class="format-item" target="_blank">
                            <div class="pdf-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="format-info">
                                <span class="format-name">Manual obtener constancia de inscripción de grado o título (SUNEDU)</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>Admision/admision.css">
    <script src="<?= $baseUrl ?>Admision/admision.js"></script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<?php 
$baseUrl = '../../';
$pageTitle = 'Proceso de Admisión | La Escuela';
require_once __DIR__ . '/../../includes/header.php';
?>

    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestro
                <span class="highlight">PROCESO DE ADMISIÓN DE POSGRADO</span>
            </h1>
            <p>Descubre el proceso de admisión y los requisitos necesarios para formar parte de nuestra comunidad académica.</p>
        </div>
    </section>

    <section class="tutorial-section reveal">
        <div class="tutorial-container">
            <div class="tutorial-badge">
                <i class="fas fa-play-circle"></i> VIDEO TUTORIAL
            </div>
            <h2 class="tutorial-title">¿Cómo subir mi carpeta de postulante?</h2>
            <p class="tutorial-desc">Mira nuestro video explicativo con todos los pasos del proceso de admisión</p>

            <div class="browser-mockup">
                <div class="browser-header">
                    <div class="browser-dots">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="browser-content">
                    <video controls preload="metadata">
                        <source src="media/Guía_de_Postulación_UNAC.mp4" type="video/mp4">
                        Tu navegador no soporta el formato de video.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section reveal">
        <div class="process-container">
            <div class="section-header">
                <h2>Proceso de Admisión</h2>
                <div class="divider"></div>
                <p>Sigue estos pasos para completar tu postulación exitosamente</p>
            </div>

            <div class="process-layout">
                <!-- Sidebar Tabs -->
                <div class="process-sidebar">
                    <div class="process-step active" data-step="1">
                        <div class="step-number">01</div>
                        <div class="step-info">
                            <h3>Inscripción</h3>
                            <p>Regístrate en nuestro sistema</p>
                        </div>
                        <i class="fas fa-user-edit step-icon"></i>
                    </div>
                    <div class="process-step" data-step="2">
                        <div class="step-number">02</div>
                        <div class="step-info">
                            <h3>Requisitos</h3>
                            <p>Verifica los documentos</p>
                        </div>
                        <i class="fas fa-clipboard-check step-icon"></i>
                    </div>
                    <div class="process-step" data-step="3">
                        <div class="step-number">03</div>
                        <div class="step-info">
                            <h3>Pago</h3>
                            <p>Realiza el pago de inscripción</p>
                        </div>
                        <i class="fas fa-credit-card step-icon"></i>
                    </div>
                    <div class="process-step" data-step="4">
                        <div class="step-number">04</div>
                        <div class="step-info">
                            <h3>Documentos</h3>
                            <p>Sube tu carpeta digital</p>
                        </div>
                        <i class="fas fa-folder-open step-icon"></i>
                    </div>
                    <div class="process-step" data-step="5">
                        <div class="step-number">05</div>
                        <div class="step-info">
                            <h3>Revisión</h3>
                            <p>Validación y confirmación</p>
                        </div>
                        <i class="fas fa-check-circle step-icon"></i>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="process-content-area">
                    <!-- Step 1 Content -->
                    <div class="process-content active" id="content-step-1">
                        <span class="step-pill">Paso 1 de 5</span>
                        <h2>Inscripción</h2>
                        <div class="content-divider"></div>
                        
                        <h3 class="content-subtitle">Completa el formulario de inscripción</h3>
                        <ol class="content-list">
                            <li><strong>Accede al formulario oficial:</strong> Haz clic en el botón de abajo para ingresar.</li>
                            <li><strong>Completa todos los campos</strong> con tus datos reales y actualizados (nombres, apellidos, DNI, correo, etc.).</li>
                            <li><strong>Verifica que la información sea correcta</strong> antes de enviar. Los datos erróneos pueden impedir tu registro.</li>
                            <li>Guarda el comprobante o captura de tu registro para cualquier consulta futura.</li>
                        </ol>

                        <div class="info-box">
                            <i class="fas fa-info-circle"></i>
                            <p><strong>Recuerda:</strong> Solo quienes estén correctamente inscritos podrán continuar con los siguientes pasos del proceso de admisión.</p>
                        </div>

                        <a href="https://posgrado.unac.edu.pe/inscripcion/" class="btn-primary" target="_blank">
                            Ir al formulario de inscripción <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    
                    <!-- Step 2 Content -->
                    <div class="process-content" id="content-step-2">
                        <span class="step-pill">Paso 2 de 5</span>
                        <h2>Requisitos</h2>
                        <div class="content-divider"></div>
                        <h3 class="content-subtitle">Cumplir con los requisitos</h3>
                        <p style="color: var(--text-muted); margin-bottom: 20px;">Los <strong>costos y documentos requeridos</strong> varían según el tipo de programa al que postules:</p>
                        
                        <ul class="content-bullets">
                            <li><strong>Maestría:</strong> Copia del Grado Académico de Bachiller. Se acepta la ficha de registro de SUNEDU.</li>
                            <li><strong>Doctorado:</strong> Copia del Grado Académico de Maestro o constancia de egresado. Se acepta la ficha de registro de SUNEDU y Proyecto de Investigación que se desarrollará como tesis doctoral.</li>
                            <li><strong>Segunda Especialidad:</strong> Copia del Título Profesional universitario. Se acepta la ficha de registro de SUNEDU.</li>
                        </ul>

                        <p style="color: var(--text-muted); margin-bottom: 20px;">Requisitos generales para postular:</p>
                        <ul class="content-bullets">
                            <li>Copia legible del DNI, Carnet de Extranjería o Pasaporte vigente.</li>
                            <li>Fotografía actual a color, tamaño carnet y con fondo blanco (según normas SUNEDU).</li>
                            <li>Formatos oficiales: estos serán llenados mediante nuestro sistema.</li>
                            <li>Para traslados: Constancia de admisión de la universidad de origen y sílabos autenticados de los cursos.</li>
                            <li>Los grados obtenidos en el extranjero deben estar debidamente registrados en SUNEDU.</li>
                        </ul>

                        <p style="color: var(--text-muted); margin-bottom: 20px;">Antes de avanzar, verifica cuidadosamente:</p>
                        <ul class="content-bullets">
                            <li>Revisa la lista de documentos obligatorios para tu programa.</li>
                            <li>Prepara una <strong>foto de perfil reciente</strong>, nítida y con fondo blanco, en formato JPG o PNG.</li>
                            <li>Escanea tus documentos originales en buena calidad y formato PDF.</li>
                            <li>Verifica que tus nombres y apellidos coincidan exactamente con tus documentos oficiales.</li>
                        </ul>

                        <a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php" class="btn-primary" style="margin-top: 20px;">
                            Ver requisitos y costos <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    
                    <!-- Step 3 Content -->
                    <div class="process-content" id="content-step-3">
                        <span class="step-pill">Paso 3 de 5</span>
                        <h2>Pago</h2>
                        <div class="content-divider"></div>
                        <h3 class="content-subtitle">Realizar el pago de Inscripción</h3>
                        <p style="color: var(--text-muted); margin-bottom: 20px;">El <strong>monto del pago de inscripción</strong> varía según el programa al que postules:</p>
                        
                        <ul class="content-bullets">
                            <li><strong>Maestría:</strong> S/. 200 para este programa.</li>
                            <li><strong>Doctorado:</strong> S/. 250 para este programa.</li>
                            <li><strong>Segunda Especialidad:</strong> S/. 120 para este programa.</li>
                        </ul>

                        <p style="color: var(--text-muted); font-style: italic; margin-bottom: 24px; line-height: 1.6;">
                            El precio indicado está sujeto a cambios según el TUPA, documento oficial que regula los procedimientos y costos de la Universidad Nacional del Callao. Puedes revisar el TUPA <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" style="color: var(--unac-blue-light); text-decoration: none; font-weight: 600;">aquí</a>.
                        </p>

                        <p style="color: var(--text-muted); margin-bottom: 20px;">Las cuentas <strong>Scotiabank</strong> autorizadas son las siguientes:</p>
                        
                        <ul class="content-bullets" style="list-style: none;">
                            <li>
                                <strong>Maestría y Doctorado:</strong><br>
                                <span style="display: inline-block; padding-left: 15px; margin-top: 5px;">CCI (Código de Cuenta Interbancaria): <strong>009-100-000003747336-90</strong></span><br>
                                <span style="display: inline-block; padding-left: 15px;">N° de Cuenta Corriente: <strong>000-3747336</strong> (Scotiabank)</span>
                            </li>
                            <li>
                                <strong>Segunda Especialidad:</strong><br>
                                <span style="display: inline-block; padding-left: 15px; margin-top: 5px;">CCI (Código de Cuenta Interbancaria): <strong>009-100-000001797042-97</strong></span><br>
                                <span style="display: inline-block; padding-left: 15px;">N° de Cuenta Corriente: <strong>000-1797042</strong> (Scotiabank)</span>
                            </li>
                        </ul>

                        <p style="color: var(--text-muted); margin-top: 24px;">Una vez realizado el pago, <strong>debes guardar el voucher del pago</strong> puesto que en carpeta de postulante lo tendrá que subir al sistema.</p>
                    </div>

                    <!-- Step 4 Content -->
                    <div class="process-content" id="content-step-4">
                        <span class="step-pill">Paso 4 de 5</span>
                        <h2>Documentos</h2>
                        <div class="content-divider"></div>
                        <h3 class="content-subtitle">Enviar los documentos</h3>
                        <p style="color: var(--text-muted); margin-bottom: 20px;">En este paso deberás <strong>subir todos los documentos obligatorios</strong> que exige el programa al que postulas. Los requisitos pueden variar según si es Maestría, Doctorado o Segunda Especialidad.</p>

                        <p style="color: var(--text-muted); margin-bottom: 20px; font-weight: 700;">¿Cómo acceder?:</p>
                        <ul class="content-bullets">
                            <li>Las credenciales de acceso para el sistema son:
                                <ul style="list-style: circle; padding-left: 20px; margin-top: 10px;">
                                    <li style="margin-bottom: 8px;"><strong>DNI:</strong> Tu número de DNI</li>
                                </ul>
                            </li>
                        </ul>

                        <p style="color: var(--text-muted); margin-bottom: 20px; font-weight: 700;">Recomendaciones:</p>
                        <ul class="content-bullets">
                            <li>Todos los archivos deben estar en formato PDF, legibles y actualizados.</li>
                            <li>La <strong>foto de perfil</strong> debe ser reciente, fondo blanco y en buena calidad. Puedes verificar tu foto en <a href="https://siucarne.sunedu.gob.pe/carne/validacion" target="_blank" style="color: var(--unac-blue-light); text-decoration: underline;">SUNEDU</a>.</li>
                            <li>Verifica que los nombres y apellidos coincidan con tus documentos oficiales.</li>
                            <li>Revisa la lista de requisitos antes de enviar para evitar observaciones.</li>
                        </ul>

                        <a href="https://posgrado.unac.edu.pe/GED-test/login.php" class="btn-primary" style="margin-top: 20px;" target="_blank">
                            Ir a mi carpeta de postulante <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Step 5 Content -->
                    <div class="process-content" id="content-step-5">
                        <span class="step-pill">Paso 5 de 5</span>
                        <h2>Revisión y confirmación</h2>
                        <div class="content-divider"></div>
                        <h3 class="content-subtitle">Proceso de validación</h3>
                        
                        <ol class="content-list">
                            <li><strong>Revisión de documentos:</strong> El equipo de admisión evaluará que todos tus documentos estén completos, legibles y cumplan con los requisitos del programa.</li>
                            <li><strong>Notificación de observaciones:</strong> Si falta algún documento o hay algún error, recibirás una notificación al correo que registraste o podrás verlo en la plataforma de seguimiento de postulante.</li>
                            <li><strong>Subsanación:</strong> Si tienes observaciones, deberás corregirlas y volver a subir los documentos solicitados para continuar el proceso.</li>
                            <li><strong>Confirmación:</strong> Una vez que tu carpeta esté completa y validada, recibirás la confirmación oficial para pasar a la siguiente etapa.</li>
                        </ol>

                        <div class="warning-box">
                            <i class="fas fa-exclamation-triangle"></i>
                            <p><strong>Importante:</strong> Revisa tu correo y la plataforma de postulante con frecuencia para no retrasar tu proceso de admisión.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>Admision/admision.css">
    <script src="<?= $baseUrl ?>Admision/admision.js"></script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

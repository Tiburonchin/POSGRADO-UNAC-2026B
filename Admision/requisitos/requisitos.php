<?php 
$baseUrl = '../../';
$pageTitle = 'Requisitos y Costos | La Escuela';
require_once __DIR__ . '/../../includes/header.php';
?>

    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestros
                <span class="highlight">REQUISITOS Y COSTOS</span>
            </h1>
            <p>Descubre los documentos necesarios y las tarifas para los programas de posgrado.</p>
        </div>
    </section>

    <!-- Contenido de Requisitos -->
    <section class="requirements-section reveal">
        <div class="requirements-container">
            <h2 class="requirements-title">Requisitos Generales</h2>
            <div class="requirements-header-divider"></div>

            <div class="requirements-card">
                <p>El expediente completo debe ser enviado en formato digital al correo electrónico de la Unidad de Posgrado de la facultad correspondiente, incluyendo los siguientes documentos:</p>
                
                <ul class="requirements-list">
                    <li>
                        <i class="fas fa-check"></i>
                        <span>Copia legible del DNI, Carnet de Extranjería o Pasaporte vigente.</span>
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        <span>Fotografía actual a color, tamaño carnet y con fondo blanco (según normas SUNEDU).</span>
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        <span>Formatos oficiales: Hoja de Vida, Ficha de Inscripción y Declaración Jurada, debidamente firmados.</span>
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        <span>Para traslados: Constancia de admisión de la universidad de origen y sílabos autenticados de los cursos.</span>
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        <span>Los grados obtenidos en el extranjero deben estar debidamente registrados en SUNEDU.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="requirements-container reveal" style="margin-top: 60px;">
            <h2 class="requirements-title">Requisitos Específicos</h2>
            <div class="requirements-header-divider"></div>

            <div class="specific-tabs">
                <button class="specific-tab-btn active" data-target="req-maestria">Maestría</button>
                <button class="specific-tab-btn" data-target="req-doctorado">Doctorado</button>
                <button class="specific-tab-btn" data-target="req-segunda">Segunda Especialidad</button>
            </div>

            <div class="requirements-card">
                <div class="specific-pane active" id="req-maestria">
                    <ul class="requirements-list">
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Copia del Grado Académico de Bachiller. Se acepta la ficha de registro de SUNEDU.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="specific-pane" id="req-doctorado">
                    <ul class="requirements-list">
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Copia del Grado Académico de Maestro o constancia de egresado. Se acepta la ficha de registro de SUNEDU.</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Proyecto de Investigación que se desarrollará como tesis doctoral.</span>
                        </li>
                    </ul>
                </div>

                <div class="specific-pane" id="req-segunda">
                    <ul class="requirements-list">
                        <li>
                            <i class="fas fa-check"></i>
                            <span>Copia del Título Profesional universitario. Se acepta la ficha de registro de SUNEDU.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="requirements-container reveal" style="margin-top: 80px;">
            <h2 class="requirements-title">Inversión económica y duración del programa</h2>
            <div class="requirements-header-divider"></div>

            <div class="specific-tabs">
                <button class="specific-tab-btn active" data-target="inv-maestria">Maestría</button>
                <button class="specific-tab-btn" data-target="inv-doctorado">Doctorado</button>
                <button class="specific-tab-btn" data-target="inv-segunda">Segunda Especialidad</button>
            </div>

            <div class="investment-content-area">
                <!-- Maestría -->
                <div class="specific-pane active" id="inv-maestria">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN</span>
                            <span class="inv-amount">S/ 200</span>
                            <span class="inv-desc">Pago único</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">MATRÍCULA</span>
                            <span class="inv-amount">S/ 100</span>
                            <span class="inv-desc">Por ciclo</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">PENSIÓN MENSUAL</span>
                            <span class="inv-amount">S/ 500</span>
                            <span class="inv-desc">(4 pagos por semestre)</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">DURACIÓN</span>
                            <span class="inv-amount">3</span>
                            <span class="inv-desc">Ciclos (1 año y medio)</span>
                        </div>
                    </div>
                </div>

                <!-- Doctorado -->
                <div class="specific-pane" id="inv-doctorado">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN</span>
                            <span class="inv-amount">S/ 250</span>
                            <span class="inv-desc">Pago único</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">MATRÍCULA</span>
                            <span class="inv-amount">S/ 100</span>
                            <span class="inv-desc">Por ciclo</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">PENSIÓN MENSUAL</span>
                            <span class="inv-amount">S/ 500</span>
                            <span class="inv-desc">(4 pagos por semestre)</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">DURACIÓN</span>
                            <span class="inv-amount">6</span>
                            <span class="inv-desc">Ciclos (3 años)</span>
                        </div>
                    </div>
                </div>

                <!-- Segunda Especialidad -->
                <div class="specific-pane" id="inv-segunda">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN</span>
                            <span class="inv-amount">S/ 120</span>
                            <span class="inv-desc">Pago único</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">MATRÍCULA</span>
                            <span class="inv-amount">S/ 200</span>
                            <span class="inv-desc">Por ciclo</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">PENSIÓN MENSUAL</span>
                            <span class="inv-amount">S/ 1200</span>
                            <span class="inv-desc">(4 pagos por semestre)</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">DURACIÓN</span>
                            <span class="inv-amount">2</span>
                            <span class="inv-desc">Ciclos (1 año)</span>
                        </div>
                    </div>
                </div>
            </div>

            <p style="margin-top: 30px; color: var(--text-muted); font-style: italic; font-size: 0.95rem;">
                Nota: Sujeto a reajuste a las actualizaciones del <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" style="color: var(--unac-blue-light); text-decoration: underline; font-weight: 700;">TUPA</a>.
            </p>
        </div>

        <div class="requirements-container reveal" style="margin-top: 60px;">
            <div class="payment-box">
                <p><strong>Método de Pago:</strong> Todos los pagos por derecho de inscripción deben realizarse en la <strong>Cta. Cte. del Banco Scotiabank</strong>. No olvide adjuntar el comprobante en su expediente digital.</p>
            </div>

            <h2 class="requirements-title">Presentación del proyecto de tesis</h2>
            <div class="requirements-header-divider"></div>

            <div class="specific-tabs">
                <button class="specific-tab-btn active" data-target="thesis-maestria">Maestría</button>
                <button class="specific-tab-btn" data-target="thesis-doctorado">Doctorado</button>
                <button class="specific-tab-btn" data-target="thesis-segunda">Segunda Especialidad</button>
            </div>

            <div class="investment-content-area">
                <!-- Maestría -->
                <div class="specific-pane active" id="thesis-maestria">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN DEL PROYECTO Y RECONOCIMIENTO DEL ASESOR</span>
                            <span class="inv-amount">S/ 100</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">APROBACIÓN DEL PROYECTO</span>
                            <span class="inv-amount">S/ 350</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 160</span>
                        </div>
                    </div>
                </div>

                <!-- Doctorado (Placeholders) -->
                <div class="specific-pane" id="thesis-doctorado">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN DEL PROYECTO Y RECONOCIMIENTO DEL ASESOR</span>
                            <span class="inv-amount">S/ 100</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">APROBACIÓN DEL PROYECTO</span>
                            <span class="inv-amount">S/ 400</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 160</span>
                        </div>
                    </div>
                </div>

                <!-- Segunda Especialidad (Placeholders) -->
                <div class="specific-pane" id="thesis-segunda">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">INSCRIPCIÓN DEL PROYECTO Y RECONOCIMIENTO DEL ASESOR</span>
                            <span class="inv-amount">S/ 50</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">APROBACIÓN DEL PROYECTO</span>
                            <span class="inv-amount">S/ 320</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 120</span>
                        </div>
                    </div>
                </div>
            </div>

            <p style="margin-top: 30px; color: var(--text-muted); font-style: italic; font-size: 0.95rem;">
                Nota: Sujeto a reajuste a las actualizaciones del <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" style="color: var(--unac-blue-light); text-decoration: underline; font-weight: 700;">TUPA</a>.
            </p>
        </div>

        <div class="requirements-container reveal" style="margin-top: 60px;">
            <h2 class="requirements-title">Informe final de tesis</h2>
            <div class="requirements-header-divider"></div>

            <div class="specific-tabs">
                <button class="specific-tab-btn active" data-target="report-maestria">Maestría</button>
                <button class="specific-tab-btn" data-target="report-doctorado">Doctorado</button>
                <button class="specific-tab-btn" data-target="report-segunda">Segunda Especialidad</button>
            </div>

            <div class="investment-content-area">
                <!-- Maestría -->
                <div class="specific-pane active" id="report-maestria">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">DERECHO DEL ASESOR</span>
                            <span class="inv-amount">S/ 1296</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">NOMBRAMIENTO DEL JURADO</span>
                            <span class="inv-amount">S/ 400</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 100</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">SUSTENTACIÓN</span>
                            <span class="inv-amount">S/ 200</span>
                        </div>
                    </div>
                </div>

                <!-- Doctorado -->
                <div class="specific-pane" id="report-doctorado">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">DERECHO DEL ASESOR</span>
                            <span class="inv-amount">S/ 1296</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">NOMBRAMIENTO DEL JURADO</span>
                            <span class="inv-amount">S/ 500</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 100</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">SUSTENTACIÓN</span>
                            <span class="inv-amount">S/ 300</span>
                        </div>
                    </div>
                </div>

                <!-- Segunda Especialidad -->
                <div class="specific-pane" id="report-segunda">
                    <div class="investment-grid">
                        <div class="investment-card">
                            <span class="inv-label">DERECHO DEL ASESOR</span>
                            <span class="inv-amount">S/ 800</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">NOMBRAMIENTO DEL JURADO</span>
                            <span class="inv-amount">S/ 300</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">LEVANTAMIENTO DE OBSERVACIONES</span>
                            <span class="inv-amount">S/ 80</span>
                        </div>
                        <div class="investment-card">
                            <span class="inv-label">SUSTENTACIÓN</span>
                            <span class="inv-amount">S/ 150</span>
                        </div>
                    </div>
                </div>
            </div>

            <p style="margin-top: 30px; color: var(--text-muted); font-style: italic; font-size: 0.95rem;">
                Nota: Sujeto a reajuste a las actualizaciones del <a href="https://posgrado.unac.edu.pe/formatos/TUPA.pdf" target="_blank" style="color: var(--unac-blue-light); text-decoration: underline; font-weight: 700;">TUPA</a>.
            </p>
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>Admision/admision.css">
    <script src="<?= $baseUrl ?>Admision/admision.js"></script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<?php 
$baseUrl = '../../';
$pageTitle = 'Cronograma Académico | La Escuela';
require_once __DIR__ . '/../../includes/header.php';
?>

    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestro
                <span class="highlight">CRONOGRAMA ACADÉMICO 2026-B</span>
            </h1>
            <p>Fechas importantes para el proceso de admisión y ciclo académico 2026-B.</p>
        </div>
    </section>

    <!-- Contenido del Cronograma -->
    <section class="schedule-section reveal">
        <div class="schedule-container">
            <h2 class="schedule-title">Proceso de Admisión 2026-B</h2>
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Actividad</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Inscripción de postulantes en línea</td>
                            <td>Del 01 de junio al 10 de agosto del 2026</td>
                        </tr>
                        <tr>
                            <td>Evaluación de CV y entrevista virtual</td>
                            <td>Del 19 al 20 de agosto del 2026</td>
                        </tr>
                        <tr>
                            <td>Publicación de resultados de admisión</td>
                            <td>21 de agosto de 2026</td>
                        </tr>
                        <tr>
                            <td>Presentación de documentos de admitidos</td>
                            <td>24 de agosto de 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="schedule-container reveal">
            <h2 class="schedule-title">Calendario Académico 2026-B</h2>
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Actividad</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Solicitudes de reingreso y reserva de matrícula</td>
                            <td>Del 01 de julio al 14 de agosto del 2026</td>
                        </tr>
                        <tr>
                            <td>Entrega de Programación Horaria 2026-B a URA con resolución de Consejo de Escuela de Posgrado (registrado en el SGA).</td>
                            <td>Del 17 al 21 de agosto del 2026</td>
                        </tr>
                        <tr>
                            <td>Matrícula regular (Virtual - SGA)</td>
                            <td>Del 24 al 26 de agosto del 2026</td>
                        </tr>
                        <tr>
                            <td>Matrícula extemporánea</td>
                            <td>27 de agosto de 2026</td>
                        </tr>
                        <tr>
                            <td>Matrícula especial (cursos dirigidos)</td>
                            <td>28 de agosto de 2026</td>
                        </tr>
                        <tr>
                            <td>Rectificación de matrícula de otras modalidades</td>
                            <td>31 de agosto de 2026</td>
                        </tr>
                        <tr>
                            <td>Inicio de clases y apertura del semestre académico</td>
                            <td><strong>01 de setiembre del 2026</strong></td>
                        </tr>
                        <tr>
                            <td>Fin de clases</td>
                            <td>21 de diciembre del 2026</td>
                        </tr>
                        <tr>
                            <td>Cierre de Ingreso de notas en el SGA</td>
                            <td>22 y 23 de diciembre del 2026</td>
                        </tr>
                        <tr>
                            <td>Encriptación e Impresión de Actas Finales</td>
                            <td>22 y 23 de diciembre del 2026</td>
                        </tr>
                        <tr>
                            <td>Entrega de actas a la URA (físico y digital)</td>
                            <td>24 de diciembre del 2026</td>
                        </tr>
                        <tr>
                            <td>Fin del Semestre Académico 2026-B</td>
                            <td>24 de diciembre del 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="schedule-container reveal">
            <h2 class="schedule-title">Exámenes de Subsanación 2026-B</h2>
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Actividad</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Inscripción para exámenes de subsanación en el SGA</td>
                            <td>Del 04 al 06 de marzo del 2027</td>
                        </tr>
                        <tr>
                            <td>Exámenes de subsanación y registro de notas en el SGA</td>
                            <td>Del 07 y 08 de marzo del 2027</td>
                        </tr>
                        <tr>
                            <td>Entrega de actas de subsanación a la URA (físico y digital)</td>
                            <td>Del 11 y 13 de marzo 2027</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>Admision/admision.css">
    <script src="<?= $baseUrl ?>Admision/admision.js"></script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

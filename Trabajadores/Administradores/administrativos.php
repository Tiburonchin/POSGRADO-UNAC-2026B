<?php 
$baseUrl = '../../'; 
$pageTitle = 'Administrativos | La Escuela';
$bodyType = 'administrativos';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Trabajadores/trabajadores.css">';
$extraJs = '<script src="' . $baseUrl . 'Trabajadores/trabajadores.js"></script>';

include_once '../../includes/header.php'; 
?>

<main id="content">
    <section class="hero -mt-[5.7rem] pt-[5.7rem]" id="hero">
        <div class="hero-content">
            <h1>Administrativos</h1>
            <p>Soporte y gestión</p>
        </div>
    </section>

    <section class="main-content-section reveal">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Administrativos</h2>
                <div class="divider"></div>
                <p>Descubre al equipo de administrativos que lidera la excelencia académica, la innovación y el desarrollo profesional en nuestra Escuela de Posgrado de la UNAC.</p>
            </div>

            <div class="filters-container">
                <select class="faculty-select" id="faculty-filter">
                    <option value="all">Seleccionar Facultad</option>
                </select>
            </div>

            <div class="workers-grid" id="workers-grid">
            </div>

            <div id="load-more-container" style="text-align: center; margin-top: 50px; display: none;">
                <button id="load-more-btn" class="filter-btn active" style="padding: 15px 40px; font-size: 1.1rem;">Mostrar más</button>
            </div>
        </div>
    </section>
</main>

<?php include_once '../../includes/footer.php'; ?>

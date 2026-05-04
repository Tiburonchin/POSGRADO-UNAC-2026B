<?php 
$baseUrl = '../../'; 
$pageTitle = 'Directores | La Escuela';
$bodyType = 'directores';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Trabajadores/trabajadores.css">';
$extraJs = '<script src="' . $baseUrl . 'Trabajadores/trabajadores.js"></script>';

include_once '../../includes/header.php'; 
?>

<main id="content">
    <section class="hero -mt-[5.7rem] pt-[5.7rem]" id="hero">
        <div class="hero-content">
            <h1>Directores</h1>
            <p>Excelencia en la gestión académica</p>
        </div>
    </section>

    <section class="director-featured-section reveal">
        <div id="featured-director-container">
        </div>
    </section>

    <section class="main-content-section reveal">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Directores</h2>
                <div class="divider"></div>
                <p>Conoce a los líderes académicos que guían la excelencia educativa en la Universidad Nacional del Callao</p>
            </div>

            <div class="filters-container">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="Ingeniería">Ingeniería</button>
                <button class="filter-btn" data-filter="Ciencias">Ciencias</button>
                
                <select class="faculty-select" id="faculty-filter">
                    <option value="all">Seleccionar Facultad</option>
                </select>
            </div>

            <div class="workers-grid" id="workers-grid">
            </div>
        </div>
    </section>
</main>

<?php include_once '../../includes/footer.php'; ?>

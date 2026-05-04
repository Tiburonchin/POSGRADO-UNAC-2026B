<?php 
$baseUrl = '../../'; 
$pageTitle = 'Docentes | La Escuela';
$bodyType = 'docentes';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Trabajadores/trabajadores.css">';
$extraJs = '<script src="' . $baseUrl . 'Trabajadores/trabajadores.js"></script>';

include_once '../../includes/header.php'; 
?>

<main id="content">
    <section class="hero -mt-[5.7rem] pt-[5.7rem]" id="hero">
        <div class="hero-content">
            <h1>Docentes</h1>
            <p>Plana docente de primer nivel</p>
        </div>
    </section>

    <section class="stats-section reveal">
        <div class="container stats-container">
            <div class="stat-item">
                <span class="stat-number" data-target="150">0</span><span class="stat-plus">+</span>
                <p class="stat-label">Docentes</p>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="90">0</span><span class="stat-plus">+</span>
                <p class="stat-label">Doctores</p>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="45">0</span><span class="stat-plus">+</span>
                <p class="stat-label">Magísteres</p>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="15">0</span><span class="stat-plus">+</span>
                <p class="stat-label">Investigadores</p>
            </div>
        </div>
    </section>

    <section class="main-content-section reveal">
        <div class="container">
            <div class="section-header">
                <h2>Nuestro Cuerpo Docente</h2>
                <div class="divider"></div>
                <p>Profesionales altamente calificados y comprometidos con la excelencia académica y la investigación científica en nuestra Escuela de Posgrado.</p>
            </div>

            <div class="filters-container">
                <div class="filter-group">
                    <label for="faculty-filter">Facultad:</label>
                    <select class="faculty-select" id="faculty-filter">
                        <option value="all">Todas las facultades</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="type-filter">Tipo:</label>
                    <select class="faculty-select" id="type-filter">
                        <option value="all">Todos los tipos</option>
                        <option value="DOCENTE DE PLANTA">Docente de Planta</option>
                        <option value="DOCENTE CONTRATADO">Docente Contratado</option>
                        <option value="DOCENTE VISITANTE">Docente Visitante</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="search-input">Buscar:</label>
                    <div style="position: relative;">
                        <input type="text" id="search-input" placeholder="Nombre o apellido" class="search-input">
                        <i class="fas fa-search" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: var(--unac-blue-light);"></i>
                    </div>
                </div>
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

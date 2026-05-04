<?php 
$baseUrl = $baseUrl ?? './'; 
$pageTitle = $pageTitle ?? 'Escuela de Posgrado UNAC';
?>
<?php if (!isset($skip_head)): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Assets principales -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php if (isset($extraCss)) echo $extraCss; ?>
</head>
<body data-type="<?php echo $bodyType ?? ''; ?>">
<?php require_once __DIR__ . '/page-loader.php'; ?>
<?php endif; ?>

<header class="site-header sticky top-0 z-50" id="site-header">
  <div class="header-main" id="header-main">
    <div class="site-container header-inner min-h-[4.75rem] items-center gap-3">
      <a href="<?php echo $baseUrl; ?>index.php" class="brand flex items-center shrink-0" aria-label="Escuela de Posgrado UNAC">
        <img src="<?php echo $baseUrl; ?>img/epg-logo.png" alt="EPG UNAC" class="brand-logo object-contain" />
      </a>

      <nav class="primary-nav hidden flex-1 justify-center lg:block" id="primary-nav" aria-label="Navegacion principal">
        <ul class="flex items-center justify-center gap-1 xl:gap-2">
          <li class="nav-item" data-section="escuela"><button class="mega-trigger nav-link" data-section="escuela" aria-expanded="false">La Escuela</button></li>
          <li class="nav-item" data-section="admision"><button class="mega-trigger nav-link" data-section="admision" aria-expanded="false">Admision</button></li>
          <li class="nav-item" data-section="programas"><button class="mega-trigger nav-link" data-section="programas" aria-expanded="false">Programas</button></li>
          <li class="nav-item" data-section="conocenos"><button class="mega-trigger nav-link" data-section="conocenos" aria-expanded="false">Conocenos</button></li>
          <li class="nav-item" data-section="sgi"><button class="mega-trigger nav-link" data-section="sgi" aria-expanded="false">SGI</button></li>
        </ul>
      </nav>

      <a href="<?= $baseUrl ?>Admision/INSCRIPCION/index.php" class="header-cta hidden shrink-0 items-center justify-center rounded-full px-5 py-2 text-xs font-bold uppercase tracking-[0.08em] transition lg:inline-flex lg:justify-self-end">
        Inscribirse ahora
      </a>

      <button class="menu-toggle ml-auto grid h-11 w-11 shrink-0 place-items-center transition lg:hidden" id="menu-toggle" aria-expanded="false" aria-controls="mobile-nav" aria-label="Abrir menu">
        <span class="menu-toggle-icon" aria-hidden="true">
          <span class="menu-toggle-line"></span>
          <span class="menu-toggle-line"></span>
          <span class="menu-toggle-line"></span>
        </span>
      </button>
    </div>

    <div class="mega-nav-shell hidden lg:block" id="mega-nav-shell" aria-hidden="true">
      <div class="mega-nav-panel" id="mega-nav-panel">
        <div class="site-container">
          <div class="mega-sections" id="mega-sections">
            <section class="mega-panel-content is-active" data-section="escuela" aria-hidden="false">
              <div class="mega-column">
                <h4 class="mega-column-title">Identidad</h4>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#mision-vision" class="mega-link js-identidad-link"><strong>Misión y Visión</strong><span>Principios académicos y objetivos institucionales.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#ventajas" class="mega-link js-identidad-link"><strong>Ventajas</strong><span>Lo que nos hace referentes en formación de posgrado.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="mega-link js-identidad-link"><strong>Certificaciones</strong><span>Calidad internacional avalada por estándares globales.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Nuestro Equipo</h4>
                <a href="<?= $baseUrl ?>Trabajadores/Administradores/administrativos.php" class="mega-link"><strong>Administrativos</strong><span>Equipo técnico al servicio de la formación académica.</span></a>
                <a href="<?= $baseUrl ?>Trabajadores/Directores/directores.php" class="mega-link"><strong>Directores</strong><span>Autoridades que lideran nuestros programas y gestión.</span></a>
                <a href="<?= $baseUrl ?>Trabajadores/Docentes/docentes.php" class="mega-link"><strong>Docentes</strong><span>Cuerpo académico altamente calificado y con experiencia.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Propuesta Academica</h4>
                <p>Conoce nuestra vision, estructura y gestion para potenciar tu carrera profesional.</p>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="mega-cta-link">Ver La Escuela</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="admision" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Ingreso</h4>
                <a href="#" class="mega-link"><strong>Proceso de Admision</strong><span>Ruta detallada desde la postulacion hasta la matricula.</span></a>
                <a href="#" class="mega-link"><strong>Cronograma Academico</strong><span>Calendario oficial de evaluaciones, resultados y matriculas.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Postulante</h4>
                <a href="#" class="mega-link"><strong>Requisitos y Costos</strong><span>Documentos, pagos y condiciones para cada programa.</span></a>
                <a href="#" class="mega-link"><strong>Formatos y Tutoriales</strong><span>Guias practicas para completar el proceso sin errores.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Atencion Prioritaria</h4>
                <p>Inicia tu postulacion con soporte institucional y orientacion paso a paso.</p>
                <a href="#admision-proceso" class="mega-cta-link">Ir a Admision</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="programas" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Formacion</h4>
                <a href="#" class="mega-link"><strong>Doctorados</strong><span>Investigacion avanzada para liderazgo academico y cientifico.</span></a>
                <a href="#" class="mega-link"><strong>Maestrias</strong><span>Especializacion profesional con enfoque aplicado y estrategico.</span></a>
                <a href="#" class="mega-link"><strong>Especialidades</strong><span>Trayectorias de actualizacion para sectores especificos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Soporte</h4>
                <a href="#" class="mega-link"><strong>Malla Curricular</strong><span>Estructura de cursos, creditos y resultados de aprendizaje.</span></a>
                <a href="#" class="mega-link"><strong>Becas</strong><span>Opciones de apoyo economico y beneficios institucionales.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Catalogo 2026</h4>
                <p>Explora programas por modalidad, area y perfil profesional.</p>
                <a href="#" class="mega-cta-link">Explorar Programas</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="conocenos" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Transparencia</h4>
                <a href="#" class="mega-link"><strong>Transparencia</strong><span>Informacion institucional de gestion y cumplimiento normativo.</span></a>
                <a href="#" class="mega-link"><strong>Preguntas Frecuentes</strong><span>Respuestas claras sobre tramites, procesos y servicios.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Investigacion</h4>
                <a href="#" class="mega-link"><strong>Unidad de Investigacion</strong><span>Lineas, proyectos y produccion de conocimiento aplicado.</span></a>
                <a href="#" class="mega-link"><strong>Revista Cientifica</strong><span>Difusion de articulos y resultados de investigacion.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Comunidad EPG</h4>
                <p>Conecta con nuestra cultura de investigacion, apertura y calidad academica.</p>
                <a href="#" class="mega-cta-link">Conocer EPG</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="sgi" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Sistema</h4>
                <a href="#" class="mega-link"><strong>Inicio</strong><span>Acceso central a tramites y seguimiento academico.</span></a>
                <a href="#" class="mega-link"><strong>Sistema</strong><span>Plataforma digital para estudiantes y administrativos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Gestion de Calidad</h4>
                <a href="#" class="mega-link"><strong>Documentos del SGI</strong><span>Politicas, manuales y lineamientos institucionales.</span></a>
                <a href="#" class="mega-link"><strong>Procedimientos</strong><span>Flujos operativos normalizados para cada proceso.</span></a>
                <a href="#" class="mega-link"><strong>Indicadores</strong><span>Metricas de desempeno y seguimiento de resultados.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Control de Procesos</h4>
                <p>Fortalece la calidad institucional con gestion integrada y trazable.</p>
                <a href="#" class="mega-cta-link">Ir a SGI</a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <nav class="mobile-nav hidden lg:hidden" id="mobile-nav" aria-label="Navegacion movil">
      <ul class="mobile-nav-list">
        <li class="mobile-nav-cta-item">
          <a href="<?= $baseUrl ?>Admision/INSCRIPCION/index.php" class="mobile-nav-cta header-cta-mobile">Inscribirse ahora</a>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">La Escuela<span>+</span></button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="font-bold text-unac-yellow">Ver La Escuela →</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#mision-vision" class="js-identidad-link">Misión y Visión</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#ventajas" class="js-identidad-link">Ventajas</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="js-identidad-link">Certificaciones</a></li>
            <li><a href="<?= $baseUrl ?>Trabajadores/Administradores/administrativos.php">Administrativos</a></li>
            <li><a href="<?= $baseUrl ?>Trabajadores/Directores/directores.php">Directores</a></li>
            <li><a href="<?= $baseUrl ?>Trabajadores/Docentes/docentes.php">Docentes</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">Admision<span>+</span></button>
          <ul class="mobile-submenu hidden">
            <li><a href="#admision-proceso" class="font-bold text-unac-yellow">Ir a Admision →</a></li>
            <li><a href="#">Proceso de Admision</a></li>
            <li><a href="#">Cronograma Academico</a></li>
            <li><a href="#">Requisitos y Costos</a></li>
            <li><a href="#">Formatos y Tutoriales</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">Programas<span>+</span></button>
          <ul class="mobile-submenu hidden">
            <li><a href="#" class="font-bold text-unac-yellow">Explorar Programas →</a></li>
            <li><a href="#">Doctorados</a></li>
            <li><a href="#">Maestrias</a></li>
            <li><a href="#">Especialidades</a></li>
            <li><a href="#">Malla Curricular</a></li>
            <li><a href="#">Becas</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">Conocenos<span>+</span></button>
          <ul class="mobile-submenu hidden">
            <li><a href="#" class="font-bold text-unac-yellow">Conocer EPG →</a></li>
            <li><a href="#">Transparencia</a></li>
            <li><a href="#">Unidad de Investigacion</a></li>
            <li><a href="#">Revista Cientifica</a></li>
            <li><a href="#">Preguntas Frecuentes</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">SGI<span>+</span></button>
          <ul class="mobile-submenu hidden">
            <li><a href="#" class="font-bold text-unac-yellow">Ir a SGI →</a></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Sistema</a></li>
            <li><a href="#">Documentos del SGI</a></li>
            <li><a href="#">Procedimientos</a></li>
            <li><a href="#">Indicadores</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>

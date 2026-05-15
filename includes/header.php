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

      <a href="<?= $baseUrl ?>Admision/INSCRIPCION/index.php" class="cta header-cta hidden lg:inline-flex lg:justify-self-end">
        <span class="span">Inscribirse ahora</span>
        <span class="second">
          <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
              <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
              <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
            </g>
          </svg>
        </span>
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
                <a href="<?= $baseUrl ?>LA-ESCUELA/Administradores/administrativos.php" class="mega-link"><strong>Administrativos</strong><span>Equipo técnico al servicio de la formación académica.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/Directores/directores.php" class="mega-link"><strong>Directores</strong><span>Autoridades que lideran nuestros programas y gestión.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/Docentes/docentes.php" class="mega-link"><strong>Docentes</strong><span>Cuerpo académico altamente calificado y con experiencia.</span></a>
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
                <a href="<?= $baseUrl ?>Admision/proceso/proceso.php" class="mega-link"><strong>Proceso de Admision</strong><span>Ruta detallada desde la postulacion hasta la matricula.</span></a>
                <a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php" class="mega-link"><strong>Cronograma Academico</strong><span>Calendario oficial de evaluaciones, resultados y matriculas.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Postulante</h4>
                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php" class="mega-link"><strong>Requisitos y Costos</strong><span>Documentos, pagos y condiciones para cada programa.</span></a>
                <a href="<?= $baseUrl ?>Admision/formato/formato.php" class="mega-link"><strong>Formatos y Tutoriales</strong><span>Guias practicas para completar el proceso sin errores.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Atencion Prioritaria</h4>
                <p>Inicia tu postulacion con soporte institucional y orientacion paso a paso.</p>
                <a href="<?= $baseUrl ?>Admision/proceso/proceso.php" class="mega-cta-link">Ir a Admision</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="programas" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Formacion</h4>
                <a href="<?= $baseUrl ?>programas/programas.php?type=doctorado" class="mega-link"><strong>Doctorados</strong><span>Investigacion avanzada para liderazgo academico y cientifico.</span></a>
                <a href="<?= $baseUrl ?>programas/programas.php?type=maestria" class="mega-link"><strong>Maestrias</strong><span>Especializacion profesional con enfoque aplicado y estrategico.</span></a>
                <a href="<?= $baseUrl ?>programas/programas.php?type=especialidad" class="mega-link"><strong>Especialidades</strong><span>Trayectorias de actualizacion para sectores especificos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Soporte</h4>
                <a href="<?= $baseUrl ?>programas/programas.php" class="mega-link"><strong>Malla Curricular</strong><span>Estructura de cursos, creditos y resultados de aprendizaje.</span></a>
                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php" class="mega-link"><strong>Becas</strong><span>Opciones de apoyo economico y beneficios institucionales.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Catalogo 2026</h4>
                <p>Explora programas por modalidad, area y perfil profesional.</p>
                <a href="<?= $baseUrl ?>programas/programas.php" class="mega-cta-link">Explorar Programas</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="conocenos" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Transparencia</h4>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="mega-link"><strong>Transparencia</strong><span>Informacion institucional de gestion y cumplimiento normativo.</span></a>
                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php" class="mega-link"><strong>Preguntas Frecuentes</strong><span>Respuestas claras sobre tramites, procesos y servicios.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Investigacion</h4>
                <a href="<?= $baseUrl ?>programas/programas.php?type=doctorado" class="mega-link"><strong>Unidad de Investigacion</strong><span>Lineas, proyectos y produccion de conocimiento aplicado.</span></a>
                <a href="<?= $baseUrl ?>noticias.php" class="mega-link"><strong>Revista Cientifica</strong><span>Difusion de articulos y resultados de investigacion.</span></a>
                <a href="<?= $baseUrl ?>index.php#talento-unac" class="mega-link"><strong>Talento EPG</strong><span>Red de egresados y su impacto en instituciones lideres.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Comunidad EPG</h4>
                <p>Conecta con nuestra cultura de investigacion, apertura y calidad academica.</p>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="mega-cta-link">Conocer EPG</a>
              </div>
            </section>

            <section class="mega-panel-content" data-section="sgi" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Sistema</h4>
                <a href="<?= $baseUrl ?>index.php#inicio" class="mega-link"><strong>Inicio</strong><span>Acceso central a tramites y seguimiento academico.</span></a>
                <a href="<?= $baseUrl ?>auth/login.php" class="mega-link"><strong>Sistema</strong><span>Plataforma digital para estudiantes y administrativos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Gestion de Calidad</h4>
                <a href="<?= $baseUrl ?>Admision/formato/formato.php" class="mega-link"><strong>Documentos del SGI</strong><span>Politicas, manuales y lineamientos institucionales.</span></a>
                <a href="<?= $baseUrl ?>Admision/proceso/proceso.php" class="mega-link"><strong>Procedimientos</strong><span>Flujos operativos normalizados para cada proceso.</span></a>
                <a href="<?= $baseUrl ?>index.php#noticias" class="mega-link"><strong>Indicadores</strong><span>Metricas de desempeno y seguimiento de resultados.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Control de Procesos</h4>
                <p>Fortalece la calidad institucional con gestion integrada y trazable.</p>
                <a href="<?= $baseUrl ?>auth/login.php" class="mega-cta-link">Ir a SGI</a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <nav class="mobile-nav hidden lg:hidden" id="mobile-nav" aria-label="Navegacion movil" aria-hidden="true">
      <ul class="mobile-nav-list">
        <li class="mobile-nav-caption" aria-hidden="true">
          Navegacion principal
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><i class="fa-solid fa-school mobile-toggle-icon" aria-hidden="true"></i><span>La Escuela</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="font-bold text-unac-yellow">Ver La Escuela →</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#mision-vision" class="js-identidad-link">Misión y Visión</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#ventajas" class="js-identidad-link">Ventajas</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="js-identidad-link">Certificaciones</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Administradores/administrativos.php">Administrativos</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Directores/directores.php">Directores</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Docentes/docentes.php">Docentes</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><i class="fa-solid fa-user-graduate mobile-toggle-icon" aria-hidden="true"></i><span>Admision</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>Admision/proceso/proceso.php" class="font-bold text-unac-yellow">Ir a Admision →</a></li>
            <li><a href="<?= $baseUrl ?>Admision/proceso/proceso.php">Proceso de Admision</a></li>
            <li><a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php">Cronograma Academico</a></li>
            <li><a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php">Requisitos y Costos</a></li>
            <li><a href="<?= $baseUrl ?>Admision/formato/formato.php">Formatos y Tutoriales</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><i class="fa-solid fa-layer-group mobile-toggle-icon" aria-hidden="true"></i><span>Programas</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>programas/programas.php" class="font-bold text-unac-yellow">Explorar Programas →</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=doctorado">Doctorados</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=maestria">Maestrias</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=especialidad">Especialidades</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php">Malla Curricular</a></li>
            <li><a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php">Becas</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><i class="fa-solid fa-compass mobile-toggle-icon" aria-hidden="true"></i><span>Conocenos</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="font-bold text-unac-yellow">Conocer EPG →</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones">Transparencia</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=doctorado">Unidad de Investigacion</a></li>
            <li><a href="<?= $baseUrl ?>noticias.php">Revista Cientifica</a></li>
            <li><a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php">Preguntas Frecuentes</a></li>
            <li><a href="<?= $baseUrl ?>index.php#talento-unac">Talento EPG</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><i class="fa-solid fa-shield-halved mobile-toggle-icon" aria-hidden="true"></i><span>SGI</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>auth/login.php" class="font-bold text-unac-yellow">Ir a SGI →</a></li>
            <li><a href="<?= $baseUrl ?>index.php#inicio">Inicio</a></li>
            <li><a href="<?= $baseUrl ?>auth/login.php">Sistema</a></li>
            <li><a href="<?= $baseUrl ?>Admision/formato/formato.php">Documentos del SGI</a></li>
            <li><a href="<?= $baseUrl ?>Admision/proceso/proceso.php">Procedimientos</a></li>
            <li><a href="<?= $baseUrl ?>index.php#noticias">Indicadores</a></li>
          </ul>
        </li>
        <li class="mobile-nav-cta-item flex justify-center py-2">
          <a href="<?= $baseUrl ?>Admision/INSCRIPCION/index.php" class="cta mobile-nav-cta header-cta-mobile">
            <span class="span">Inscribirse ahora</span>
            <span class="second">
              <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                </g>
              </svg>
            </span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>

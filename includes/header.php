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
  <script>
    (function () {
      try {
        if (sessionStorage.getItem('page-loader-seen')) {
          document.documentElement.classList.add('page-loader-disabled');
        }
      } catch (e) {}
    })();
  </script>
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
          <li class="nav-item" data-section="admision"><button class="mega-trigger nav-link" data-section="admision" aria-expanded="false">Admisión</button></li>
          <li class="nav-item" data-section="programas"><button class="mega-trigger nav-link" data-section="programas" aria-expanded="false">Programas</button></li>
          <li class="nav-item" data-section="investigacion"><button class="mega-trigger nav-link" data-section="investigacion" aria-expanded="false">Investigación</button></li>
          <li class="nav-item" data-section="eventos"><button class="mega-trigger nav-link" data-section="eventos" aria-expanded="false">Eventos</button></li>
          <li class="nav-item" data-section="sgi"><button class="mega-trigger nav-link" data-section="sgi" aria-expanded="false">SGI</button></li>
        </ul>
      </nav>

      <a href="<?= $baseUrl ?>INSCRIPCION/" class="cta header-cta hidden lg:inline-flex lg:justify-self-end">
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
            <!-- 1. La Escuela -->
            <section class="mega-panel-content is-active" data-section="escuela" aria-hidden="false">
              <div class="mega-column">
                <h4 class="mega-column-title">Identidad</h4>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#mision-vision" class="mega-link js-identidad-link"><strong>Misión y Visión</strong><span>Principios académicos y objetivos institucionales.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#ventajas" class="mega-link js-identidad-link"><strong>Ventajas</strong><span>Lo que nos hace referentes en formación de posgrado.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="mega-link js-identidad-link"><strong>Certificaciones</strong><span>Calidad internacional avalada por estándares globales.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Gestión Institucional</h4>
                <a href="<?= $baseUrl ?>transparencia/index.php" class="mega-link"><strong>Transparencia</strong><span>Reportes, presupuestos y resoluciones.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Nuestro Equipo</h4>
                <a href="<?= $baseUrl ?>LA-ESCUELA/Directores/directores.php" class="mega-link"><strong>Directores</strong><span>Autoridades que lideran nuestros programas.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/Docentes/docentes.php" class="mega-link"><strong>Docentes</strong><span>Cuerpo académico altamente calificado.</span></a>
                <a href="<?= $baseUrl ?>LA-ESCUELA/Administradores/administrativos.php" class="mega-link"><strong>Administrativos</strong><span>Equipo técnico al servicio de la formación.</span></a>
              </div>
            </section>

            <!-- 2. Admisión -->
            <section class="mega-panel-content" data-section="admision" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Postulante</h4>
                <a href="<?= $baseUrl ?>Admision/proceso/proceso.php" class="mega-link"><strong>Proceso de Admisión</strong><span>Ruta detallada desde la postulación hasta la matrícula.</span></a>
                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos_admision.php" class="mega-link"><strong>Requisitos de Admisión</strong><span>Documentos y expedientes necesarios para postular.</span></a>
                <a href="<?= $baseUrl ?>Admision/costos/costos_admision.php" class="mega-link"><strong>Costos de Admisión</strong><span>Derechos de inscripción para el proceso de selección.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Estudiantes</h4>
                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos_posgrado.php" class="mega-link"><strong>Requisitos Adicionales</strong><span>Reglamentos generales, tesis y obtención de grado.</span></a>
                <a href="<?= $baseUrl ?>Admision/costos/costos_adicionales.php" class="mega-link"><strong>Costos Adicionales</strong><span>Tasas asociadas a trámites, tesis y asesorías de grado.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Cronograma y Recursos</h4>
                <a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php" class="mega-link"><strong>Cronograma Académico</strong><span>Calendario oficial de evaluaciones y resultados.</span></a>
                <a href="<?= $baseUrl ?>Admision/formato/formato.php" class="mega-link"><strong>Formatos y Tutoriales</strong><span>Guías prácticas y plantillas obligatorias para descargar.</span></a>
              </div>
            </section>

            <!-- 3. Programas -->
            <section class="mega-panel-content" data-section="programas" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Formación</h4>
                <a href="<?= $baseUrl ?>programas/programas.php?type=doctorado" class="mega-link"><strong>Doctorados</strong><span>Investigación avanzada para liderazgo científico.</span></a>
                <a href="<?= $baseUrl ?>programas/programas.php?type=maestria" class="mega-link"><strong>Maestrías</strong><span>Especialización con enfoque aplicado y estratégico.</span></a>
                <a href="<?= $baseUrl ?>programas/programas.php?type=especialidad" class="mega-link"><strong>Especialidades</strong><span>Trayectorias de actualización para sectores específicos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Soporte</h4>
                <a href="<?= $baseUrl ?>programas/programas.php" class="mega-link"><strong>Malla Curricular</strong><span>Estructura de cursos, créditos y aprendizaje.</span></a>
                <a href="<?= $baseUrl ?>Admision/costos/costos_admision.php" class="mega-link"><strong>Convenios</strong><span>Opciones de convenios y beneficios.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Catálogo 2026</h4>
                <p>Explora programas por modalidad y perfil profesional.</p>
                <a href="<?= $baseUrl ?>programas/programas.php" class="mega-cta-link">Explorar Programas</a>
              </div>
            </section>

            <!-- 4. Investigación (NUEVA PESTAÑA) -->
            <section class="mega-panel-content" data-section="investigacion" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Gestión</h4>
                <a href="<?= $baseUrl ?>unidad-investigacion.php" class="mega-link"><strong>Unidad de Investigación</strong><span>Administración y desarrollo de proyectos científicos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Difusión</h4>
                <a href="<?= $baseUrl ?>investigacion/revista.php" class="mega-link"><strong>Revista Científica</strong><span>Publicaciones y artículos de alto impacto.</span></a>
                <a href="<?= $baseUrl ?>investigacion/repositorio.php" class="mega-link"><strong>Repositorio Institucional</strong><span>Archivo digital de tesis y trabajos académicos.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Enfoque Científico</h4>
                <p>Conoce nuestras líneas de investigación y publicaciones.</p>
                <a href="<?= $baseUrl ?>investigacion/index.php" class="mega-cta-link">Ver Investigación</a>
              </div>
            </section>

            <!-- 5. Eventos -->
            <section class="mega-panel-content" data-section="eventos" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Actividades</h4>
                <a href="<?= $baseUrl ?>foros.php" class="mega-link"><strong>Foros</strong><span>Espacios de debate y encuentro académico.</span></a>
                <a href="<?= $baseUrl ?>noticias.php" class="mega-link"><strong>Noticias</strong><span>Últimas novedades y comunicados de la Escuela.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Programas Especiales</h4>
                <a href="<?= $baseUrl ?>ciclo-eaip.php" class="mega-link"><strong>Ciclo EAIP</strong><span>Encuentros de Actualización e Innovación de Posgrado.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">Agenda EPG</h4>
                <p>Participa en nuestras actividades y mantente informado de los eventos.</p>
                <a href="<?= $baseUrl ?>eventos.php" class="mega-cta-link">Ver Todos los Eventos</a>
              </div>
            </section>

            <!-- 6. SGI -->
            <section class="mega-panel-content" data-section="sgi" aria-hidden="true">
              <div class="mega-column">
                <h4 class="mega-column-title">Sistema</h4>
                <a href="https://sgiepgunac.com/" target="_blank" class="mega-link"><strong>Plataforma SGI</strong><span>Acceso directo al sistema para estudiantes y administrativos.</span></a>
              </div>
              <div class="mega-column">
                <h4 class="mega-column-title">Documentos Oficiales</h4>
                <a href="<?= $baseUrl ?>sgi.php#tab-capacitaciones" class="mega-link"><strong>Capacitaciones</strong><span>Recursos y grabaciones de sesiones.</span></a>
                <a href="<?= $baseUrl ?>sgi.php#tab-manuales" class="mega-link"><strong>Manuales</strong><span>Guías para el uso correcto del SGI.</span></a>
                <a href="<?= $baseUrl ?>sgi.php#tab-flujogramas" class="mega-link"><strong>Flujogramas</strong><span>Representación de procedimientos.</span></a>
                <a href="<?= $baseUrl ?>sgi.php#tab-reglamento" class="mega-link"><strong>Reglamento</strong><span>Normativas y directivas institucionales.</span></a>
              </div>
              <div class="mega-column mega-highlight">
                <h4 class="mega-column-title">SGI Posgrado</h4>
                <p>Consulta y gestiona tu investigación de manera rápida y segura.</p>
                <a href="<?= $baseUrl ?>sgi.php" class="mega-cta-link">Ver SGI</a>
              </div>
            </section>

          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Nav -->
    <nav class="mobile-nav hidden lg:hidden" id="mobile-nav" aria-label="Navegación móvil" aria-hidden="true">
      <ul class="mobile-nav-list">
        <li class="mobile-nav-caption" aria-hidden="true">
          Menú Principal
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>La Escuela</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php" class="font-bold text-unac-yellow">Identidad</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#mision-vision" class="js-identidad-link">Misión y Visión</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#ventajas" class="js-identidad-link">Ventajas</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/index.php#certificaciones" class="js-identidad-link">Certificaciones</a></li>
            <li><a href="<?= $baseUrl ?>transparencia/index.php" class="font-bold text-unac-yellow mt-2 block">Gestión Institucional</a></li>
            <li><a href="<?= $baseUrl ?>transparencia/index.php">Transparencia</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Directores/directores.php" class="font-bold text-unac-yellow mt-2 block">Nuestro Equipo</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Directores/directores.php">Directores</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Docentes/docentes.php">Docentes</a></li>
            <li><a href="<?= $baseUrl ?>LA-ESCUELA/Administradores/administrativos.php">Administrativos</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>Admisión</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><span class="font-bold text-unac-yellow block mt-2">Postulante</span></li>
            <li><a href="<?= $baseUrl ?>Admision/proceso/proceso.php">Proceso de Admisión</a></li>
            <li><a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php">Cronograma Académico</a></li>
            <li><a href="<?= $baseUrl ?>Admision/requisitos/requisitos_admision.php">Requisitos de Admisión</a></li>
            <li><a href="<?= $baseUrl ?>Admision/costos/costos_admision.php">Costos de Admisión</a></li>
            <li><span class="font-bold text-unac-yellow block mt-4">Estudiantes</span></li>
            <li><a href="<?= $baseUrl ?>Admision/requisitos/requisitos_posgrado.php">Requisitos Adicionales</a></li>
            <li><a href="<?= $baseUrl ?>Admision/costos/costos_adicionales.php">Costos Adicionales</a></li>
            <li><a href="<?= $baseUrl ?>Admision/formato/formato.php">Formatos y Tutoriales</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>Programas</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>programas/programas.php" class="font-bold text-unac-yellow">Formación</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=doctorado">Doctorados</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=maestria">Maestrías</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php?type=especialidad">Especialidades</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php" class="font-bold text-unac-yellow mt-2 block">Soporte</a></li>
            <li><a href="<?= $baseUrl ?>programas/programas.php">Malla Curricular</a></li>
            <li><a href="<?= $baseUrl ?>Admision/costos/costos_admision.php">Convenios</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>Investigación</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>unidad-investigacion.php" class="font-bold text-unac-yellow">Gestión</a></li>
            <li><a href="<?= $baseUrl ?>unidad-investigacion.php">Unidad de Investigación</a></li>
            <li><a href="<?= $baseUrl ?>investigacion/revista.php" class="font-bold text-unac-yellow mt-2 block">Difusión</a></li>
            <li><a href="<?= $baseUrl ?>investigacion/revista.php">Revista Científica</a></li>
            <li><a href="<?= $baseUrl ?>investigacion/repositorio.php">Repositorio Institucional</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>Eventos</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>eventos.php" class="font-bold text-unac-yellow">Actividades</a></li>
            <li><a href="<?= $baseUrl ?>foros.php">Foros</a></li>
            <li><a href="<?= $baseUrl ?>noticias.php">Noticias</a></li>
            <li><a href="<?= $baseUrl ?>ciclo-eaip.php" class="font-bold text-unac-yellow mt-2 block">Programas Especiales</a></li>
            <li><a href="<?= $baseUrl ?>ciclo-eaip.php">Ciclo EAIP</a></li>
          </ul>
        </li>
        <li>
          <button class="mobile-section-toggle" aria-expanded="false">
            <span class="mobile-toggle-main"><span>SGI</span></span>
            <span class="mobile-toggle-symbol" aria-hidden="true">+</span>
          </button>
          <ul class="mobile-submenu hidden">
            <li><a href="<?= $baseUrl ?>sgi.php" class="font-bold text-unac-yellow">Portal SGI</a></li>
            <li><a href="https://sgiepgunac.com/" target="_blank">Plataforma Digital</a></li>
            <li><a href="<?= $baseUrl ?>sgi.php#tab-capacitaciones" class="font-bold text-unac-yellow mt-2 block">Documentos Oficiales</a></li>
            <li><a href="<?= $baseUrl ?>sgi.php#tab-capacitaciones">Capacitaciones</a></li>
            <li><a href="<?= $baseUrl ?>sgi.php#tab-manuales">Manuales</a></li>
            <li><a href="<?= $baseUrl ?>sgi.php#tab-flujogramas">Flujogramas</a></li>
            <li><a href="<?= $baseUrl ?>sgi.php#tab-reglamento">Reglamento</a></li>
          </ul>
        </li>

        <li class="mobile-nav-cta-item flex justify-center py-2">
          <a href="<?= $baseUrl ?>INSCRIPCION/" class="cta mobile-nav-cta header-cta-mobile">
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

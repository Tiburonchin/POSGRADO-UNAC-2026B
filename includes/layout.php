<?php

declare(strict_types=1);

function renderPage(string $pageTitle, string|array $contentTemplate): void
{
  $contentTemplates = is_array($contentTemplate) ? $contentTemplate : [$contentTemplate];

  foreach ($contentTemplates as $templatePath) {
    if (!file_exists($templatePath)) {
      http_response_code(500);
      echo 'Template not found.';
      return;
    }
  }

  $firstTemplateName = basename($contentTemplates[0]);
  $pageSlug = pathinfo($firstTemplateName, PATHINFO_FILENAME);
  $isHomePage = false;

  foreach ($contentTemplates as $templatePath) {
    $normalizedTemplatePath = str_replace('\\', '/', $templatePath);
    if (str_contains($normalizedTemplatePath, '/pages/home/') || basename($templatePath) === 'home.php') {
      $isHomePage = true;
      $pageSlug = 'home';
      break;
    }
  }

    ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Escuela de Posgrado de la Universidad Nacional del Callao" />
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <script>
    (function () {
      document.documentElement.setAttribute('data-theme', 'dark');
    })();
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Archivo+Black&family=Keania+One&family=Manrope:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,600;9..144,700;9..144,900&family=Rakkas&family=Saira+Stencil+One&family=Titan+One&display=swap" rel="stylesheet" />
  <?php if ($isHomePage): ?>
  <link rel="preload" as="image" href="img/epg-unac-fachada.png" />
  <?php endif; ?>
  <link rel="stylesheet" href="assets/css/output.css" />
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
  <noscript><style>#page-loader { display: none !important; }</style></noscript>
</head>
<body data-page="<?= htmlspecialchars($pageSlug, ENT_QUOTES, 'UTF-8') ?>">
  <!-- Background Ambience System -->
  <div class="bg-ambience">
    <div class="bg-ambience-grid"></div>
    <div class="bg-ambience-orb bg-ambience-orb--blue"></div>
    <div class="bg-ambience-orb bg-ambience-orb--amber"></div>
    <div class="bg-ambience-orb bg-ambience-orb--white"></div>
    <!-- Geometric Floating Shapes -->
    <div class="bg-ambience-shape" style="width: 150px; height: 150px; top: 15%; left: 10%;"></div>
    <div class="bg-ambience-shape" style="width: 100px; height: 100px; top: 65%; right: 15%;"></div>
    <div class="bg-ambience-shape" style="width: 200px; height: 200px; top: 40%; left: 80%;"></div>
  </div>
  <?php require __DIR__ . '/page-loader.php'; ?>
  <?php require __DIR__ . '/header.php'; ?>

  <main id="main-content">
    <?php foreach ($contentTemplates as $templatePath): ?>
      <?php require $templatePath; ?>
    <?php endforeach; ?>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>

  <script defer src="assets/vendor/gsap/gsap.min.js"></script>
  <script defer src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
  <script defer src="assets/vendor/gsap/Flip.min.js"></script>
  <script src="https://unpkg.com/split-type"></script>
  <script defer src="assets/js/theme.js"></script>
  <script defer src="assets/js/mega-menu.js"></script>
  <script defer src="assets/js/animations.js"></script>
  <?php if ($isHomePage): ?>
  <script defer src="assets/js/modules/hero-animations.js"></script>
  <script defer src="assets/js/modules/admision-animations.js"></script>
  <script defer src="assets/js/modules/talento-animations.js"></script>
  <script defer src="assets/js/modules/ubicacion-animations.js"></script>
  <script defer src="assets/js/modules/noticias-animations.js"></script>
  <?php endif; ?>
  <script defer src="assets/js/modules/footer-animations.js"></script>
  <script defer src="assets/js/modules/background-ambience.js"></script>
  <script defer src="assets/js/page-loader.js"></script>
</body>
</html>
<?php
}

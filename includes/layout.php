<?php

declare(strict_types=1);

function renderPage(string $pageTitle, string|array $contentTemplate): void
{
  global $extraCss, $extraJs;
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

  global $baseUrl;
  $baseUrl = $baseUrl ?? './';
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
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Barlow+Semi+Condensed:wght@700;800;900&family=Keania+One&family=Azeret+Mono:wght@700;800;900&family=Manrope:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Rakkas&family=Saira+Stencil+One&family=Titan+One&display=swap" rel="stylesheet" />
  <?php if ($isHomePage): ?>
  <link rel="preload" as="image" href="img/hero/fachada.webp" imagesrcset="img/hero/fachada.webp" type="image/webp" />
  <?php endif; ?>
  <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/output.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <?php if (isset($extraCss)) echo $extraCss; ?>
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
  <?php $skip_head = true; require __DIR__ . '/header.php'; ?>

  <main id="main-content">
    <?php foreach ($contentTemplates as $templatePath): ?>
      <?php require $templatePath; ?>
    <?php endforeach; ?>
  </main>

  <?php $skip_footer = true; require __DIR__ . '/footer.php'; ?>

  <!-- GSAP Core libs (no defer - must load first) -->
  <script src="<?= $baseUrl ?>assets/vendor/gsap/gsap.min.js"></script>
  <script src="<?= $baseUrl ?>assets/vendor/gsap/ScrollTrigger.min.js"></script>
  <script src="<?= $baseUrl ?>assets/vendor/gsap/Flip.min.js"></script>
  
  <!-- Page Loader (no defer - locks scroll immediately) -->
  <script src="<?= $baseUrl ?>assets/js/page-loader.js"></script>
  
  <!-- External libs -->
  <script src="https://unpkg.com/split-type"></script>

  <!-- Deferred scripts (load after page-loader) -->
  <script defer src="<?= $baseUrl ?>assets/js/theme.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/mega-menu.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/animations.js"></script>
  
  <!-- Hero animations (after page-loader) -->
  <?php if ($isHomePage): ?>
  <script defer src="<?= $baseUrl ?>assets/js/modules/hero-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/admision-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/talento-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/programas-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/ubicacion-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/noticias-animations.js"></script>
  <?php endif; ?>
  
  <!-- Footer & Ambient animations -->
  <script defer src="<?= $baseUrl ?>assets/js/modules/footer-animations.js"></script>
  <script defer src="<?= $baseUrl ?>assets/js/modules/background-ambience.js"></script>

  <!-- Lenis smooth scroll (only for home page) -->
  <?php if ($isHomePage): ?>
  <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
  <script>
    (function () {
      var isLoading = document.documentElement.classList.contains('is-loading');
      
      window.addEventListener('DOMContentLoaded', function () {
        window.lenis = new Lenis({
          duration: 1.2,
          easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
          orientation: 'vertical',
          gestureOrientation: 'vertical',
          smoothWheel: true,
          wheelMultiplier: 1,
          smoothTouch: false,
          touchMultiplier: 2,
          infinite: false
        });

        // If page-loader locked scroll at startup, keep Lenis locked
        if (isLoading) {
          window.lenis.stop();
        }

        function raf(time) {
          window.lenis.raf(time);
          requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        if (window.ScrollTrigger) {
          window.lenis.on('scroll', function () {
            window.ScrollTrigger.update();
          });
        }
      });
    })();
  </script>
  <?php endif; ?>
  <script defer src="<?= $baseUrl ?>assets/js/page-loader.js"></script>
</body>
</html>
<?php
}

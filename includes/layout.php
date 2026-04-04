<?php

declare(strict_types=1);

function renderPage(string $pageTitle, string $contentTemplate): void
{
    if (!file_exists($contentTemplate)) {
        http_response_code(500);
        echo 'Template not found.';
        return;
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
      var stored = localStorage.getItem('epg-theme');
      var systemDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
      var theme = stored || (systemDark ? 'dark' : 'light');
      document.documentElement.setAttribute('data-theme', theme);
    })();
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@600;700&family=Source+Sans+3:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/output.css" />
  <link rel="stylesheet" href="assets/css/mega-menu.css" />
</head>
<body>
  <?php require __DIR__ . '/header.php'; ?>

  <main id="main-content">
    <?php require $contentTemplate; ?>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/js/navigation.js"></script>
  <script src="assets/js/animations.js"></script>
  <script src="assets/js/mega-menu.js"></script>
</body>
</html>
<?php
}

<?php
require_once __DIR__ . '/includes/layout.php';

$pageTitle = 'Unidad de Investigación - Escuela de Posgrado UNAC';
$contentTemplate = __DIR__ . '/pages/unidad-investigacion.php';

global $extraCss, $extraJs;
$extraCss = '<link rel="stylesheet" href="./Admision/admision.css">';
$extraJs = '<script defer src="./assets/js/modules/unidad-investigacion-animations.js"></script>';

renderPage($pageTitle, $contentTemplate);

<?php
require_once __DIR__ . '/includes/layout.php';

$pageTitle = 'Convenios y Alianzas - Escuela de Posgrado UNAC';
$contentTemplate = __DIR__ . '/pages/convenios.php';

global $extraCss, $extraJs;
$extraCss = '<link rel="stylesheet" href="./Admision/admision.css">';
$extraJs = '<script defer src="./assets/js/modules/convenios-animations.js"></script>';

renderPage($pageTitle, $contentTemplate);

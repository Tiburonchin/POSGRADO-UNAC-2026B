<?php
require_once __DIR__ . '/includes/layout.php';

$pageTitle = 'Escuela de Posgrado UNAC';
$contentTemplate = [
	__DIR__ . '/pages/home/hero.php',
	__DIR__ . '/pages/home/programas.php',
	__DIR__ . '/pages/home/nuestro-anio.php',
	__DIR__ . '/pages/home/admision.php',
	__DIR__ . '/pages/home/noticias.php',
	__DIR__ . '/pages/home/ubicacion.php'
];

renderPage($pageTitle, $contentTemplate);

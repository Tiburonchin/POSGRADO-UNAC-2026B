<?php 
$baseUrl = '../../';
$pageTitle = 'Proceso de Admisión | La Escuela';
$bodyType = 'admision';
$extraCss = '<link rel="stylesheet" href="' . $baseUrl . 'Admision/admision.css">';
$extraJs = '<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script><script src="' . $baseUrl . 'Admision/admision.js"></script>';
require_once __DIR__ . '/../../includes/header.php';
?>

<main class="admission-process-main">
    <!-- Secciones Independientes -->
    <?php include 'sections/hero.php'; ?>
    
    <?php include 'sections/tutorial.php'; ?>
    
    <?php include 'sections/ruta.php'; ?>
</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

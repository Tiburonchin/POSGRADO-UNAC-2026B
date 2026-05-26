<?php
/**
 * PAGINA SGI - UNAC POSGRADO
 * Ubicado en la raíz del proyecto.
 */

require_once __DIR__ . '/includes/layout.php';

// Configuración de la página
$baseUrl = './'; 
$pageTitle = 'Sistema de Gestión de Investigación (SGI) | Escuela de Posgrado UNAC';
$contentTemplate = __DIR__ . '/pages/sgi/sgi-content.php';

// Cargar JS extra para lógicas específicas del SGI
$extraJs = '<script src="' . $baseUrl . 'assets/js/sgi.js" defer></script>';

renderPage($pageTitle, $contentTemplate);

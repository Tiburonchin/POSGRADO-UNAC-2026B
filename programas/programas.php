<?php
/**
 * PAGINA DE PROGRAMAS - UNAC POSGRADO
 * Utiliza el layout global del proyecto
 */

require_once __DIR__ . '/../includes/layout.php';

// Configuración de la página
$baseUrl = '../'; 
$pageTitle = 'Programas Académicos | Escuela de Posgrado UNAC';
$contentTemplate = __DIR__ . '/programas-content-only.php';

// No necesitamos definir $extraCss o $extraJs aquí porque 
// programas-content-only.php ya los incluye internamente.

renderPage($pageTitle, $contentTemplate);
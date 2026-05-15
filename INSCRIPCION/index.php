<?php
/**
 * Página de Inscripción
 * Ruta: /INSCRIPCION/
 */

require_once __DIR__ . '/../includes/layout.php';

// Definir el baseUrl para que layout.php cargue correctamente los assets
$baseUrl = '../';

// Título de la página y template de contenido
$pageTitle = 'Inscripción Posgrado | UNAC';
$contentTemplate = __DIR__ . '/../pages/inscripcion/form.php';

// Los estilos y scripts específicos se manejan dentro del template para evitar duplicidad
// o conflictos con el layout principal.
$extraCss = '';
$extraJs = '
    <script>
        // Silenciar errores de extensiones (como MetaMask) para limpiar la consola
        const originalError = console.error;
        console.error = (...args) => {
            if (args[0] && typeof args[0] === "string" && (args[0].includes("MetaMask") || args[0].includes("extension"))) return;
            originalError.apply(console, args);
        };

        window.addEventListener("unhandledrejection", event => {
            if (event.reason && event.reason.message && event.reason.message.includes("MetaMask")) {
                event.preventDefault();
            }
        });
    </script>
';

renderPage($pageTitle, $contentTemplate);

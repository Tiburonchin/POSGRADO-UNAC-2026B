<?php
require_once '../auth/middleware.php';
requireRole(['superadmin', 'posgrado_unac']);

$dataFile = '../data/news.json';

// Ensure data file exists
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}

$newsData = json_decode(file_get_contents($dataFile), true) ?? [];

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        $id = uniqid();
        $titulo = $_POST['titulo'] ?? '';
        $texto_referencial = $_POST['texto_referencial'] ?? '';
        $tipo_noticia = $_POST['tipo_noticia'] ?? '';
        $cuerpo = $_POST['cuerpo'] ?? '';
        
        $imagen_ruta = '';
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['imagen']['tmp_name'];
            $fileName = basename($_FILES['imagen']['name']);
            $targetDir = '../public/uploads/images/';
            
            // Create dir if not exists
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            
            $targetFilePath = $targetDir . $id . '_' . $fileName;
            if (move_uploaded_file($tmpName, $targetFilePath)) {
                // Rel path to use in frontend
                $imagen_ruta = 'public/uploads/images/' . $id . '_' . $fileName;
            }
        }

        $newItem = [
            "id" => $id,
            "titulo" => $titulo,
            "imagen_ruta" => $imagen_ruta,
            "texto_referencial" => $texto_referencial,
            "tipo_noticia" => $tipo_noticia,
            "fecha_creacion" => date('Y-m-d'),
            "contenido_detallado" => [
                "cuerpo" => $cuerpo,
                "links" => [],
                "recursos" => [],
                "sugerencias" => []
            ]
        ];

        $newsData[] = $newItem;
        file_put_contents($dataFile, json_encode($newsData, JSON_PRETTY_PRINT));
        header("Location: noticias.php");
        exit();
    } elseif ($action === 'delete') {
        $deleteId = $_POST['id'] ?? '';
        foreach ($newsData as $index => $item) {
            if ($item['id'] === $deleteId) {
                // Delete image file if exists
                if (!empty($item['imagen_ruta']) && strpos($item['imagen_ruta'], 'public/uploads/images/') === 0) {
                    $imgPath = '../' . $item['imagen_ruta'];
                    if (file_exists($imgPath)) {
                        unlink($imgPath);
                    }
                }
                array_splice($newsData, $index, 1);
                break;
            }
        }
        file_put_contents($dataFile, json_encode($newsData, JSON_PRETTY_PRINT));
        header("Location: noticias.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Noticias - Admin</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
</head>
<body class="bg-bg-base text-text-base min-h-screen p-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4 border-b border-border-base pb-6">
            <h1 class="text-3xl font-bold text-unac-yellow">Gestión de Noticias</h1>
            <div class="flex items-center gap-4">
                <span class="text-text-muted text-sm font-medium">Hola, <?= htmlspecialchars($_SESSION['username']) ?></span>
                <a href="../auth/logout.php" class="px-4 py-2 bg-red-500/10 text-red-400 border border-red-500/30 rounded-lg hover:bg-red-500/20 transition-colors text-xs font-bold">Cerrar Sesión</a>
            </div>
        </div>

        <div class="mb-6 flex justify-end">
            <a href="noticia_editor.php" class="flex items-center gap-2 bg-unac-yellow text-bg-base px-6 py-3 rounded-full font-bold hover:bg-yellow-400 transition-all shadow-[0_0_15px_rgba(251,202,56,0.3)]">
                <i class="ph-bold ph-plus"></i> Nueva Noticia
            </a>
        </div>

        <div class="bg-surface-elevated/30 backdrop-blur-xl border border-border-base/50 p-6 rounded-3xl shadow-unac-lg">
            <h2 class="text-xl font-bold mb-6">Noticias Publicadas</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-text-base">
                    <thead class="text-xs text-text-muted uppercase bg-bg-surface/50 border-b border-border-base">
                        <tr>
                            <th class="px-6 py-4">Imagen</th>
                            <th class="px-6 py-4">Título</th>
                            <th class="px-6 py-4">Categoría</th>
                            <th class="px-6 py-4">Fecha</th>
                            <th class="px-6 py-4 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($newsData)): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-text-muted">No hay noticias registradas.</td>
                        </tr>
                        <?php else: ?>
                            <?php foreach(array_reverse($newsData) as $item): ?>
                            <tr class="border-b border-border-base hover:bg-bg-soft/50 transition-colors group">
                                <td class="px-6 py-4 w-24">
                                    <?php if(!empty($item['imagen_ruta'])): ?>
                                        <div class="w-16 h-12 rounded-lg overflow-hidden border border-border-base shrink-0">
                                            <img src="<?= strpos($item['imagen_ruta'], 'http') === 0 ? $item['imagen_ruta'] : '../' . $item['imagen_ruta'] ?>" class="w-full h-full object-cover" alt="Img">
                                        </div>
                                    <?php else: ?>
                                        <div class="w-16 h-12 bg-bg-surface rounded-lg border border-border-base flex items-center justify-center text-xs text-text-muted">No img</div>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 font-medium max-w-xs truncate" title="<?= htmlspecialchars($item['titulo']) ?>">
                                    <?= htmlspecialchars($item['titulo']) ?>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-unac-blue/20 text-unac-blue-light text-xs rounded-full border border-unac-blue/30"><?= htmlspecialchars($item['tipo_noticia'] ?? 'N/A') ?></span>
                                </td>
                                <td class="px-6 py-4 text-text-muted"><?= htmlspecialchars($item['fecha_creacion'] ?? 'N/A') ?></td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity">
                                        <a href="../noticia.php?id=<?= urlencode($item['id']) ?>" target="_blank" title="Ver detalle" class="text-text-muted hover:text-unac-yellow p-2 rounded-lg hover:bg-bg-surface transition-colors">
                                            <i class="ph ph-eye text-lg"></i>
                                        </a>
                                        <a href="noticia_editor.php?id=<?= urlencode($item['id']) ?>" title="Editar" class="text-unac-blue-light hover:text-unac-blue p-2 rounded-lg hover:bg-unac-blue/10 transition-colors">
                                            <i class="ph ph-pencil-simple text-lg"></i>
                                        </a>
                                        <form action="" method="POST" class="inline m-0" onsubmit="return confirm('¿Eliminar definitivamente esta noticia? Esta acción no se puede deshacer.');">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                                            <button type="submit" title="Eliminar" class="text-red-400 hover:text-red-300 p-2 rounded-lg hover:bg-red-500/10 transition-colors">
                                                <i class="ph ph-trash text-lg"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

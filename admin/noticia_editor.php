<?php
require_once '../auth/middleware.php';
requireRole(['superadmin', 'posgrado_unac']);

$dataFile = '../data/news.json';
$newsData = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) ?? [] : [];

$id = $_GET['id'] ?? null;
$noticia = null;

if ($id) {
    foreach ($newsData as $item) {
        if ($item['id'] === $id) {
            $noticia = $item;
            break;
        }
    }
    if (!$noticia) {
        header("Location: noticias.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $actionId = $_POST['id'] ?? uniqid();
    $isNew = empty($_POST['id']);
    
    $titulo = $_POST['titulo'] ?? '';
    $texto_referencial = $_POST['texto_referencial'] ?? '';
    $tipo_noticia = $_POST['tipo_noticia'] ?? '';
    $cuerpo = $_POST['cuerpo'] ?? ''; // From hidden input set by Quill
    
    $imagen_ruta = $isNew ? '' : $noticia['imagen_ruta'];
    
    // Process Image
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['imagen']['tmp_name'];
        $fileName = basename($_FILES['imagen']['name']);
        $targetDir = '../public/uploads/images/';
        if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
        
        $targetFilePath = $targetDir . $actionId . '_' . $fileName;
        if (move_uploaded_file($tmpName, $targetFilePath)) {
            // Delete old image if exists
            if (!$isNew && !empty($imagen_ruta) && strpos($imagen_ruta, 'public/uploads/images/') === 0) {
                if (file_exists('../' . $imagen_ruta)) unlink('../' . $imagen_ruta);
            }
            $imagen_ruta = 'public/uploads/images/' . $actionId . '_' . $fileName;
        }
    }

    // Process Links
    $links = [];
    $linkLabels = $_POST['link_labels'] ?? [];
    $linkUrls = $_POST['link_urls'] ?? [];
    for ($i = 0; $i < count($linkLabels); $i++) {
        if (!empty(trim($linkLabels[$i])) && !empty(trim($linkUrls[$i]))) {
            $links[] = [
                'label' => trim($linkLabels[$i]),
                'url' => trim($linkUrls[$i])
            ];
        }
    }

    // Process Recursos (Keep old ones, add new ones)
    $recursos = $isNew ? [] : ($noticia['contenido_detallado']['recursos'] ?? []);
    
    // Remove resources marked for deletion
    $deleteRecursos = $_POST['delete_recursos'] ?? [];
    foreach ($deleteRecursos as $delIdx) {
        if (isset($recursos[$delIdx])) {
            $recPath = '../' . $recursos[$delIdx]['url'];
            if (file_exists($recPath) && strpos($recursos[$delIdx]['url'], 'public/uploads/docs/') === 0) {
                unlink($recPath);
            }
            unset($recursos[$delIdx]);
        }
    }
    $recursos = array_values($recursos); // reindex

    // Upload new resources
    if (isset($_FILES['recursos_files'])) {
        $recDir = '../public/uploads/docs/';
        if (!is_dir($recDir)) mkdir($recDir, 0777, true);
        
        $recNames = $_POST['recursos_nombres'] ?? [];
        foreach ($_FILES['recursos_files']['tmp_name'] as $idx => $tmpName) {
            if ($_FILES['recursos_files']['error'][$idx] === UPLOAD_ERR_OK) {
                $fileName = basename($_FILES['recursos_files']['name'][$idx]);
                $safeName = preg_replace('/[^a-zA-Z0-9.\-_]/', '', $fileName);
                $targetFilePath = $recDir . uniqid() . '_' . $safeName;
                
                if (move_uploaded_file($tmpName, $targetFilePath)) {
                    $nombre = !empty(trim($recNames[$idx])) ? trim($recNames[$idx]) : $fileName;
                    $recursos[] = [
                        'nombre' => $nombre,
                        'url' => 'public/uploads/docs/' . basename($targetFilePath)
                    ];
                }
            }
        }
    }

    $newItem = [
        "id" => $actionId,
        "titulo" => $titulo,
        "imagen_ruta" => $imagen_ruta,
        "texto_referencial" => $texto_referencial,
        "tipo_noticia" => $tipo_noticia,
        "fecha_creacion" => $isNew ? date('Y-m-d') : $noticia['fecha_creacion'],
        "contenido_detallado" => [
            "cuerpo" => $cuerpo,
            "links" => $links,
            "recursos" => $recursos,
            "sugerencias" => $isNew ? [] : ($noticia['contenido_detallado']['sugerencias'] ?? [])
        ]
    ];

    if ($isNew) {
        $newsData[] = $newItem;
    } else {
        foreach ($newsData as $index => $item) {
            if ($item['id'] === $actionId) {
                $newsData[$index] = $newItem;
                break;
            }
        }
    }

    file_put_contents($dataFile, json_encode($newsData, JSON_PRETTY_PRINT));
    header("Location: noticias.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Editar' : 'Nueva' ?> Noticia - Admin</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .ql-toolbar.ql-snow { border-color: rgba(255,255,255,0.1); border-top-left-radius: 0.75rem; border-top-right-radius: 0.75rem; background: rgba(255,255,255,0.05); }
        .ql-container.ql-snow { border-color: rgba(255,255,255,0.1); border-bottom-left-radius: 0.75rem; border-bottom-right-radius: 0.75rem; min-height: 200px; font-size: 1rem; color: var(--text-primary); }
        .ql-snow .ql-stroke { stroke: #a1a1aa; }
        .ql-snow .ql-fill { fill: #a1a1aa; }
        .ql-snow .ql-picker { color: #a1a1aa; }
    </style>
</head>
<body class="bg-bg-base text-text-base min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-4 mb-8">
            <a href="noticias.php" class="p-2 bg-bg-surface border border-border-base rounded-lg hover:bg-bg-soft transition-colors text-text-muted">
                <i class="ph ph-arrow-left text-xl"></i>
            </a>
            <h1 class="text-3xl font-bold text-unac-yellow"><?= $id ? 'Editar Noticia' : 'Crear Nueva Noticia' ?></h1>
        </div>

        <form id="newsForm" action="" method="POST" enctype="multipart/form-data" class="bg-surface-elevated/30 backdrop-blur-xl border border-border-base/50 p-8 rounded-3xl shadow-unac-lg space-y-8">
            <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
            <?php endif; ?>

            <!-- Información Principal -->
            <div>
                <h3 class="text-xl font-bold border-b border-border-base pb-2 mb-6">Información Principal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-text-muted mb-2">Título de la Noticia <span class="text-red-400">*</span></label>
                        <input type="text" name="titulo" value="<?= htmlspecialchars($noticia['titulo'] ?? '') ?>" required class="w-full bg-bg-surface border border-border-base rounded-xl px-4 py-3 text-text-base focus:outline-none focus:border-unac-yellow/50 transition-colors">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-text-muted mb-2">Categoría <span class="text-red-400">*</span></label>
                        <select name="tipo_noticia" class="w-full bg-bg-surface border border-border-base rounded-xl px-4 py-3 text-text-base focus:outline-none transition-colors">
                            <?php 
                            $categorias = ['Académica', 'Tecnología', 'Eventos', 'Comunidad', 'Convocatoria', 'Internacional', 'Capacitación'];
                            $currentCat = $noticia['tipo_noticia'] ?? '';
                            foreach ($categorias as $cat): 
                            ?>
                                <option value="<?= $cat ?>" <?= $currentCat === $cat ? 'selected' : '' ?>><?= $cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-text-muted mb-2">Imagen de Portada <?= !$id ? '<span class="text-red-400">*</span>' : '' ?></label>
                        <input type="file" name="imagen" accept="image/*" <?= !$id ? 'required' : '' ?> class="w-full bg-bg-surface border border-border-base rounded-xl px-4 py-2.5 text-text-base focus:outline-none text-sm transition-colors">
                        <?php if ($id && !empty($noticia['imagen_ruta'])): ?>
                            <div class="mt-2 text-xs text-text-muted flex items-center gap-2">
                                <i class="ph ph-image"></i> Imagen actual guardada
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-text-muted mb-2">Texto Referencial (Resumen corto para la tarjeta) <span class="text-red-400">*</span></label>
                        <textarea name="texto_referencial" required rows="2" class="w-full bg-bg-surface border border-border-base rounded-xl px-4 py-3 text-text-base focus:outline-none focus:border-unac-yellow/50 transition-colors"><?= htmlspecialchars($noticia['texto_referencial'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>

            <!-- Cuerpo Detallado -->
            <div>
                <h3 class="text-xl font-bold border-b border-border-base pb-2 mb-6">Contenido Detallado</h3>
                <label class="block text-sm font-medium text-text-muted mb-2">Cuerpo de la Noticia <span class="text-red-400">*</span></label>
                <div id="editor-container" class="bg-bg-surface text-text-base"></div>
                <input type="hidden" name="cuerpo" id="cuerpo-input">
            </div>

            <!-- Enlaces Externos -->
            <div>
                <div class="flex items-center justify-between border-b border-border-base pb-2 mb-6">
                    <h3 class="text-xl font-bold">Enlaces Relacionados</h3>
                    <button type="button" id="add-link-btn" class="text-sm font-medium text-unac-yellow bg-unac-yellow/10 px-3 py-1.5 rounded-lg hover:bg-unac-yellow/20 transition-colors flex items-center gap-1">
                        <i class="ph ph-plus"></i> Añadir Enlace
                    </button>
                </div>
                <div id="links-container" class="space-y-4">
                    <?php 
                    $links = $noticia['contenido_detallado']['links'] ?? [];
                    if (empty($links)): 
                    ?>
                        <!-- Empty state / Initial input -->
                        <div class="flex gap-4 items-start link-row">
                            <input type="text" name="link_labels[]" placeholder="Ej: Inscripciones aquí" class="w-1/3 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                            <input type="url" name="link_urls[]" placeholder="https://..." class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                            <button type="button" class="remove-row p-2 text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Quitar"><i class="ph ph-trash"></i></button>
                        </div>
                    <?php else: ?>
                        <?php foreach($links as $link): ?>
                        <div class="flex gap-4 items-start link-row">
                            <input type="text" name="link_labels[]" value="<?= htmlspecialchars($link['label']) ?>" class="w-1/3 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                            <input type="url" name="link_urls[]" value="<?= htmlspecialchars($link['url']) ?>" class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                            <button type="button" class="remove-row p-2 text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Quitar"><i class="ph ph-trash"></i></button>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Recursos Descargables -->
            <div>
                <div class="flex items-center justify-between border-b border-border-base pb-2 mb-6">
                    <h3 class="text-xl font-bold">Recursos / Archivos (PDF)</h3>
                    <button type="button" id="add-rec-btn" class="text-sm font-medium text-unac-yellow bg-unac-yellow/10 px-3 py-1.5 rounded-lg hover:bg-unac-yellow/20 transition-colors flex items-center gap-1">
                        <i class="ph ph-plus"></i> Añadir Recurso
                    </button>
                </div>
                
                <?php 
                $recursos = $noticia['contenido_detallado']['recursos'] ?? [];
                if (!empty($recursos)): 
                ?>
                <div class="mb-6">
                    <p class="text-sm text-text-muted mb-3 font-medium">Recursos Existentes:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <?php foreach($recursos as $idx => $rec): ?>
                        <div class="flex items-center justify-between p-3 bg-bg-surface border border-border-base rounded-xl">
                            <div class="flex items-center gap-3 overflow-hidden">
                                <i class="ph-fill ph-file-pdf text-red-400 text-xl"></i>
                                <span class="text-sm font-medium text-text-base truncate"><?= htmlspecialchars($rec['nombre']) ?></span>
                            </div>
                            <label class="flex items-center gap-2 text-xs text-red-400 cursor-pointer ml-4 shrink-0 hover:text-red-300">
                                <input type="checkbox" name="delete_recursos[]" value="<?= $idx ?>"> Eliminar
                            </label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <div id="recursos-container" class="space-y-4">
                    <p class="text-sm text-text-muted mb-2 font-medium">Subir Nuevos Recursos:</p>
                    <!-- Empty state / Initial input -->
                    <div class="flex gap-4 items-center rec-row">
                        <input type="text" name="recursos_nombres[]" placeholder="Nombre del documento (ej: Bases del Concurso)" class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                        <input type="file" name="recursos_files[]" accept=".pdf,.doc,.docx" class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-1.5 text-sm text-text-base focus:outline-none">
                        <button type="button" class="remove-row p-2 text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Quitar"><i class="ph ph-trash"></i></button>
                    </div>
                </div>
            </div>

            <!-- Botones Guardar -->
            <div class="pt-6 border-t border-border-base flex items-center justify-end gap-4">
                <a href="noticias.php" class="px-6 py-3 rounded-full font-bold text-text-muted hover:text-text-base transition-colors">Cancelar</a>
                <button type="submit" class="py-3 px-8 bg-unac-yellow text-bg-base rounded-full font-black hover:bg-yellow-400 transition-all shadow-[0_0_20px_rgba(251,202,56,0.3)]">
                    <?= $id ? 'Guardar Cambios' : 'Publicar Noticia' ?>
                </button>
            </div>
        </form>
    </div>

    <!-- Quill Editor Script -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar Quill
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                placeholder: 'Escribe el contenido detallado aquí...',
                modules: {
                    toolbar: [
                        [{ 'header': [2, 3, 4, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ['link'],
                        ['clean']
                    ]
                }
            });

            // Set existing content if editing
            <?php if ($id && !empty($noticia['contenido_detallado']['cuerpo'])): ?>
                const initialContent = <?= json_encode($noticia['contenido_detallado']['cuerpo']) ?>;
                quill.root.innerHTML = initialContent;
            <?php endif; ?>

            // Sync Quill to hidden input before submit
            document.getElementById('newsForm').addEventListener('submit', function() {
                var content = quill.root.innerHTML;
                if (content === '<p><br></p>') content = ''; // Clean empty
                document.getElementById('cuerpo-input').value = content;
            });

            // Dynamic Rows for Links
            document.getElementById('add-link-btn').addEventListener('click', function() {
                const container = document.getElementById('links-container');
                const row = document.createElement('div');
                row.className = 'flex gap-4 items-start link-row';
                row.innerHTML = `
                    <input type="text" name="link_labels[]" placeholder="Ej: Inscripciones aquí" class="w-1/3 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                    <input type="url" name="link_urls[]" placeholder="https://..." class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                    <button type="button" class="remove-row p-2 text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Quitar"><i class="ph ph-trash"></i></button>
                `;
                container.appendChild(row);
            });

            // Dynamic Rows for Recursos
            document.getElementById('add-rec-btn').addEventListener('click', function() {
                const container = document.getElementById('recursos-container');
                const row = document.createElement('div');
                row.className = 'flex gap-4 items-center rec-row';
                row.innerHTML = `
                    <input type="text" name="recursos_nombres[]" placeholder="Nombre del documento" class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-2 text-sm text-text-base focus:outline-none focus:border-unac-yellow/50">
                    <input type="file" name="recursos_files[]" accept=".pdf,.doc,.docx" class="flex-1 bg-bg-surface border border-border-base rounded-lg px-4 py-1.5 text-sm text-text-base focus:outline-none">
                    <button type="button" class="remove-row p-2 text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Quitar"><i class="ph ph-trash"></i></button>
                `;
                container.appendChild(row);
            });

            // Handle remove row buttons
            document.addEventListener('click', function(e) {
                if (e.target.closest('.remove-row')) {
                    e.target.closest('.link-row, .rec-row').remove();
                }
            });
        });
    </script>
</body>
</html>

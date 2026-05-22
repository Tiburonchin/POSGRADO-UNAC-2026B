<?php
/**
 * VERSIÓN CONTENT-ONLY: Programas UNAC Posgrado
 * Incluir con: include 'programas-content-only.php';
 * Dentro de tu layout existente donde ya tienes <head>, header y footer.
 * Asegúrate de que los CDNs de Tailwind y GSAP estén cargados en tu <head>.
 */

// ───── CONFIGURACIÓN DE RUTAS ─────
// Ajusta estas rutas según dónde coloques los archivos en tu servidor
// Nota: los estilos de `programas` se fusionaron en `assets/css/input.css`.
$cssPath = $baseUrl . 'assets/css/input.css';
$jsPath  = $baseUrl . 'programas/js/programas.js';

// Intentar encontrar el JSON en varias ubicaciones posibles
$possiblePaths = [
    __DIR__ . '/../data/programas.json',
    __DIR__ . '/../data/programas_detalle.json', // Añadido como fallback
    __DIR__ . '/programas.json',
    __DIR__ . '/../upload/programas.json'
];

$jsonPath = '';
foreach ($possiblePaths as $path) {
    if (file_exists($path)) {
        $jsonPath = $path;
        break;
    }
}

// ───── CARGAR DATOS ─────
$programasData = [];
$allProgramas = [];

if (file_exists($jsonPath)) {
    $programasData = json_decode(file_get_contents($jsonPath), true);
}

// Normalizar estructura si viene de programas_detalle.json (que no tiene la clave 'facultades')
if ($programasData && !isset($programasData['facultades'])) {
    $tempData = ['facultades' => []];
    foreach ($programasData as $facName => $content) {
        $key = strtolower(str_replace(' ', '_', $facName));
        $tempData['facultades'][$key] = [
            'nombre' => $facName,
            'programas' => $content
        ];
    }
    $programasData = $tempData;
}

if (isset($programasData['facultades'])) {
    foreach ($programasData['facultades'] as $facultadKey => $facultad) {
        if (isset($facultad['programas'])) {
            foreach ($facultad['programas'] as $prog) {
                $prog['facultad_key'] = $facultadKey;
                $prog['facultad_siglas'] = $facultad['siglas'] ?? '';
                $prog['facultad_nombre'] = $facultad['nombre'] ?? '';
                $allProgramas[] = $prog;
            }
        }
    }
}

// ───── STATS ─────
$totalProgramas = count($allProgramas);
$totalMaestrias = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'maestria'));
$totalDoctorados = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'doctorado'));
$totalEspecialidades = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'especialidad'));

// ───── HELPERS ─────
function getFirstImage($prog) {
    // Keep the same behavior as Home: first image from JSON, then area fallback.
    if (!empty($prog['imagen_1'])) {
        return ltrim($prog['imagen_1'], '/');
    }

    return getAreaFallbackImage($prog['area'] ?? '');
}

/**
 * Return the same area-based fallback images used by Home.
 */
function getAreaFallbackImage($area) {
    $fallbackByArea = [
        'Ciencias Administrativas' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'Ciencias Contables' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80',
        'Ciencias de la Educación' => 'https://images.unsplash.com/photo-1524178232363-1fb28075b655?auto=format&fit=crop&w=800&q=80',
        'Ciencias de la Salud' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80',
        'Ciencias Económicas' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
        'Ciencias Naturales y Matemáticas' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Ambiental y Recursos Naturales' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb7780b9?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Eléctrica y Electrónica' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Industrial y de Sistemas' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Mecánica y Energía' => 'https://images.unsplash.com/photo-1581092335397-9583eb92d232?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Pesquera y Alimentos' => 'https://images.unsplash.com/photo-1498654200943-1088dd4438ae?auto=format&fit=crop&w=800&q=80',
        'Ingeniería Química' => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=800&q=80',
    ];

    return $fallbackByArea[$area] ?? 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80';
}

function getBadgeClass($tipo) {
    return match($tipo) {
        'maestria' => 'programa-card__badge--maestria',
        'doctorado' => 'programa-card__badge--doctorado',
        'especialidad' => 'programa-card__badge--especialidad',
        default => 'programa-card__badge--maestria',
    };
}

function getTipoLabel($tipo) {
    return match($tipo) {
        'maestria' => 'Maestría',
        'doctorado' => 'Doctorado',
        'especialidad' => 'Especialidad',
        default => ucfirst($tipo),
    };
}

function getDuration($prog) {
    if (isset($prog['ciclos'])) {
        return count($prog['ciclos']) . ' ciclos';
    }
    return '';
}
?>

<!-- CSS del módulo (incluir una sola vez en tu <head>) -->
<link rel="stylesheet" href="<?php echo htmlspecialchars($cssPath); ?>">

<!-- PROGRAMAS PAGE -->
<main class="unac-programas-page">
    
    <div class="programas-particles"></div>
    
    <section class="programas-hero">
        <div class="relative z-10">
            <h1 class="programas-hero__title">
                Nuestros <span class="programas-hero__title-accent">Programas</span>
            </h1>
            <p class="programas-hero__subtitle">
                Descubre nuestra oferta académica de posgrado diseñada para formar líderes e innovadores 
                en diversas áreas del conocimiento, con excelencia académica y visión internacional.
            </p>
            
            <div class="programas-stats">
                <div class="programas-stats__item">
                    <span class="programas-stats__number" data-count="<?php echo $totalProgramas; ?>"><?php echo $totalProgramas; ?></span>
                    <span class="programas-stats__label">Programas</span>
                </div>
                <div class="programas-stats__item">
                    <span class="programas-stats__number" data-count="<?php echo $totalMaestrias; ?>"><?php echo $totalMaestrias; ?></span>
                    <span class="programas-stats__label">Maestrías</span>
                </div>
                <div class="programas-stats__item">
                    <span class="programas-stats__number" data-count="<?php echo $totalDoctorados; ?>"><?php echo $totalDoctorados; ?></span>
                    <span class="programas-stats__label">Doctorados</span>
                </div>
                <div class="programas-stats__item">
                    <span class="programas-stats__number" data-count="<?php echo $totalEspecialidades; ?>"><?php echo $totalEspecialidades; ?></span>
                    <span class="programas-stats__label">Especialidades</span>
                </div>
            </div>
            
            <div class="programas-search-panel">
                <div class="programas-searchbox">
                    <label for="programasSearch" class="programas-searchbox__label">Buscar por nombre</label>
                    <div class="programas-searchbox__field">
                        <svg class="programas-searchbox__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.3-4.3"/>
                        </svg>
                        <input 
                            type="text" 
                            id="programasSearch" 
                            placeholder="Escribe el nombre del programa" 
                            autocomplete="off"
                            spellcheck="false"
                            class="programas-searchbox__input w-full px-5 py-3.5 rounded-full text-sm font-medium text-white placeholder-white/40 
                                   bg-white/5 border border-white/10 backdrop-blur-md focus:outline-none 
                                   focus:border-[#3b82f6]/50 focus:ring-1 focus:ring-[#3b82f6]/30 transition-all"
                        >
                        <button type="button" id="programasSearchClear" class="programas-searchbox__clear" aria-label="Limpiar búsqueda" hidden>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <p class="programas-searchbox__hint" id="programasSearchHint">
                        Filtra por tipo y escribe el nombre del programa para encontrarlo más rápido.
                    </p>
                </div>

                <div class="programas-filterbar" aria-label="Filtros de programas">
                    <button class="filter-btn active" data-filter="all">
                        Todos <span><?php echo $totalProgramas; ?></span>
                    </button>
                    <button class="filter-btn" data-filter="maestria">
                        Maestrías <span><?php echo $totalMaestrias; ?></span>
                    </button>
                    <button class="filter-btn" data-filter="doctorado">
                        Doctorados <span><?php echo $totalDoctorados; ?></span>
                    </button>
                    <button class="filter-btn" data-filter="especialidad">
                        Especialidades <span><?php echo $totalEspecialidades; ?></span>
                    </button>
                </div>

                <div class="programas-results" id="programasResultsCount" aria-live="polite">
                    <?php echo $totalProgramas; ?> programas disponibles
                </div>
            </div>
        </div>
    </section>
    
    <section class="programas-grid relative z-10">
        <?php if (empty($allProgramas)): ?>
            <div class="programas-empty">
                <svg class="programas-empty__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="m15 9-6 6M9 9l6 6"/>
                </svg>
                <h3 class="programas-empty__title">No hay programas disponibles</h3>
                <p class="programas-empty__text">Intenta ajustar los filtros o vuelve a cargar la página.</p>
            </div>
        <?php else: ?>
            <?php foreach ($allProgramas as $prog): 
                $img = getFirstImage($prog);
                $areaFallbackImg = getAreaFallbackImage($prog['area'] ?? '');
                $badgeClass = getBadgeClass($prog['tipo'] ?? 'maestria');
                $tipoLabel = getTipoLabel($prog['tipo'] ?? 'maestria');
                $duration = getDuration($prog);
            ?>
                <article class="programa-card" 
                         data-id="<?php echo $prog['id']; ?>" 
                         data-types="<?php echo $prog['tipo'] ?? ''; ?>"
                         data-name="<?php echo htmlspecialchars($prog['nombre'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="programa-card__image-wrap">
                        <?php if ($img): 
                            $finalImg = (strpos($img, 'http') === 0) ? $img : $baseUrl . $img;
                            $finalFallbackImg = (strpos($areaFallbackImg, 'http') === 0) ? $areaFallbackImg : $baseUrl . ltrim($areaFallbackImg, '/');
                        ?>
                            <img src="<?php echo htmlspecialchars($finalImg); ?>" 
                                 alt="<?php echo htmlspecialchars($prog['nombre'] ?? ''); ?>" 
                                 class="programa-card__image"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='<?php echo htmlspecialchars($finalFallbackImg, ENT_QUOTES, 'UTF-8'); ?>'">
                        <?php else: ?>
                            <div class="w-full h-full bg-gradient-to-br from-[#3b82f6]/20 to-[#fbbf24]/20"></div>
                        <?php endif; ?>
                        <div class="programa-card__image-overlay"></div>
                        <span class="programa-card__badge <?php echo $badgeClass; ?>"><?php echo $tipoLabel; ?></span>
                    </div>
                    <div class="programa-card__content">
                        <div class="programa-card__faculty"><?php echo htmlspecialchars($prog['facultad_siglas'] ?? ''); ?></div>
                        <h3 class="programa-card__name"><?php echo htmlspecialchars($prog['nombre'] ?? ''); ?></h3>
                        <p class="programa-card__desc"><?php echo htmlspecialchars($prog['descripcion'] ?? ''); ?></p>
                        <div class="programa-card__footer">
                            <div class="programa-card__meta">
                                <?php if ($duration): ?>
                                <div class="programa-card__meta-item">
                                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    <span><?php echo $duration; ?></span>
                                </div>
                                <?php endif; ?>
                                <div class="programa-card__meta-item">
                                    <svg viewBox="0 0 24 24"><path d="M12 20V10M18 20V4M6 20v-4"/></svg>
                                    <span><?php echo $tipoLabel; ?></span>
                                </div>
                            </div>
                            <div class="programa-card__cta">
                                Ver más 
                                <svg class="programa-card__cta-arrow" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
        
        <div class="programas-empty" style="display:none;">
            <svg class="programas-empty__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/>
                <path d="m15 9-6 6M9 9l6 6"/>
            </svg>
            <h3 class="programas-empty__title">Sin resultados</h3>
            <p class="programas-empty__text">No se encontraron programas con los filtros seleccionados.</p>
        </div>
    </section>
</main>

<!-- Modal de detalle -->
<div class="programa-detail-overlay" id="programaDetailOverlay">
    <div class="programa-detail-overlay__backdrop"></div>
    <div class="programa-detail" id="programaDetail"></div>
</div>

<!-- JS del módulo (incluir antes del cierre de </body> de tu layout) -->
<script>
    // Pasar configuración al JS para que sepa dónde está el endpoint AJAX
    window.PROGRAMAS_AJAX_URL = '<?php echo $baseUrl; ?>programas/programa-detalle.php';
</script>
<script src="<?php echo htmlspecialchars($jsPath); ?>" defer></script>

<?php
/**
 * VERSIÓN CONTENT-ONLY: Programas UNAC Posgrado
 * Incluir con: include 'programas-content-only.php';
 * Dentro de tu layout existente donde ya tienes <head>, header y footer.
 * Asegúrate de que los CDNs de Tailwind y GSAP estén cargados en tu <head>.
 */

// ───── CONFIGURACIÓN DE RUTAS ─────
// Ajusta estas rutas según dónde coloques los archivos en tu servidor
$cssPath = $baseUrl . 'programas/css/programas.css';
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
    if (!empty($prog['imagen_1'])) return $prog['imagen_1'];
    if (!empty($prog['imagen_2'])) return $prog['imagen_2'];
    if (!empty($prog['imagen_3'])) return $prog['imagen_3'];
    return '';
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
            
            <div class="max-w-md mx-auto mb-6 relative">
                <input 
                    type="text" 
                    id="programasSearch" 
                    placeholder="Buscar programa..." 
                    class="w-full px-5 py-3.5 rounded-full text-sm font-medium text-white placeholder-white/40 
                           bg-white/5 border border-white/10 backdrop-blur-md focus:outline-none 
                           focus:border-[#3b82f6]/50 focus:ring-1 focus:ring-[#3b82f6]/30 transition-all"
                >
                <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/30 pointer-events-none" 
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.3-4.3"/>
                </svg>
            </div>
            
            <div class="programas-filterbar">
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
                $badgeClass = getBadgeClass($prog['tipo'] ?? 'maestria');
                $tipoLabel = getTipoLabel($prog['tipo'] ?? 'maestria');
                $duration = getDuration($prog);
            ?>
                <article class="programa-card" 
                         data-id="<?php echo $prog['id']; ?>" 
                         data-types="<?php echo $prog['tipo'] ?? ''; ?>">
                    <div class="programa-card__image-wrap">
                        <?php if ($img): ?>
                            <img src="<?php echo htmlspecialchars($baseUrl . $img); ?>" 
                                 alt="<?php echo htmlspecialchars($prog['nombre'] ?? ''); ?>" 
                                 class="programa-card__image"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
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

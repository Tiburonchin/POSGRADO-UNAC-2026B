<?php
/**
 * PAGINA DE PROGRAMAS - UNAC POSGRADO
 * Listado completo con filtros y grid glassmorphism
 * Sin header/footer (el usuario los incluye en su template)
 */

// Cargar datos de programas
$jsonPath = __DIR__ . '/../upload/programas.json';
// Fallback: buscar en ubicaciones alternativas
if (!file_exists($jsonPath)) {
    $jsonPath = __DIR__ . '/programas.json';
}
if (!file_exists($jsonPath)) {
    $jsonPath = __DIR__ . '/data/programas.json';
}

$programasData = [];
$allProgramas = [];

if (file_exists($jsonPath)) {
    $jsonContent = file_get_contents($jsonPath);
    $programasData = json_decode($jsonContent, true);
}

// Flatten all programs into a single array
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

// Stats
$totalProgramas = count($allProgramas);
$totalMaestrias = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'maestria'));
$totalDoctorados = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'doctorado'));
$totalEspecialidades = count(array_filter($allProgramas, fn($p) => ($p['tipo'] ?? '') === 'especialidad'));

// Get first image helper
function getFirstImage($prog) {
    if (!empty($prog['imagen_1'])) return $prog['imagen_1'];
    if (!empty($prog['imagen_2'])) return $prog['imagen_2'];
    if (!empty($prog['imagen_3'])) return $prog['imagen_3'];
    return '';
}

// Type badge class helper
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

// Get duration by type helper
function getDuration($prog, $tipo) {
    if (isset($prog['ciclos'])) {
        $ciclosCount = count($prog['ciclos']);
        return $ciclosCount . ' ciclos';
    }
    return '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas Académicos - UNAC Posgrado</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- GSAP + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/programas.css">
</head>
<body>

<!-- PROGRAMAS PAGE CONTAINER -->
<main class="unac-programas-page">
    
    <!-- Decorative Particles -->
    <div class="programas-particles"></div>
    
    <!-- HERO SECTION -->
    <section class="programas-hero">
        <div class="relative z-10">
            <h1 class="programas-hero__title">
                Nuestros <span class="programas-hero__title-accent">Programas</span>
            </h1>
            <p class="programas-hero__subtitle">
                Descubre nuestra oferta académica de posgrado diseñada para formar líderes e innovadores 
                en diversas áreas del conocimiento, con excelencia académica y visión internacional.
            </p>
            
            <!-- Stats -->
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
            
            <!-- Search -->
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
            
            <!-- Filter Bar -->
            <div class="programas-filterbar">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="maestria">Maestrías</button>
                <button class="filter-btn" data-filter="doctorado">Doctorados</button>
                <button class="filter-btn" data-filter="especialidad">Especialidades</button>
            </div>
        </div>
    </section>
    
    <!-- PROGRAMS GRID -->
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
                $duration = getDuration($prog, $prog['tipo'] ?? '');
            ?>
                <article class="programa-card" 
                         data-id="<?php echo $prog['id']; ?>" 
                         data-types="<?php echo $prog['tipo'] ?? ''; ?>">
                    <div class="programa-card__image-wrap">
                        <?php if ($img): ?>
                            <img src="<?php echo htmlspecialchars($img); ?>" 
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
        
        <!-- Hidden empty state for filter results -->
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

<!-- DETAIL MODAL OVERLAY -->
<div class="programa-detail-overlay" id="programaDetailOverlay">
    <div class="programa-detail-overlay__backdrop"></div>
    <div class="programa-detail" id="programaDetail">
        <!-- Content loaded dynamically via AJAX -->
    </div>
</div>

<!-- Scripts -->
<script src="js/programas.js"></script>

</body>
</html>
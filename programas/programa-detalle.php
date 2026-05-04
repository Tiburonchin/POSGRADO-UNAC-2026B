<?php
/**
 * VISTA DETALLE DE PROGRAMA - UNAC POSGRADO
 * Devuelve HTML para el modal de detalle (cargado via AJAX)
 */

header('Content-Type: text/html; charset=utf-8');

$programaId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!$programaId) {
    echo '<div class="p-8 text-center text-white/60">Programa no encontrado</div>';
    exit;
}

// Configurar base URL (como estamos en /programas/, la raíz es ../)
$baseUrl = '../';

// Cargar JSON
$jsonPaths = [
    __DIR__ . '/../data/programas.json',
    __DIR__ . '/../data/programas_detalle.json',
    __DIR__ . '/../upload/programas.json',
    __DIR__ . '/programas.json',
];

$programa = null;
$facultad = null;

foreach ($jsonPaths as $path) {
    if (file_exists($path)) {
        $data = json_decode(file_get_contents($path), true);
        if (isset($data['facultades'])) {
            foreach ($data['facultades'] as $facKey => $fac) {
                if (isset($fac['programas'])) {
                    foreach ($fac['programas'] as $prog) {
                        if (($prog['id'] ?? 0) == $programaId) {
                            $programa = $prog;
                            $facultad = $fac;
                            break 3;
                        }
                    }
                }
            }
        }
        break;
    }
}

if (!$programa) {
    echo '<div class="p-8 text-center text-white/60">Programa no encontrado</div>';
    exit;
}

// Helpers
function getFirstImage($prog) {
    // Prefer explicit imagen_* fields from JSON, but verify file exists
    $baseCheck = __DIR__ . '/../';
    foreach (['imagen_1', 'imagen_2', 'imagen_3'] as $key) {
        if (!empty($prog[$key])) {
            $rel = ltrim($prog[$key], '/');
            $abs = $baseCheck . $rel;
            if (file_exists($abs)) return $rel;
        }
    }

    // Fallback: check for local file in img/programas by id
    $id = $prog['id'] ?? null;
    if ($id) {
        $possible = [
            __DIR__ . '/../img/programas/' . $id . '.jpg',
            __DIR__ . '/../img/programas/' . $id . '.png',
            __DIR__ . '/../img/programas/' . $id . '.webp'
        ];
        foreach ($possible as $p) {
            if (file_exists($p)) {
                return 'img/programas/' . basename($p);
            }
        }
    }

    // Final fallback: use an existing project image as placeholder
    if (file_exists(__DIR__ . '/../img/epg-unac-fachada.png')) {
        return 'img/epg-unac-fachada.png';
    }

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

function getModalidad($fac) {
    return $fac['modalidad'] ?? 'Sábados/Domingos';
}

function getDuracion($prog, $fac) {
    $tipo = $prog['tipo'] ?? '';
    if (isset($fac['duracion'][$tipo])) {
        return $fac['duracion'][$tipo];
    }
    if (isset($prog['ciclos'])) {
        return count($prog['ciclos']) . ' ciclos';
    }
    return '';
}

$img = getFirstImage($programa);
$badgeClass = getBadgeClass($programa['tipo'] ?? 'maestria');
$tipoLabel = getTipoLabel($programa['tipo'] ?? 'maestria');
$modalidad = getModalidad($facultad);
$duracion = getDuracion($programa, $facultad);
$ciclos = $programa['ciclos'] ?? [];

// Descriptions list
$descripciones = [];
for ($i = 1; $i <= 3; $i++) {
    if (!empty($programa["descripcion_$i"])) {
        $descripciones[] = $programa["descripcion_$i"];
    }
}
?>

<!-- Close Button -->
<button class="programa-detail__close" id="closeDetail" aria-label="Cerrar">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <path d="M18 6 6 18M6 6l12 12"/>
    </svg>
</button>

<!-- Header Image -->
<div class="programa-detail__header">
    <?php if ($img): ?>
        <img src="<?php echo htmlspecialchars($baseUrl . $img); ?>" alt="" class="programa-detail__header-img">
    <?php else: ?>
        <div class="w-full h-full bg-gradient-to-br from-[#3b82f6]/30 to-[#fbbf24]/30"></div>
    <?php endif; ?>
    <div class="programa-detail__header-overlay"></div>
    <div class="programa-detail__header-content">
        <span class="programa-detail__badge <?php echo $badgeClass; ?>"><?php echo $tipoLabel; ?></span>
        <h2 class="programa-detail__title"><?php echo htmlspecialchars($programa['nombre'] ?? ''); ?></h2>
        <div class="programa-detail__faculty">
            <?php echo htmlspecialchars(($facultad['siglas'] ?? '') . ' - ' . ($facultad['nombre'] ?? '')); ?>
        </div>
    </div>
</div>

<!-- Body -->
<div class="programa-detail__body">
    
    <!-- Quick Info -->
    <div class="programa-detail__quickinfo">
        <?php if ($duracion): ?>
        <div class="quickinfo-item">
            <div class="quickinfo-item__icon">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div class="quickinfo-item__text">
                <span class="quickinfo-item__label">Duración</span>
                <span class="quickinfo-item__value"><?php echo htmlspecialchars($duracion); ?></span>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="quickinfo-item">
            <div class="quickinfo-item__icon">
                <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="quickinfo-item__text">
                <span class="quickinfo-item__label">Modalidad</span>
                <span class="quickinfo-item__value"><?php echo htmlspecialchars($modalidad); ?></span>
            </div>
        </div>
        
        <?php if (!empty($facultad['telefono'])): ?>
        <div class="quickinfo-item">
            <div class="quickinfo-item__icon">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div class="quickinfo-item__text">
                <span class="quickinfo-item__label">Contacto</span>
                <span class="quickinfo-item__value"><?php echo htmlspecialchars($facultad['telefono']); ?></span>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="quickinfo-item">
            <div class="quickinfo-item__icon">
                <svg viewBox="0 0 24 24"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
            </div>
            <div class="quickinfo-item__text">
                <span class="quickinfo-item__label">Programas</span>
                <span class="quickinfo-item__value"><?php echo count($ciclos); ?> ciclo<?php echo count($ciclos) !== 1 ? 's' : ''; ?></span>
            </div>
        </div>
    </div>
    
    <!-- Tabs -->
    <div class="programa-detail__tabs">
        <button class="detail-tab active" data-tab="presentacion">Presentación</button>
        <button class="detail-tab" data-tab="perfiles">Perfiles</button>
        <button class="detail-tab" data-tab="plan">Plan de Estudios</button>
        <button class="detail-tab" data-tab="contacto">Contacto</button>
    </div>
    
    <!-- Tab Panels -->
    <div class="detail-panel active" data-panel="presentacion">
        <?php if (!empty($programa['presentacion'])): ?>
            <p><?php echo nl2br(htmlspecialchars($programa['presentacion'])); ?></p>
        <?php endif; ?>
        
        <?php if (!empty($descripciones)): ?>
            <ul class="desc-list">
                <?php foreach ($descripciones as $desc): ?>
                    <li class="desc-list__item"><?php echo htmlspecialchars($desc); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <?php if (!empty($programa['descripcion']) && empty($programa['presentacion'])): ?>
            <p><?php echo nl2br(htmlspecialchars($programa['descripcion'])); ?></p>
        <?php endif; ?>
    </div>
    
    <div class="detail-panel" data-panel="perfiles">
        <?php if (!empty($programa['perfil_estudiante'])): ?>
            <div class="mb-6">
                <h4 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </span>
                    Perfil del Estudiante
                </h4>
                <p><?php echo nl2br(htmlspecialchars($programa['perfil_estudiante'])); ?></p>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($programa['perfil_egresado'])): ?>
            <div>
                <h4 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-amber-500/20 flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </span>
                    Perfil del Egresado
                </h4>
                <p><?php echo nl2br(htmlspecialchars($programa['perfil_egresado'])); ?></p>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="detail-panel" data-panel="plan">
        <?php if (!empty($ciclos)): ?>
            <div class="ciclos-accordion">
                <?php foreach ($ciclos as $index => $ciclo): ?>
                    <div class="ciclo-item <?php echo $index === 0 ? 'open' : ''; ?>">
                        <div class="ciclo-item__header">
                            <div class="flex items-center gap-3">
                                <span class="ciclo-item__title"><?php echo htmlspecialchars($ciclo['ciclo'] ?? ''); ?></span>
                                <span class="ciclo-item__count"><?php echo count($ciclo['cursos'] ?? []); ?> cursos</span>
                            </div>
                            <div class="ciclo-item__toggle">
                                <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                            </div>
                        </div>
                        <div class="ciclo-item__body">
                            <ul class="ciclo-item__courses">
                                <?php foreach ($ciclo['cursos'] ?? [] as $curso): ?>
                                    <li><?php echo htmlspecialchars($curso); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-white/60">Información del plan de estudios no disponible.</p>
        <?php endif; ?>
    </div>
    
    <div class="detail-panel" data-panel="contacto">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <?php if (!empty($facultad['nombre'])): ?>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/10">
                    <div class="text-xs uppercase tracking-wider text-white/40 mb-1">Facultad</div>
                    <div class="text-white font-semibold"><?php echo htmlspecialchars($facultad['nombre']); ?></div>
                </div>
            <?php endif; ?>
            <?php if (!empty($facultad['correo'])): ?>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/10">
                    <div class="text-xs uppercase tracking-wider text-white/40 mb-1">Correo</div>
                    <div class="text-white font-semibold"><?php echo htmlspecialchars($facultad['correo']); ?></div>
                </div>
            <?php endif; ?>
            <?php if (!empty($facultad['telefono'])): ?>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/10">
                    <div class="text-xs uppercase tracking-wider text-white/40 mb-1">Teléfono</div>
                    <div class="text-white font-semibold"><?php echo htmlspecialchars($facultad['telefono']); ?></div>
                </div>
            <?php endif; ?>
            <?php if (!empty($facultad['modalidad'])): ?>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/10">
                    <div class="text-xs uppercase tracking-wider text-white/40 mb-1">Modalidad</div>
                    <div class="text-white font-semibold"><?php echo htmlspecialchars($facultad['modalidad']); ?></div>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if (!empty($programa['brochure'])): ?>
            <div class="mt-4">
                <a href="<?php echo htmlspecialchars($programa['brochure']); ?>" target="_blank" rel="noopener" class="btn-secondary">
                    <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    Descargar Brochure
                </a>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- Actions -->
    <div class="detail-actions">
        <a href="<?php echo $baseUrl; ?>pages/admision/index.php" class="btn-primary">
            <svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
            Inscríbete Ahora
        </a>

        <?php if (!empty($programa['brochure'])): ?>
            <a href="<?php echo htmlspecialchars($programa['brochure']); ?>" target="_blank" rel="noopener" class="btn-secondary">
                <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                Descargar Brochure
            </a>
        <?php endif; ?>
        
        <?php if (!empty($facultad['correo'])): ?>
            <a href="mailto:<?php echo htmlspecialchars($facultad['correo']); ?>?subject=Consulta%20sobre%20<?php echo urlencode($programa['nombre'] ?? ''); ?>" class="btn-secondary">
                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Consultar
            </a>
        <?php endif; ?>
    </div>
</div>

<?php
$newsFile = __DIR__ . '/../data/news.json';
$newsData = [];
if (file_exists($newsFile)) {
    $newsData = json_decode(file_get_contents($newsFile), true) ?? [];
}

$id = $_GET['id'] ?? '';
$noticia = null;
$related = [];
$recent = [];

foreach ($newsData as $index => $item) {
    if ($item['id'] === $id) {
        $noticia = $item;
    } else {
        $recent[] = $item; // Keep to filter later
    }
}

if (!$noticia) {
    echo "<div class='min-h-screen flex items-center justify-center text-2xl text-text-muted'>Noticia no encontrada.</div>";
    return;
}

// Suggestions based on same type
foreach ($recent as $item) {
    if ($item['tipo_noticia'] === $noticia['tipo_noticia']) {
        $related[] = $item;
    }
}

$recent = array_slice(array_reverse($recent), 0, 3); // Get 3 most recent
$related = array_slice($related, 0, 3); // Max 3 related

$imgSrc = strpos($noticia['imagen_ruta'], 'http') === 0 ? $noticia['imagen_ruta'] : $baseUrl . $noticia['imagen_ruta'];
?>
<style>
    /* Estilos personalizados para el contenido de Quill ya que no hay plugin typography */
    .rich-text-content p { margin-bottom: 1.5em; line-height: 1.8; color: var(--text-muted); }
    .rich-text-content h1, .rich-text-content h2, .rich-text-content h3, .rich-text-content h4 { 
        color: var(--text-base); font-weight: 700; margin-top: 2em; margin-bottom: 1em; line-height: 1.3;
    }
    .rich-text-content h2 { font-size: 1.75rem; }
    .rich-text-content h3 { font-size: 1.5rem; }
    .rich-text-content ul { list-style-type: disc; padding-left: 1.5em; margin-bottom: 1.5em; color: var(--text-muted); }
    .rich-text-content ol { list-style-type: decimal; padding-left: 1.5em; margin-bottom: 1.5em; color: var(--text-muted); }
    .rich-text-content li { margin-bottom: 0.5em; }
    .rich-text-content a { color: var(--unac-yellow); text-decoration: none; font-weight: 500; transition: color 0.2s; }
    .rich-text-content a:hover { color: var(--unac-yellow-dark); text-decoration: underline; }
    .rich-text-content blockquote { 
        border-left: 4px solid var(--unac-yellow); padding-left: 1rem; font-style: italic; color: var(--text-muted); margin: 1.5em 0; background: var(--bg-surface); padding: 1rem; border-radius: 0.5rem;
    }
    .rich-text-content strong { color: var(--text-base); font-weight: 700; }
    .rich-text-content img { max-width: 100%; border-radius: 0.75rem; margin: 1.5em 0; }
</style>

<section class="pt-32 pb-24 relative overflow-hidden" id="noticia-detail">
    <!-- Ambient background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[90%] md:w-[70%] h-[500px] bg-gradient-to-b from-unac-blue/10 via-unac-yellow/5 to-transparent blur-[120px] rounded-full pointer-events-none z-0"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <!-- Breadcrumb & Kicker -->
        <div class="flex items-center gap-4 mb-6 gsap-fade-up opacity-0 translate-y-4">
            <a href="<?= $baseUrl ?>#noticias" class="text-sm text-text-muted hover:text-unac-yellow transition-colors font-bold flex items-center"><i class="ph ph-arrow-left mr-2"></i>Volver al inicio</a>
            <div class="w-1 h-1 bg-border-base rounded-full"></div>
            <span class="px-3 py-1 bg-unac-yellow/10 text-unac-yellow text-[10px] font-black uppercase tracking-[0.2em] rounded-full border border-unac-yellow/30">
                <?= htmlspecialchars($noticia['tipo_noticia'] ?? 'Noticia') ?>
            </span>
        </div>

        <!-- Header -->
        <header class="mb-12 max-w-4xl gsap-fade-up opacity-0 translate-y-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 tracking-tight leading-tight text-text-base">
                <?= htmlspecialchars($noticia['titulo']) ?>
            </h1>
            <div class="flex items-center gap-4 text-text-muted text-sm font-medium">
                <div class="flex items-center gap-2">
                    <i class="ph ph-calendar-blank text-lg"></i>
                    <span><?= htmlspecialchars($noticia['fecha_creacion'] ?? '') ?></span>
                </div>
            </div>
        </header>

        <!-- Main Image -->
        <?php if ($imgSrc): ?>
        <div class="w-full aspect-[21/9] rounded-3xl overflow-hidden mb-16 border border-border-base/50 shadow-unac-lg relative gsap-scale-up opacity-0 scale-95">
            <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($noticia['titulo']) ?>" class="w-full h-full object-cover">
        </div>
        <?php endif; ?>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Article Body -->
            <article class="lg:col-span-8 text-text-muted text-lg leading-relaxed space-y-6 gsap-stagger-content">
                <p class="text-xl font-medium text-text-base mb-8 italic opacity-0 translate-y-4">
                    <?= htmlspecialchars($noticia['texto_referencial']) ?>
                </p>
                <div class="rich-text-content opacity-0 translate-y-4">
                    <?= $noticia['contenido_detallado']['cuerpo'] ?? '' ?>
                </div>

                <!-- Links and Resources -->
                <?php 
                $links = $noticia['contenido_detallado']['links'] ?? [];
                $recursos = $noticia['contenido_detallado']['recursos'] ?? [];
                if (!empty($links) || !empty($recursos)): 
                ?>
                <div class="mt-12 p-8 bg-surface-elevated/30 backdrop-blur-xl border border-border-base rounded-2xl opacity-0 translate-y-4">
                    <h3 class="text-xl font-bold text-unac-yellow mb-4">Enlaces y Recursos</h3>
                    
                    <?php if (!empty($links)): ?>
                    <ul class="space-y-3 mb-6">
                        <?php foreach($links as $link): ?>
                        <li>
                            <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener" class="flex items-center gap-3 text-text-base hover:text-unac-yellow transition-colors font-medium">
                                <i class="ph ph-link text-lg text-unac-yellow"></i>
                                <?= htmlspecialchars($link['label']) ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (!empty($recursos)): ?>
                    <ul class="space-y-3">
                        <?php foreach($recursos as $rec): ?>
                        <li>
                            <a href="<?= strpos($rec['url'], 'http') === 0 ? htmlspecialchars($rec['url']) : $baseUrl . htmlspecialchars($rec['url']) ?>" target="_blank" rel="noopener" class="flex items-center gap-3 px-4 py-3 bg-bg-surface/50 border border-border-base rounded-xl text-text-base hover:border-unac-yellow/50 transition-colors">
                                <i class="ph ph-file-pdf text-xl text-red-400"></i>
                                <span class="font-medium"><?= htmlspecialchars($rec['nombre']) ?></span>
                                <i class="ph ph-download-simple ml-auto text-text-muted"></i>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4">
                <div id="gsap-pinned-sidebar" class="space-y-12">
                    <!-- Related News -->
                    <?php if (!empty($related)): ?>
                    <div class="gsap-sidebar-item opacity-0 translate-x-4">
                        <h3 class="text-[11px] font-black uppercase tracking-[0.2em] text-text-muted/60 mb-6">Sugerencias</h3>
                        <div class="space-y-6">
                            <?php foreach($related as $rel): 
                                $relImg = strpos($rel['imagen_ruta'], 'http') === 0 ? $rel['imagen_ruta'] : $baseUrl . $rel['imagen_ruta'];
                            ?>
                            <a href="noticia.php?id=<?= urlencode($rel['id']) ?>" class="group flex gap-4 items-center bg-bg-surface/30 p-3 rounded-2xl border border-border-base/50 hover:bg-bg-soft/50 transition-colors">
                                <div class="w-24 h-24 rounded-xl overflow-hidden shrink-0 border border-border-base bg-bg-soft">
                                    <img src="<?= htmlspecialchars($relImg) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="">
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-text-base leading-tight group-hover:text-unac-yellow transition-colors mb-2 line-clamp-2"><?= htmlspecialchars($rel['titulo']) ?></h4>
                                    <p class="text-[11px] text-text-muted uppercase tracking-wider font-bold"><?= htmlspecialchars($rel['fecha_creacion']) ?></p>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Recent News Widget -->
                    <?php if (!empty($recent)): ?>
                    <div class="bg-surface-elevated/30 backdrop-blur-xl border border-border-base p-6 rounded-2xl shadow-unac-lg gsap-sidebar-item opacity-0 translate-x-4">
                        <h3 class="text-lg font-bold text-unac-yellow mb-6 flex items-center gap-2"><i class="ph-fill ph-clock text-xl"></i> Noticias Recientes</h3>
                        <div class="space-y-6">
                            <?php foreach($recent as $rec): 
                                $recImg = strpos($rec['imagen_ruta'], 'http') === 0 ? $rec['imagen_ruta'] : $baseUrl . $rec['imagen_ruta'];
                            ?>
                            <a href="noticia.php?id=<?= urlencode($rec['id']) ?>" class="group flex gap-4 items-center">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0 border border-border-base bg-bg-soft shadow-sm">
                                    <img src="<?= htmlspecialchars($recImg) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="">
                                </div>
                                <div class="flex-1 border-b border-border-base/50 pb-4 group-last:border-0 group-last:pb-0">
                                    <h4 class="text-sm font-bold text-text-base leading-tight group-hover:text-unac-yellow transition-colors mb-2 line-clamp-2"><?= htmlspecialchars($rec['titulo']) ?></h4>
                                    <p class="text-[10px] text-text-muted uppercase tracking-wider font-bold"><?= htmlspecialchars($rec['fecha_creacion']) ?> &middot; <?= htmlspecialchars($rec['tipo_noticia']) ?></p>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- GSAP Animations specifically for the detail page -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;

    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    // Header & Meta
    tl.to(".gsap-fade-up", {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.1
    }, "+=0.2");

    // Main Image
    if(document.querySelector('.gsap-scale-up')) {
        tl.to(".gsap-scale-up", {
            scale: 1,
            opacity: 1,
            duration: 1,
            ease: "expo.out"
        }, "-=0.6");
    }

    // Article Content
    tl.to(".gsap-stagger-content > *", {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.15
    }, "-=0.8");

    // Sidebar items entrance
    tl.to(".gsap-sidebar-item", {
        x: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.15,
        onComplete: () => {
            // After entrance animation completes, initialize the sticky scroll
            if (typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                ScrollTrigger.matchMedia({
                    // Only apply sticky effect on desktop to prevent mobile layout issues
                    "(min-width: 1024px)": function() {
                        ScrollTrigger.create({
                            trigger: "#gsap-pinned-sidebar",
                            start: "top 120px", 
                            endTrigger: "article", // Ends when the article body ends
                            end: "bottom bottom",
                            pin: true,
                            pinSpacing: false // Don't add extra space below since we are in a grid
                        });
                    }
                });
            }
        }
    }, "-=0.6");
});
</script>

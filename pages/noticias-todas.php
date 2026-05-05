<?php
$newsFile = __DIR__ . '/../data/news.json';
$newsData = [];
if (file_exists($newsFile)) {
    $newsData = json_decode(file_get_contents($newsFile), true) ?? [];
}

// Ensure the most recent news comes first
$newsData = array_reverse($newsData);

// Extract unique categories for filters
$categories = [];
foreach ($newsData as $item) {
    if (!empty($item['tipo_noticia']) && !in_array($item['tipo_noticia'], $categories)) {
        $categories[] = $item['tipo_noticia'];
    }
}
sort($categories);
?>

<section class="pt-32 pb-24 relative overflow-hidden min-h-screen" id="noticias-todas">
    <!-- Ambient background -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[90%] md:w-[70%] h-[500px] bg-gradient-to-b from-unac-blue/10 via-unac-yellow/5 to-transparent blur-[120px] rounded-full pointer-events-none z-0"></div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">
        
        <!-- Header -->
        <header class="text-center max-w-3xl mx-auto mb-16 gsap-fade-up opacity-0 translate-y-4">
            <div class="inline-block px-4 py-1.5 bg-unac-yellow/10 border border-unac-yellow/20 rounded-full text-unac-yellow text-xs font-black uppercase tracking-[0.2em] mb-4">
                Portal Informativo
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 tracking-tight leading-tight text-text-base">
                Explora Todas Las <span class="text-unac-yellow">Noticias</span>
            </h1>
            <p class="text-text-muted text-lg leading-relaxed">
                Mantente al día con los últimos descubrimientos, eventos, avances tecnológicos y anuncios oficiales de la Escuela de Posgrado UNAC.
            </p>
        </header>

        <!-- Filters -->
        <?php if (count($categories) > 1): ?>
        <div class="flex flex-wrap justify-center gap-3 mb-12 gsap-fade-up opacity-0 translate-y-4">
            <button class="filter-btn active px-6 py-2.5 rounded-full border border-border-base bg-bg-surface/50 text-text-base text-sm font-bold hover:border-unac-yellow/50 transition-all shadow-sm" data-filter="all">
                Todas
            </button>
            <?php foreach ($categories as $cat): ?>
            <button class="filter-btn px-6 py-2.5 rounded-full border border-border-base bg-bg-surface/50 text-text-muted text-sm font-bold hover:border-unac-yellow/50 hover:text-text-base transition-all shadow-sm" data-filter="<?= htmlspecialchars($cat) ?>">
                <?= htmlspecialchars($cat) ?>
            </button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Grid -->
        <?php if (empty($newsData)): ?>
            <div class="text-center text-text-muted py-20 text-xl">No hay noticias disponibles en este momento.</div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="news-grid">
                <?php foreach ($newsData as $index => $item): 
                    $imgSrc = strpos($item['imagen_ruta'], 'http') === 0 ? $item['imagen_ruta'] : $baseUrl . $item['imagen_ruta'];
                ?>
                <article class="news-grid-card group flex flex-col bg-surface-elevated/30 backdrop-blur-xl border border-border-base rounded-3xl overflow-hidden hover:border-unac-yellow/30 transition-all duration-500 shadow-unac-lg gsap-card opacity-0 translate-y-8 w-full" data-category="<?= htmlspecialchars($item['tipo_noticia']) ?>">
                    <!-- Imagen -->
                    <div class="relative h-56 overflow-hidden">
                        <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($item['titulo']) ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-bg-surface to-transparent opacity-80"></div>
                        <span class="absolute top-4 right-4 px-3 py-1 bg-bg-surface/80 backdrop-blur-md text-unac-yellow text-[10px] font-black uppercase tracking-wider rounded-full border border-border-base">
                            <?= htmlspecialchars($item['tipo_noticia'] ?? 'Noticia') ?>
                        </span>
                    </div>

                    <!-- Contenido -->
                    <div class="flex flex-col flex-1 p-6 lg:p-8">
                        <div class="flex items-center gap-2 text-xs font-bold text-text-muted uppercase tracking-wider mb-3">
                            <i class="ph ph-calendar-blank"></i>
                            <time datetime="<?= htmlspecialchars($item['fecha_creacion']) ?>"><?= htmlspecialchars($item['fecha_creacion']) ?></time>
                        </div>
                        
                        <h2 class="text-xl lg:text-2xl font-bold text-text-base leading-tight mb-4 group-hover:text-unac-yellow transition-colors line-clamp-3">
                            <a href="noticia.php?id=<?= urlencode($item['id']) ?>" class="before:absolute before:inset-0">
                                <?= htmlspecialchars($item['titulo']) ?>
                            </a>
                        </h2>
                        
                        <p class="text-text-muted text-sm leading-relaxed mb-6 line-clamp-3 flex-1">
                            <?= htmlspecialchars($item['texto_referencial']) ?>
                        </p>

                        <div class="flex items-center text-unac-yellow font-bold text-sm mt-auto group-hover:translate-x-2 transition-transform duration-300">
                            Leer artículo <i class="ph ph-arrow-right ml-2 text-lg"></i>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            
            <div id="no-results" class="hidden text-center text-text-muted py-20 text-xl w-full">
                No se encontraron noticias en esta categoría.
            </div>
        <?php endif; ?>

    </div>
</section>

<style>
/* CSS styles for active filter button */
.filter-btn.active {
    background: rgba(251, 191, 36, 0.1); /* unac-yellow with opacity */
    border-color: rgba(251, 191, 36, 0.5);
    color: var(--unac-yellow) !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;

    // 1. Entrance Animations
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    tl.to(".gsap-fade-up", {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.15
    }, "+=0.1");

    tl.to(".gsap-card", {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.1
    }, "-=0.4");


    // 2. Filter Logic
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.news-grid-card');
    const noResults = document.getElementById('no-results');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active state
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');
            let visibleCount = 0;

            // Animate out
            gsap.to(cards, {
                scale: 0.95,
                opacity: 0,
                duration: 0.3,
                onComplete: () => {
                    cards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        if (filter === 'all' || filter === category) {
                            card.style.display = 'flex';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    // Show/Hide no results
                    if (visibleCount === 0) {
                        noResults.classList.remove('hidden');
                    } else {
                        noResults.classList.add('hidden');
                    }

                    // Animate in the visible ones
                    const visibleCards = Array.from(cards).filter(c => c.style.display !== 'none');
                    gsap.fromTo(visibleCards, 
                        { scale: 0.95, opacity: 0, y: 20 },
                        { scale: 1, opacity: 1, y: 0, duration: 0.5, stagger: 0.05, ease: "back.out(1.2)" }
                    );
                }
            });
        });
    });
});
</script>

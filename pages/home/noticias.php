<section class="content-section pt-32 pb-32 overflow-hidden relative" id="noticias">

    <!-- Aura brillante de fondo -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] md:w-[70%] xl:w-[80%] h-[70%] bg-gradient-to-r from-unac-blue/10 via-unac-yellow/5 to-unac-blue-dark/10 blur-[140px] rounded-full pointer-events-none z-0"></div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">
        
        <div class="max-w-3xl mb-16 news-header">

            <!-- Badge de sección (mismo estilo hero-kicker de admisión) -->
            <div class="hero-kicker-wrapper mb-8">
                <div class="hero-kicker inline-flex items-center gap-3 rounded-full border border-border-base bg-bg-soft/50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.3em] text-unac-yellow backdrop-blur-md transition-colors hover:border-border-bright hover:bg-bg-soft sm:text-[12px]">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-unac-yellow opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-unac-yellow shadow-[0_0_8px_rgba(251,202,56,0.8)]"></span>
                    </span>
                    <span>Noticias y eventos</span>
                </div>
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-5 tracking-tight leading-none">
                Lo que <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow via-unac-yellow-dark to-unac-yellow">está pasando</span><br>
                <span class="text-text-subtle text-3xl md:text-4xl lg:text-5xl font-semibold">en nuestra comunidad</span>
            </h2>

            <p class="text-text-muted text-base md:text-lg leading-relaxed max-w-xl">
                Hitos académicos, investigaciones de vanguardia y eventos que definen el rumbo de nuestra 
                <span class="text-text-base font-medium">Escuela de Posgrado</span>.
            </p>
        </div>

        <!-- CONTENEDOR RELATIVO PARA EL CARRUSEL Y NAVEGACIÓN -->
        <div class="relative group/carousel">

            <!-- ── Barra de navegación superior: contador + flechas ── -->
            <div class="flex items-center justify-between mb-5" id="news-nav-bar">
                <!-- Indicador de posición -->
                <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-text-muted/60">
                    Desliza para ver más
                </p>
                <!-- Botones de flecha -->
                <div class="flex items-center gap-2">
                    <button id="btn-prev"
                        class="group/btn w-11 h-11 rounded-xl flex items-center justify-center
                               border border-border-base bg-bg-surface/60 backdrop-blur-md
                               text-text-muted hover:text-unac-yellow hover:border-unac-yellow/50
                               hover:bg-unac-yellow/10 hover:shadow-[0_0_18px_-4px_rgba(var(--color-unac-yellow,255,200,0),0.35)]
                               transition-all duration-300 cursor-pointer">
                        <i class="ph-bold ph-arrow-left text-base group-hover/btn:-translate-x-0.5 transition-transform duration-200"></i>
                    </button>
                    <div class="w-[1px] h-5 bg-border-base/60 mx-1"></div>
                    <button id="btn-next"
                        class="group/btn w-11 h-11 rounded-xl flex items-center justify-center
                               border border-border-base bg-bg-surface/60 backdrop-blur-md
                               text-text-muted hover:text-unac-yellow hover:border-unac-yellow/50
                               hover:bg-unac-yellow/10 hover:shadow-[0_0_18px_-4px_rgba(var(--color-unac-yellow,255,200,0),0.35)]
                               transition-all duration-300 cursor-pointer">
                        <i class="ph-bold ph-arrow-right text-base group-hover/btn:translate-x-0.5 transition-transform duration-200"></i>
                    </button>
                </div>
            </div>


            <div class="bg-surface-elevated/30 backdrop-blur-xl border border-border-base/50 rounded-3xl shadow-unac-lg main-block-container" id="carousel-track">
            
            <?php
            $newsFile = __DIR__ . '/../../data/news.json';
            $newsData = [];
            if (file_exists($newsFile)) {
                $newsData = json_decode(file_get_contents($newsFile), true) ?? [];
            }
            $newsData = array_reverse($newsData); // Show newest first
            
            foreach ($newsData as $index => $item):
                $isHidden = $index >= 3;
                // Determine image path (absolute or relative depending on if it's external)
                $imgSrc = strpos($item['imagen_ruta'], 'http') === 0 ? $item['imagen_ruta'] : $baseUrl . $item['imagen_ruta'];
            ?>
            <div class="news-card flex flex-col p-6 md:p-8 hover:bg-bg-soft/40 cursor-pointer group border-r border-border-base <?= $isHidden ? 'is-hidden' : '' ?>" onclick="window.location.href='<?= $baseUrl ?>noticia.php?id=<?= urlencode($item['id']) ?>'">
                <div class="w-full aspect-[16/10] rounded-xl overflow-hidden mb-6 relative bg-bg-soft">
                    <div class="absolute inset-0 bg-gradient-to-t from-bg-surface/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                    <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($item['titulo']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="flex-1 flex flex-col">
                    <h3 class="text-lg font-medium text-text-base mb-2 leading-tight group-hover:text-unac-yellow transition-colors duration-300"><?= htmlspecialchars($item['titulo']) ?></h3>
                    <p class="text-[13px] text-text-muted mb-6 flex-1 leading-relaxed"><?= htmlspecialchars($item['texto_referencial']) ?></p>
                    <span class="text-[10px] font-bold text-text-muted uppercase tracking-widest"><?= htmlspecialchars($item['tipo_noticia'] ?? 'N/A') ?></span>
                </div>
            </div>
            <?php endforeach; ?>

            </div><!-- /carousel-track -->
        </div><!-- /relative group/carousel -->

        <!-- CTA: Ver todas las publicaciones -->
        <div class="mt-14 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?= $baseUrl ?>noticias.php" class="group relative inline-flex items-center gap-3 text-sm font-bold py-3.5 px-8 rounded-full overflow-hidden transition-all duration-300
                border border-unac-yellow/40 bg-unac-yellow/5 hover:bg-unac-yellow/15 hover:border-unac-yellow/70 hover:shadow-[0_0_28px_-4px_rgba(var(--color-unac-yellow),0.4)]
                text-text-base hover:text-unac-yellow backdrop-blur-md">
                <i class="ph-fill ph-newspaper text-unac-yellow text-base"></i>
                <span>Explorar todas las publicaciones</span>
                <i class="ph-bold ph-arrow-right text-sm group-hover:translate-x-1.5 transition-transform duration-300"></i>
            </a>
            <span class="text-[11px] text-text-muted/60 tracking-widest uppercase">· <?= count($newsData) ?>+ artículos disponibles</span>
        </div>

    </div>
</section>
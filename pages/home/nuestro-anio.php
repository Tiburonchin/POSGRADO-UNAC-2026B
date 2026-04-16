<?php
$ultimoAnioBloques = [
  [
    'etiqueta' => 'Nuestro ultimo anio',
    'titulo' => 'Nuevo record institucional: 2076 postulantes',
    'descripcion' => 'La curva de admision 2026 confirma una tendencia ascendente sostenida con mayor participacion en todos los programas estrategicos.',
    'metricas' => ['2076 postulantes', '62% crecimiento acumulado', '78% retencion academica'],
    'fondo' => 'radial-gradient(circle at 82% 12%, rgba(111, 120, 140, 0.28), transparent 54%), linear-gradient(133deg, rgba(5, 8, 16, 0.96), rgba(10, 16, 30, 0.94))',
    'visual' => 'record'
  ],
  [
    'etiqueta' => 'Oferta consolidada 2026',
    'titulo' => '34 maestrias, 13 doctorados y 25 especialidades',
    'descripcion' => 'La oferta de posgrado se organiza en rutas que articulan investigacion, gestion publica, tecnologia e innovacion aplicada para el entorno peruano.',
    'metricas' => ['34 maestrias', '13 doctorados', '25 especialidades'],
    'fondo' => 'radial-gradient(circle at 20% 80%, rgba(126, 136, 155, 0.18), transparent 48%), linear-gradient(148deg, rgba(6, 10, 19, 0.94), rgba(14, 18, 30, 0.95))',
    'visual' => 'programas'
  ],
  [
    'etiqueta' => 'Ecosistema academico',
    'titulo' => 'Seguimiento en tiempo real del rendimiento formativo',
    'descripcion' => 'El panel sintetiza avance de cohortes, productividad investigativa y trazabilidad curricular para decisiones oportunas de mejora continua.',
    'metricas' => ['95% cumplimiento curricular', '89 proyectos activos', '41 alianzas aplicadas'],
    'fondo' => 'radial-gradient(circle at 72% 24%, rgba(132, 146, 168, 0.2), transparent 44%), linear-gradient(151deg, rgba(8, 12, 20, 0.95), rgba(4, 8, 15, 0.97))',
    'visual' => 'dashboard'
  ]
];
?>

<section class="nuestro-anio-stack" id="nuestro-ultimo-anio" aria-labelledby="nuestro-ultimo-anio-title">
  <div class="site-container relative z-20 pb-8 pt-16 md:pt-20">
    <p class="mb-2 text-xs font-extrabold uppercase tracking-[0.14em] text-[color:var(--text-muted)]">Balance institucional</p>
    <h2 class="max-w-3xl text-3xl md:text-5xl" id="nuestro-ultimo-anio-title">Nuestro ultimo anio en cifras y resultados</h2>
  </div>

  <div class="nuestro-anio-track" data-ua-track>
    <?php foreach ($ultimoAnioBloques as $index => $bloque): ?>
      <article class="nuestro-anio-panel" data-ua-panel data-ua-index="<?= (int) $index ?>" style="--ua-bg: <?= htmlspecialchars($bloque['fondo'], ENT_QUOTES, 'UTF-8') ?>; --ua-z: <?= 40 + (count($ultimoAnioBloques) - $index) ?>;">
        <div class="nuestro-anio-panel-bg" data-ua-visual></div>
        <div class="nuestro-anio-panel-overlay" data-ua-overlay></div>

        <div class="site-container relative z-20 grid min-h-[inherit] gap-8 py-10 md:grid-cols-[1.1fr_0.9fr] md:items-center md:py-12 lg:gap-14">
          <div class="nuestro-anio-copy" data-ua-reveal>
            <p class="nuestro-anio-label"><?= htmlspecialchars($bloque['etiqueta'], ENT_QUOTES, 'UTF-8') ?></p>
            <h3 class="nuestro-anio-title"><?= htmlspecialchars($bloque['titulo'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="nuestro-anio-description mt-4"><?= htmlspecialchars($bloque['descripcion'], ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="nuestro-anio-metrics mt-6" aria-label="Indicadores del bloque">
              <?php foreach ($bloque['metricas'] as $metrica): ?>
                <li class="nuestro-anio-metric" data-ua-reveal><?= htmlspecialchars($metrica, ENT_QUOTES, 'UTF-8') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="nuestro-anio-visual" data-ua-reveal>
            <?php if ($bloque['visual'] === 'record'): ?>
              <div class="chart-shell chart-shell--hero">
                <div class="chart-header">
                  <span>Inspirado en reportes de bibliotecas historicas</span>
                  <strong>14.34 mbps</strong>
                </div>
                <svg viewBox="0 0 320 140" aria-hidden="true" class="chart-line">
                  <defs>
                    <linearGradient id="uaLineGradient" x1="0" y1="0" x2="1" y2="0">
                      <stop offset="0%" stop-color="rgba(230,236,246,0.56)" />
                      <stop offset="100%" stop-color="rgba(148,163,184,0.9)" />
                    </linearGradient>
                  </defs>
                  <path d="M0 104 C22 58, 48 86, 70 74 C92 64, 108 98, 128 90 C146 80, 166 88, 188 92 C208 94, 222 62, 242 86 C260 106, 282 58, 302 82 C314 98, 320 86, 320 96" fill="none" stroke="url(#uaLineGradient)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M0 140 L0 104 C22 58, 48 86, 70 74 C92 64, 108 98, 128 90 C146 80, 166 88, 188 92 C208 94, 222 62, 242 86 C260 106, 282 58, 302 82 C314 98, 320 86, 320 96 L320 140 Z" fill="url(#uaLineGradient)" opacity="0.16" />
                </svg>
              </div>
              <div class="mini-dashboard" data-ua-reveal>
                <p class="mini-dashboard-title">Panel secundario</p>
                <div class="mini-dashboard-grid">
                  <div>
                    <span>Conversion</span>
                    <strong>68%</strong>
                  </div>
                  <div>
                    <span>Engagement</span>
                    <strong>+24%</strong>
                  </div>
                  <div>
                    <span>Alertas</span>
                    <strong>03</strong>
                  </div>
                  <div>
                    <span>Cohortes</span>
                    <strong>17</strong>
                  </div>
                </div>
              </div>
            <?php elseif ($bloque['visual'] === 'programas'): ?>
              <div class="library-grid" aria-hidden="true">
                <div class="library-grid-title">Catalogo de rutas</div>
                <div class="library-grid-shelves">
                  <span>MAESTRIAS</span>
                  <span>DOCTORADOS</span>
                  <span>ESPECIALIDADES</span>
                </div>
                <div class="library-grid-cards">
                  <article><small>34</small><strong>Maestrias</strong></article>
                  <article><small>13</small><strong>Doctorados</strong></article>
                  <article><small>25</small><strong>Especialidades</strong></article>
                </div>
              </div>
            <?php else: ?>
              <div class="dashboard-shell" aria-hidden="true">
                <div class="dashboard-header">
                  <p>Control integral</p>
                  <span>Live</span>
                </div>
                <div class="dashboard-kpis">
                  <article><strong>95%</strong><span>Cumplimiento</span></article>
                  <article><strong>89</strong><span>Proyectos</span></article>
                  <article><strong>41</strong><span>Alianzas</span></article>
                </div>
                <div class="dashboard-stream" data-ua-stream>
                  <span style="--bar:38%"></span>
                  <span style="--bar:64%"></span>
                  <span style="--bar:46%"></span>
                  <span style="--bar:78%"></span>
                  <span style="--bar:56%"></span>
                  <span style="--bar:88%"></span>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

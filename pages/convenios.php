<style>
/* Corrección de Header: Posicionar fixed para flotar sobre el Hero sin interrumpirlo */
body[data-page="convenios"] .site-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 100;
}

body[data-page="convenios"] .hero {
    margin-top: 0 !important;
}

body[data-page="convenios"] .hero::before {
    background-image: linear-gradient(rgba(6, 10, 18, 0.6), rgba(6, 10, 18, 0.8)), url('<?= $baseUrl ?>LA-ESCUELA/IMG-BG/admi-doc.webp') !important;
}

@media (max-width: 1024px) {
  body[data-page="convenios"] .hero::before {
      background-attachment: scroll !important;
  }
}

/* Anular transiciones y animaciones CSS que puedan chocar con GSAP */
body[data-page="convenios"] .hero-content,
body[data-page="convenios"] .hero-content h1,
body[data-page="convenios"] .hero-content p,
body[data-page="convenios"] .hero-actions {
    animation: none !important;
    transition: none !important;
}

/* Efectos de Hover Premium en Tarjetas */
.convenio-card {
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.convenio-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(2, 6, 23, 0.5), 0 0 1px 1px var(--border-bright);
    border-color: rgba(255, 255, 255, 0.2) !important;
}

/* Glass-pill de filtros interactivos */
.filter-btn.active {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(59, 130, 246, 0.05) 100%);
    color: var(--text-primary);
    border-color: var(--brand-primary);
    box-shadow: 0 0 15px rgba(59, 130, 246, 0.25);
}

/* Estilos Premium para la Calculadora de Presupuesto */
.calc-glow-text {
    background: linear-gradient(135deg, #ffffff 0%, var(--unac-yellow) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 30px rgba(251, 202, 56, 0.15);
}

.calc-card-premium {
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.calc-card-premium::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: inherit;
    padding: 1px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.08), rgba(251, 202, 56, 0.15));
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
}

.calc-card-premium:hover {
    border-color: var(--unac-yellow) !important;
    box-shadow: 0 25px 50px rgba(2, 6, 23, 0.5), 0 0 1px 1px var(--unac-yellow);
}

.calc-input-wrapper {
    position: relative;
    border-radius: 16px;
    border: 1px solid var(--border-bright);
    background-color: rgba(18, 27, 45, 0.4);
    transition: all 0.3s ease;
}

.calc-input-wrapper:focus-within {
    border-color: var(--unac-yellow);
    box-shadow: 0 0 20px rgba(251, 202, 56, 0.2);
}
</style>

<!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Conoce nuestros
                <span class="highlight">CONVENIOS Y ALIANZAS</span>
            </h1>
            <p>Fomentamos la excelencia académica y la cooperación interinstitucional en posgrado.</p>

            <!-- Dynamic Action Buttons -->
            <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 w-full justify-center mt-8 relative z-10">
                <a href="#beneficio-destacado" class="hero-btn-primary group relative flex items-center justify-center gap-3 px-8 py-4 bg-unac-yellow text-bg-base font-black rounded-2xl overflow-hidden shadow-[0_20px_40px_rgba(251,202,56,0.2)]">
                    <span class="relative z-10">VER BENEFICIOS</span>
                    <i class="fas fa-arrow-down relative z-10 group-hover:translate-y-1 transition-transform"></i>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity"></div>
                </a>
                <a href="<?= $baseUrl ?>INSCRIPCION/" class="hero-btn-secondary group relative flex items-center justify-center gap-3 px-8 py-4 bg-white/5 border border-white/10 text-white font-bold rounded-2xl backdrop-blur-md">
                    <span>INSCRIBIRSE AHORA</span>
                    <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Scroll Down indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 pointer-events-none">
            <span class="text-[9px] text-white/20 font-bold uppercase tracking-[0.2em]">Desplazar</span>
            <div class="w-5 h-8 rounded-full border border-white/20 flex justify-center p-1">
                <div class="w-1 h-1 bg-unac-yellow rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

<!-- Beneficio Principal Section (25% Descuento - SYMMETRICAL COLUMNS) -->
<section id="beneficio-destacado" class="py-32 md:py-40 bg-bg-base relative overflow-hidden conv-section">
  <!-- Glowing subtle lights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-brand-primary/5 rounded-full blur-[140px]"></div>
  </div>

  <div class="site-container relative z-10">
    <div class="glass-card rounded-3xl border border-border-base p-10 md:p-16 lg:p-20 relative overflow-hidden group shadow-[0_30px_80px_rgba(2,6,23,0.6)]">
      <!-- Ambient radial glow behind the picture -->
      <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-accent/10 blur-[100px] rounded-full scale-90 pointer-events-none transition-transform duration-700 group-hover:scale-110"></div>
      
      <!-- Grid aligned stretching cards -->
      <div class="grid md:grid-cols-12 gap-10 md:gap-16 items-stretch">
        <div class="md:col-span-8 flex flex-col justify-between space-y-8">
          <div class="space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-xs font-bold uppercase tracking-widest">
              Beneficio Exclusivo de Admisión
            </div>
            <h2 class="text-[length:var(--fs-h3)] md:text-[length:var(--fs-h2)] font-bold text-text-primary leading-none tracking-tight">
              Descuento por <span class="text-gradient">Convenio Institucional</span>
            </h2>
            <p class="text-text-secondary text-[length:var(--fs-body)] leading-relaxed">
              La Unidad de Posgrado (UPG FCS) otorga un beneficio directo de pensión reducida a los miembros hábiles y trabajadores de nuestras entidades aliadas.
            </p>
          </div>
          
          <div class="grid sm:grid-cols-2 gap-4 pt-6 border-t border-white/5">
            <div class="flex items-start gap-3">
              <i data-lucide="check" class="w-5 h-5 text-brand-accent shrink-0 mt-0.5"></i>
              <span class="text-xs text-text-secondary"><strong>Toda Especialidad:</strong> Válido para Maestrías, Doctorados y Segundas Especialidades.</span>
            </div>
            <div class="flex items-start gap-3">
              <i data-lucide="check" class="w-5 h-5 text-brand-accent shrink-0 mt-0.5"></i>
              <span class="text-xs text-text-secondary"><strong>Acreditación Simple:</strong> Presenta tu constancia de trabajo o habilitación al postular.</span>
            </div>
          </div>
        </div>
        
        <div class="md:col-span-4 flex flex-col items-center justify-center p-8 bg-brand-primary/10 rounded-2xl border border-brand-primary/20 hover:border-brand-primary/40 transition-all duration-300 relative shadow-inner h-full">
          <div class="absolute -top-3 -right-3 w-9 h-9 rounded-full bg-brand-accent text-text-inverse flex items-center justify-center font-bold text-sm shadow-lg rotate-12">
            %
          </div>
          <span class="text-xs font-semibold text-text-secondary tracking-widest uppercase mb-2">DESCUENTO DE</span>
          <span class="text-7xl md:text-8xl font-extrabold text-text-primary tracking-tighter text-glow leading-none">25%</span>
          <span class="text-xs font-bold text-brand-accent tracking-wider uppercase mt-4 text-center">EN PENSIONES</span>
          <span class="text-[10px] text-text-muted mt-1.5 text-center">Aplica a cuotas de pensión durante todo el programa</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Convenios Grid & Filters Section -->
<section id="convenios-grid" class="py-24 bg-bg-base relative border-t border-border-base conv-section">
  <!-- Glowing radial ambient colors -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/3 left-0 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/3 right-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[130px]"></div>
  </div>

  <div class="site-container relative z-10">
    <div class="text-center mb-16 conv-header">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-xs font-semibold uppercase tracking-wider mb-4">
        Instituciones Socias
      </div>
      <h2 class="text-[length:var(--fs-h3)] md:text-[length:var(--fs-h2)] font-bold mb-4">Convenios Interinstitucionales</h2>
      <p class="text-text-muted max-w-2xl mx-auto text-[length:var(--fs-body)]">
        Explora la lista completa de colegios profesionales, hospitales, universidades y municipalidades que forman parte de nuestra red académica.
      </p>
    </div>

    <!-- Buscador de Convenios (Search Bar - PREMIUM glassmorphism design) -->
    <div class="max-w-2xl mx-auto mb-10 px-4 conv-search-box">
      <div class="relative flex items-center bg-surface-glass border border-border-bright focus-within:border-brand-primary focus-within:ring-4 focus-within:ring-brand-primary/15 rounded-2xl p-1.5 transition-all duration-300">
        <div class="pl-4 text-text-secondary shrink-0">
          <i data-lucide="search" class="w-5 h-5 text-text-muted"></i>
        </div>
        <input type="text" id="convenios-search" placeholder="Buscar convenio (ej. Enfermeros, Hospital, Brasil...)" class="w-full bg-transparent py-3.5 px-3 text-[length:var(--fs-body)] text-text-primary placeholder-text-muted/40 border-0 outline-none focus:ring-0 focus:outline-none">
        <button id="btn-clear-search" class="hidden pr-4 text-text-muted hover:text-text-primary transition-colors focus:outline-none">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>
      <!-- Info badge when search has results -->
      <div id="search-status" class="hidden mt-3 text-center text-xs text-text-muted font-medium">
        Se encontraron <span id="search-count" class="text-brand-primary font-bold">0</span> convenios coincidentes.
      </div>
    </div>

    <!-- Filters/Tabs System -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-12 conv-filters">
      <button class="filter-btn active px-5 py-2.5 rounded-full glass-pill text-xs md:text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="all">Todos</button>
      <button class="filter-btn px-5 py-2.5 rounded-full glass-pill text-xs md:text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="colegios">Colegios Profesionales</button>
      <button class="filter-btn px-5 py-2.5 rounded-full glass-pill text-xs md:text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="hospitales">Salud & Hospitales</button>
      <button class="filter-btn px-5 py-2.5 rounded-full glass-pill text-xs md:text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="internacionales">Universidades & Internacional</button>
      <button class="filter-btn px-5 py-2.5 rounded-full glass-pill text-xs md:text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="locales">Gobiernos Locales</button>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 conv-grid" id="convenios-container">
      <?php
        $convenios = [
          // 1. Colegios Profesionales
          ['name' => 'Colegio de Enfermeros del Perú - Moquegua', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Junín', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Callao', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Tumbes', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Piura', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Cusco', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Puno', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Ucayali', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Lima Provincias', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - Huánuco', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          ['name' => 'Colegio de Enfermeros del Perú - San Martín', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento en pensiones de posgrado', 'validity' => 'Activo', 'category' => 'colegios', 'icon' => 'award'],
          
          // 2. Salud & Hospitales
          ['name' => 'Instituto Nacional de Salud del Niño (Breña)', 'type' => 'Convenio de Cooperación Docente Asistencial', 'benefit' => '25% de Descuento para personal, pasantías y campos clínicos en Pediatría', 'validity' => 'Activo', 'category' => 'hospitales', 'icon' => 'heart-pulse'],
          ['name' => 'Instituto Nacional Materno Perinatal', 'type' => 'Convenio Específico de Cooperación', 'benefit' => '25% de Descuento para personal, rotaciones y especialidades en Obstetricia y Neonatología', 'validity' => 'Activo', 'category' => 'hospitales', 'icon' => 'heart-pulse'],
          ['name' => 'Sociedad de Beneficencia del Callao', 'type' => 'Convenio de Apoyo Mutuo e Intervención Social', 'benefit' => '25% de Descuento para trabajadores y apoyo social integrado', 'validity' => 'Activo', 'category' => 'hospitales', 'icon' => 'heart-pulse'],
          ['name' => 'DIRIS Lima Norte (Red de Salud)', 'type' => 'Convenio de Cooperación Interinstitucional', 'benefit' => '25% de Descuento para personal de salud e investigación epidemiológica', 'validity' => 'Activo', 'category' => 'hospitales', 'icon' => 'heart-pulse'],
          ['name' => 'ESSALUD (Seguro Social de Salud)', 'type' => 'Convenio Marco de Colaboración', 'benefit' => 'Campos clínicos prioritarios, prácticas profesionales y residencias de posgrado', 'validity' => 'Activo', 'category' => 'hospitales', 'icon' => 'heart-pulse'],
          
          // 3. Universidades & Internacional
          ['name' => 'Universidad Federal de Río de Janeiro (UFRJ - Brasil)', 'type' => 'Convenio de Cooperación Científica Internacional', 'benefit' => 'Movilidad académica de estudiantes/docentes y proyectos de investigación conjunta 2026', 'validity' => 'Activo', 'category' => 'internacionales', 'icon' => 'globe'],
          ['name' => 'Universidad Nacional Mayor de San Marcos', 'type' => 'Convenio de Cooperación Mutua - Facultad de Medicina Humana', 'benefit' => 'Intercambio docente, proyectos de investigación y publicaciones indexadas de posgrado', 'validity' => 'Activo', 'category' => 'internacionales', 'icon' => 'graduation-cap'],
          ['name' => 'Universidad Femenina del Sagrado Corazón (UNIFE)', 'type' => 'Convenio de Cooperación Académica', 'benefit' => 'Descuentos cruzados para servidores y programas de posgrado combinados', 'validity' => 'Activo', 'category' => 'internacionales', 'icon' => 'graduation-cap'],

          // 4. Gobiernos Locales
          ['name' => 'Municipalidad Distrital de Bellavista', 'type' => 'Convenio Específico de Cooperación Local', 'benefit' => 'Proyección comunitaria, CIAM y descuento del 25% para servidores públicos', 'validity' => 'Activo', 'category' => 'locales', 'icon' => 'map-pin'],
        ];

        foreach ($convenios as $idx => $conv):
          // Dynamic accent setup based on category
          $accentText = 'text-brand-primary';
          $accentBg = 'bg-brand-primary/10';
          $hoverBorder = 'hover:border-brand-primary/40';
          
          if ($conv['category'] === 'hospitales') {
            $accentText = 'text-emerald-400';
            $accentBg = 'bg-emerald-500/10';
            $hoverBorder = 'hover:border-emerald-500/40';
          } elseif ($conv['category'] === 'internacionales') {
            $accentText = 'text-unac-yellow';
            $accentBg = 'bg-unac-yellow/10';
            $hoverBorder = 'hover:border-unac-yellow/40';
          } elseif ($conv['category'] === 'locales') {
            $accentText = 'text-indigo-400';
            $accentBg = 'bg-indigo-500/10';
            $hoverBorder = 'hover:border-indigo-500/40';
          }
      ?>
      <div class="convenio-card glass-card rounded-2xl border border-border-base <?= $hoverBorder ?> p-6 flex flex-col h-full relative overflow-hidden group" data-category="<?= $conv['category'] ?>">
        <!-- Subtle gradient overlay on hover -->
        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.015] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
        
        <div class="flex items-start justify-between mb-4">
          <div class="w-10 h-10 rounded-xl <?= $accentBg ?> <?= $accentText ?> flex items-center justify-center shrink-0">
            <i data-lucide="<?= $conv['icon'] ?>" class="w-5 h-5"></i>
          </div>
          <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2 py-0.5 rounded-full uppercase tracking-wider">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <?= $conv['validity'] ?>
          </span>
        </div>

        <h3 class="text-base md:text-[length:var(--fs-body)] lg:text-xl font-bold text-text-primary mb-2 leading-snug group-hover:text-text-primary transition-colors flex-1">
          <?= $conv['name'] ?>
        </h3>
        
        <p class="text-xs text-text-muted font-medium mb-4 line-clamp-1">
          <?= $conv['type'] ?>
        </p>

        <div class="border-t border-white/5 pt-4 mt-auto">
          <div class="flex items-start gap-2">
            <i data-lucide="check-circle" class="w-4 h-4 text-brand-accent shrink-0 mt-0.5"></i>
            <span class="text-xs font-semibold text-text-secondary leading-normal"><?= $conv['benefit'] ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Show More Button -->
    <div class="text-center mt-12 conv-more">
      <button id="btn-load-more" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-bg-surface border border-border-bright hover:border-unac-yellow hover:bg-bg-soft text-text-primary hover:text-unac-yellow font-bold tracking-wider transition-all duration-300 shadow-lg group">
        <span>Ver Más Convenios</span>
        <i data-lucide="plus-circle" class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"></i>
      </button>
    </div>
  </div>
</section>

<!-- Simulador de Presupuesto Section -->
<section id="simulador-presupuesto" class="py-24 bg-bg-base relative border-t border-border-base conv-section">
  <!-- Glowing ambient lights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-brand-primary/5 rounded-full blur-[140px]"></div>
  </div>

  <div class="site-container relative z-10">
    <!-- Header de la Sección -->
    <div class="text-center mb-16 max-w-3xl mx-auto">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-xs font-semibold uppercase tracking-wider mb-4">
        Simulador de Inversión Académica
      </div>
      <h2 class="text-[length:var(--fs-h3)] md:text-[length:var(--fs-h2)] font-bold mb-4">
        Calcula tu <span class="text-gradient">Presupuesto en Tiempo Real</span>
      </h2>
      <p class="text-text-muted text-base">
        Elige tu programa de posgrado, selecciona tu convenio activo específico en el selector y visualiza al instante tu plan de inversión y el ahorro total obtenido.
      </p>
    </div>

    <!-- Unified Luxury Dashboard Card -->
    <div class="glass-card rounded-3xl border border-border-base p-6 md:p-12 relative overflow-hidden shadow-[0_30px_80px_rgba(2,6,23,0.6)] max-w-5xl mx-auto bg-gradient-to-b from-bg-surface/80 to-bg-surface/30">
      <!-- Glow ambient overlay -->
      <div class="absolute -right-24 -bottom-24 w-96 h-96 bg-brand-primary/5 rounded-full blur-[110px] pointer-events-none"></div>
      
      <!-- STEP 1: Selectors (Horizontal Row) -->
      <div class="grid md:grid-cols-2 gap-6 mb-8 pb-8 border-b border-white/5">
        <!-- Select Program -->
        <div class="space-y-2.5">
          <label for="calc-programa" class="block text-xs font-bold text-text-secondary uppercase tracking-widest">1. Selecciona tu Programa</label>
          <div class="calc-input-wrapper p-1">
            <select id="calc-programa" class="w-full bg-transparent py-4 px-4 text-text-primary border-0 outline-none focus:ring-0 cursor-pointer appearance-none text-sm font-bold">
              <option value="maestria" class="bg-bg-surface text-text-primary font-semibold">Maestría (3 Ciclos / 1.5 Años)</option>
              <option value="doctorado" class="bg-bg-surface text-text-primary font-semibold">Doctorado (6 Ciclos / 3 Años)</option>
              <option value="segunda" class="bg-bg-surface text-text-primary font-semibold">Segunda Especialidad (2 Ciclos / 1 Año)</option>
            </select>
            <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted">
              <i class="fas fa-chevron-down text-xs"></i>
            </div>
          </div>
        </div>

        <!-- Select Specific Convenio -->
        <div class="space-y-2.5">
          <label for="calc-convenio" class="block text-xs font-bold text-text-secondary uppercase tracking-widest">2. Selecciona tu Convenio o Alianza Activa</label>
          <div class="calc-input-wrapper p-1">
            <select id="calc-convenio" class="w-full bg-transparent py-4 px-4 text-text-primary border-0 outline-none focus:ring-0 cursor-pointer appearance-none text-sm font-bold">
              <option value="regular" data-name="Público General" class="bg-bg-surface text-text-primary font-semibold">Ninguno / Público General (Sin Descuento)</option>
              <option value="egresado" data-name="Egresado UNAC" class="bg-bg-surface text-text-primary font-semibold">Graduado o Egresado UNAC (25% Descuento)</option>
              
              <!-- Group 1: Colegios Profesionales -->
              <optgroup label="Colegios Profesionales" class="bg-bg-surface text-text-muted font-black uppercase text-[10px] tracking-wider">
                <?php foreach ($convenios as $conv): ?>
                  <?php if ($conv['category'] === 'colegios'): ?>
                    <option value="convenio" data-name="<?= htmlspecialchars($conv['name']) ?>" class="bg-bg-surface text-text-primary font-semibold"><?= htmlspecialchars($conv['name']) ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </optgroup>

              <!-- Group 2: Salud & Hospitales -->
              <optgroup label="Salud & Hospitales" class="bg-bg-surface text-text-muted font-black uppercase text-[10px] tracking-wider">
                <?php foreach ($convenios as $conv): ?>
                  <?php if ($conv['category'] === 'hospitales'): ?>
                    <option value="convenio" data-name="<?= htmlspecialchars($conv['name']) ?>" class="bg-bg-surface text-text-primary font-semibold"><?= htmlspecialchars($conv['name']) ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </optgroup>

              <!-- Group 3: Universidades & Internacional -->
              <optgroup label="Universidades & Internacional" class="bg-bg-surface text-text-muted font-black uppercase text-[10px] tracking-wider">
                <?php foreach ($convenios as $conv): ?>
                  <?php if ($conv['category'] === 'internacionales'): ?>
                    <option value="convenio" data-name="<?= htmlspecialchars($conv['name']) ?>" class="bg-bg-surface text-text-primary font-semibold"><?= htmlspecialchars($conv['name']) ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </optgroup>

              <!-- Group 4: Gobiernos Locales -->
              <optgroup label="Gobiernos Locales" class="bg-bg-surface text-text-muted font-black uppercase text-[10px] tracking-wider">
                <?php foreach ($convenios as $conv): ?>
                  <?php if ($conv['category'] === 'locales'): ?>
                    <option value="convenio" data-name="<?= htmlspecialchars($conv['name']) ?>" class="bg-bg-surface text-text-primary font-semibold"><?= htmlspecialchars($conv['name']) ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </optgroup>
            </select>
            <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-text-muted">
              <i class="fas fa-chevron-down text-xs"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- STEP 2: Convenio Highlight Banner (Vibrant Dynamic Alert) -->
      <div id="banner-convenio" class="hidden mb-8 p-4 bg-brand-primary/10 border-l-4 border-brand-primary border-y border-r border-y-brand-primary/20 border-r-brand-primary/20 rounded-r-2xl items-center gap-3.5 shadow-md">
        <div class="w-8 h-8 rounded-lg bg-brand-primary/20 text-brand-primary flex items-center justify-center shrink-0">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="text-sm text-text-primary font-semibold">
          ¡Beneficio de convenio con <span id="label-convenio-nombre" class="text-unac-yellow font-black"></span> validado y aplicado con éxito (25% de descuento en pensiones)!
        </div>
      </div>

      <!-- STEP 3: Checkout / Invoice Table -->
      <div class="overflow-x-auto mb-8 border border-white/5 rounded-2xl bg-bg-soft/20 shadow-inner">
        <table class="w-full text-left border-collapse text-xs md:text-sm">
          <thead>
            <tr class="border-b border-white/5 bg-bg-soft/40 text-text-secondary uppercase font-bold tracking-widest text-[10px] md:text-xs">
              <th class="py-4 px-6">Concepto de Inversión</th>
              <th class="py-4 px-6 text-center">Inversión Regular</th>
              <th class="py-4 px-6 text-center">Con Convenio</th>
              <th class="py-4 px-6 text-center text-brand-accent">Tu Ahorro</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1: Derecho de Inscripción -->
            <tr class="border-b border-white/[0.03] hover:bg-white/[0.01] transition-colors">
              <td class="py-4 px-6 font-semibold text-text-primary">
                <i class="fas fa-file-invoice text-unac-blue text-xs w-4 mr-1"></i> Derecho de Inscripción (Pago Único)
              </td>
              <td id="row-inscripcion-reg" class="py-4 px-6 text-center text-text-muted font-medium">S/ 200.00</td>
              <td id="row-inscripcion-conv" class="py-4 px-6 text-center text-text-primary font-extrabold">S/ 200.00</td>
              <td id="row-inscripcion-save" class="py-4 px-6 text-center text-text-muted/40 font-medium">S/ 0.00</td>
            </tr>
            <!-- Row 2: Matrícula Semestral -->
            <tr class="border-b border-white/[0.03] hover:bg-white/[0.01] transition-colors">
              <td class="py-4 px-6 font-semibold text-text-primary">
                <i class="fas fa-redo text-unac-yellow text-xs w-4 mr-1"></i> Matrícula Regular Semestral (Por Ciclo)
              </td>
              <td id="row-matricula-reg" class="py-4 px-6 text-center text-text-muted font-medium">S/ 100.00</td>
              <td id="row-matricula-conv" class="py-4 px-6 text-center text-text-primary font-extrabold">S/ 100.00</td>
              <td id="row-matricula-save" class="py-4 px-6 text-center text-text-muted/40 font-medium">S/ 0.00</td>
            </tr>
            <!-- Row 3: Pensión Mensual -->
            <tr class="border-b border-white/[0.03] hover:bg-white/[0.01] transition-colors">
              <td id="row-pension-label" class="py-4 px-6 font-semibold text-text-primary">
                <i class="fas fa-wallet text-brand-primary text-xs w-4 mr-1"></i> Pensión de Enseñanza Mensual
              </td>
              <td id="row-pension-reg" class="py-4 px-6 text-center text-text-muted font-medium">S/ 500.00</td>
              <td id="row-pension-conv" class="py-4 px-6 text-center text-text-primary font-extrabold">S/ 375.00</td>
              <td id="row-pension-save" class="py-4 px-6 text-center text-brand-accent font-black">S/ 0.00</td>
            </tr>
            <!-- Row 4: Total por Ciclo Semestral -->
            <tr class="hover:bg-white/[0.01] transition-colors bg-bg-soft/10">
              <td class="py-4 px-6 font-extrabold text-text-primary">
                <i class="fas fa-calendar-check text-brand-accent text-xs w-4 mr-1"></i> Inversión por Ciclo Completo (4 cuotas + Matrícula)
              </td>
              <td id="row-ciclo-reg" class="py-4 px-6 text-center text-text-secondary font-bold">S/ 2,100.00</td>
              <td id="row-ciclo-conv" class="py-4 px-6 text-center text-unac-yellow font-black">S/ 1,600.00</td>
              <td id="row-ciclo-save" class="py-4 px-6 text-center text-brand-accent font-black">S/ 0.00</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- STEP 4: Grand Total Academic Investment (Full-Width Banner) -->
      <div class="p-6 md:p-8 rounded-2xl bg-bg-soft/40 border border-white/5 flex flex-col md:flex-row items-center justify-between gap-6 shadow-inner relative">
        <div>
          <span class="block text-[10px] text-text-muted uppercase font-bold tracking-widest mb-1.5">Inversión Académica Total (Inscripción No Incluida)</span>
          <div class="flex items-baseline gap-2">
            <span class="text-2xl font-bold text-text-primary">S/</span>
            <span id="res-total-academico" class="text-5xl md:text-6xl font-black calc-glow-text leading-none tracking-tighter">4,800.00</span>
          </div>
          <span class="block text-xs text-text-secondary font-semibold mt-2.5 flex items-center gap-1.5">
            <i class="fas fa-clock text-brand-primary"></i> Duración del Programa: <strong id="res-duracion-programa" class="text-text-primary font-bold"></strong>
          </span>
        </div>

        <div id="savings-highlight-badge" class="hidden p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-center shrink-0 min-w-[200px] shadow-lg shadow-emerald-500/5">
          <span class="block text-[9px] uppercase font-bold tracking-wider mb-0.5">¡Tu Ahorro Académico Neto!</span>
          <span id="res-ahorro-neto" class="text-xl md:text-2xl font-black tracking-tight block">S/ 1,500.00</span>
          <span class="text-[9px] text-text-muted">Aplica a cuotas de pensión de todo el programa</span>
        </div>
      </div>

      <!-- STEP 5: CTA & Trust Credentials -->
      <div class="mt-8 pt-8 border-t border-white/5 grid md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-8 space-y-3">
          <div class="text-xs font-bold text-brand-primary uppercase tracking-widest flex items-center gap-2">
            <i class="fas fa-certificate"></i> Educación de Calidad al Precio Más Bajo del País
          </div>
          <p class="text-xs text-text-muted leading-relaxed">
            La Escuela de Posgrado UNAC es **la universidad pública más económica del Perú** en maestrías y doctorados. Garantizamos la máxima calidad en enseñanza bajo el licenciamiento institucional de **SUNEDU** y acreditaciones internacionales vigentes.
          </p>
        </div>
        <div class="md:col-span-4 shrink-0">
          <a href="<?= $baseUrl ?>INSCRIPCION/" class="w-full flex items-center justify-center gap-2 py-4 px-6 rounded-xl bg-gradient-to-r from-unac-yellow to-unac-yellow-dark hover:from-unac-yellow hover:to-unac-yellow text-bg-base font-black tracking-wider transition-all duration-300 shadow-lg hover:shadow-unac-yellow/20 group text-sm text-center">
            <span>INICIAR INSCRIPCIÓN VÍA CONVENIO</span>
            <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Calculator JS Logic -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const progSelect = document.getElementById('calc-programa');
    const convSelect = document.getElementById('calc-convenio');
    
    // Labels & Headers
    const labelConvenioNombre = document.getElementById('label-convenio-nombre');
    const bannerConvenio = document.getElementById('banner-convenio');
    
    // Row 1: Inscripción
    const rowInscripcionReg = document.getElementById('row-inscripcion-reg');
    const rowInscripcionConv = document.getElementById('row-inscripcion-conv');
    const rowInscripcionSave = document.getElementById('row-inscripcion-save');
    
    // Row 2: Matrícula
    const rowMatriculaReg = document.getElementById('row-matricula-reg');
    const rowMatriculaConv = document.getElementById('row-matricula-conv');
    const rowMatriculaSave = document.getElementById('row-matricula-save');
    
    // Row 3: Pensión
    const rowPensionLabel = document.getElementById('row-pension-label');
    const rowPensionReg = document.getElementById('row-pension-reg');
    const rowPensionConv = document.getElementById('row-pension-conv');
    const rowPensionSave = document.getElementById('row-pension-save');
    
    // Row 4: Total por Ciclo
    const rowCicloReg = document.getElementById('row-ciclo-reg');
    const rowCicloConv = document.getElementById('row-ciclo-conv');
    const rowCicloSave = document.getElementById('row-ciclo-save');
    
    // Bottom Block: Grand Total & Net Savings
    const resTotalAcademico = document.getElementById('res-total-academico');
    const resAhorroNeto = document.getElementById('res-ahorro-neto');
    const savingsHighlightBadge = document.getElementById('savings-highlight-badge');
    const resDuracionPrograma = document.getElementById('res-duracion-programa');

    const config = {
        maestria: {
            inscripcion: 200,
            matricula: 100,
            pension: 500,
            ciclos: 3,
            pensionesPorCiclo: 4,
            duracion: '3 Ciclos Académicos (1.5 Años)'
        },
        doctorado: {
            inscripcion: 250,
            matricula: 100,
            pension: 500,
            ciclos: 6,
            pensionesPorCiclo: 4,
            duracion: '6 Ciclos Académicos (3 Años)'
        },
        segunda: {
            inscripcion: 120,
            matricula: 200,
            pension: 300, // split 1200 semestral cost in 4 cuotas of 300
            ciclos: 2,
            pensionesPorCiclo: 4,
            duracion: '2 Ciclos Académicos (1 Año)'
        }
    };

    function recalculate() {
        const progKey = progSelect.value;
        const selectedOpt = convSelect.options[convSelect.selectedIndex];
        
        const data = config[progKey];
        if (!data) return;
        
        const convType = selectedOpt.value; // 'regular', 'egresado', or 'convenio'
        const convName = selectedOpt.getAttribute('data-name');
        
        const isDiscounted = (convType !== 'regular');
        const discountRate = isDiscounted ? 0.25 : 0.0;
        
        // Cost calculations
        const valInscripcion = data.inscripcion;
        
        const valMatriculaReg = data.matricula;
        const valMatriculaConv = data.matricula; // Matrícula doesn't have discount
        const valMatriculaSave = 0;
        
        const valPensionReg = data.pension;
        const valPensionConv = valPensionReg * (1 - discountRate);
        const valPensionSave = valPensionReg * discountRate;
        
        const valCicloReg = valMatriculaReg + (valPensionReg * data.pensionesPorCiclo);
        const valCicloConv = valMatriculaConv + (valPensionConv * data.pensionesPorCiclo);
        const valCicloSave = valCicloReg - valCicloConv;
        
        const valTotalReg = valCicloReg * data.ciclos;
        const valTotalConv = valCicloConv * data.ciclos;
        const valTotalSave = valTotalReg - valTotalConv;
        
        // Populate values
        resDuracionPrograma.textContent = data.duracion;
        
        // Row 1: Inscription
        rowInscripcionReg.textContent = `S/ ${valInscripcion.toFixed(2)}`;
        rowInscripcionConv.textContent = `S/ ${valInscripcion.toFixed(2)}`;
        rowInscripcionSave.textContent = `S/ 0.00`;
        
        // Row 2: Matrícula
        rowMatriculaReg.textContent = `S/ ${valMatriculaReg.toFixed(2)}`;
        rowMatriculaConv.textContent = `S/ ${valMatriculaConv.toFixed(2)}`;
        rowMatriculaSave.textContent = `S/ 0.00`;
        
        // Row 3: Pensión
        if (progKey === 'segunda') {
            rowPensionLabel.innerHTML = `<i class="fas fa-wallet text-brand-primary text-xs w-4 mr-1"></i> Pensión Académica (4 cuotas / ciclo)`;
        } else {
            rowPensionLabel.innerHTML = `<i class="fas fa-wallet text-brand-primary text-xs w-4 mr-1"></i> Pensión de Enseñanza Mensual`;
        }
        rowPensionReg.textContent = `S/ ${valPensionReg.toFixed(2)}`;
        rowPensionConv.textContent = `S/ ${valPensionConv.toFixed(2)}`;
        rowPensionSave.textContent = isDiscounted ? `-S/ ${valPensionSave.toFixed(2)}` : `S/ 0.00`;
        
        // Row 4: Total por Ciclo
        rowCicloReg.textContent = `S/ ${valCicloReg.toFixed(2)}`;
        rowCicloConv.textContent = `S/ ${valCicloConv.toFixed(2)}`;
        rowCicloSave.textContent = isDiscounted ? `-S/ ${valCicloSave.toFixed(2)}` : `S/ 0.00`;
        
        // Bottom Grand Total (animate using GSAP if available)
        const oldTotal = parseFloat(resTotalAcademico.textContent.replace(/,/g, '')) || 0;
        animateNumber(resTotalAcademico, oldTotal, valTotalConv);
        
        // Savings indicator
        if (isDiscounted) {
            bannerConvenio.classList.remove('hidden');
            bannerConvenio.classList.add('flex');
            labelConvenioNombre.textContent = convName;
            
            resAhorroNeto.textContent = `S/ ${valTotalSave.toFixed(2)}`;
            savingsHighlightBadge.classList.remove('hidden');
            
            // GSAP pulse animation
            if (typeof gsap !== 'undefined') {
                gsap.fromTo(bannerConvenio, 
                    { opacity: 0.7, y: -5 },
                    { opacity: 1, y: 0, duration: 0.3, ease: 'power2.out' }
                );
                gsap.fromTo('#savings-highlight-badge',
                    { scale: 0.9, opacity: 0.8 },
                    { scale: 1, opacity: 1, duration: 0.4, ease: 'back.out(1.5)' }
                );
            }
        } else {
            bannerConvenio.classList.add('hidden');
            bannerConvenio.classList.remove('flex');
            savingsHighlightBadge.classList.add('hidden');
            resAhorroNeto.textContent = 'S/ 0.00';
        }
    }
    
    function animateNumber(element, start, end) {
        if (start === end) {
            element.textContent = end.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            return;
        }
        if (typeof gsap !== 'undefined') {
            const tempObj = { val: start };
            gsap.to(tempObj, {
                val: end,
                duration: 0.45,
                ease: 'power2.out',
                onUpdate: () => {
                    element.textContent = tempObj.val.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                }
            });
        } else {
            element.textContent = end.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }
    }
    
    // Wire up events
    progSelect.addEventListener('change', recalculate);
    convSelect.addEventListener('change', recalculate);
    
    // Init
    recalculate();
});
</script>

  </div>
</section>

<!-- Contact & Call to Action Section (SYMMETRICAL DUAL CARDS) -->
<section id="contacto" class="py-24 bg-bg-base relative border-t border-border-base conv-section">
  <!-- Dynamic accent lights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute bottom-0 left-1/4 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[140px]"></div>
  </div>

  <div class="site-container relative z-10">
    <!-- Equal height containers via items-stretch -->
    <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">
      <!-- Left Card: Symmetrical with right card -->
      <div class="lg:col-span-7 glass-card rounded-3xl border border-border-base p-8 md:p-12 flex flex-col justify-between space-y-8 relative overflow-hidden shadow-2xl">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-xs font-semibold uppercase tracking-wider">
            Canales de Atención
          </div>
          <h2 class="text-[length:var(--fs-h3)] md:text-[length:var(--fs-h2)] font-bold text-text-primary leading-none">
            ¿Tienes alguna consulta <br><span class="text-gradient">sobre los Convenios?</span>
          </h2>
          <p class="text-text-secondary text-xs sm:text-sm leading-relaxed max-w-xl">
            Nuestra Unidad de Posgrado cuenta con personal especializado para asesorarte sobre la acreditación de convenios vigentes de forma inmediata.
          </p>
        </div>
        
        <!-- Compact and organized dashboard panels -->
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="p-4 rounded-xl bg-bg-soft/40 border border-white/5 flex gap-3">
            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 text-brand-primary flex items-center justify-center shrink-0">
              <i data-lucide="mail" class="w-4 h-4"></i>
            </div>
            <div>
              <span class="block text-[10px] text-text-muted uppercase font-bold tracking-wider">CORREO</span>
              <a href="mailto:fcs.posgrado@unac.pe" class="text-xs text-brand-primary hover:underline font-bold break-all">fcs.posgrado@unac.pe</a>
            </div>
          </div>

          <div class="p-4 rounded-xl bg-bg-soft/40 border border-white/5 flex gap-3">
            <div class="w-8 h-8 rounded-lg bg-unac-yellow/10 text-unac-yellow flex items-center justify-center shrink-0">
              <i data-lucide="phone" class="w-4 h-4"></i>
            </div>
            <div>
              <span class="block text-[10px] text-text-muted uppercase font-bold tracking-wider">TELÉFONO</span>
              <span class="text-xs text-text-primary font-bold">(01) 429-9749 (Anexo 2042)</span>
            </div>
          </div>

          <div class="p-4 rounded-xl bg-bg-soft/40 border border-white/5 flex gap-3 sm:col-span-2">
            <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center shrink-0">
              <i data-lucide="map-pin" class="w-4 h-4"></i>
            </div>
            <div>
              <span class="block text-[10px] text-text-muted uppercase font-bold tracking-wider">OFICINA FÍSICA</span>
              <p class="text-xs text-text-secondary leading-normal">
                Facultad de Ciencias de la Salud (1.° Piso) • Av. Juan Pablo II N° 310, Bellavista.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Card: Symmetrical with left card -->
      <div class="lg:col-span-5 flex">
        <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl glass-card border border-border-bright p-8 md:p-12 text-center flex flex-col justify-between space-y-8 h-full">
          <div class="w-16 h-16 rounded-full bg-brand-primary/20 flex items-center justify-center mx-auto text-brand-primary shadow-inner">
            <i data-lucide="user-check" class="w-8 h-8"></i>
          </div>
          
          <div class="space-y-3">
            <h3 class="text-[length:var(--fs-h3)] font-bold text-text-primary leading-tight">¿Listo para Postular?</h3>
            <p class="text-xs text-text-muted leading-relaxed">
              Inicia tu proceso de admisión hoy mismo. Recuerda adjuntar tu acreditación de convenio para gozar del descuento.
            </p>
          </div>
          
          <div class="space-y-3 pt-4 border-t border-white/5">
            <a href="<?= $baseUrl ?>INSCRIPCION/" class="w-full flex items-center justify-center gap-2 py-4 rounded-xl bg-gradient-to-r from-brand-primary to-brand-primary-dark hover:from-brand-primary-light hover:to-brand-primary text-text-primary hover:text-white font-bold tracking-wider transition-all duration-300 shadow-lg hover:shadow-brand-primary/25 border border-white/10 group">
              <span>Inscribirse Ahora</span>
              <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </a>
            
            <a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php" class="w-full flex items-center justify-center gap-2 py-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-unac-yellow hover:bg-unac-yellow/10 text-text-secondary hover:text-unac-yellow font-semibold text-xs tracking-wider transition-all duration-300">
              <i data-lucide="calendar" class="w-4 h-4"></i>
              <span>Ver Cronograma</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Initialize lucide icons for this page content if loaded after DOMContentLoaded
  if (typeof lucide !== 'undefined' && lucide.createIcons) {
    lucide.createIcons();
  }
</script>

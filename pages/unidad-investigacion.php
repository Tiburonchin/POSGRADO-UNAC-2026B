<style>
/* Corrección de Header: Posicionar fixed para flotar sobre el Hero sin interrumpirlo */
body[data-page="unidad-investigacion"] .site-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 100;
}

body[data-page="unidad-investigacion"] .hero {
    margin-top: 0 !important;
}

body[data-page="unidad-investigacion"] .hero::before {
    background-image: linear-gradient(rgba(6, 10, 18, 0.6), rgba(6, 10, 18, 0.8)), url('<?= $baseUrl ?>LA-ESCUELA/IMG-BG/admi-doc.webp') !important;
}

@media (max-width: 1024px) {
  body[data-page="unidad-investigacion"] .hero::before {
      background-attachment: scroll !important;
  }
}
</style>

<!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>
                Descubre nuestra
                <span class="highlight">UNIDAD DE INVESTIGACIÓN</span>
            </h1>
            <p>Impulsamos la ciencia, tecnología y humanidades en posgrado</p>
        </div>

        <!-- Scroll Down indicator -->
        <div class="hero-scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 pointer-events-none">
            <span class="text-[9px] text-white/20 font-bold uppercase tracking-[0.2em]">Desplazar</span>
            <div class="w-5 h-8 rounded-full border border-white/20 flex justify-center p-1">
                <div class="w-1 h-1 bg-unac-yellow rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

<!-- Section 2: Liderazgo y Dirección -->
<section id="liderazgo" class="pt-56 pb-40 bg-bg-base relative ui-section">
  <!-- Glowing top border separator for perfect visual harmony -->
  <div class="absolute top-0 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
  
  <!-- Glowing subtle lights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[120px]"></div>
  </div>

  <div class="site-container relative z-10">
    <!-- Balanced 50/50 Grid with larger gaps -->
     <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-center">
      <!-- Directora Photo (Sin Marco - Floating Overlay Design - LARGER and MORE SPACED) -->
      <div class="relative ui-profile flex justify-center order-2 lg:order-1 lg:col-span-5 w-full">
        <!-- Ambient radial glow behind the picture -->
        <div class="absolute inset-0 bg-brand-primary/10 blur-[100px] rounded-full scale-90 pointer-events-none"></div>
        <div class="relative w-full max-w-[500px]">
          <!-- Borderless Image card with bottom blending overlay - aspect-square for 1x1 ratio -->
          <div class="relative rounded-3xl overflow-hidden aspect-square shadow-[0_30px_70px_rgba(0,0,0,0.55)] group">
             <img src="<?= $baseUrl ?>img/unidad-investigacion/dra-vigo-nuevo.jpg" alt="Dra. Katia Vigo Ingar" class="w-full h-full object-cover transition-transform duration-750 group-hover:scale-105">
             <!-- Blending dark gradient at the bottom -->
             <div class="absolute inset-0 bg-gradient-to-t from-bg-base via-bg-base/30 to-transparent opacity-95 group-hover:opacity-85 transition-opacity duration-500"></div>
             <!-- Floating text content on the borderless card -->
             <div class="absolute bottom-0 inset-x-0 p-8 text-center z-10">
               <h3 class="text-2xl font-bold text-text-primary mb-1">Dra. Katia Vigo Ingar</h3>
               <p class="text-unac-yellow font-semibold tracking-wider text-xs uppercase">Directora de la Unidad de Investigación</p>
             </div>
             <!-- Fine inner ring for sharpness -->
             <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
          </div>
        </div>
      </div>
      
      <!-- Welcome Message & Pillars (Summarized and organized beautifully) -->
      <div class="space-y-8 ui-welcome order-1 lg:order-2 lg:col-span-7 w-full">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-xs font-semibold uppercase tracking-wider">
            Presentación EPG-UNAC
          </div>
          <h2 class="text-3xl md:text-5xl font-bold leading-none text-text-primary">
            Dirección Científica <br><span class="text-gradient">e Innovación</span>
          </h2>
          <div class="w-20 h-1 bg-gradient-to-r from-brand-primary to-brand-accent rounded-full"></div>
        </div>
        
        <!-- Elegant Intro Quote -->
        <p class="font-display italic text-lg md:text-xl text-text-secondary border-l-2 border-brand-accent pl-4 leading-relaxed">
          "Impulsamos la generación de conocimiento innovador mediante proyectos interdisciplinarios que integran a estudiantes, docentes e investigadores."
        </p>

        <!-- Dynamic Action Pillars (Dashboard view) -->
        <div class="grid sm:grid-cols-2 gap-4">
          <!-- Pillar 1 -->
          <div class="p-5 rounded-2xl bg-bg-surface/50 border border-border-base hover:border-brand-primary/30 transition-all duration-300">
            <div class="w-10 h-10 rounded-xl bg-brand-primary/10 text-brand-primary flex items-center justify-center mb-3">
              <i data-lucide="layers" class="w-5 h-5"></i>
            </div>
            <h4 class="font-bold text-text-primary text-sm mb-1">Investigación Aplicada</h4>
            <p class="text-xs text-text-muted leading-relaxed">Desarrollo de proyectos científicos interdisciplinarios con impacto nacional.</p>
          </div>

          <!-- Pillar 2 -->
          <div class="p-5 rounded-2xl bg-bg-surface/50 border border-border-base hover:border-unac-yellow/30 transition-all duration-300">
            <div class="w-10 h-10 rounded-xl bg-unac-yellow/10 text-unac-yellow flex items-center justify-center mb-3">
              <i data-lucide="book-marked" class="w-5 h-5"></i>
            </div>
            <h4 class="font-bold text-text-primary text-sm mb-1">Difusión de Impacto</h4>
            <p class="text-xs text-text-muted leading-relaxed">Divulgación de alta indexación a través de la Revista Científica EPG.</p>
          </div>

          <!-- Pillar 3 -->
          <div class="p-5 rounded-2xl bg-bg-surface/50 border border-border-base hover:border-emerald-500/30 transition-all duration-300 sm:col-span-2">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center shrink-0">
                <i data-lucide="globe" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="font-bold text-text-primary text-sm mb-0.5">Alianzas y Redes Estratégicas</h4>
                <p class="text-xs text-text-muted leading-relaxed">Acceso coordinado a fondos concursables, redes y recursos internacionales.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Propósito e Identidad -->
<section id="identidad" class="py-36 bg-bg-surface/30 border-y border-border-base relative ui-section">
  <!-- Soft accent backlights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[100px]"></div>
  </div>

  <div class="site-container relative z-10">
    <div class="grid lg:grid-cols-12 gap-16 items-center">
      <!-- Mision y Vision Text -->
      <div class="lg:col-span-7 space-y-8 lg:order-1 order-2 ui-mision">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-xs font-semibold uppercase tracking-wider">
            Nuestros Pilares
          </div>
          <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Visión de <span class="text-gradient">Futuro y Calidad</span></h2>
        </div>

        <!-- Mision -->
        <div class="glass-card p-8 rounded-2xl border-l-4 border-l-brand-primary transition-transform hover:-translate-y-1 duration-300">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 rounded-xl bg-brand-primary/20 flex items-center justify-center">
              <i data-lucide="target" class="w-6 h-6 text-brand-primary"></i>
            </div>
            <h3 class="text-2xl font-bold">Misión</h3>
          </div>
          <p class="text-text-muted leading-relaxed">
            Formar profesionales, generando y promoviendo la investigación científica, tecnológica y humanística, en los estudiantes universitarios con calidad, competitividad y responsabilidad social para el desarrollo sostenible del país.
          </p>
        </div>
        
        <!-- Vision -->
        <div class="glass-card p-8 rounded-2xl border-l-4 border-l-unac-yellow transition-transform hover:-translate-y-1 duration-300">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 rounded-xl bg-unac-yellow/20 flex items-center justify-center">
              <i data-lucide="eye" class="w-6 h-6 text-unac-yellow"></i>
            </div>
            <h3 class="text-2xl font-bold">Visión</h3>
          </div>
          <p class="text-text-muted leading-relaxed">
            Ser una universidad acreditada y con liderazgo a nivel nacional e internacional, con docentes altamente competitivos calificados y con infraestructura moderna, que se desarrolla en alianzas estratégicas con instituciones públicas y privadas.
          </p>
        </div>
      </div>

      <!-- Mision y Vision Image (Sin Marco - Floating Blended Design) -->
      <div class="lg:col-span-5 lg:order-2 order-1 relative ui-mv-img flex justify-center">
        <!-- Ambient radial glow behind the picture -->
        <div class="absolute inset-0 bg-brand-accent/5 blur-[70px] rounded-full scale-75 pointer-events-none"></div>
        <div class="relative w-full max-w-[480px] rounded-3xl overflow-hidden aspect-square shadow-[0_25px_60px_rgba(0,0,0,0.35)] group">
          <img src="<?= $baseUrl ?>img/unidad-investigacion/mision-vision.jpg" alt="Investigación de Posgrado" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105 filter brightness-[0.85] group-hover:brightness-100">
          <!-- Fine inner ring for sharpness -->
          <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Estructura Científica (Comités) -->
<section id="comites" class="py-36 bg-bg-base relative ui-section">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-brand-primary/5 rounded-full blur-[120px]"></div>
  </div>

  <div class="site-container relative z-10 ui-committees">
    <div class="text-center mb-20">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-xs font-semibold uppercase tracking-wider mb-4">
        Consejo y Arbitraje
      </div>
      <h2 class="text-3xl md:text-5xl font-bold mb-4">Comités de Investigación</h2>
      <p class="text-text-muted max-w-2xl mx-auto text-base md:text-lg">Equipos de trabajo multidisciplinarios a cargo del desarrollo científico y de la difusión de alto impacto académico.</p>
    </div>
    
    <div class="grid md:grid-cols-2 gap-16 max-w-6xl mx-auto">
      <!-- Revista -->
      <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.35)] hover:shadow-[0_25px_60px_rgba(0,0,0,0.45)] transition-all duration-500 hover:-translate-y-2 group">
        <!-- Ambient subtle glow inside -->
        <div class="absolute inset-0 bg-brand-primary/5 blur-[40px] pointer-events-none"></div>
        <div class="aspect-square w-full overflow-hidden bg-bg-soft">
          <img src="<?= $baseUrl ?>img/unidad-investigacion/comite-cientifico.png" alt="Comisión de la Revista Científica" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        </div>
        <!-- Floating glass caption overlay -->
        <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-bg-base via-bg-base/95 to-bg-base/40 backdrop-blur-md border-t border-white/5">
          <h4 class="text-xl font-bold text-text-primary mb-2 text-center group-hover:text-brand-primary transition-colors">Comisión de la Revista Científica</h4>
          <p class="text-xs text-text-muted text-center leading-relaxed">
            Docentes e investigadores encargados de la selección, revisión por pares y edición de las publicaciones de alto impacto de la Escuela de Posgrado.
          </p>
        </div>
        <!-- Fine inner ring for sharpness -->
        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
      </div>

      <!-- Directivo -->
      <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.35)] hover:shadow-[0_25px_60px_rgba(0,0,0,0.45)] transition-all duration-500 hover:-translate-y-2 group">
        <!-- Ambient subtle glow inside -->
        <div class="absolute inset-0 bg-unac-yellow/5 blur-[40px] pointer-events-none"></div>
        <div class="aspect-square w-full overflow-hidden bg-bg-soft">
          <img src="<?= $baseUrl ?>img/unidad-investigacion/comite-directivo.png" alt="Comité Directivo" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        </div>
        <!-- Floating glass caption overlay -->
        <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-bg-base via-bg-base/95 to-bg-base/40 backdrop-blur-md border-t border-white/5">
          <h4 class="text-xl font-bold text-text-primary mb-2 text-center group-hover:text-unac-yellow transition-colors">Comité Directivo de Investigación</h4>
          <p class="text-xs text-text-muted text-center leading-relaxed">
            Cuerpo directivo responsable de planificar, evaluar e impulsar las políticas y proyectos de investigación tecnológica y humanística.
          </p>
        </div>
        <!-- Fine inner ring for sharpness -->
        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none"></div>
      </div>
    </div>
  </div>
</section>

<!-- Capacitaciones y Flujogramas (Sección 5: Recursos) -->
<section id="recursos" class="py-36 bg-bg-surface/50 relative border-y border-border-base ui-section">
  <div class="site-container">
    <div class="grid lg:grid-cols-2 gap-16">
      
      <!-- Capacitaciones -->
      <div class="ui-capacitaciones">
        <div class="flex items-center gap-3 mb-8">
          <i data-lucide="book-open" class="w-8 h-8 text-brand-primary animate-pulse"></i>
          <h2 class="text-3xl font-bold">Capacitaciones</h2>
        </div>
        
        <div class="space-y-4">
          <?php
            $capacitaciones = [
              ['title' => 'Capacitación 26 Noviembre', 'url' => 'https://drive.google.com/file/d/1jm5DWZvDqtwfRV8oGbrJ62nzFX3yeRMw/view'],
              ['title' => 'Capacitación 27 Noviembre', 'url' => 'https://drive.google.com/file/d/1C43nhejoBqNAXp4c329hYJ6XDW7P2vEt/view'],
              ['title' => 'Capacitación 28 Noviembre', 'url' => 'https://drive.google.com/file/d/1AL7c8YM3VcI5FXe07Kn1fQ7yrddsqeE9/view'],
            ];
            foreach ($capacitaciones as $cap):
          ?>
          <a href="<?= $cap['url'] ?>" target="_blank" class="flex items-center justify-between p-5 rounded-xl bg-bg-base border border-border-base hover:border-brand-primary hover:bg-brand-primary/5 transition-all duration-300 group">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-bg-soft flex items-center justify-center group-hover:bg-brand-primary/20 transition-colors">
                <i data-lucide="file-text" class="w-5 h-5 text-text-muted group-hover:text-brand-primary"></i>
              </div>
              <span class="font-medium text-text-primary"><?= $cap['title'] ?></span>
            </div>
            <i data-lucide="external-link" class="w-5 h-5 text-text-muted group-hover:text-brand-primary opacity-0 group-hover:opacity-100 transition-all transform translate-x-[-10px] group-hover:translate-x-0"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Flujogramas -->
      <div class="ui-flujogramas">
        <div class="flex items-center gap-3 mb-8">
          <i data-lucide="git-branch" class="w-8 h-8 text-unac-yellow animate-pulse"></i>
          <h2 class="text-3xl font-bold">Flujogramas</h2>
        </div>
        
        <div class="space-y-4">
          <?php
            $flujogramas = [
              ['title' => 'Aprobación de Informe Final', 'url' => 'https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-APROBACI%C3%93N-DE-INFORME-FINAL.pdf'],
              ['title' => 'Aprobación de Tesis', 'url' => 'https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-APROBACION-DE-TESIS.pdf'],
              ['title' => 'Diploma de Grado Académico (Maestro/Doctor)', 'url' => 'https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-DIPLOMA-DE-GRADO-ACAD%C3%89MICO-DE-MAESTRO-O-DOCTOR.pdf'],
              ['title' => 'Flujograma Expedito', 'url' => 'https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-EXPEDITO.pdf'],
              ['title' => 'Trámite para Optar Diploma de Diplomado', 'url' => 'https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-TRAMITE-PARA-OPTAR-DE-DIPLOMA-DEL-DIPLOMADO.pdf'],
            ];
            foreach ($flujogramas as $flujo):
          ?>
          <a href="<?= $flujo['url'] ?>" target="_blank" class="flex items-center justify-between p-5 rounded-xl bg-bg-base border border-border-base hover:border-unac-yellow hover:bg-unac-yellow/5 transition-all duration-300 group">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-bg-soft flex items-center justify-center group-hover:bg-unac-yellow/20 transition-colors">
                <i data-lucide="git-merge" class="w-5 h-5 text-text-muted group-hover:text-unac-yellow"></i>
              </div>
              <span class="font-medium text-text-primary text-sm sm:text-base line-clamp-1"><?= $flujo['title'] ?></span>
            </div>
            <i data-lucide="download" class="w-5 h-5 text-text-muted group-hover:text-unac-yellow opacity-0 group-hover:opacity-100 transition-all transform translate-x-[-10px] group-hover:translate-x-0"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Conferencias -->
<section class="py-36 relative overflow-hidden ui-section">
  <!-- Accent lights -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute -top-40 left-1/4 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[130px]"></div>
    <div class="absolute -bottom-40 right-1/4 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[120px]"></div>
  </div>

  <div class="site-container relative z-10">
    <div class="text-center mb-16 ui-conferencias-header">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-xs font-semibold uppercase tracking-wider mb-4">
        Divulgación Científica
      </div>
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Conferencias Científicas</h2>
      <p class="text-text-muted text-lg max-w-2xl mx-auto">Explora nuestras ponencias, jornadas y congresos con destacados investigadores nacionales e internacionales.</p>
    </div>

    <!-- Filters / Tabs -->
    <div class="flex flex-wrap justify-center gap-3 mb-12 ui-conferencias-filters">
      <button class="filter-btn active px-6 py-2.5 rounded-full glass-pill text-sm font-semibold border border-border-base text-text-primary hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="all">Todos</button>
      <button class="filter-btn px-6 py-2.5 rounded-full glass-pill text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="viernes">Viernes Científicos</button>
      <button class="filter-btn px-6 py-2.5 rounded-full glass-pill text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="jornadas">Jornadas Científicas</button>
      <button class="filter-btn px-6 py-2.5 rounded-full glass-pill text-sm font-semibold border border-border-base text-text-muted hover:border-brand-primary hover:bg-brand-primary/10 transition-all duration-300" data-filter="otros">Otros Eventos</button>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 ui-conferencias-grid" id="conferencias-container">
      <?php
        $conferencias = [
          // 2026 Viernes Cientificos
          ['date' => '29 Nov 2026', 'title' => 'Cómo publicar mi Investigación de Posgrado en Revistas de alto impacto', 'speaker' => 'Dra. Violeta Leonor Romero Carrión', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf29nov.html'],
          ['date' => '22 Nov 2026', 'title' => 'Inteligencia Artificial y Aplicaciones a la Educación', 'speaker' => 'Dra. Laci Mary Barbosa Manhaes', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf22nov.html'],
          ['date' => '15 Nov 2026', 'title' => 'Simulación de un reactor de producción de estruvita para cerrar el ciclo del fósforo a nivel mundial', 'speaker' => 'Ph.D Leynard Natividad-Marin', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf15nov.html'],
          ['date' => '08 Nov 2026', 'title' => 'Inteligencia Artificial y Aplicaciones en la Medicina', 'speaker' => 'Dr. Renato Cerceau', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf8nov.html'],
          
          // Virtual/Presencial 2026
          ['date' => '04 Sep 2026', 'title' => 'Impacto económico y ambiental del derrame de petróleo en Ventanilla', 'speaker' => 'Dr. Carlos Iván Palomares Palomares', 'tag' => 'Conferencia Virtual', 'category' => 'otros', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf4sep.html'],
          ['date' => '03 Sep 2026', 'title' => 'Herramientas de Inteligencia Artificial para la Investigación Científica', 'speaker' => 'Dr. Jorge Juan Zavaleta Gavidia', 'tag' => 'Conferencia Presencial', 'category' => 'otros', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf3sep.html'],
          
          // 2025 Viernes Cientificos
          ['date' => '29 Ago 2026', 'title' => 'Investigación en Ingenierías y Tecnologías disruptivas', 'speaker' => 'Dra. Ing. Robert William Castillo Alva', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/conf01ago.html'],
          ['date' => '22 Ago 2026', 'title' => 'Investigación Científica Aplicada a la Gestión del Cuidado', 'speaker' => 'Mg. Minaya Ortiz Vilma Herlinda', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/conf29ago.html'],
          ['date' => '15 Ago 2026', 'title' => 'Nuevas Tendencias en la Administración Pública y Gobernanza', 'speaker' => 'Dra. Huaranja Montaño Max Alejandro', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/conf22ago.html'],
          ['date' => '08 Ago 2026', 'title' => 'Modelado Matemático y su impacto en Decisiones Estratégicas', 'speaker' => 'Dra. Reyna Gonzalez Julissa Elizabeth', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf15ago.html'],
          ['date' => '01 Ago 2026', 'title' => 'El Rol del Posgrado frente a los Objetivos de Desarrollo Sostenible', 'speaker' => 'PhD. Calderón Chávarri Jesús Alan', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/conf8ago.html'],
          
          // Jornadas Cientificas
          ['date' => '13 Nov 2025', 'title' => 'II Jornada Científica de Investigación en Posgrado', 'speaker' => 'Mg. Reis Rios y Mg. Juan Felipe Jaramillo', 'tag' => 'Jornada Científica', 'category' => 'jornadas', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/13nov.html'],
          ['date' => '11 Nov 2025', 'title' => 'II Jornada Científica: Redacción y Publicación en Revistas Indexadas', 'speaker' => 'Mg. Cynthia Lisette Jo Rivero', 'tag' => 'Jornada Científica', 'category' => 'jornadas', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/11nov.html'],
          
          // Older Viernes Cientificos
          ['date' => '22 May 2026', 'title' => 'V Viernes Científico: Diseños y Metodologías Cuantitativas', 'speaker' => 'Ph.D. Almintor C. Torres Quiroz', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/22may.html'],
          ['date' => '15 May 2026', 'title' => 'V Viernes Científico: Gestión Tecnológica y de la Innovación', 'speaker' => 'Ph.D Jorge Zavaleta Gavidia', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/15may.html'],
          ['date' => '08 May 2026', 'title' => 'V Viernes Científico: Sostenibilidad Ambiental y Economía Circular', 'speaker' => 'Ph.D Leynard Natividad-Marin', 'tag' => 'Viernes Científico', 'category' => 'viernes', 'url' => 'https://posgrado.unac.edu.pe/data/conferencias/8may.html'],
        ];
        foreach ($conferencias as $index => $conf):
          // Add border and background accents dynamically based on tag
          $accentBorder = 'border-l-brand-primary';
          $accentText = 'text-brand-primary';
          $accentBg = 'bg-brand-primary/10';
          if ($conf['category'] === 'jornadas') {
            $accentBorder = 'border-l-unac-yellow';
            $accentText = 'text-unac-yellow';
            $accentBg = 'bg-unac-yellow/10';
          } elseif ($conf['category'] === 'otros') {
            $accentBorder = 'border-l-emerald-500';
            $accentText = 'text-emerald-400';
            $accentBg = 'bg-emerald-500/10';
          }
      ?>
      <div class="conf-card glass-card rounded-2xl border border-border-base <?= $accentBorder ?> hover:border-white/20 transition-all duration-500 flex flex-col h-full group relative overflow-hidden" data-category="<?= $conf['category'] ?>">
        <!-- Card hover highlight -->
        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.02] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
        
        <div class="p-6 flex flex-col h-full relative z-10">
          <div class="flex justify-between items-center mb-4">
            <span class="px-3 py-1 text-xs font-bold rounded-full <?= $accentBg ?> <?= $accentText ?> border border-white/5 uppercase tracking-wide">
              <?= $conf['tag'] ?>
            </span>
            <span class="text-xs text-text-muted font-medium flex items-center gap-1">
               <i data-lucide="calendar" class="w-3.5 h-3.5"></i> <?= $conf['date'] ?>
            </span>
          </div>

          <h3 class="text-lg md:text-xl font-bold text-text-primary mb-4 leading-tight group-hover:text-text-primary transition-colors flex-1 line-clamp-3">
            <?= $conf['title'] ?>
          </h3>

          <div class="pt-4 flex items-center justify-between border-t border-white/5 mt-auto">
            <div class="flex items-center gap-3">
               <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                 <i data-lucide="user" class="w-4 h-4 text-text-muted group-hover:text-unac-yellow transition-colors"></i>
               </div>
               <span class="text-xs font-semibold text-text-secondary line-clamp-1 max-w-[180px]"><?= $conf['speaker'] ?></span>
            </div>
            
            <a href="<?= $conf['url'] ?>" target="_blank" class="w-8 h-8 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-text-muted hover:text-text-primary hover:bg-brand-primary group-hover:border-brand-primary group-hover:bg-brand-primary/20 group-hover:text-brand-primary transition-all duration-300 shadow-sm shrink-0" aria-label="Ver presentación">
              <i data-lucide="arrow-up-right" class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Show More Button -->
    <div class="text-center mt-12 ui-conferencias-more">
      <button id="btn-load-more" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-bg-surface border border-border-bright hover:border-unac-yellow hover:bg-bg-soft text-text-primary hover:text-unac-yellow font-bold tracking-wider transition-all duration-300 shadow-lg">
        <span>Ver Más Conferencias</span>
        <i data-lucide="plus-circle" class="w-5 h-5 transition-transform duration-300 group-hover:rotate-90"></i>
      </button>
    </div>
  </div>
</section>

<!-- Marcas Colaboradoras -->
<section class="py-24 bg-bg-surface/30 overflow-hidden ui-section relative">
  <div class="site-container">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold mb-4">Marcas y Empresas Colaboradoras</h2>
      <p class="text-text-muted max-w-2xl mx-auto">Instituciones y empresas que colaboran con la Unidad de Investigación</p>
    </div>
  </div>
  
  <div class="marquee-container ui-marquee">
    <div class="marquee-track" id="ui-collab-track">
      <!-- Duplicate for infinite scroll -->
      <?php 
        $logos = [
          'logo-concytec.png', 'logo-prociencia.png', 'logo-proinnovate.png', 
          'logo-bioincuba.png', 'logo-renacyt.png', 'logo-rpu.png', 
          'logo-aup.png', 'logo-sineace.png', 'logo-vri.png'
        ];
        for($i = 0; $i < 3; $i++):
          foreach($logos as $logo):
      ?>
        <div class="logo-card">
          <img src="<?= $baseUrl ?>img/unidad-investigacion/logos/<?= $logo ?>" alt="Colaborador" class="h-12 w-auto object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
        </div>
      <?php 
          endforeach;
        endfor; 
      ?>
    </div>
  </div>
</section>

<script>
  // Initialize lucide icons for this page content if loaded after DOMContentLoaded
  if (typeof lucide !== 'undefined' && lucide.createIcons) {
    lucide.createIcons();
  }
</script>

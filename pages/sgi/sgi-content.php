<?php
/**
 * VISTA DE CONTENIDO - SISTEMA SGI
 * Diseño Institucional en la Raíz
 */
?>

<!-- SGI Wrapper -->
<div class="unac-sgi-page min-h-screen bg-[var(--surface-base)] text-[var(--text-secondary)] font-sans">
  
  <!-- HERO SECTION SGI (Matching home/hero.php vibes) -->
  <section class="relative w-full overflow-hidden bg-[var(--surface-base)] pt-24 pb-16 border-b border-white/5">
    <!-- Abstract Background Elements -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-[var(--brand-primary-dark)] blur-[150px] mix-blend-screen opacity-20 transform translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-[300px] h-[300px] rounded-full bg-[var(--brand-accent)] blur-[150px] mix-blend-screen opacity-10 transform -translate-x-1/2 translate-y-1/2 pointer-events-none"></div>
    </div>
    
    <div class="site-container relative z-10 text-center px-4 sm:px-6 lg:px-8">
      <h1 class="gsap-hero text-4xl sm:text-5xl md:text-6xl font-black text-white mb-6 tracking-tight leading-tight" style="font-family: var(--font-display);">
        Sistema Gestión de Investigación<br/>
        <span class="text-[var(--brand-accent)]">Escuela de Posgrado</span>
      </h1>
      <p class="gsap-hero text-lg md:text-xl text-white/70 max-w-3xl mx-auto mb-10 font-light leading-relaxed">
        Gestiona tus investigaciones, consulta la normativa vigente y accede a los manuales oficiales desde una plataforma moderna e integrada.
      </p>
      
      <div class="gsap-hero flex flex-wrap justify-center gap-4">
        <a href="https://sgiepgunac.com/" target="_blank" class="px-8 py-4 bg-[var(--brand-accent)] rounded-full text-[var(--surface-base)] font-bold text-sm tracking-wider uppercase hover:scale-105 active:scale-95 transition-all duration-300 shadow-[0_0_30px_rgba(251,202,56,0.2)] flex items-center gap-3">
          Acceder al Sistema SGI <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- CONTENT SECTION (Vertical Tabs Layout) -->
  <section class="relative py-20 bg-[var(--surface-base)]" id="documentos-sgi">
    <div class="site-container px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
      
      <div class="flex flex-col md:flex-row gap-8 lg:gap-16">
        
        <!-- Sidebar Tabs -->
        <div class="w-full md:w-1/3 flex-shrink-0">
          <div class="gsap-sidebar sticky top-32">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
              <span class="w-8 h-1 bg-[var(--brand-accent)] inline-block rounded-full"></span>
              Documentos Oficiales
            </h2>
            
            <div class="flex flex-col space-y-2 relative" id="sgi-tabs-container">
              <!-- Indicador Activo -->
              <div id="tab-indicator" class="hidden md:block absolute left-0 top-0 w-1 bg-[var(--brand-accent)] h-[60px] rounded-r-full transition-all duration-300 ease-out z-10 pointer-events-none"></div>
              
              <!-- Tab Buttons -->
              <button class="sgi-tab-btn active text-left px-6 py-4 rounded-lg font-medium transition-all flex items-center justify-between text-white bg-white/5 border border-white/10" data-target="#tab-capacitaciones">
                <span class="flex items-center gap-3">
                  <i class="fa-solid fa-graduation-cap text-[var(--brand-accent)] w-5 text-center"></i> Capacitaciones
                </span>
                <i class="fa-solid fa-chevron-right text-xs opacity-100 transition-opacity"></i>
              </button>
              
              <button class="sgi-tab-btn text-left px-6 py-4 rounded-lg font-medium transition-all flex items-center justify-between text-white/60 hover:text-white hover:bg-white/5 border border-transparent" data-target="#tab-manuales">
                <span class="flex items-center gap-3">
                  <i class="fa-solid fa-book text-[var(--brand-accent)] w-5 text-center opacity-70"></i> Manuales
                </span>
                <i class="fa-solid fa-chevron-right text-xs opacity-0 transition-opacity"></i>
              </button>
              
              <button class="sgi-tab-btn text-left px-6 py-4 rounded-lg font-medium transition-all flex items-center justify-between text-white/60 hover:text-white hover:bg-white/5 border border-transparent" data-target="#tab-flujogramas">
                <span class="flex items-center gap-3">
                  <i class="fa-solid fa-diagram-project text-[var(--brand-accent)] w-5 text-center opacity-70"></i> Flujogramas
                </span>
                <i class="fa-solid fa-chevron-right text-xs opacity-0 transition-opacity"></i>
              </button>
              
              <button class="sgi-tab-btn text-left px-6 py-4 rounded-lg font-medium transition-all flex items-center justify-between text-white/60 hover:text-white hover:bg-white/5 border border-transparent" data-target="#tab-reglamento">
                <span class="flex items-center gap-3">
                  <i class="fa-solid fa-scale-balanced text-[var(--brand-accent)] w-5 text-center opacity-70"></i> Reglamento
                </span>
                <i class="fa-solid fa-chevron-right text-xs opacity-0 transition-opacity"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Content Area -->
        <div class="w-full md:w-2/3">
          <div class="gsap-content bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-10 backdrop-blur-md min-h-[400px]">
            
            <!-- CAPACITACIONES -->
            <div id="tab-capacitaciones" class="sgi-tab-content block">
              <h3 class="text-2xl font-bold text-white mb-2">Recursos de Capacitación</h3>
              <p class="text-white/60 mb-8">Accede a las grabaciones y materiales de nuestras últimas sesiones formativas.</p>
              
              <div class="grid gap-4">
                <a href="https://drive.google.com/file/d/1jm5DWZvDqtwfRV8oGbrJ62nzFX3yeRMw/view" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-brands fa-google-drive text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Capacitación 26 de Noviembre</h4>
                    <span class="text-sm text-white/50">Ver grabación en Drive</span>
                  </div>
                  <i class="fa-solid fa-arrow-up-right-from-square text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://drive.google.com/file/d/1C43nhejoBqNAXp4c329hYJ6XDW7P2vEt/view" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-brands fa-google-drive text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Capacitación 27 de Noviembre</h4>
                    <span class="text-sm text-white/50">Ver grabación en Drive</span>
                  </div>
                  <i class="fa-solid fa-arrow-up-right-from-square text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://drive.google.com/file/d/1AL7c8YM3VcI5FXe07Kn1fQ7yrddsqeE9/view" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-brands fa-google-drive text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Capacitación 28 de Noviembre</h4>
                    <span class="text-sm text-white/50">Ver grabación en Drive</span>
                  </div>
                  <i class="fa-solid fa-arrow-up-right-from-square text-white/30 group-hover:text-white transition-colors"></i>
                </a>
              </div>
            </div>

            <!-- MANUALES -->
            <div id="tab-manuales" class="sgi-tab-content hidden">
              <h3 class="text-2xl font-bold text-white mb-2">Manuales Oficiales</h3>
              <p class="text-white/60 mb-8">Guías paso a paso para el uso correcto del Sistema de Gestión de Investigación.</p>
              
              <div class="grid gap-4">
                <a href="https://posgrado.unac.edu.pe/manuales/Guia%20SGI%20-%20Docente%20Jurado-Asesor.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-file-pdf text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Manual de Asesor / Jurado</h4>
                    <span class="text-sm text-white/50">Documento PDF</span>
                  </div>
                  <i class="fa-solid fa-download text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/manuales/Guia%20SGI%20-%20Estudiante.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-file-pdf text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Manual para Estudiantes</h4>
                    <span class="text-sm text-white/50">Documento PDF</span>
                  </div>
                  <i class="fa-solid fa-download text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/manuales/Segunda-especialidad-obtencion-de-tesis.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-file-pdf text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Segundas Especialidades</h4>
                    <span class="text-sm text-white/50">Documento PDF</span>
                  </div>
                  <i class="fa-solid fa-download text-white/30 group-hover:text-white transition-colors"></i>
                </a>
              </div>
            </div>

            <!-- FLUJOGRAMAS -->
            <div id="tab-flujogramas" class="sgi-tab-content hidden">
              <h3 class="text-2xl font-bold text-white mb-2">Flujogramas de Procesos</h3>
              <p class="text-white/60 mb-8">Representación visual de los procedimientos estandarizados del SGI.</p>
              
              <div class="grid gap-4">
                <a href="https://posgrado.unac.edu.pe/flujogramas/Flujograma%20de%20Obtenci%C3%B3n%20de%20Grado%20de%20Maestro%20o%20Doctor%20-%20EPG.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Obtención de Grado de Maestro o Doctor</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-APROBACI%C3%93N-DE-INFORME-FINAL.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Aprobación de Informe Final</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-APROBACION-DE-TESIS.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Aprobación de Tesis</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-EXPEDITO.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Expedito</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-DIPLOMA-DE-GRADO-ACAD%C3%89MICO-DE-MAESTRO-O-DOCTOR.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Diploma de Grado Académico de Maestro o Doctor</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
                <a href="https://posgrado.unac.edu.pe/flujogramas/FLUJOGRAMA-TRAMITE-PARA-OPTAR-DE-DIPLOMA-DEL-DIPLOMADO.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-sitemap text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Trámite para optar de diploma del diplomado</h4>
                  </div>
                  <i class="fa-solid fa-arrow-right text-white/30 group-hover:text-white transition-colors"></i>
                </a>
              </div>
            </div>

            <!-- REGLAMENTO -->
            <div id="tab-reglamento" class="sgi-tab-content hidden">
              <h3 class="text-2xl font-bold text-white mb-2">Reglamento y Directivas</h3>
              <p class="text-white/60 mb-8">Normativa institucional que rige los procesos de posgrado y titulación.</p>
              
              <div class="grid gap-4">
                <a href="https://posgrado.unac.edu.pe/flujogramas/285-24-CU%20MODIFICACION%20DEL%20REGLAMENTO%20GENERAL%20DE%20ESTUDIOS.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-book-bookmark text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Reglamento General de Estudios</h4>
                  </div>
                </a>
                <a href="https://posgrado.unac.edu.pe/formatos/reglamento-gyt.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-book-bookmark text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Reglamento de Grados y Títulos</h4>
                  </div>
                </a>
                <a href="https://posgrado.unac.edu.pe/formatos/261-19-CU%20LINEAS%20DE%20INVESTIGACI%C3%93N%20UNAC%20-%20MODIFICADA%20%20%20anexo.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-file-contract text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Líneas de Investigación</h4>
                  </div>
                </a>
                <a href="https://posgrado.unac.edu.pe/formatos/directiva-proyecto-investigacion.pdf" target="_blank" class="group flex items-center p-5 rounded-xl bg-[var(--surface-base)] border border-white/5 hover:border-[var(--brand-accent)]/50 transition-all">
                  <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-[var(--brand-accent)] mr-5 group-hover:bg-[var(--brand-accent)]/10 transition-colors">
                    <i class="fa-solid fa-file-contract text-xl"></i>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-white font-medium group-hover:text-[var(--brand-accent)] transition-colors">Directiva Proyecto e Informe Final</h4>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
</div>

<!-- Seccion de Proceso: Ruta de Admisión -->
<section class="admission-route-container relative bg-[#060a12] pt-24 pb-48 overflow-hidden" id="admission-route">
    
    <!-- Decoración de fondo sutil -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-unac-blue/5 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-unac-yellow/5 rounded-full blur-[100px] -z-10"></div>

    <div class="site-container max-w-[1400px] mx-auto px-6">
        
        <!-- Cabecera de la Sección -->
        <header class="max-w-3xl mb-32 reveal">
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-12 h-px bg-unac-yellow"></span>
                <span class="text-unac-yellow text-xs font-bold uppercase tracking-[0.3em]">Hoja de Ruta</span>
            </div>
            <h2 class="text-5xl lg:text-7xl font-bold text-white mb-8 tracking-tighter leading-[1.1]">
                Tu camino hacia el <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-unac-yellow to-white/80">Éxito Académico</span>
            </h2>
            <p class="text-lg text-white/40 font-medium leading-relaxed">
                Diseñamos un proceso simplificado y digitalizado para que tu única preocupación sea tu desarrollo profesional.
            </p>
        </header>

        <div class="process-main-grid grid grid-cols-1 lg:grid-cols-12 gap-16 xl:gap-24 relative">
            
            <!-- Indicador Lateral (Pinned) -->
            <aside class="lg:col-span-4 hidden lg:block">
                <div class="sidebar-sticky-wrapper sticky top-32 py-4">
                    <div class="relative pl-[52px]">
                        <!-- Línea de Progreso Maestra (Centrada con los puntos) -->
                        <div class="absolute left-0 top-4 bottom-4 w-px bg-white/5"></div>
                        <div id="scroll-progress-line" class="absolute left-0 top-4 w-[2px] bg-unac-yellow origin-top h-0 shadow-[0_0_15px_rgba(251,202,56,0.6)]"></div>
                        
                        <nav class="step-navigation flex flex-col gap-14">
                            <?php 
                            $steps = [
                                ['fase' => '01', 'title' => '1. Registro de Datos', 'desc' => 'Ficha de inscripción en línea'],
                                ['fase' => '02', 'title' => '2. Requisitos (PDF)', 'desc' => 'Organizar tus documentos académicos'],
                                ['fase' => '03', 'title' => '3. Pago Scotiabank', 'desc' => 'Derechos de postulación y tasas'],
                                ['fase' => '04', 'title' => '4. Subida al GED', 'desc' => 'Carga digital de tu expediente'],
                                ['fase' => '05', 'title' => '5. Validación Final', 'desc' => 'Auditoría, aprobación y examen']
                            ];
                            foreach($steps as $index => $step): 
                                $num = $index + 1;
                            ?>
                                <div class="step-nav-link group relative flex items-start cursor-pointer" data-step="<?= $num ?>">
                                    <!-- Punto de anclaje desplazado a la izquierda para no tapar el texto (Eje 13) -->
                                    <div class="step-marker absolute left-[-52px] top-2 w-3.5 h-3.5 rounded-full border-2 border-white/10 bg-[#060a12] transition-all duration-500 z-10">
                                        <div class="absolute inset-0 rounded-full bg-unac-yellow opacity-0 group-[.active]:animate-ping"></div>
                                    </div>
                                    
                                    <div class="step-label opacity-30 group-[.active]:opacity-100 transition-all duration-500">
                                        <span class="text-[10px] font-black text-unac-yellow uppercase tracking-widest block mb-1">Fase <?= $step['fase'] ?></span>
                                        <h4 class="text-white text-xl font-bold group-[.active]:translate-x-2 transition-transform duration-500 leading-none"><?= $step['title'] ?></h4>
                                        <p class="text-xs text-white/40 mt-2"><?= $step['desc'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            </aside>
            <!-- Contenido de Pasos (Scroll) -->
            <div class="lg:col-span-8 flex flex-col gap-32 lg:gap-56 pb-32">
                 <!-- Paso 01 -->
                <article class="step-card-v2 group" id="step-v2-1" data-step="1">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">01</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-xs font-bold uppercase tracking-widest inline-block mb-6">Paso Inicial</span>
                                <h3 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight">Registro de Datos <br/> <span class="text-unac-yellow">y Ficha de Postulante</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/80 text-xl leading-relaxed mb-8">
                                    El primer paso obligatorio es registrarte en nuestro portal digital para iniciar tu postulación formal y generar tu código único de postulante:
                                </p>
                                
                                <ul class="flex flex-col gap-5 mb-8 pl-1">
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>1. Ingresar al Formulario:</strong> Entra de forma segura al formulario oficial en línea.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>2. Completar tus Datos:</strong> Rellena tus datos personales reales (DNI, nombres completos y correo electrónico activo).</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>3. Obtener tu Ficha:</strong> Al finalizar, descarga tu Ficha de Inscripción y anota tu Código Único de Postulante.</span></li>
                                </ul>
                            </div>

                            <footer class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center gap-6 justify-between">
                                <a href="<?= $baseUrl ?>INSCRIPCION/" class="inline-flex items-center gap-4 bg-white text-black px-10 py-5 rounded-2xl font-black text-base uppercase tracking-wider hover:bg-unac-yellow transition-all shadow-2xl shadow-white/5 w-full sm:w-auto text-center justify-center font-sans">
                                    Iniciar Inscripción Digital <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="<?= $baseUrl ?>Admision/formato/formato.php" class="text-white/60 hover:text-unac-yellow text-sm font-bold uppercase tracking-wider transition-colors flex items-center gap-2">
                                    Descargar Formatos y Guías <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>

                <!-- Paso 02 -->
                <article class="step-card-v2 group" id="step-v2-2" data-step="2">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">02</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-unac-blue-light/10 border border-unac-blue-light/20 text-unac-blue-light text-xs font-bold uppercase tracking-widest inline-block mb-6">Requisitos</span>
                                <h3 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight">Preparación y Escaneo <br/> <span class="text-unac-yellow">de tus Requisitos (PDF)</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/80 text-xl leading-relaxed mb-8">
                                    Debes organizar y digitalizar todos tus documentos obligatorios en formato PDF a colores. Asegúrate de que sean 100% legibles:
                                </p>
                                
                                <ul class="flex flex-col gap-5 mb-8 pl-1">
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>Requisitos para Maestría:</strong> Copia simple del Grado Académico de Bachiller verificado ante la SUNEDU.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>Requisitos para Doctorado:</strong> Copia del Grado Académico de Maestro ante SUNEDU y tu Proyecto preliminar de Tesis doctoral.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>Requisitos para Segunda Especialidad:</strong> Copia simple de tu Título Profesional universitario.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>Documentos Generales:</strong> Copia a color de tu DNI o Pasaporte vigente, y una foto digital reciente con fondo blanco.</span></li>
                                </ul>
                            </div>

                            <footer class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center gap-6 justify-between">
                                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos_admision.php" class="inline-flex items-center gap-4 bg-white text-black px-10 py-5 rounded-2xl font-black text-base uppercase tracking-wider hover:bg-unac-yellow transition-all shadow-2xl shadow-white/5 w-full sm:w-auto text-center justify-center font-sans">
                                    Ver Requisitos por Programa <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos_posgrado.php" class="text-white/60 hover:text-unac-yellow text-sm font-bold uppercase tracking-wider transition-colors flex items-center gap-2">
                                    Requisitos de Posgrado <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>

                <!-- Paso 03 -->
                <article class="step-card-v2 group" id="step-v2-3" data-step="3">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">03</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-xs font-bold uppercase tracking-widest inline-block mb-6">Administrativo</span>
                                <h3 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight">Pago del Derecho <br/> <span class="text-unac-yellow">de Admisión (Scotiabank)</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/80 text-xl leading-relaxed mb-8">
                                    Realiza el pago correspondiente según el programa al que postulas. Puedes hacerlo en ventanilla, agentes autorizados o por banca móvil de Scotiabank:
                                </p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
                                    <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 text-center flex flex-col justify-between hover:bg-white/[0.04] transition-all">
                                        <div>
                                            <span class="text-sm text-white/60 font-bold block mb-2">Maestría</span>
                                            <span class="text-unac-yellow text-3xl font-black block">S/. 200</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-white/5 text-left flex flex-col gap-1.5">
                                            <span class="text-[11px] text-white/50 block"><strong class="text-white/70">N° Cuenta:</strong><br/>000-3747336</span>
                                            <span class="text-[10px] text-white/40 block"><strong class="text-white/60">CCI:</strong><br/>009-037-000003747336-16</span>
                                        </div>
                                    </div>
                                    <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 text-center flex flex-col justify-between hover:bg-white/[0.04] transition-all">
                                        <div>
                                            <span class="text-sm text-white/60 font-bold block mb-2">Doctorado</span>
                                            <span class="text-unac-yellow text-3xl font-black block">S/. 250</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-white/5 text-left flex flex-col gap-1.5">
                                            <span class="text-[11px] text-white/50 block"><strong class="text-white/70">N° Cuenta:</strong><br/>000-3747336</span>
                                            <span class="text-[10px] text-white/40 block"><strong class="text-white/60">CCI:</strong><br/>009-037-000003747336-16</span>
                                        </div>
                                    </div>
                                    <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 text-center flex flex-col justify-between hover:bg-white/[0.04] transition-all">
                                        <div>
                                            <span class="text-sm text-white/60 font-bold block mb-2">Segunda Esp.</span>
                                            <span class="text-unac-yellow text-3xl font-black block">S/. 120</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-white/5 text-left flex flex-col gap-1.5">
                                            <span class="text-[11px] text-white/50 block"><strong class="text-white/70">N° Cuenta:</strong><br/>000-1797042</span>
                                            <span class="text-[10px] text-white/40 block"><strong class="text-white/60">CCI:</strong><br/>009-037-000001797042-12</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-sm text-white/60 leading-relaxed mb-6">
                                    <i class="fas fa-info-circle text-unac-yellow text-base mr-1"></i> Una vez efectuado el abono, recuerda resguardar muy bien tu voucher físico o digital, ya que será indispensable cargarlo en el siguiente paso.
                                </p>
                            </div>
                            
                            <footer class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center gap-6 justify-between w-full">
                                <a href="<?= $baseUrl ?>Admision/costos/costos_admision.php" class="inline-flex items-center gap-4 bg-white text-black px-10 py-5 rounded-2xl font-black text-base uppercase tracking-wider hover:bg-unac-yellow transition-all shadow-2xl shadow-white/5 w-full sm:w-auto text-center justify-center font-sans">
                                    Ver Costos de Admisión <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="<?= $baseUrl ?>Admision/costos/costos_adicionales.php" class="text-white/60 hover:text-unac-yellow text-sm font-bold uppercase tracking-wider transition-colors flex items-center gap-2">
                                    Ver Tasas y Costos Adicionales <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>

                <!-- Paso 04 -->
                <article class="step-card-v2 group" id="step-v2-4" data-step="4">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">04</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-xs font-bold uppercase tracking-widest inline-block mb-6">Carga Digital</span>
                                <h3 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight">Subida al GED <br/> <span class="text-unac-yellow">y Carga de tu Expediente</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/80 text-xl leading-relaxed mb-8">
                                    Ingresa a la plataforma oficial GED para subir tu voucher de pago y tus documentos en formato PDF. Desde aquí se gestionará todo tu expediente:
                                </p>
                                
                                <ul class="flex flex-col gap-5 mb-8 pl-1">
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>1. Usuario de Acceso:</strong> Usa como correo el mismo que registraste al iniciar tu ficha en el Paso 01.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>2. Contraseña Inicial:</strong> Introduce tu número de DNI o documento de identidad registrado.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>3. Carga y Recomendaciones:</strong> Sube tu recibo de pago y cada PDF de requisitos. Asegúrate de que todos los archivos sean legibles.</span></li>
                                </ul>
                            </div>

                            <footer class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center gap-6 justify-between">
                                <a href="https://posgrado.unac.edu.pe/GED-test" target="_blank" class="inline-flex items-center gap-4 bg-unac-yellow text-black px-10 py-5 rounded-2xl font-black text-base uppercase tracking-wider hover:bg-white transition-all shadow-2xl shadow-unac-yellow/10 w-full sm:w-auto text-center justify-center font-sans">
                                    Ir a mi Carpeta de Postulante <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="<?= $baseUrl ?>Admision/formato/formato.php#seccion-guias" class="text-white/60 hover:text-unac-yellow text-sm font-bold uppercase tracking-wider transition-colors flex items-center gap-2">
                                    Manuales y Tutoriales de Carga <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>

                <!-- Paso 05 -->
                <article class="step-card-v2 group" id="step-v2-5" data-step="5">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">05</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-unac-blue-light/10 border border-unac-blue-light/20 text-unac-blue-light text-xs font-bold uppercase tracking-widest inline-block mb-6">Aprobación Final</span>
                                <h3 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight">Validación Técnica <br/> <span class="text-unac-yellow">y Aprobación de tu Expediente</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/80 text-xl leading-relaxed mb-8">
                                    Nuestro equipo de admisión revisará que todos tus documentos digitalizados sean vigentes, legibles y correctos para emitir tu aprobación final:
                                </p>
                                
                                <ul class="flex flex-col gap-5 mb-8 pl-1">
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>1. Auditoría de Documentos:</strong> Verificamos meticulosamente que cada PDF cumpla con los lineamientos técnicos oficiales.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>2. Alertas de Observación:</strong> Si algún documento es ilegible o incorrecto, te enviaremos una notificación por correo al instante.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>3. Corrección y Subsanación:</strong> Podrás corregir y subir nuevamente los archivos observados en el sistema GED antes del plazo límite.</span></li>
                                    <li class="flex items-start gap-4 text-base lg:text-lg text-white/70"><i class="fas fa-check text-unac-yellow mt-1.5 shrink-0 text-xs"></i> <span><strong>4. Constancia de Apto:</strong> Tras la validación final exitosa, tu expediente quedará aprobado y estarás listo para rendir tu evaluación.</span></li>
                                </ul>

                                <div class="p-6 rounded-2xl bg-amber-500/5 border border-amber-500/20 flex items-start gap-4 mb-4">
                                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center text-amber-400 shrink-0"><i class="fas fa-exclamation-triangle text-lg"></i></div>
                                    <div>
                                        <h5 class="text-white font-bold text-base mb-1">Aviso Crítico</h5>
                                        <p class="text-sm text-white/80 leading-relaxed font-bold">Importante: Revisa periódicamente tu buzón de correo electrónico (incluyendo la bandeja de SPAM) y la plataforma digital de seguimiento de postulantes para asegurar que no se venza ningún plazo oficial de subsanación.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <footer class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center gap-6 justify-between w-full">
                                <a href="<?= $baseUrl ?>Admision/cronograma/cronograma.php" class="inline-flex items-center gap-4 bg-white text-black px-10 py-5 rounded-2xl font-black text-base uppercase tracking-wider hover:bg-unac-yellow transition-all shadow-2xl shadow-white/5 w-full sm:w-auto text-center justify-center font-sans">
                                    Ver Cronograma de Admisión <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <a href="https://wa.me/51900969591?text=Hola,%20necesito%20ayuda%20con%20el%20estado%20de%20mi%20carpeta%20de%20postulante." target="_blank" class="text-white/60 hover:text-unac-yellow text-sm font-bold uppercase tracking-wider transition-colors flex items-center gap-2">
                                    Soporte y Consultas WhatsApp <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </footer>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>

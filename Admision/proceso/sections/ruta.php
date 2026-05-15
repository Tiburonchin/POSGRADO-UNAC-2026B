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
                                ['fase' => '01', 'title' => 'Inscripción Digital', 'desc' => 'Registro en el sistema'],
                                ['fase' => '02', 'title' => 'Expediente', 'desc' => 'Documentación necesaria'],
                                ['fase' => '03', 'title' => 'Derechos', 'desc' => 'Tasas administrativas'],
                                ['fase' => '04', 'title' => 'Carga GED', 'desc' => 'Subida de archivos'],
                                ['fase' => '05', 'title' => 'Verificación', 'desc' => 'Validación institucional']
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
                                <span class="px-4 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-widest inline-block mb-6">Fase Inicial</span>
                                <h3 class="text-4xl lg:text-5xl font-bold text-white tracking-tight">Registro y Apertura de <br/> <span class="text-unac-yellow">Expediente</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/60 text-lg leading-relaxed mb-10">
                                    Inicia tu postulación formalizando tu registro en nuestro sistema centralizado. Este paso es fundamental para generar tu identificador único de postulante.
                                </p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/[0.02] border border-white/5">
                                        <div class="w-10 h-10 rounded-xl bg-unac-yellow/10 flex items-center justify-center text-unac-yellow"><i class="fas fa-id-card"></i></div>
                                        <div>
                                            <h5 class="text-white font-bold text-sm mb-1">DNI / Carnet Ext.</h5>
                                            <p class="text-xs text-white/40">Validación de identidad legal.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/[0.02] border border-white/5">
                                        <div class="w-10 h-10 rounded-xl bg-unac-yellow/10 flex items-center justify-center text-unac-yellow"><i class="fas fa-envelope"></i></div>
                                        <div>
                                            <h5 class="text-white font-bold text-sm mb-1">Correo Activo</h5>
                                            <p class="text-xs text-white/40">Canal oficial de comunicación.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer class="pt-8 border-t border-white/5">
                                <a href="<?= $baseUrl ?>INSCRIPCION/" class="inline-flex items-center gap-4 bg-white text-black px-10 py-5 rounded-2xl font-bold text-sm uppercase tracking-wider hover:bg-unac-yellow transition-all shadow-2xl shadow-white/5">
                                    Iniciar Inscripción Digital <i class="fas fa-chevron-right text-[10px]"></i>
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
                                <span class="px-4 py-1 rounded-full bg-unac-blue-light/10 border border-unac-blue-light/20 text-unac-blue-light text-[10px] font-bold uppercase tracking-widest inline-block mb-6">Requisitos</span>
                                <h3 class="text-4xl lg:text-5xl font-bold text-white tracking-tight">Preparación del <br/> <span class="text-unac-yellow">Dossier Académico</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/60 text-lg leading-relaxed mb-10">
                                    Reúne la documentación que respalde tu trayectoria. Todo documento debe ser escaneado nítidamente desde el original.
                                </p>
                                
                                <div class="space-y-4 mb-10">
                                    <div class="flex items-center justify-between p-6 rounded-2xl bg-white/[0.02] border border-white/5 group/item hover:bg-white/[0.04] transition-colors">
                                        <div class="flex items-center gap-4">
                                            <div class="w-2 h-2 rounded-full bg-unac-yellow"></div>
                                            <span class="text-white/80 font-medium">Grado Académico (Bachiller/Maestro)</span>
                                        </div>
                                        <span class="text-[10px] text-white/30 font-bold uppercase tracking-widest">Registrado SUNEDU</span>
                                    </div>
                                    <div class="flex items-center justify-between p-6 rounded-2xl bg-white/[0.02] border border-white/5 group/item hover:bg-white/[0.04] transition-colors">
                                        <div class="flex items-center gap-4">
                                            <div class="w-2 h-2 rounded-full bg-unac-yellow"></div>
                                            <span class="text-white/80 font-medium">Foto Digital fondo blanco</span>
                                        </div>
                                        <span class="text-[10px] text-white/30 font-bold uppercase tracking-widest">HD / .JPG</span>
                                    </div>
                                </div>
                            </div>

                            <footer class="pt-8 border-t border-white/5">
                                <a href="<?= $baseUrl ?>Admision/requisitos/requisitos.php" class="inline-flex items-center gap-3 text-unac-yellow font-bold text-xs uppercase tracking-[0.2em] hover:text-white transition-colors">
                                    Explorar Requisitos por Programa <i class="fas fa-arrow-right"></i>
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
                                <span class="px-4 py-1 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-[10px] font-bold uppercase tracking-widest inline-block mb-6">Administrativo</span>
                                <h3 class="text-4xl lg:text-5xl font-bold text-white tracking-tight">Derechos de <br/> <span class="text-unac-yellow">Inscripción</span></h3>
                            </header>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="p-8 rounded-3xl bg-black/40 border border-white/5">
                                    <p class="text-white/30 text-[10px] font-bold uppercase tracking-widest mb-4">Maestría y Doctorado</p>
                                    <div class="flex items-baseline gap-2 mb-6">
                                        <span class="text-unac-yellow text-4xl font-black">S/. 200</span>
                                        <span class="text-white/20 text-sm">/ única vez</span>
                                    </div>
                                    <div class="pt-6 border-t border-white/10">
                                        <p class="text-xs text-white/50 mb-2">Entidad Bancaria:</p>
                                        <p class="text-white font-bold">Scotiabank</p>
                                        <p class="text-unac-yellow font-mono text-sm mt-1">Cta: 000-3747336</p>
                                    </div>
                                </div>
                                <div class="p-8 rounded-3xl bg-black/40 border border-white/5">
                                    <p class="text-white/30 text-[10px] font-bold uppercase tracking-widest mb-4">Segunda Especialidad</p>
                                    <div class="flex items-baseline gap-2 mb-6">
                                        <span class="text-unac-yellow text-4xl font-black">S/. 120</span>
                                        <span class="text-white/20 text-sm">/ única vez</span>
                                    </div>
                                    <div class="pt-6 border-t border-white/10">
                                        <p class="text-xs text-white/50 mb-2">Entidad Bancaria:</p>
                                        <p class="text-white font-bold">Scotiabank</p>
                                        <p class="text-unac-yellow font-mono text-sm mt-1">Cta: 000-1797042</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Paso 04 -->
                <article class="step-card-v2 group" id="step-v2-4" data-step="4">
                    <div class="relative bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 rounded-3xl p-10 lg:p-16 transition-all duration-700 hover:border-unac-yellow/20">
                        <div class="absolute top-10 right-10 text-8xl font-black text-white/[0.02] -z-10">04</div>
                        
                        <div class="flex flex-col gap-8">
                            <header>
                                <span class="px-4 py-1 rounded-full bg-unac-yellow/10 border border-unac-yellow/20 text-unac-yellow text-[10px] font-bold uppercase tracking-widest inline-block mb-6">Carga Digital</span>
                                <h3 class="text-4xl lg:text-5xl font-bold text-white tracking-tight">Sistema de Gestión <br/> <span class="text-unac-yellow">de Expedientes (GED)</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/60 text-lg leading-relaxed mb-10">
                                    Sube tu carpeta digital al sistema GED. Esta plataforma permite el seguimiento en tiempo real de tu estado de admisión.
                                </p>
                                
                                <div class="p-8 rounded-3xl bg-unac-yellow/5 border border-unac-yellow/20 mb-10 flex items-center gap-6">
                                    <div class="w-14 h-14 rounded-2xl bg-unac-yellow flex items-center justify-center text-black text-2xl shadow-xl shadow-unac-yellow/20">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-bold text-lg">Carga en Formato PDF</h4>
                                        <p class="text-sm text-white/50">Recuerda subir el voucher de pago escaneado.</p>
                                    </div>
                                </div>
                            </div>

                            <footer class="pt-8 border-t border-white/5">
                                <a href="https://posgrado.unac.edu.pe/GED-test/login.php" target="_blank" class="inline-flex items-center gap-4 bg-unac-yellow text-black px-10 py-5 rounded-2xl font-bold text-sm uppercase tracking-wider hover:bg-white transition-all">
                                    Acceder al Sistema GED <i class="fas fa-lock text-[10px]"></i>
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
                                <span class="px-4 py-1 rounded-full bg-unac-blue-light/10 border border-unac-blue-light/20 text-unac-blue-light text-[10px] font-bold uppercase tracking-widest inline-block mb-6">Cierre</span>
                                <h3 class="text-4xl lg:text-5xl font-bold text-white tracking-tight">Validación y <br/> <span class="text-unac-yellow">Confirmación</span></h3>
                            </header>

                            <div class="max-w-2xl">
                                <p class="text-white/60 text-lg leading-relaxed mb-10">
                                    Nuestro equipo auditará tu expediente. Se te notificará mediante los canales oficiales el estado de tu postulación (Apto / Observado).
                                </p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div class="text-center">
                                        <div class="text-unac-yellow text-2xl font-black mb-2">01</div>
                                        <p class="text-[10px] text-white/40 uppercase font-bold">Auditoría</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-unac-yellow text-2xl font-black mb-2">02</div>
                                        <p class="text-[10px] text-white/40 uppercase font-bold">Estado Apto</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-unac-yellow text-2xl font-black mb-2">03</div>
                                        <p class="text-[10px] text-white/40 uppercase font-bold">Matrícula</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>

<?php
/**
 * Template de Formulario de Inscripción Rediseñado
 * Optimizado con Tailwind, GSAP y armonía institucional.
 */
?>

<!-- Sección de Inscripción -->
<section id="enrollment-section" class="relative min-h-screen pt-32 pb-20 px-4 md:px-6 overflow-hidden bg-[var(--surface-base)]">
    
    <!-- Luces de fondo decorativas (Armonía con el portal) -->
    <div class="absolute top-[-10%] left-[-5%] w-[600px] h-[600px] bg-[var(--brand-primary)]/10 rounded-full blur-[120px] pointer-events-none animate-pulse"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[500px] h-[500px] bg-[var(--brand-accent)]/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(var(--text-secondary) 1px, transparent 1px); background-size: 50px 50px;"></div>

    <div class="site-container max-w-5xl mx-auto relative z-10">
        
        <!-- Header de Inscripción -->
        <header class="text-center mb-10 md:mb-16 reveal-header">
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-8 md:w-12 h-px bg-[var(--brand-accent)]"></span>
                <span class="text-[var(--brand-accent)] text-[10px] md:text-xs font-bold uppercase tracking-[0.4em]">Admisión 2026-B</span>
                <span class="w-8 md:w-12 h-px bg-[var(--brand-accent)]"></span>
            </div>
            <h1 class="text-4xl md:text-7xl font-black text-white tracking-tighter mb-6 uppercase leading-tight md:leading-none">
                Inscríbete <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-[var(--brand-accent)] to-white">Ahora</span>
            </h1>
            <p class="text-[var(--text-secondary)] text-base md:text-lg max-w-2xl mx-auto font-medium px-4">
                Comienza tu camino hacia el éxito académico en la Escuela de Posgrado UNAC.
            </p>
        </header>

        <!-- Stepper Visual -->
        <div class="max-w-[280px] md:max-w-md mx-auto mb-10 md:mb-12 flex items-center justify-between relative px-4 reveal-stepper">
            <div class="absolute top-1/2 left-0 w-full h-[2px] bg-white/5 -translate-y-1/2 z-0"></div>
            <div id="step-line" class="absolute top-1/2 left-0 w-0 h-[2px] bg-[var(--brand-accent)] -translate-y-1/2 z-0 transition-all duration-700 shadow-[0_0_10px_var(--brand-accent)]"></div>
            
            <div class="step-dot relative z-10 w-8 h-8 md:w-10 md:h-10 rounded-full bg-[var(--brand-accent)] flex items-center justify-center border-[3px] md:border-4 border-[var(--surface-base)] text-[var(--surface-base)] text-xs md:text-sm font-bold transition-all duration-500" data-step="1">1</div>
            <div class="step-dot relative z-10 w-8 h-8 md:w-10 md:h-10 rounded-full bg-[var(--surface-soft)] flex items-center justify-center border-[3px] md:border-4 border-[var(--surface-base)] text-[var(--text-secondary)] text-xs md:text-sm font-bold transition-all duration-500" data-step="2">2</div>
        </div>

        <div class="glass-card-form relative overflow-hidden bg-[var(--surface-elevated)]/40 backdrop-blur-2xl border border-white/10 rounded-[32px] md:rounded-[48px] shadow-2xl reveal-form">
            
            <form id="enrollmentForm" class="p-6 md:p-16 lg:p-20" oninput="document.getElementById('responseMessage').classList.add('hidden')">
                
                <!-- PASO 1: DATOS -->
                <div id="step1-container" class="space-y-12 md:space-y-20">
                    
                    <!-- 1. Datos Personales -->
                    <div class="form-section space-y-8 md:space-y-10">
                        <div class="flex items-center gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-[var(--brand-accent)]/10 rounded-xl md:rounded-2xl flex items-center justify-center border border-[var(--brand-accent)]/20 flex-shrink-0">
                                <i data-lucide="user" class="text-[var(--brand-accent)] w-5 h-5 md:w-6 md:h-6"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight uppercase">Datos Personales</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="input-group group">
                                <label class="label-style">Nombres Completos</label>
                                <div class="relative">
                                    <i data-lucide="signature" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required class="input-style">
                                </div>
                            </div>
                            <div class="input-group group">
                                <label class="label-style">Apellidos Paterno y Materno</label>
                                <div class="relative">
                                    <i data-lucide="signature" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required class="input-style">
                                </div>
                            </div>
                            <div class="input-group group">
                                <label class="label-style">DNI / Documento Identidad</label>
                                <div class="relative">
                                    <i data-lucide="id-card" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="text" name="dni" id="dni" placeholder="Ingrese su DNI" required maxlength="12" class="input-style">
                                </div>
                            </div>
                            <div class="input-group group">
                                <label class="label-style">Correo Electrónico</label>
                                <div class="relative">
                                    <i data-lucide="mail" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="email" name="correo" id="correo" placeholder="ejemplo@correo.com" required class="input-style">
                                </div>
                            </div>
                            <div class="input-group group">
                                <label class="label-style">Celular de Contacto</label>
                                <div class="relative">
                                    <i data-lucide="phone" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="tel" name="celular" id="celular" placeholder="Ej: 999 999 999" required class="input-style">
                                </div>
                            </div>
                            <div class="input-group group">
                                <label class="label-style">Fecha de Nacimiento</label>
                                <div class="relative">
                                    <i data-lucide="calendar" class="absolute left-6 top-1/2 -translate-y-1/2 w-5 h-5 md:w-6 md:h-6 text-white/20 group-focus-within:text-[var(--brand-accent)] transition-colors"></i>
                                    <input type="date" name="fecha_nac" id="fecha_nac" required class="input-style">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Programa de Interés -->
                    <div class="form-section space-y-8 md:space-y-10">
                        <div class="flex items-center gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-[var(--brand-primary)]/10 rounded-xl md:rounded-2xl flex items-center justify-center border border-[var(--brand-primary)]/20 flex-shrink-0">
                                <i data-lucide="graduation-cap" class="text-[var(--brand-primary-light)] w-5 h-5 md:w-6 md:h-6"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight uppercase">Elección Académica</h2>
                        </div>

                        <!-- Área selector -->
                        <div class="space-y-6">
                            <label class="label-style">Selecciona el Área de tu interés</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                                <div class="area-card group" onclick="selectArea('Ingeniería', this)">
                                    <div class="card-icon"><i data-lucide="cpu" class="w-6 h-6 md:w-8 md:h-8"></i></div>
                                    <span class="card-title">Ingenierías</span>
                                    <div class="card-check"><i data-lucide="check" class="w-4 h-4"></i></div>
                                </div>
                                <div class="area-card group" onclick="selectArea('Ciencias', this)">
                                    <div class="card-icon"><i data-lucide="beaker" class="w-6 h-6 md:w-8 md:h-8"></i></div>
                                    <span class="card-title">Ciencias / Salud</span>
                                    <div class="card-check"><i data-lucide="check" class="w-4 h-4"></i></div>
                                </div>
                            </div>
                            <input type="hidden" name="area_interes" id="area_interes" required>
                        </div>

                        <!-- Tipos de Programa (Dinámico) -->
                        <div id="tipo_container" class="space-y-6 opacity-30 pointer-events-none transition-all duration-500">
                            <label class="label-style">Tipo de Programa Académico</label>
                            <div id="tipo_list" class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                                <!-- Dinámico -->
                            </div>
                            <input type="hidden" name="tipo_programa" id="tipo_programa" required>
                        </div>

                        <!-- Listado de Programas -->
                        <div id="programa_container" class="space-y-6 opacity-30 pointer-events-none transition-all duration-700">
                            <div class="flex justify-between items-center">
                                <label class="label-style mb-0">Selecciona el Programa Específico</label>
                                <span id="progCount" class="hidden md:inline-block text-[10px] font-black text-[var(--brand-accent)] uppercase tracking-widest bg-[var(--brand-accent)]/10 px-3 py-1 rounded-full">0 Disponibles</span>
                            </div>

                            <div class="relative group">
                                <div class="absolute left-5 top-1/2 -translate-y-1/2"><i data-lucide="search" class="w-5 h-5 text-white/20"></i></div>
                                <input type="text" id="progSearch" placeholder="Filtrar programas..." class="input-style pl-14 py-4 h-auto">
                            </div>

                            <div id="progList" class="grid grid-cols-1 gap-3 max-h-[350px] overflow-y-auto pr-2 custom-scrollbar">
                                <div class="text-center py-10 text-white/20 italic text-sm">Selecciona los criterios anteriores para ver programas</div>
                            </div>
                            
                            <div id="facultad_display" class="hidden p-4 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center gap-3 md:gap-4">
                                <i data-lucide="building-2" class="w-5 h-5 text-[var(--brand-accent)] flex-shrink-0"></i>
                                <div class="flex flex-col md:flex-row md:items-center md:gap-2">
                                    <span class="text-[9px] md:text-[10px] font-black text-white/40 uppercase tracking-widest">Facultad:</span>
                                    <span id="facultad_nombre" class="text-[11px] md:text-xs font-bold text-white uppercase tracking-tight"></span>
                                </div>
                            </div>

                            <input type="hidden" name="programa" id="programa" required>
                            <input type="hidden" name="id_programa" id="id_programa" required>
                        </div>
                    </div>

                    <!-- 3. Captación -->
                    <div class="form-section space-y-8 md:space-y-10">
                        <div class="flex items-center gap-4 md:gap-6">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-emerald-500/10 rounded-xl md:rounded-2xl flex items-center justify-center border border-emerald-500/20 flex-shrink-0">
                                <i data-lucide="megaphone" class="text-emerald-400 w-5 h-5 md:w-6 md:h-6"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight uppercase">¿Cómo te enteraste?</h2>
                        </div>
                        
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-4">
                            <div class="medio-card" onclick="selectMedio('Redes Sociales', this)">
                                <i data-lucide="share-2" class="w-5 h-5 md:w-6 md:h-6"></i>
                                <span>Redes Sociales</span>
                            </div>
                            <div class="medio-card" onclick="selectMedio('Web Oficial', this)">
                                <i data-lucide="globe" class="w-5 h-5 md:w-6 md:h-6"></i>
                                <span>Web Oficial</span>
                            </div>
                            <div class="medio-card" onclick="selectMedio('Recomendación', this)">
                                <i data-lucide="users" class="w-5 h-5 md:w-6 md:h-6"></i>
                                <span>Recomendación</span>
                            </div>
                            <div class="medio-card" onclick="selectMedio('Otro', this)">
                                <i data-lucide="plus" class="w-5 h-5 md:w-6 md:h-6"></i>
                                <span>Otro Medio</span>
                            </div>
                        </div>
                        <input type="hidden" name="medio_captacion" id="medio_captacion" required>
                    </div>

                    <div class="pt-6 md:pt-10 flex justify-center md:justify-end">
                        <button type="button" onclick="verifyData()" class="w-full md:w-auto group relative px-8 md:px-12 py-4 md:py-5 bg-[var(--brand-accent)] text-[var(--surface-base)] font-black text-xs md:text-sm uppercase tracking-[0.2em] md:tracking-[0.3em] rounded-xl md:rounded-2xl shadow-[0_20px_40px_rgba(251,202,56,0.2)] hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-4">
                            Continuar
                            <i data-lucide="arrow-right" class="w-5 h-5 transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>
                </div>

                <!-- PASO 2: VERIFICACIÓN -->
                <div id="step2-container" class="hidden opacity-0 space-y-10 md:space-y-12">
                    <div class="text-center space-y-4">
                        <div class="w-20 h-20 md:w-24 md:h-24 mx-auto rounded-full bg-[var(--brand-accent)]/10 border-2 border-[var(--brand-accent)]/30 flex items-center justify-center relative">
                            <div class="absolute inset-0 rounded-full border border-[var(--brand-accent)]/50 animate-ping opacity-20"></div>
                            <i data-lucide="check-circle-2" class="text-[var(--brand-accent)] w-10 h-10 md:w-12 md:h-12"></i>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">Confirma tus Datos</h2>
                        <p class="text-[var(--text-secondary)] text-[10px] md:text-sm max-w-lg mx-auto uppercase tracking-widest font-bold px-4">Verifica que toda la información ingresada sea verídica.</p>
                    </div>

                    <div class="bg-white/[0.02] border border-white/5 rounded-[24px] md:rounded-[32px] p-6 md:p-14 relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-10 opacity-[0.03] rotate-12 hidden md:block"><i data-lucide="file-text" class="w-40 h-40"></i></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-y-12 gap-x-16 relative z-10">
                            <div class="confirm-item">
                                <span class="confirm-label">Postulante</span>
                                <span class="confirm-value text-xl md:text-2xl" id="confirmNombre"></span>
                            </div>
                            <div class="confirm-item">
                                <span class="confirm-label">Documento</span>
                                <span class="confirm-value" id="confirmDni"></span>
                            </div>
                            <div class="confirm-item">
                                <span class="confirm-label">Email</span>
                                <span class="confirm-value break-all" id="confirmCorreo"></span>
                            </div>
                            <div class="confirm-item">
                                <span class="confirm-label">Contacto</span>
                                <span class="confirm-value" id="confirmCelular"></span>
                            </div>
                            <div class="confirm-item">
                                <span class="confirm-label">F. Nacimiento</span>
                                <span class="confirm-value" id="confirmFecha"></span>
                            </div>
                            <div class="confirm-item">
                                <span class="confirm-label">Área</span>
                                <span class="confirm-value text-[var(--brand-primary-light)]" id="confirmArea"></span>
                            </div>
                            <div class="md:col-span-2 pt-8 md:pt-10 border-t border-white/5">
                                <span class="confirm-label mb-4">Programa Elegido</span>
                                <span class="block text-2xl md:text-4xl font-black text-[var(--brand-accent)] tracking-tighter leading-tight break-words" id="confirmPrograma"></span>
                            </div>
                            <div class="md:col-span-2">
                                <span class="confirm-label">Facultad</span>
                                <span class="block text-white/60 font-bold text-base md:text-lg uppercase" id="confirmFacultad"></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-10">
                        <button type="button" onclick="goBack()" class="flex items-center gap-3 text-white/30 hover:text-white font-bold text-[10px] uppercase tracking-[0.3em] transition-all group order-2 md:order-1">
                            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
                            Regresar a Editar
                        </button>
                        
                        <button type="submit" id="btnSubmit" class="w-full md:w-auto px-10 md:px-16 py-5 md:py-6 bg-white text-[var(--surface-base)] font-black text-xs md:text-sm uppercase tracking-[0.3em] md:tracking-[0.4em] rounded-xl md:rounded-2xl shadow-[0_30px_60px_rgba(255,255,255,0.1)] hover:bg-[var(--brand-accent)] hover:scale-105 active:scale-95 transition-all flex items-center justify-center gap-4 order-1 md:order-2">
                            Finalizar Inscripción
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

            </form>
            
            <!-- Mensaje de Respuesta Estilizado -->
            <div id="responseMessage" class="hidden absolute inset-0 z-50 flex items-center justify-center p-10 bg-[var(--surface-base)]/95 backdrop-blur-3xl animate-fadeIn">
                <!-- Se inyecta por JS -->
            </div>
        </div>
    </div>
</section>

<style>
    /* Institutional Form Overrides & Styles - Using standard CSS since @apply is not supported in <style> tags */
    .label-style {
        display: block;
        font-size: 13px; /* Más grande y claro */
        font-weight: 800;
        color: rgba(255, 255, 255, 0.6); /* Más brillante */
        text-transform: uppercase;
        letter-spacing: 0.15em;
        margin-bottom: 0.75rem;
        margin-left: 0.25rem;
    }

    .input-style {
        width: 100%;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 1.25rem;
        padding: 1.4rem 1.5rem 1.4rem 4rem;
        color: white;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        outline: none;
        font-size: 1rem; /* Más grande: 16px */
        font-weight: 600;
    }

    .input-style::placeholder {
        color: rgba(255, 255, 255, 0.3); /* Más visible */
    }

    .input-style:focus {
        border-color: var(--brand-accent);
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 0 0 5px rgba(251, 202, 56, 0.1);
        transform: translateY(-2px);
    }

    /* Cards */
    .area-card {
        position: relative;
        padding: 2.5rem;
        border-radius: 2rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        text-align: center;
        cursor: pointer;
        transition: all 0.5s ease;
        overflow: hidden;
    }

    .area-card:hover {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(251, 202, 56, 0.4);
    }

    .area-card.active {
        background: var(--brand-accent);
        border-color: var(--brand-accent);
        transform: scale(1.02);
        box-shadow: 0 20px 40px rgba(251, 202, 56, 0.2);
    }

    .area-card .card-icon {
        margin-bottom: 1rem;
        font-size: 1.875rem;
        color: rgba(255, 255, 255, 0.2);
        transition: color 0.3s ease;
        display: flex;
        justify-content: center;
    }

    .area-card:hover .card-icon {
        color: var(--brand-accent);
    }

    .area-card.active .card-icon, 
    .area-card.active .card-title {
        color: var(--surface-base) !important;
    }

    .area-card .card-title {
        display: block;
        font-size: 0.875rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255, 255, 255, 0.6);
    }

    .area-card .card-check {
        position: absolute;
        top: 1rem;
        right: 1rem;
        opacity: 0;
        transform: scale(0);
        transition: all 0.5s ease;
        color: var(--surface-base);
    }

    .area-card.active .card-check {
        opacity: 1;
        transform: scale(1);
    }

    .tipo-pill {
        padding: 1.5rem;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: rgba(255, 255, 255, 0.4);
    }

    .tipo-pill:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .tipo-pill.active {
        background: var(--brand-primary);
        border-color: var(--brand-primary);
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .prog-item {
        padding: 1.25rem;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.875rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.7);
    }

    .prog-item:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 255, 255, 0.2);
    }

    .prog-item.active {
        border-color: var(--brand-accent);
        background: rgba(251, 202, 56, 0.1);
        color: var(--brand-accent);
    }

    .medio-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        padding: 1.5rem;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .medio-card i {
        color: rgba(255, 255, 255, 0.2);
        transition: color 0.3s ease;
        margin: 0 auto;
        width: 24px;
        height: 24px;
    }

    .medio-card:hover i {
        color: #34d399;
    }

    .medio-card span {
        font-size: 9px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255, 255, 255, 0.4);
    }

    .medio-card.active {
        border-color: rgba(16, 185, 129, 0.5);
        background: rgba(16, 185, 129, 0.1);
    }

    .medio-card.active i, 
    .medio-card.active span {
        color: #34d399;
    }

    /* Confirm Items */
    .confirm-item {
        display: flex;
        flex-direction: column;
    }
    .confirm-label { font-size: 10px; font-weight: 900; color: rgba(255, 255, 255, 0.3); text-transform: uppercase; letter-spacing: 0.3em; margin-bottom: 0.5rem; }
    .confirm-value { color: white; font-weight: 700; letter-spacing: -0.025em; line-height: 1.25; }

    /* Custom Scrollbar */
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }

    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1) opacity(0.3);
        cursor: pointer;
    }
</style>

<script>
    let globalConfig = { unidades: [], programas: [], tipos: [] };
    let currentFiltered = [];

    const initForm = async () => {
        // Initialize Lucide
        if (window.lucide) {
            window.lucide.createIcons();
        } else {
            console.warn('Lucide not found, retrying...');
            setTimeout(initForm, 500);
            return;
        }
        
        // Initial GSAP Entrances
        if (window.gsap) {
            gsap.set(".reveal-header > *", { y: 30, opacity: 0 });
            gsap.set(".reveal-stepper", { scale: 0.9, opacity: 0 });
            gsap.set(".reveal-form", { y: 50, opacity: 0 });

            gsap.to(".reveal-header > *", { 
                y: 0, opacity: 1, duration: 1, stagger: 0.15, ease: "power4.out", delay: 0.3
            });
            gsap.to(".reveal-stepper", { 
                scale: 1, opacity: 1, duration: 1, delay: 0.6, ease: "power4.out" 
            });
            gsap.to(".reveal-form", { 
                y: 0, opacity: 1, duration: 1.2, delay: 0.5, ease: "power4.out" 
            });
        }

        // Load Catalogues
        try {
            const res = await fetch('backend/get_catalogos.php');
            const data = await res.json();
            if(data.success) {
                globalConfig.unidades = Array.isArray(data.unidades) ? data.unidades : Object.values(data.unidades);
                globalConfig.programas = Array.isArray(data.programas) ? data.programas : Object.values(data.programas);
                globalConfig.tipos = Array.isArray(data.tipos) ? data.tipos : Object.values(data.tipos);
            }
        } catch (e) { console.error('Error catalogues:', e); }
    };

    document.addEventListener('DOMContentLoaded', initForm);

    function selectArea(val, el) {
        // UI Update
        el.closest('.grid').querySelectorAll('.area-card').forEach(c => c.classList.remove('active'));
        el.classList.add('active');
        document.getElementById('area_interes').value = val;

        // Unlock next section
        const container = document.getElementById('tipo_container');
        container.classList.remove('opacity-30', 'pointer-events-none');
        if(window.gsap) gsap.fromTo(container, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 });
        
        // Filtering logic
        const tipoList = document.getElementById('tipo_list');
        tipoList.innerHTML = '<div class="col-span-full text-center text-white/20 text-[10px] uppercase font-bold animate-pulse">Buscando programas disponibles...</div>';
        
        const normalize = (str) => str ? str.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toUpperCase() : "";
        const valNorm = normalize(val);

        // Búsqueda robusta: 
        // 1. Unidades que coincidan con el área
        // 2. Programas que coincidan con el área en su nombre
        let keywords = [valNorm];
        if (valNorm.includes("CIENCIAS")) keywords.push("SALUD", "NATURALES", "MEDICINA", "ENFERMERIA");
        if (valNorm.includes("INGENIERIA")) keywords.push("TECNOLOGIA", "SISTEMAS", "MECANICA", "QUIMICA", "ELECTRICA");

        let unidadIds = globalConfig.unidades
            .filter(u => keywords.some(k => normalize(u.nombre).includes(k)))
            .map(u => String(u.id));

        let progUnidad = globalConfig.programas.filter(p => {
            const inUnit = unidadIds.includes(String(p.id_unidad));
            const inName = keywords.some(k => normalize(p.nombre).includes(k));
            return inUnit || inName;
        });

        // Si no hay resultados con keywords, intentamos mostrar todo para no dejar vacío
        if (progUnidad.length === 0 && globalConfig.programas.length > 0) {
            progUnidad = globalConfig.programas;
        }
        
        if (progUnidad.length > 0) {
            const idsTipos = [...new Set(progUnidad.map(p => String(p.id_tipo)))];
            const tiposFinales = globalConfig.tipos.filter(t => idsTipos.includes(String(t.id)));
            
            tipoList.innerHTML = '';
            tiposFinales.forEach((t, i) => {
                const div = document.createElement('div');
                div.className = 'tipo-pill group';
                div.innerHTML = t.nombre;
                div.onclick = () => selectTipo(t.id, div, progUnidad);
                tipoList.appendChild(div);
                if(window.gsap) gsap.fromTo(div, { scale: 0.95, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.4, delay: i * 0.05 });
            });
            
            // Si solo hay un tipo, seleccionarlo automáticamente
            if (tiposFinales.length === 1) {
                setTimeout(() => tipoList.querySelector('.tipo-pill').click(), 100);
            }
        } else {
            tipoList.innerHTML = `
                <div class="col-span-full text-center py-10 space-y-4">
                    <i data-lucide="search-x" class="mx-auto w-10 h-10 text-white/10"></i>
                    <p class="text-white/20 text-xs font-bold uppercase tracking-widest">No se encontraron programas específicos</p>
                    <button type="button" onclick="resetFilter()" class="text-[var(--brand-accent)] text-[10px] font-black uppercase underline decoration-2 underline-offset-4">Ver todos los programas</button>
                </div>
            `;
            lucide.createIcons();
        }
    }

    function resetFilter() {
        const progUnidad = globalConfig.programas;
        const tipoList = document.getElementById('tipo_list');
        const idsTipos = [...new Set(progUnidad.map(p => String(p.id_tipo)))];
        const tiposFinales = globalConfig.tipos.filter(t => idsTipos.includes(String(t.id)));
        
        tipoList.innerHTML = '';
        tiposFinales.forEach(t => {
            const div = document.createElement('div');
            div.className = 'tipo-pill group';
            div.innerHTML = t.nombre;
            div.onclick = () => selectTipo(t.id, div, progUnidad);
            tipoList.appendChild(div);
        });
        
        const container = document.getElementById('tipo_container');
        container.classList.remove('opacity-30', 'pointer-events-none');
    }

    function selectTipo(tipoId, el, progUnidad) {
        el.parentNode.querySelectorAll('.tipo-pill').forEach(c => c.classList.remove('active'));
        el.classList.add('active');
        document.getElementById('tipo_programa').value = tipoId;

        const container = document.getElementById('programa_container');
        container.classList.remove('opacity-30', 'pointer-events-none');
        if(window.gsap) gsap.fromTo(container, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 });
        
        currentFiltered = progUnidad.filter(p => p.id_tipo == tipoId);
        renderProgramas(currentFiltered);
    }

    function renderProgramas(list) {
        const listEl = document.getElementById('progList');
        document.getElementById('progCount').innerText = `${list.length} Disponibles`;
        listEl.innerHTML = '';
        
        list.forEach((p, i) => {
            const div = document.createElement('div');
            div.className = 'prog-item';
            div.innerText = p.nombre;
            div.onclick = () => {
                listEl.querySelectorAll('.prog-item').forEach(c => c.classList.remove('active'));
                div.classList.add('active');
                document.getElementById('programa').value = p.nombre;
                document.getElementById('id_programa').value = p.id;
                
                const unidad = globalConfig.unidades.find(u => String(u.id) === String(p.id_unidad));
                if (unidad) {
                    document.getElementById('facultad_display').classList.remove('hidden');
                    document.getElementById('facultad_nombre').innerText = unidad.nombre;
                    gsap.from("#facultad_display", { x: -20, opacity: 0, duration: 0.4 });
                }
            };
            listEl.appendChild(div);
            // Staggered entrance for list items
            if(i < 15) gsap.from(div, { x: -10, opacity: 0, duration: 0.3, delay: i * 0.03 });
        });
    }

    document.getElementById('progSearch').oninput = (e) => {
        const search = e.target.value.toUpperCase();
        const filtered = currentFiltered.filter(p => p.nombre.toUpperCase().includes(search));
        renderProgramas(filtered);
    };

    function selectMedio(val, el) {
        el.closest('.grid').querySelectorAll('.medio-card').forEach(c => c.classList.remove('active'));
        el.classList.add('active');
        document.getElementById('medio_captacion').value = val;
    }

    function verifyData() {
        const required = ['nombres', 'apellidos', 'correo', 'dni', 'celular', 'fecha_nac', 'area_interes', 'id_programa', 'medio_captacion'];
        let firstMissing = null;

        for (let id of required) {
            const el = document.getElementById(id);
            if (!el || !el.value) {
                if(!firstMissing) firstMissing = el || document.getElementById(id + '_container');
                const fieldLabel = el?.closest('.group')?.querySelector('label')?.innerText || id;
                showNotification(`El campo ${fieldLabel} es obligatorio`, 'error');
                
                // Shake effect on the missing field group
                if(el) gsap.to(el.closest('.group') || el, { x: 10, duration: 0.1, repeat: 3, yoyo: true });
                return;
            }
        }

        // Fill Confirmation
        document.getElementById('confirmNombre').innerText = `${document.getElementById('nombres').value} ${document.getElementById('apellidos').value}`;
        document.getElementById('confirmDni').innerText = document.getElementById('dni').value;
        document.getElementById('confirmCorreo').innerText = document.getElementById('correo').value;
        document.getElementById('confirmCelular').innerText = document.getElementById('celular').value;
        document.getElementById('confirmFecha').innerText = document.getElementById('fecha_nac').value;
        document.getElementById('confirmArea').innerText = document.getElementById('area_interes').value;
        document.getElementById('confirmPrograma').innerText = document.getElementById('programa').value;
        document.getElementById('confirmFacultad').innerText = document.getElementById('facultad_nombre').innerText || '---';

        // GSAP Transition to Step 2
        const s1 = document.getElementById('step1-container');
        const s2 = document.getElementById('step2-container');
        
        gsap.to(s1, { x: -100, opacity: 0, duration: 0.5, onComplete: () => {
            s1.classList.add('hidden');
            s2.classList.remove('hidden');
            document.getElementById('step-line').style.width = '100%';
            document.querySelector('.step-dot[data-step="2"]').classList.add('bg-[var(--brand-accent)]', 'text-[var(--surface-base)]');
            document.querySelector('.step-dot[data-step="2"]').classList.remove('bg-[var(--surface-soft)]', 'text-[var(--text-secondary)]');
            
            gsap.fromTo(s2, { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6, ease: "expo.out" });
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }});
    }

    function goBack() {
        const s1 = document.getElementById('step1-container');
        const s2 = document.getElementById('step2-container');
        
        gsap.to(s2, { x: 100, opacity: 0, duration: 0.5, onComplete: () => {
            s2.classList.add('hidden');
            s1.classList.remove('hidden');
            document.getElementById('step-line').style.width = '0%';
            document.querySelector('.step-dot[data-step="2"]').classList.remove('bg-[var(--brand-accent)]', 'text-[var(--surface-base)]');
            document.querySelector('.step-dot[data-step="2"]').classList.add('bg-[var(--surface-soft)]', 'text-[var(--text-secondary)]');
            
            gsap.fromTo(s1, { x: -100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6, ease: "expo.out" });
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }});
    }

    function showNotification(text, type) {
        const msg = document.getElementById('responseMessage');
        msg.classList.remove('hidden');
        msg.innerHTML = `
            <div class="text-center space-y-6 max-w-sm">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center ${type === 'error' ? 'bg-red-500/10 text-red-500' : 'bg-green-500/10 text-green-500'}">
                    <i data-lucide="${type === 'error' ? 'alert-circle' : 'check-circle'}" class="w-10 h-10"></i>
                </div>
                <h3 class="text-xl font-bold text-white uppercase tracking-tight">${type === 'error' ? 'Atención' : 'Éxito'}</h3>
                <p class="text-white/60 text-sm font-medium leading-relaxed">${text}</p>
                <button type="button" onclick="document.getElementById('responseMessage').classList.add('hidden')" class="px-8 py-3 bg-white/5 hover:bg-white/10 rounded-xl text-[10px] font-black uppercase tracking-widest text-white transition-all">Entendido</button>
            </div>
        `;
        lucide.createIcons();
        gsap.from("#responseMessage > div", { scale: 0.9, opacity: 0, duration: 0.5, ease: "back.out" });
    }

    document.getElementById('enrollmentForm').onsubmit = async function(e) {
        e.preventDefault();
        
        const btn = document.getElementById('btnSubmit');
        btn.disabled = true;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<span class="flex items-center gap-3">Procesando... <i data-lucide="loader-2" class="w-4 h-4 animate-spin"></i></span>';
        lucide.createIcons();

        const formData = new FormData(this);
        // Add manual values from step confirmation if needed, but FormData should have them if hidden inputs are updated
        const data = Object.fromEntries(formData.entries());
        // Fix for facultdad which is not an input
        data.facultad = document.getElementById('facultad_nombre').innerText;

        try {
            const res = await fetch('backend/handler.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(data)
            });
            const result = await res.json();
            
            if(result.success) {
                const msg = document.getElementById('responseMessage');
                msg.classList.remove('hidden');
                msg.innerHTML = `
                    <div class="text-center space-y-8 max-w-md">
                        <div class="w-32 h-32 mx-auto rounded-full bg-emerald-500/10 flex items-center justify-center relative">
                            <div class="absolute inset-0 rounded-full border border-emerald-500/30 animate-ping opacity-20"></div>
                            <i data-lucide="party-popper" class="text-emerald-400 w-16 h-16"></i>
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-4xl font-black text-white uppercase tracking-tighter italic">¡Felicidades!</h2>
                            <p class="text-emerald-400 font-bold uppercase tracking-widest text-xs">Tu inscripción ha sido procesada</p>
                        </div>
                        <p class="text-white/40 text-sm font-medium leading-relaxed">
                            Hemos recibido tus datos correctamente. Un asesor se pondrá en contacto contigo en las próximas 48 horas laborales.
                        </p>
                        <div class="pt-4">
                            <div class="w-full h-1 bg-white/5 rounded-full overflow-hidden">
                                <div id="redirect-bar" class="w-0 h-full bg-emerald-500"></div>
                            </div>
                            <p class="mt-3 text-[9px] font-bold text-white/20 uppercase tracking-[0.3em]">Redirigiendo al portal...</p>
                        </div>
                    </div>
                `;
                lucide.createIcons();
                gsap.to("#redirect-bar", { width: "100%", duration: 4, ease: "none" });
                
                setTimeout(() => {
                    if (window.PageLoader) window.PageLoader.navigate('../index.php');
                    else window.location.href = '../index.php';
                }, 4000);
            } else {
                showNotification(result.error || 'Error al procesar la solicitud', 'error');
                btn.disabled = false;
                btn.innerHTML = originalText;
                lucide.createIcons();
            }
        } catch(e) { 
            console.error(e);
            showNotification('Error de conexión con el servidor', 'error');
            btn.disabled = false;
            btn.innerHTML = originalText;
            lucide.createIcons();
        }
    };
</script>

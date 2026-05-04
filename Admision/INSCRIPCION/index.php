<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción Posgrado | UNAC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body { font-family: 'Outfit', sans-serif; background: radial-gradient(circle at top right, #0c1a32, #020617); color: #f8fafc; }
        .glass-card { background: rgba(7, 15, 30, 0.8); backdrop-filter: blur(20px); border: 1px solid rgba(59, 130, 246, 0.1); border-radius: 40px; }
        .input-dark { background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.05); color: white; transition: all 0.3s ease; }
        .input-dark:focus { border-color: #3b82f6; outline: none; }
        .select-card { background: rgba(15, 23, 42, 0.4); border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer; }        
        .select-card.active {
            border-color: rgba(59, 130, 246, 0.5);
            background: rgba(59, 130, 246, 0.1);
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.3), inset 0 0 20px rgba(59, 130, 246, 0.1);
        }

        .select-card.active-green {
            border-color: rgba(16, 185, 129, 0.5);
            background: rgba(16, 185, 129, 0.1);
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 10px 30px -10px rgba(16, 185, 129, 0.3), inset 0 0 20px rgba(16, 185, 129, 0.1);
        }

        .select-card.active span, .select-card.active p { color: #60a5fa !important; }
        .select-card.active-green span, .select-card.active-green p { color: #34d399 !important; }

        .program-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255,255,255,0.05);
            background: rgba(2, 6, 23, 0.5);
        }

        .program-card:hover {
            background: rgba(255,255,255,0.05);
            border-color: rgba(255,255,255,0.1);
        }

        .program-card.active {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(37, 99, 235, 0.1));
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 10px 20px -10px rgba(59, 130, 246, 0.3);
        }
        
        /* Animación del Botón Continuar */
        .btn-premium {
            position: relative;
            overflow: hidden;
            background: #ffffff;
            color: #0f172a;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(245, 158, 11, 0.8), transparent);
            transition: all 0.6s;
        }
        .btn-premium:hover::before { left: 100%; }
        .btn-premium:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3);
            background: #fefce8;
        }
        .btn-premium:active { transform: scale(0.98); }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: rgba(0,0,0,0.1); }
        ::-webkit-scrollbar-thumb { background: rgba(59, 130, 246, 0.3); border-radius: 10px; }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center py-20 px-6">
    <div class="max-w-4xl w-full">
        <!-- Encabezado idéntico -->
        <div class="text-center mb-16">
            <h1 class="text-6xl font-black text-white tracking-tighter mb-4 uppercase">Admisión de <span class="text-blue-500">Posgrado</span></h1>
            <p class="text-slate-400 text-lg">Descubre el proceso de admisión para formar parte de nuestra comunidad.</p>
        </div>

        <div class="glass-card p-10 md:p-20 shadow-2xl border border-white/5">
            <form id="enrollmentForm" class="space-y-16" oninput="document.getElementById('responseMessage').classList.add('hidden')">
                
                <!-- PASO 1: FORMULARIO -->
                <div id="step1" class="space-y-16 transition-all duration-500">
                    <!-- SECCIÓN 1: DATOS PERSONALES -->
                    <div class="space-y-8">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-amber-500/10 rounded-2xl flex items-center justify-center border border-amber-500/20 shadow-[0_0_15px_rgba(245,158,11,0.1)]">
                                <span class="material-symbols-outlined text-amber-500">person</span>
                            </div>
                            <h2 class="text-2xl font-black text-white uppercase tracking-tight">Datos Personales</h2>
                            <div class="h-[1px] flex-grow bg-gradient-to-r from-amber-500/30 to-transparent"></div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                            <!-- Nombres -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Nombres *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">person</span>
                                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-700 focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm">
                                </div>
                            </div>

                            <!-- Apellidos -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Apellidos *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">person</span>
                                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-700 focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm">
                                </div>
                            </div>

                            <!-- Correo -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Correo Electrónico *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">mail</span>
                                    <input type="email" name="correo" id="correo" placeholder="correo@ejemplo.com" required
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-12 text-white placeholder:text-slate-700 focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm">
                                    <span class="material-symbols-outlined absolute right-4 text-slate-700 text-xs">lock</span>
                                </div>
                            </div>

                            <!-- DNI -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">DNI / Documento *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">badge</span>
                                    <input type="text" name="dni" id="dni" placeholder="Ingrese su documento" required maxlength="12"
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-12 text-white placeholder:text-slate-700 focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm">
                                    <span class="material-symbols-outlined absolute right-4 text-slate-700 text-xs">lock</span>
                                </div>
                            </div>

                            <!-- Celular -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Celular *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">call</span>
                                    <input type="tel" name="celular" id="celular" placeholder="Ej. 999 999 999" required
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-700 focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm">
                                </div>
                            </div>

                            <!-- Fecha Nacimiento -->
                            <div class="space-y-2">
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Fecha de Nacimiento *</label>
                                <div class="relative flex items-center group">
                                    <span class="material-symbols-outlined absolute left-4 text-slate-600 group-focus-within:text-amber-500 transition-colors">calendar_month</span>
                                    <input type="date" name="fecha_nac" id="fecha_nac" required
                                           class="w-full bg-slate-900/50 border border-white/5 rounded-2xl py-4 pl-12 pr-12 text-white focus:border-amber-500/50 focus:ring-4 focus:ring-amber-500/5 transition-all outline-none text-sm appearance-none">
                                    <span class="material-symbols-outlined absolute right-4 text-slate-600 pointer-events-none">event</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECCIÓN 2: PROGRAMA DE INTERÉS -->
                    <div class="space-y-10">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-500/10 rounded-2xl flex items-center justify-center border border-blue-500/20">
                                <span class="material-symbols-outlined text-blue-500">school</span>
                            </div>
                            <h2 class="text-2xl font-black text-white uppercase">Programa de Interés</h2>
                            <div class="h-[1px] flex-grow bg-gradient-to-r from-blue-500/30 to-transparent"></div>
                        </div>

                        <!-- ÁREAS -->
                        <div class="grid grid-cols-2 gap-6">
                            <div class="select-card p-8 rounded-3xl text-center group" onclick="selectArea('Ciencias', this)">
                                <span class="material-symbols-outlined text-3xl text-slate-600 group-hover:text-blue-400">science</span>
                                <p class="mt-3 font-bold text-slate-300">Ciencias</p>
                            </div>
                            <div class="select-card p-8 rounded-3xl text-center group" onclick="selectArea('Ingeniería', this)">
                                <span class="material-symbols-outlined text-3xl text-slate-600 group-hover:text-blue-400">settings</span>
                                <p class="mt-3 font-bold text-slate-300">Ingeniería</p>
                            </div>
                        </div>
                        <input type="hidden" name="area_interes" id="area_interes" required>

                        <!-- TIPOS DE PROGRAMA (Dinámico) -->
                        <div id="tipo_container" class="space-y-4 opacity-50 pointer-events-none transition-all">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tipo de Programa *</label>
                            <div id="tipo_list" class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <!-- Se llena por JS -->
                            </div>
                            <input type="hidden" name="tipo_programa" id="tipo_programa" required>
                        </div>

                        <!-- BUSCADOR DE PROGRAMAS (Estilo Original) -->
                        <div id="programa_container" class="space-y-4 opacity-50 pointer-events-none transition-all duration-500">
                            <div class="flex justify-between items-end">
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest">Seleccione el Programa *</label>
                                <div id="facultad_display" class="text-[10px] font-black text-blue-400 uppercase tracking-tighter hidden">
                                    FACULTAD: <span id="facultad_nombre" class="text-white"></span>
                                </div>
                            </div>
                            
                            <div class="bg-slate-900/50 border border-white/5 rounded-3xl overflow-hidden backdrop-blur-xl">
                                <div class="p-4 border-b border-white/5 flex items-center gap-4">
                                    <span class="material-symbols-outlined text-slate-500">search</span>
                                    <input type="text" id="progSearch" placeholder="Buscar programa..." class="bg-transparent border-none focus:ring-0 text-sm flex-grow text-white">
                                    <span id="progCount" class="bg-slate-800 px-3 py-1 rounded-lg text-[10px] font-bold text-slate-400 uppercase">0 Programas</span>
                                </div>
                                <div id="progList" class="max-h-60 overflow-y-auto p-2 space-y-1">
                                    <div class="p-8 text-center text-slate-600 text-sm italic">Selecciona un tipo de programa arriba</div>
                                </div>
                            </div>
                            <input type="hidden" name="programa" id="programa" required>
                            <input type="hidden" name="id_programa" id="id_programa" required>
                        </div>
                    </div>

                    <!-- SECCIÓN 3: MEDIO DE CAPTACIÓN -->
                    <div class="space-y-8">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-emerald-500/10 rounded-2xl flex items-center justify-center border border-emerald-500/20">
                                <span class="material-symbols-outlined text-emerald-500">share</span>
                            </div>
                            <h2 class="text-2xl font-black text-white uppercase">Medio de Captación</h2>
                            <div class="h-[1px] flex-grow bg-gradient-to-r from-emerald-500/30 to-transparent"></div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="select-card p-6 rounded-2xl text-center group" onclick="selectMedio('Redes Sociales', this)">
                                <span class="material-symbols-outlined text-2xl text-slate-600 mb-2 block group-hover:text-emerald-400 transition-colors">public</span>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Redes Sociales</p>
                            </div>
                            <div class="select-card p-6 rounded-2xl text-center group" onclick="selectMedio('Web Oficial', this)">
                                <span class="material-symbols-outlined text-2xl text-slate-600 mb-2 block group-hover:text-emerald-400 transition-colors">language</span>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Web Oficial</p>
                            </div>
                            <div class="select-card p-6 rounded-2xl text-center group" onclick="selectMedio('Recomendación', this)">
                                <span class="material-symbols-outlined text-2xl text-slate-600 mb-2 block group-hover:text-emerald-400 transition-colors">groups</span>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Recomendación</p>
                            </div>
                            <div class="select-card p-6 rounded-2xl text-center group" onclick="selectMedio('Otro', this)">
                                <span class="material-symbols-outlined text-2xl text-slate-600 mb-2 block group-hover:text-emerald-400 transition-colors">help_outline</span>
                                <p class="text-[10px] font-bold text-slate-400 uppercase">Otro</p>
                            </div>
                        </div>
                        <input type="hidden" name="medio_captacion" id="medio_captacion" required>
                    </div>

                    <div class="pt-10 flex justify-end">
                        <button type="button" onclick="verifyData()" class="btn-premium px-16 py-5 rounded-3xl font-black text-sm uppercase tracking-widest flex items-center gap-4 shadow-2xl">
                            Continuar <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                    </div>
                </div>

                <!-- PASO 2: VERIFICACIÓN -->
                <div id="step2" class="hidden space-y-10 transition-all duration-500 opacity-0">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-amber-500/10 mb-6 relative">
                            <div class="absolute inset-0 rounded-full border border-amber-500/30 animate-[spin_4s_linear_infinite]"></div>
                            <span class="material-symbols-outlined text-4xl text-amber-500 animate-pulse">verified_user</span>
                        </div>
                        <h2 class="text-4xl text-white font-black uppercase tracking-tight">Verifica tu<br><span class="text-amber-500">Información</span></h2>
                        <p class="text-slate-400 text-sm mt-4 tracking-wider uppercase font-bold">Asegúrate de que todos tus datos sean correctos antes de enviar.</p>
                    </div>

                    <div class="bg-slate-900/80 border border-white/5 rounded-[40px] p-8 md:p-12 backdrop-blur-xl shadow-inner">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-16">
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">Nombre Completo</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmNombre"></span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">DNI / Documento</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmDni"></span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">Correo Electrónico</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmCorreo"></span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">Celular</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmCelular"></span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">Fecha de Nacimiento</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmFecha"></span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em]">Área de Interés</span>
                                <span class="block text-white font-bold text-xl tracking-tight" id="confirmArea"></span>
                            </div>
                            <div class="md:col-span-2 pt-8 border-t border-white/5">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em] mb-2">Programa Elegido</span>
                                <span class="block text-amber-500 font-black text-2xl tracking-tighter leading-tight" id="confirmPrograma"></span>
                            </div>
                            <div class="md:col-span-2">
                                <span class="block text-[10px] text-slate-500 font-black uppercase tracking-[0.2em] mb-1">Facultad</span>
                                <span class="block text-white/80 font-bold text-lg" id="confirmFacultad"></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between gap-8 pt-6">
                        <button type="button" onclick="goBack()" class="text-slate-500 hover:text-white text-xs font-black uppercase tracking-widest flex items-center gap-3 transition-colors">
                            <span class="material-symbols-outlined text-sm">arrow_back</span> Volver y Editar
                        </button>
                        
                        <button type="submit" id="btnSubmit" class="btn-premium px-20 py-6 rounded-3xl font-black text-sm uppercase tracking-[0.2em] flex items-center gap-4 shadow-[0_0_50px_rgba(245,158,11,0.2)]">
                            ENVIAR INSCRIPCIÓN <span class="material-symbols-outlined text-xl group-hover:rotate-[360deg] transition-transform duration-700">send</span>
                        </button>
                    </div>
                </div>

            </form>
            <div id="responseMessage" class="mt-10 hidden p-6 rounded-3xl text-center font-bold uppercase tracking-widest text-sm"></div>
        </div>
    </div>

    <script>
        let globalConfig = { unidades: [], programas: [], tipos: [] };
        let currentFiltered = [];

        document.addEventListener('DOMContentLoaded', async () => {
            console.log('Iniciando carga de catálogos...');
            try {
                const res = await fetch('backend/get_catalogos.php');
                const data = await res.json();
                console.log('Respuesta del servidor:', data);
                
                if(data.success) {
                    globalConfig.unidades = Array.isArray(data.unidades) ? data.unidades : Object.values(data.unidades);
                    globalConfig.programas = Array.isArray(data.programas) ? data.programas : Object.values(data.programas);
                    globalConfig.tipos = Array.isArray(data.tipos) ? data.tipos : Object.values(data.tipos);
                    console.log('Catálogos cargados exitosamente');
                } else {
                    console.error('El servidor devolvió un error:', data.error);
                }
            } catch (e) { 
                console.error('Error crítico al cargar catálogos:', e); 
            }
        });

        function selectArea(val, el) {
            console.log('Seleccionando área:', val);
            el.closest('.grid').querySelectorAll('.select-card').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('area_interes').value = val;

            const container = document.getElementById('tipo_container');
            container.classList.remove('opacity-50', 'pointer-events-none');
            
            const tipoList = document.getElementById('tipo_list');
            tipoList.innerHTML = '<div class="col-span-full text-center text-slate-500 text-xs animate-pulse">Buscando tipos...</div>';
            
            // Función para quitar acentos
            const normalize = (str) => str.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toUpperCase();
            const valNorm = normalize(val);

            // Búsqueda super-inteligente: Combinar programas por nombre de unidad y por nombre de programa
            let unidadIds = globalConfig.unidades
                .filter(u => {
                    const uNorm = normalize(u.nombre || '');
                    return uNorm.includes(valNorm) || valNorm.includes(uNorm);
                })
                .map(u => String(u.id));

            // Buscamos programas que pertenezcan a esas unidades O que tengan el nombre del área en su título
            let progUnidad = globalConfig.programas.filter(p => 
                unidadIds.includes(String(p.id_unidad)) || 
                normalize(p.nombre || '').includes(valNorm)
            );
            
            if (progUnidad.length > 0) {
                console.log('Programas encontrados para ' + val + ':', progUnidad.length);
                
                // Obtenemos todos los tipos únicos presentes en estos programas
                const idsTipos = [...new Set(progUnidad.map(p => String(p.id_tipo)))];
                console.log('IDs de Tipos detectados:', idsTipos);
                
                const tiposFinales = globalConfig.tipos.filter(t => idsTipos.includes(String(t.id)));
                
                tipoList.innerHTML = '';
                if(tiposFinales.length === 0) {
                    tipoList.innerHTML = '<div class="col-span-full text-center text-slate-600 text-xs italic py-4">No se encontraron tipos (Maestría/Doctorado) para esta área</div>';
                }

                tiposFinales.forEach(t => {
                    const div = document.createElement('div');
                    div.className = 'select-card p-6 rounded-3xl text-center group transition-all duration-300 cursor-pointer';
                    div.innerHTML = `
                        <div class="w-10 h-10 mx-auto mb-3 bg-slate-800 rounded-lg flex items-center justify-center border border-white/5 group-hover:border-blue-500/50 transition-colors">
                            <span class="material-symbols-outlined text-xl text-slate-500 group-hover:text-blue-400">layers</span>
                        </div>
                        <p class="font-bold text-slate-300 text-sm">${t.nombre}</p>
                    `;
                    div.onclick = () => selectTipo(t.id, div, progUnidad);
                    tipoList.appendChild(div);
                });
            } else {
                tipoList.innerHTML = '<div class="col-span-full text-center text-red-500/50 text-xs uppercase font-bold py-8">No se encontraron programas para el área de ' + val + '</div>';
            }
        }


        function selectTipo(tipoId, el, progUnidad) {
            el.parentNode.querySelectorAll('.select-card').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('tipo_programa').value = tipoId;

            const container = document.getElementById('programa_container');
            container.classList.remove('opacity-50', 'pointer-events-none');
            
            currentFiltered = progUnidad.filter(p => p.id_tipo == tipoId);
            renderProgramas(currentFiltered);
        }

        function renderProgramas(list) {
            const listEl = document.getElementById('progList');
            document.getElementById('progCount').innerText = `${list.length} Programas`;
            listEl.innerHTML = '';
            
            if(list.length === 0) {
                listEl.innerHTML = '<div class="p-8 text-center text-slate-600 text-sm">No hay programas</div>';
                return;
            }

            list.forEach(p => {
                const div = document.createElement('div');
                div.className = 'program-card p-4 rounded-xl text-sm font-medium text-slate-300 group cursor-pointer hover:bg-slate-800 transition-all';
                div.innerText = p.nombre;
                div.onclick = () => {
                    listEl.querySelectorAll('.program-card').forEach(c => c.classList.remove('active'));
                    div.classList.add('active');
                    document.getElementById('programa').value = p.nombre;
                    document.getElementById('id_programa').value = p.id;
                    
                    // Buscar facultad
                    const unidad = globalConfig.unidades.find(u => String(u.id) === String(p.id_unidad));
                    if (unidad) {
                        document.getElementById('facultad_display').classList.remove('hidden');
                        document.getElementById('facultad_nombre').innerText = unidad.nombre;
                    }
                };
                listEl.appendChild(div);
            });
        }

        document.getElementById('progSearch').oninput = (e) => {
            const search = e.target.value.toUpperCase();
            const filtered = currentFiltered.filter(p => p.nombre.toUpperCase().includes(search));
            renderProgramas(filtered);
        };

        function selectMedio(val, el) {
            el.closest('.grid').querySelectorAll('.select-card').forEach(c => c.classList.remove('active', 'active-green'));
            el.classList.add('active', 'active-green');
            document.getElementById('medio_captacion').value = val;
        }

        function verifyData() {
            const form = document.getElementById('enrollmentForm');
            
            // Validar campos requeridos básicos
            const required = ['nombres', 'apellidos', 'correo', 'dni', 'celular', 'fecha_nac', 'area_interes', 'id_programa', 'medio_captacion'];
            for (let id of required) {
                const el = document.getElementById(id);
                if (!el || !el.value) {
                    const msg = document.getElementById('responseMessage');
                    msg.classList.remove('hidden', 'bg-green-500/10', 'text-green-400');
                    msg.classList.add('bg-red-500/10', 'text-red-400');
                    msg.innerText = 'POR FAVOR, COMPLETE TODOS LOS CAMPOS OBLIGATORIOS';
                    el?.focus();
                    return;
                }
            }

            // Poblar campos de confirmación
            document.getElementById('confirmNombre').innerText = `${document.getElementById('nombres').value} ${document.getElementById('apellidos').value}`;
            document.getElementById('confirmDni').innerText = document.getElementById('dni').value;
            document.getElementById('confirmCorreo').innerText = document.getElementById('correo').value;
            document.getElementById('confirmCelular').innerText = document.getElementById('celular').value;
            document.getElementById('confirmFecha').innerText = document.getElementById('fecha_nac').value;
            document.getElementById('confirmArea').innerText = document.getElementById('area_interes').value;
            document.getElementById('confirmPrograma').innerText = document.getElementById('programa').value;
            document.getElementById('confirmFacultad').innerText = document.getElementById('facultad_nombre').innerText || '---';

            // Transición visual
            const s1 = document.getElementById('step1');
            const s2 = document.getElementById('step2');
            
            s1.classList.add('opacity-0');
            setTimeout(() => {
                s1.classList.add('hidden');
                s2.classList.remove('hidden');
                setTimeout(() => s2.classList.remove('opacity-0'), 50);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 500);
        }

        function goBack() {
            const s1 = document.getElementById('step1');
            const s2 = document.getElementById('step2');
            
            s2.classList.add('opacity-0');
            setTimeout(() => {
                s2.classList.add('hidden');
                s1.classList.remove('hidden');
                setTimeout(() => s1.classList.remove('opacity-0'), 50);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 500);
        }

        document.getElementById('enrollmentForm').onsubmit = async function(e) {
            e.preventDefault();
            
            // Si estamos en step1, no enviar, sino verificar
            if (!document.getElementById('step1').classList.contains('hidden')) {
                verifyData();
                return;
            }

            const btn = document.getElementById('btnSubmit');
            const msg = document.getElementById('responseMessage');
            btn.disabled = true;
            const originalText = btn.innerHTML;
            btn.innerHTML = 'PROCESANDO... <span class="material-symbols-outlined animate-spin">sync</span>';

            // Captura manual de datos para máxima fiabilidad
            const data = {
                nombres: document.getElementById('nombres').value,
                apellidos: document.getElementById('apellidos').value,
                correo: document.getElementById('correo').value,
                dni: document.getElementById('dni').value,
                celular: document.getElementById('celular').value,
                fecha_nac: document.getElementById('fecha_nac').value,
                area_interes: document.getElementById('area_interes').value,
                id_programa: document.getElementById('id_programa').value,
                programa: document.getElementById('programa').value,
                facultad: document.getElementById('facultad_nombre').innerText,
                medio_captacion: document.getElementById('medio_captacion').value
            };

            try {
                const res = await fetch('backend/handler.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                });
                const result = await res.json();
                msg.classList.remove('hidden', 'bg-green-500/10', 'text-green-400', 'bg-red-500/10', 'text-red-400');
                if(result.success) {
                    msg.classList.add('bg-green-500/10', 'text-green-400');
                    msg.innerHTML = '<span class="material-symbols-outlined block text-5xl mb-4">check_circle</span> ¡INSCRIPCIÓN COMPLETADA CON ÉXITO!<br><span class="text-xs font-normal">Nos pondremos en contacto contigo pronto.</span>';
                    this.reset();
                    
                    setTimeout(() => {
                        window.location.href = 'https://posgrado.unac.edu.pe/';
                    }, 3000);
                } else {
                    msg.classList.add('bg-red-500/10', 'text-red-400');
                    msg.innerText = 'ERROR: ' + result.error;
                }
            } catch(e) { 
                console.error(e);
                msg.classList.add('bg-red-500/10', 'text-red-400');
                msg.innerText = 'ERROR DE CONEXIÓN'; 
            }
            finally { 
                btn.disabled = false; 
                btn.innerHTML = originalText; 
            }
        };
    </script>
</body>
</html>

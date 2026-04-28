document.addEventListener('DOMContentLoaded', async () => {
    // 1. OBTENER DATOS
    const container = document.getElementById('dynamic-cards-container');
    if (!container) return;

    // ─── Fallback images curadas por área académica ───
    const FALLBACK_BY_AREA = {
        'Ciencias Administrativas':                'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80',
        'Ciencias Contables':                      'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=600&q=80',
        'Ciencias de la Educación':                'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80',
        'Ciencias de la Salud':                    'https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=600&q=80',
        'Ciencias Económicas':                     'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=600&q=80',
        'Ciencias Naturales y Matemáticas':        'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Ambiental y Recursos Naturales':'https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Eléctrica y Electrónica':      'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Industrial y de Sistemas':     'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Mecánica y Energía':           'https://images.unsplash.com/photo-1581092335397-9583eb92d232?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Pesquera y Alimentos':         'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?auto=format&fit=crop&w=600&q=80',
        'Ingeniería Química':                      'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=600&q=80',
    };
    const DEFAULT_FALLBACK = 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80';

    // ─── B. Skeleton Loading: Mostrar inmediatamente ───
    const SKELETON_COUNT = 6;
    let skeletonHTML = '';
    for (let i = 0; i < SKELETON_COUNT; i++) {
        const offsetClass = i % 2 !== 0 ? 'sm:mt-16' : '';
        skeletonHTML += `
            <div class="card-3d-wrapper ${offsetClass}">
                <div class="animate-pulse bg-surface-elevated border border-border-base rounded-[var(--radius-lg)] overflow-hidden flex flex-col h-full">
                    <div class="h-48 bg-surface-soft shimmer-block rounded-t-[var(--radius-lg)]"></div>
                    <div class="p-6 flex flex-col flex-1 gap-3">
                        <div class="h-3 w-24 bg-surface-soft rounded-full"></div>
                        <div class="h-5 w-full bg-surface-soft rounded-[var(--radius-sm)]"></div>
                        <div class="h-5 w-3/4 bg-surface-soft rounded-[var(--radius-sm)]"></div>
                        <div class="flex-1"></div>
                        <div class="flex gap-2 mt-4">
                            <div class="h-3 w-16 bg-surface-soft rounded-full"></div>
                            <div class="h-3 w-12 bg-surface-soft rounded-full"></div>
                        </div>
                        <div class="h-10 w-10 bg-surface-soft rounded-full mt-2"></div>
                    </div>
                </div>
            </div>
        `;
    }
    container.innerHTML = skeletonHTML;

    try {
        const response = await fetch('data/programas.json');
        if (!response.ok) throw new Error('Error al cargar los programas');
        
        const data = await response.json();
        
        // Aplanar los programas del JSON real
        const allPrograms = [];
        for (const facKey in data.facultades) {
            const facultad = data.facultades[facKey];
            if (facultad.programas) {
                facultad.programas.forEach(prog => {
                    allPrograms.push(prog);
                });
            }
        }

        // Mezclar arreglo
        function getRandomPrograms(arr, count) {
            return [...arr].sort(() => 0.5 - Math.random()).slice(0, count);
        }

        // Seleccionar 8 programas
        const selected = getRandomPrograms(allPrograms, 8);

        // E. Badge de tipo → colores del sistema de diseño
        const getColorBadge = (tipo) => {
            switch(tipo.toLowerCase()) {
                case 'doctorado': return 'text-brand-accent bg-brand-accent/20 border-brand-accent/30';
                case 'maestria': return 'text-brand-primary bg-brand-primary/20 border-brand-primary/30';
                default: return 'text-text-secondary bg-surface-soft border-border-base';
            }
        };

        // ─── A. Resolver imagen con fallback por área ───
        const resolveImage = (prog) => {
            const localImg = prog.imagen_1;
            const fallback = FALLBACK_BY_AREA[prog.area] || DEFAULT_FALLBACK;
            // Si no hay ruta local, usar directamente el fallback
            if (!localImg) return { src: fallback, fallback };
            return { src: localImg, fallback };
        };

        // Renderizar Grid
        let html = '';

        selected.forEach((prog, index) => {
            // Lógica de Masonry: Si es impar (índice 1 o 3), empujamos la tarjeta hacia abajo en pantallas medianas
            const offsetClass = index % 2 !== 0 ? 'sm:mt-16' : '';

            // Limitar la descripción o presentación para no romper el layout
            const descripcion = prog.presentacion || prog.descripcion || '';
            const { src: imagenUrl, fallback: fallbackUrl } = resolveImage(prog);
            const colorBadge = getColorBadge(prog.tipo);

            // C. Slug para link (normalizar nombre a URL-friendly)
            const slug = prog.nombre
                .toLowerCase()
                .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');

            html += `
                <div class="card-3d-wrapper right-card-anim ${offsetClass}" data-href="programas/${slug}" role="link" tabindex="0" aria-label="Ver programa: ${prog.nombre}">
                    <div class="programa-card group bg-surface-elevated border border-border-base rounded-[var(--radius-lg)] overflow-hidden shadow-md flex flex-col h-full relative cursor-pointer" style="transform-style: preserve-3d;">
                        
                        <!-- Lighting Overlays (On top in 3D) -->
                        <div class="card-border-overlay"></div>
                        <div class="glare-effect"></div>
                        
                        <!-- Imagen Superior -->
                        <div class="h-48 relative overflow-hidden bg-surface-soft shrink-0 rounded-t-[var(--radius-lg)]" style="transform: translateZ(20px);">
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-elevated via-surface-elevated/50 to-transparent z-10"></div>
                            <img src="${imagenUrl}" 
                                 alt="${prog.nombre}" 
                                 data-fallback="${fallbackUrl}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 ease-[cubic-bezier(0.25,1,0.5,1)] opacity-80 group-hover:opacity-100"
                                 loading="lazy">
                            
                            <!-- Tipo Badge -->
                            <div class="absolute top-4 left-4 z-20" style="transform: translateZ(30px);">
                                <span class="px-3 py-1 rounded-unac-full border ${colorBadge} text-[10px] font-bold uppercase tracking-wider backdrop-blur-md transition-none shadow-sm">
                                    ${prog.tipo}
                                </span>
                            </div>
                        </div>

                        <!-- Contenido -->
                        <div class="p-6 flex flex-col flex-1 relative z-20 bg-surface-elevated" style="transform: translateZ(10px);">
                            <p class="text-brand-accent text-xs font-semibold tracking-widest uppercase mb-2">
                                ${prog.area || 'Posgrado UNAC'}
                            </p>
                            <h3 class="programa-card-title text-xl font-bold text-text-base mb-3 leading-tight transition-colors duration-unac-base">
                                ${prog.nombre}
                            </h3>
                            <p class="text-text-muted text-sm leading-relaxed line-clamp-3 mb-6">
                                ${descripcion}
                            </p>
                            
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xs font-semibold text-text-muted transition-colors duration-unac-base tracking-wide uppercase">Ver programa</span>
                                <div class="inline-flex items-center justify-center w-10 h-10 rounded-[var(--radius-full)] bg-surface-soft border border-border-bright text-text-muted group-hover:bg-brand-accent group-hover:text-slate-950 group-hover:border-brand-accent transition-all duration-unac-base">
                                    <i class="ph ph-arrow-up-right text-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        });

        container.innerHTML = html;

        // ─── A. Aplicar onerror fallback en todas las imágenes ───
        container.querySelectorAll('img[data-fallback]').forEach(img => {
            img.onerror = function() {
                if (this.src !== this.dataset.fallback) {
                    this.src = this.dataset.fallback;
                }
            };
            // Forzar re-check si la imagen ya falló (cached 404)
            if (img.complete && img.naturalWidth === 0) {
                img.src = img.dataset.fallback;
            }
        });

        // ─── Inicialización y Animaciones GSAP ───
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            
            // 1. Animación del lado izquierdo (Textos)
            gsap.from(".left-content-anim > *", {
                scrollTrigger: {
                    trigger: "#programas-destacados",
                    start: "top 70%",
                },
                y: 30,
                opacity: 0,
                duration: 0.8,
                stagger: 0.1,
                ease: "power3.out",
                onStart: () => {
                    document.querySelector('.left-content-anim').classList.remove('opacity-0');
                }
            });

            // 2. Animación Stagger del lado derecho (Cards) con escala sutil
            gsap.from(".right-card-anim", {
                scrollTrigger: {
                    trigger: "#dynamic-cards-container",
                    start: "top 75%",
                },
                y: 80,
                opacity: 0,
                scale: 0.95,
                duration: 1,
                stagger: 0.1,
                ease: "power4.out",
                clearProps: "scale"
            });

            // 3. Efecto 3D Tilt + C. Card cliqueable con GSAP press feedback
            const wrappers = document.querySelectorAll('.card-3d-wrapper');
            
            wrappers.forEach(wrapper => {
                const card = wrapper.querySelector('.programa-card');
                const borderOverlay = wrapper.querySelector('.card-border-overlay');
                const glareEffect = wrapper.querySelector('.glare-effect');
                const arrowIcon = wrapper.querySelector('.ph-arrow-up-right');
                
                // ── 3D Tilt en mousemove ──
                wrapper.addEventListener('mousemove', (e) => {
                    const rect = wrapper.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;
                    const x = (e.clientX - centerX) / (rect.width / 2);
                    const y = (e.clientY - centerY) / (rect.height / 2);
                    
                    // Cálculo de variables para CSS (Glare y Border Angle)
                    const glareX = ((e.clientX - rect.left) / rect.width) * 100;
                    const glareY = ((e.clientY - rect.top) / rect.height) * 100;
                    const angle = Math.atan2(e.clientY - centerY, e.clientX - centerX) * (180 / Math.PI) + 90;

                    card.style.setProperty('--glare-x', `${glareX}%`);
                    card.style.setProperty('--glare-y', `${glareY}%`);
                    card.style.setProperty('--border-angle', `${angle}deg`);

                    // Animar la tarjeta y sus capas de luz con GSAP
                    gsap.to(card, {
                        rotationY: x * 8,
                        rotationX: -y * 8,
                        x: x * 4,
                        y: -y * 4 - 5,
                        boxShadow: `${-x * 10}px ${20 + -y * 10}px 50px rgba(0,0,0,0.5)`,
                        duration: 0.5,
                        ease: "power2.out"
                    });

                    // Activar luces suavemente si no lo están
                    gsap.to([borderOverlay, glareEffect], {
                        opacity: 1,
                        duration: 0.4,
                        ease: "power1.out"
                    });

                    // Animar flecha con mayor profundidad
                    if (arrowIcon) {
                        gsap.to(arrowIcon, {
                            x: x * 6,
                            y: y * -6,
                            z: 20,
                            duration: 0.4,
                            ease: "power2.out"
                        });
                    }
                });

                // ── Reset en mouseleave ──
                wrapper.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        rotationY: 0,
                        rotationX: 0,
                        x: 0,
                        y: 0,
                        boxShadow: "var(--shadow-md)",
                        duration: 0.8,
                        ease: "power3.out"
                    });

                    // Desactivar luces
                    gsap.to([borderOverlay, glareEffect], {
                        opacity: 0,
                        duration: 0.6,
                        ease: "power2.inOut"
                    });

                    if (arrowIcon) {
                        gsap.to(arrowIcon, { x: 0, y: 0, z: 0, duration: 0.6, ease: "power2.out" });
                    }
                });

                // ── C. Click con animación GSAP de press ──
                wrapper.addEventListener('click', () => {
                    const href = wrapper.dataset.href;
                    
                    // Animación de "press" → escala + flash del borde
                    gsap.timeline()
                        .to(card, {
                            scale: 0.96,
                            duration: 0.12,
                            ease: "power2.in"
                        })
                        .to(card, {
                            scale: 1,
                            borderColor: 'var(--unac-yellow)',
                            duration: 0.25,
                            ease: "back.out(2)",
                            onComplete: () => {
                                // Resetear borde
                                gsap.to(card, { borderColor: 'var(--border-base)', duration: 0.4 });
                                // Navegar si hay href
                                if (href) {
                                    window.location.href = href;
                                }
                            }
                        });
                });

                // ── Accesibilidad: Enter / Space también activa click ──
                wrapper.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        wrapper.click();
                    }
                });
            });
        }

    } catch (error) {
        console.error('Error in programas-destacados:', error);
        container.innerHTML = `<div class="col-span-full p-6 text-center text-unac-text-muted bg-unac-bg-surface rounded-unac-lg border border-unac-border-base">No se pudieron cargar los programas en este momento.</div>`;
    }
});


document.addEventListener('DOMContentLoaded', async () => {
    const container = document.getElementById('dynamic-cards-container');
    if (!container) return;

    // --- Configuration: Fallback Images by Area ---
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

    // --- Skeleton Loading State ---
    const SKELETON_COUNT = 8;
    let skeletonHTML = '';
    for (let i = 0; i < SKELETON_COUNT; i++) {
        const offsetClass = i % 2 !== 0 ? 'sm:mt-16' : '';
        const visibilityClass = i >= 3 ? 'hidden sm:block' : '';
        skeletonHTML += `
            <div class="card-3d-wrapper ${offsetClass} ${visibilityClass}">
                <div class="animate-pulse bg-surface-elevated border border-border-base rounded-[var(--radius-lg)] overflow-hidden flex flex-col h-full min-h-[520px]">
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
        if (!response.ok) throw new Error('Failed to load programs');
        
        const data = await response.json();
        
        // Flatten all programs
        const allPrograms = [];
        for (const facKey in data.facultades) {
            const facultad = data.facultades[facKey];
            if (facultad.programas) {
                allPrograms.push(...facultad.programas);
            }
        }

        // Random Selection
        const selected = allPrograms.sort(() => 0.5 - Math.random()).slice(0, 8);

        // UI Helpers
        const getColorBadge = (tipo) => {
            const types = {
                'doctorado': 'text-brand-accent bg-brand-accent/20 border-brand-accent/30',
                'maestria': 'text-brand-primary bg-brand-primary/20 border-brand-primary/30'
            };
            return types[tipo.toLowerCase()] || 'text-text-secondary bg-surface-soft border-border-base';
        };

        const resolveImage = (prog) => {
            const fallback = FALLBACK_BY_AREA[prog.area] || DEFAULT_FALLBACK;
            return { src: prog.imagen_1 || fallback, fallback };
        };

        // --- Configuration: Shared Shadow State ---
        const NEUTRAL_SHADOW = '0 30px 60px rgba(2, 6, 23, 0.45), 0 15px 25px rgba(2, 6, 23, 0.15)';

        // Render Cards
        container.innerHTML = selected.map((prog, index) => {
            const offsetClass = index % 2 !== 0 ? 'sm:mt-16' : '';
            const visibilityClass = index >= 3 ? 'hidden sm:block' : '';
            const descripcion = prog.presentacion || prog.descripcion || '';
            const { src: imagenUrl, fallback: fallbackUrl } = resolveImage(prog);
            const colorBadge = getColorBadge(prog.tipo);
            const slug = prog.nombre.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '').replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');

            return `
                <div class="card-3d-wrapper right-card-anim ${offsetClass} ${visibilityClass}" data-href="programas/${slug}" role="link" tabindex="0" aria-label="Ver programa: ${prog.nombre}">
                    <div class="programa-card group bg-surface-elevated border border-border-base rounded-[var(--radius-lg)] overflow-hidden flex flex-col h-full min-h-[520px] relative cursor-pointer" style="transform-style: preserve-3d;">
                        
                        <div class="card-border-overlay"></div>
                        <div class="glare-effect"></div>
                        
                        <div class="h-48 relative overflow-hidden bg-surface-soft shrink-0 rounded-t-[var(--radius-lg)]" style="transform: translateZ(20px);">
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-elevated via-surface-elevated/50 to-transparent z-10"></div>
                            <img src="${imagenUrl}" 
                                 alt="${prog.nombre}" 
                                 data-fallback="${fallbackUrl}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 ease-[cubic-bezier(0.25,1,0.5,1)] opacity-80 group-hover:opacity-100"
                                 loading="lazy">
                            
                            <div class="absolute top-4 left-4 z-20" style="transform: translateZ(30px);">
                                <span class="px-3 py-1 rounded-full border ${colorBadge} text-[10px] font-bold uppercase tracking-wider backdrop-blur-md shadow-sm">
                                    ${prog.tipo}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-1 relative z-20" style="transform: translateZ(10px);">
                            <p class="text-brand-accent text-xs font-semibold tracking-widest uppercase mb-2">
                                ${prog.area || 'Posgrado UNAC'}
                            </p>
                            <h3 class="programa-card-title text-xl font-bold text-text-base mb-3 leading-tight">
                                ${prog.nombre}
                            </h3>
                            <p class="text-text-muted text-sm leading-relaxed line-clamp-3 mb-6">
                                ${descripcion}
                            </p>
                            
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xs font-semibold text-text-muted tracking-wide uppercase">Ver programa</span>
                                <div class="arrow-icon-container inline-flex items-center justify-center w-10 h-10 rounded-xl bg-surface-soft border border-border-bright text-text-muted transition-colors">
                                    <i class="ph ph-arrow-up-right text-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }).join('');

        // Handle Image Fallbacks
        container.querySelectorAll('img[data-fallback]').forEach(img => {
            img.onerror = function() {
                if (this.src !== this.dataset.fallback) this.src = this.dataset.fallback;
            };
            if (img.complete && img.naturalWidth === 0) img.src = img.dataset.fallback;
        });

        // Initialize GSAP Animations
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            
            // Initial Shadow State via GSAP
            gsap.set(".programa-card", { boxShadow: NEUTRAL_SHADOW });

            // Text Entrance
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
                onStart: () => document.querySelector('.left-content-anim').classList.remove('opacity-0')
            });

            // Cards Entrance
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

            // Interaction: 3D Tilt
            const wrappers = document.querySelectorAll('.card-3d-wrapper');
            
            wrappers.forEach(wrapper => {
                const card = wrapper.querySelector('.programa-card');
                const borderOverlay = wrapper.querySelector('.card-border-overlay');
                const glareEffect = wrapper.querySelector('.glare-effect');
                const arrowBtn = wrapper.querySelector('.arrow-icon-container');
                const arrowIcon = wrapper.querySelector('.ph-arrow-up-right');
                
                wrapper.addEventListener('mousemove', (e) => {
                    const rect = wrapper.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;
                    const x = (e.clientX - centerX) / (rect.width / 2);
                    const y = (e.clientY - centerY) / (rect.height / 2);
                    
                    const glareX = ((e.clientX - rect.left) / rect.width) * 100;
                    const glareY = ((e.clientY - rect.top) / rect.height) * 100;
                    const angle = Math.atan2(e.clientY - centerY, e.clientX - centerX) * (180 / Math.PI) + 90;

                    card.style.setProperty('--glare-x', `${glareX}%`);
                    card.style.setProperty('--glare-y', `${glareY}%`);
                    card.style.setProperty('--border-angle', `${angle}deg`);

                    gsap.to(card, {
                        rotationY: x * 8,
                        rotationX: -y * 8,
                        x: x * 4,
                        y: -y * 4 - 8,
                        boxShadow: `
                            ${-x * 25}px ${30 + -y * 25}px 70px rgba(2, 6, 23, 0.45),
                            ${-x * 10}px ${15 + -y * 10}px 25px rgba(2, 6, 23, 0.15)
                        `,
                        duration: 0.5,
                        ease: "power2.out"
                    });

                    gsap.to([borderOverlay, glareEffect], { opacity: 1, duration: 0.4 });

                    if (arrowBtn) {
                        gsap.to(arrowBtn, {
                            backgroundColor: "var(--brand-accent)",
                            borderColor: "var(--brand-accent)",
                            color: "#020617",
                            duration: 0.4
                        });
                        gsap.to(arrowIcon, { x: x * 6, y: y * -6, z: 20, duration: 0.4 });
                    }
                });

                wrapper.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        rotationY: 0,
                        rotationX: 0,
                        x: 0,
                        y: 0,
                        boxShadow: NEUTRAL_SHADOW,
                        duration: 0.8,
                        ease: "power3.out"
                    });

                    gsap.to([borderOverlay, glareEffect], { opacity: 0, duration: 0.6 });

                    if (arrowBtn) {
                        gsap.to(arrowBtn, {
                            backgroundColor: "var(--surface-soft)",
                            borderColor: "var(--border-bright)",
                            color: "var(--text-secondary)",
                            duration: 0.6
                        });
                        gsap.to(arrowIcon, { x: 0, y: 0, z: 0, duration: 0.6 });
                    }
                });

                wrapper.addEventListener('click', () => {
                    const href = wrapper.dataset.href;
                    gsap.timeline()
                        .to(card, { scale: 0.96, duration: 0.12, ease: "power2.in" })
                        .to(card, {
                            scale: 1,
                            borderColor: 'var(--unac-yellow)',
                            duration: 0.25,
                            ease: "back.out(2)",
                            onComplete: () => {
                                gsap.to(card, { borderColor: 'var(--border-base)', duration: 0.4 });
                                if (href) window.location.href = href;
                            }
                        });
                });

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
        container.innerHTML = `<div class="col-span-full p-6 text-center text-text-secondary bg-surface-elevated rounded-xl border border-border-base">No se pudieron cargar los programas en este momento.</div>`;
    }
});

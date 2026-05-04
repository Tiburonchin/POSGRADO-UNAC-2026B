document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('workers-grid');
    const type = document.body.getAttribute('data-type');
    const featuredContainer = document.getElementById('featured-director-container');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const loadMoreContainer = document.getElementById('load-more-container');
    
    if (!grid || !type) return;

    let allWorkers = [];
    let displayedWorkers = [];
    let currentLimit = (type === 'administrativos' || type === 'docentes') ? 6 : 999;

    const jsonPath = `${type}.json`;

    fetch(jsonPath)
        .then(response => response.json())
        .then(data => {
            allWorkers = processData(data, type);
            
            if (type === 'directores') {
                renderDirectores(allWorkers);
                setupFilters(allWorkers);
            } else {
                displayedWorkers = allWorkers;
                renderWorkers(displayedWorkers.slice(0, currentLimit));
                updateLoadMoreButton();
                setupFilters(allWorkers);
            }
        })
        .catch(error => {
            console.error('Error loading workers:', error);
            grid.innerHTML = `<p class="error">Error al cargar la información de los ${type}.</p>`;
        });

    function processData(data, type) {
        let list = [];
        if (type === 'directores') {
            list = Array.isArray(data) ? data : [];
            list = list.map(d => {
                const isEng = d.descripcion.toLowerCase().includes('ingeniería') || 
                              ['FIARN', 'FIEE', 'FIIS', 'FIME', 'FIPA', 'FIQ'].includes(d.facultad);
                return { ...d, category: isEng ? 'Ingeniería' : 'Ciencias' };
            });
        } else if (type === 'docentes') {
            if (data.facultades) {
                Object.values(data.facultades).forEach(fac => {
                    if (fac.docentes) {
                        fac.docentes.forEach(doc => {
                            let roleType = (doc.tipo || '').trim().toLowerCase();
                            let roleLabel = 'DOCENTE';
                            if (roleType === 'planta') roleLabel = 'DOCENTE DE PLANTA';
                            else if (roleType === 'contratado') roleLabel = 'DOCENTE CONTRATADO';
                            else if (roleType === 'visitantes' || roleType === 'visitante') roleLabel = 'DOCENTE VISITANTE';

                            list.push({
                                ...doc,
                                facultad: fac.nombre,
                                cargo: roleLabel,
                                foto: 'icon/icon.png', 
                                descripcion: doc.titulo || doc.especialidad || ''
                            });
                        });
                    }
                });
            }
        } else if (type === 'administrativos') {
            if (Array.isArray(data.facultades)) {
                data.facultades.forEach(fac => {
                    if (Array.isArray(fac.administrativos)) {
                        fac.administrativos.forEach(admin => {
                            list.push({
                                ...admin,
                                facultad: fac.nombre,
                                foto: 'icon/icon.png',
                                descripcion: admin.cargo || ''
                            });
                        });
                    }
                });
            }
        }
        return list;
    }

    function renderDirectores(workers) {
        const mainDirector = workers.find(w => w.nombre.includes('Juan Valdivia Zuta'));
        if (mainDirector && featuredContainer) {
            featuredContainer.innerHTML = `
                <div class="director-featured">
                    <div class="featured-img-container">
                        <img src="directores/juan_valdivia.png" alt="${mainDirector.nombre}" onerror="this.src='https://ui-avatars.com/api/?name=${encodeURIComponent(mainDirector.nombre)}&background=121b2d&color=60a5fa'">
                    </div>
                    <div class="featured-info" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                        <h2>${mainDirector.nombre}</h2>
                        <span class="featured-role">Director de la Escuela de Posgrado</span>
                        <p class="featured-desc">
                            Reconocido académico con más de 20 años de experiencia en educación superior y gestión universitaria. 
                            Especialista en investigación científica y desarrollo de programas de posgrado de alta calidad académica.
                        </p>
                        <div class="featured-degrees" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px; margin-bottom: 24px;">
                            <span class="degree-tag">PhD. en Administración de Negocios</span>
                            <span class="degree-tag">Mg. en Ciencias Con Mención en Proyectos de Inversión</span>
                        </div>
                        <div class="featured-contact" style="display: flex; gap: 24px; padding-top: 24px; border-top: 1px solid var(--border-base);">
                            <a href="mailto:posgrado@unac.pe" class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>posgrado@unac.pe</span>
                            </a>
                            <a href="tel:+5114296101" class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+51 1 429-6101 Ext. 201</span>
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }

        const others = workers.filter(w => !w.nombre.includes('Juan Valdivia Zuta'));
        displayedWorkers = others;
        renderWorkers(others);
    }

    function renderWorkers(workers, append = false) {
        if (!append) {
            grid.innerHTML = '';
            grid.classList.remove('fade-in');
            void grid.offsetWidth;
            grid.classList.add('fade-in');
        }
        
        if (workers.length === 0 && !append) {
            grid.innerHTML = '<p>No se encontraron resultados para los filtros seleccionados.</p>';
            return;
        }

        workers.forEach(worker => {
            const card = document.createElement('div');
            card.className = 'worker-card';
            
            let photoPath = worker.foto || '';
            if (type === 'directores') {
                const fileName = photoPath.split('/').pop();
                photoPath = `directores/${fileName}`;
            } else if (photoPath.startsWith('../img')) {
                photoPath = '../../' + photoPath.substring(3);
            }

            const email = worker.email || 'posgrado@unac.pe';
            const phone = worker.telefono || worker.whatsapp || '+51 1 429-6101';

            let description = worker.descripcion || '';
            if (type === 'directores') {
                description = `
                    <strong style="color: var(--unac-yellow);">Director de UPG - ${worker.facultad}</strong><br>
                    <span style="font-size: 0.9em; opacity: 0.8;">Facultad de ${getFacultadFullName(worker.facultad)}</span>
                `;
            }

            const showPhone = type !== 'docentes';

            let displayRole = worker.cargo || 'Director';
            let displayDesc = description;
            let roleStyle = '';

            if (type === 'docentes') {
                displayRole = worker.descripcion || 'Docente Universitario';
                displayDesc = `<span style="color: #cbd5e1; font-weight: 600;">${worker.cargo}</span>`;
                roleStyle = 'style="color: var(--unac-yellow);"';
            }

            card.innerHTML = `
                <div class="worker-image-container">
                    <img src="${photoPath}" alt="${worker.nombre}" onerror="this.src='https://ui-avatars.com/api/?name=${encodeURIComponent(worker.nombre)}&background=121b2d&color=60a5fa'">
                </div>
                <div class="worker-info">
                    <span class="worker-role" ${roleStyle}>${displayRole}</span>
                    <h2>${worker.nombre}</h2>
                    <p class="worker-desc">${displayDesc}</p>

                    ${type !== 'directores' ? `
                    <div class="worker-contact">
                        <a href="mailto:${email}" class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>${email}</span>
                        </a>
                        ${showPhone ? `
                        <a href="tel:${phone.replace(/\s/g, '')}" class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>${phone}</span>
                        </a>
                        ` : ''}
                    </div>
                    ` : ''}
                </div>
            `;
            grid.appendChild(card);
        });
    }

    function updateLoadMoreButton() {
        if (!loadMoreContainer) return;
        if (displayedWorkers.length > currentLimit) {
            loadMoreContainer.style.display = 'block';
        } else {
            loadMoreContainer.style.display = 'none';
        }
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            const nextBatch = displayedWorkers.slice(currentLimit, currentLimit + 6);
            currentLimit += 6;
            renderWorkers(nextBatch, true);
            updateLoadMoreButton();
        });
    }

    function setupFilters(workers) {
        const filterBtns = document.querySelectorAll('.filter-btn:not(#load-more-btn)');
        const facultySelect = document.getElementById('faculty-filter');
        const typeSelect = document.getElementById('type-filter');
        const searchInput = document.getElementById('search-input');
        
        if (!facultySelect) return;

        const excludeName = type === 'directores' ? 'Juan Valdivia Zuta' : '___NONE___';
        const faculties = [...new Set(workers.filter(w => !w.nombre.includes(excludeName)).map(w => w.facultad))].sort();
        
        facultySelect.innerHTML = '<option value="all">Todas las facultades</option>';
        faculties.forEach(fac => {
            const option = document.createElement('option');
            option.value = fac;
            option.textContent = fac;
            facultySelect.appendChild(option);
        });

        const filterAction = () => {
            let filtered = workers;
            if (type === 'directores') {
                filtered = filtered.filter(w => !w.nombre.includes('Juan Valdivia Zuta'));
            }

            const activeBtn = document.querySelector('.filter-btn.active:not(#load-more-btn)');
            if (activeBtn) {
                const catFilter = activeBtn.getAttribute('data-filter');
                if (catFilter !== 'all') {
                    filtered = filtered.filter(w => w.category === catFilter);
                }
            }

            const facFilter = facultySelect.value;
            if (facFilter !== 'all') {
                filtered = filtered.filter(w => w.facultad === facFilter);
            }

            if (typeSelect) {
                const tipoFilter = typeSelect.value;
                if (tipoFilter !== 'all') {
                    filtered = filtered.filter(w => w.cargo === tipoFilter);
                }
            }

            if (searchInput) {
                const searchTerm = searchInput.value.toLowerCase().trim();
                if (searchTerm) {
                    filtered = filtered.filter(w => w.nombre.toLowerCase().includes(searchTerm));
                }
            }

            displayedWorkers = filtered;
            currentLimit = (type === 'administrativos' || type === 'docentes') ? 6 : 999;
            renderWorkers(displayedWorkers.slice(0, currentLimit));
            updateLoadMoreButton();
        };

        if (filterBtns) {
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    facultySelect.value = 'all';
                    if(typeSelect) typeSelect.value = 'all';
                    if(searchInput) searchInput.value = '';
                    filterAction();
                });
            });
        }

        facultySelect.addEventListener('change', () => {
            if (facultySelect.value !== 'all' && filterBtns.length > 0) {
                filterBtns.forEach(b => b.classList.remove('active'));
                const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
                if (allBtn) allBtn.classList.add('active');
            }
            filterAction();
        });

        if (typeSelect) {
            typeSelect.addEventListener('change', filterAction);
        }

        if (searchInput) {
            searchInput.addEventListener('input', filterAction);
        }
    }

    function getFacultadFullName(shortName) {
        const names = {
            'FCA': 'Ciencias Administrativas',
            'FCC': 'Ciencias Contables',
            'FCE': 'Ciencias Económicas',
            'FCED': 'Ciencias de la Educación',
            'FCNM': 'Ciencias Naturales y Matemática',
            'FCS': 'Ciencias de la Salud',
            'FIARN': 'Ingeniería Ambiental y de Recursos Naturales',
            'FIEE': 'Ingeniería Eléctrica y Electrónica',
            'FIIS': 'Ingeniería Industrial y de Sistemas',
            'FIME': 'Ingeniería Mecánica y de Energía',
            'FIPA': 'Ingeniería Pesquera y de Alimentos',
            'FIQ': 'Ingeniería Química'
        };
        return names[shortName] || shortName;
    }

    const hero = document.querySelector('.hero');
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scroll = window.pageYOffset;
                if (!hero) return;
                const heroHeight = hero.offsetHeight;
                
                if (scroll <= heroHeight) {
                    const progress = scroll / heroHeight;
                    const scale = 1 - (progress * 0.3);
                    const blur = progress * 12;
                    const bgOpacity = 1 - (progress * 0.5);
                    const textOpacity = 1 - (progress * 0.8);

                    hero.style.setProperty('--hero-scale', scale);
                    hero.style.setProperty('--hero-blur', `${blur}px`);
                    hero.style.setProperty('--bg-opacity', bgOpacity);
                    hero.style.setProperty('--hero-opacity', textOpacity);
                }
                ticking = false;
            });
            ticking = true;
        }
    });

    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));

    const statNumbers = document.querySelectorAll('.stat-number');
    if (statNumbers.length > 0) {
        const statsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalValue = parseInt(target.getAttribute('data-target'));
                    const duration = 2000; // 2 seconds
                    const frameRate = 1000 / 60;
                    const totalFrames = Math.round(duration / frameRate);
                    let currentFrame = 0;
                    
                    const easeOutQuad = t => t * (2 - t);
                    
                    const counter = setInterval(() => {
                        currentFrame++;
                        const progress = easeOutQuad(currentFrame / totalFrames);
                        const currentVal = Math.round(finalValue * progress);
                        
                        target.innerText = currentVal;
                        
                        if (currentFrame === totalFrames) {
                            clearInterval(counter);
                            target.innerText = finalValue;
                        }
                    }, frameRate);
                    
                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.5 });

        statNumbers.forEach(num => statsObserver.observe(num));
    }
});

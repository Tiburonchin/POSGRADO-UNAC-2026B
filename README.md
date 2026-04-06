# Escuela de Posgrado UNAC

Sitio web moderno y responsivo de la Escuela de Posgrado de la Universidad Nacional del Callao, con diseño contemporáneo, animaciones fluidas y una experiencia de usuario optimizada.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)
![License](https://img.shields.io/badge/License-ISC-blue?style=flat-square)

## 🎯 Descripción

Plataforma web profesional diseñada para la Escuela de Posgrado UNAC, ofreciendo una interfaz moderna e intuitiva con características avanzadas como:

- ✨ Animaciones fluidas y transiciones suaves
- 🌓 Sistema de tema claro/oscuro automático
- 📱 Diseño completamente responsivo
- ⚡ Carga rápida de páginas con loader global
- 🍔 Menú mega interactivo
- ♿ Soporte para preferencias de movimiento reducido

---

## 🏗️ Arquitectura

```
new2/
├── index.php                      # Punto de entrada principal
├── package.json                   # Dependencias y scripts de construcción
├── tailwind.config.js             # Configuración de Tailwind CSS
├── postcss.config.js              # Configuración de PostCSS
│
├── includes/                      # Componentes PHP reutilizables
│   ├── layout.php                 # Template principal y función renderPage()
│   ├── header.php                 # Encabezado y navegación
│   ├── footer.php                 # Pie de página
│   └── page-loader.php            # Componente de carga global
│
├── pages/                         # Plantillas de contenido
│   └── home.php                   # Página de inicio
│
├── assets/
│   ├── css/
│   │   ├── input.css              # Fuente Tailwind (editable)
│   │   ├── output.css             # CSS compilado (generado automáticamente)
│   │   └── mega-menu.css          # Estilos del menú desplegable
│   │
│   └── js/
│       ├── page-loader.js         # Lógica del loader global
│       ├── animations.js          # Animaciones generales (GSAP)
│       ├── navigation.js          # Funcionalidad del menú
│       ├── theme.js               # Sistema de temas light/dark
│       └── modules/
│           └── hero-animations.js # Animaciones de héroe
│
└── img/
    └── logos/                     # Assets gráficos
```

### Flujo de Rendering

1. **Entrada**: `index.php` define el título y plantilla de contenido
2. **Layout**: `includes/layout.php` renderiza el documento HTML completo
3. **Componentes**: Se inyectan header, page-loader y footer
4. **Contenido**: La plantilla específica (ej: `pages/home.php`) se carga dinámicamente

---

## 🛠️ Tecnologías

| Tecnología | Versión | Propósito |
|---|---|---|
| **PHP** | 8+ | Backend y renderización de servidor |
| **Tailwind CSS** | ^3.4.17 | Framework de utilidades CSS |
| **PostCSS** | ^8.5.8 | Procesamiento avanzado de CSS (autoprefixer) |
| **GSAP** | (implícito) | Animaciones JavaScript de alto rendimiento |
| **JavaScript Vanilla** | ES6+ | Interactividad sin dependencias |

---

## 📋 Requisitos

- **Servidor**: Apache/Nginx con soporte PHP 8.0+
- **Node.js**: v16+ (solo para desarrollo)
- **npm**: v7+ (solo para compilación de CSS)

### Sistema Operativo
- Windows, macOS o Linux
- XAMPP/Laragon/WAMP (para desarrollo local)

---

## ⚙️ Instalación

### 1. Clonar o descargar el proyecto

```bash
git clone <tu-repositorio>
cd new2
```

### 2. Instalar dependencias de desarrollo

```bash
npm install
```

### 3. Compilar CSS (Tailwind)

Opción A - Compilación única:
```bash
npm run build:css
```

Opción B - Modo vigilancia (recompila automáticamente):
```bash
npm run watch:css
```

### 4. Configurar servidor local

**En XAMPP:**
1. Copiar a `htdocs/Posgrado/new2`
2. Iniciar Apache desde el panel de control
3. Acceder en `http://localhost/Posgrado/new2`

**En Laragon:**
1. Copiar a la carpeta de proyectos
2. Ejecutar desde el menú de Laragon
3. Se genera URL automáticamente

### 5. Acceder al sitio

```
http://localhost/Posgrado/new2
```

---

## 🚀 Scripts de Desarrollo

```bash
# Compilar CSS de producción (minificado)
npm run build:css

# Modo desarrollo - recompila al detectar cambios
npm run watch:css

# Tests (próximamente)
npm run test
```

---

## 🎨 Características Principales

### 🌓 Sistema de Temas
- Detección automática de preferencia del sistema (light/dark)
- Almacenamiento en `localStorage` para persistencia
- Toggle manual disponible para cambio de tema

### ⚡ Page Loader
- Animación global de carga cohesiva
- Duración mínima configurable (2400ms)
- Integración GSAP con easing suave
- Respeta preferencias de movimiento reducido

### 📟 Menú Responsivo
- Menú mega con categorías expandibles
- Navegación adaptable a móvil
- Estados hover y activos definidos

### 🎬 Animaciones
- Transiciones suaves con GSAP
- Animaciones de héroe en página de inicio
- Efectos de parallax y fade-in
- Optimizadas para rendimiento

---

## 💾 Estructura de Datos

### Variables de Tema
```javascript
// En localStorage
'epg-theme' // 'light' | 'dark' | preferencia del sistema
```

### Atributos HTML
```html
<html data-theme="light|dark">
<body data-page="home|about|services|...">
```

---

## 🔧 Configuración Personalizada

### Tailwind - `tailwind.config.js`
```javascript
// Personalizar colores, tipografía, espacios
extend: {
  colors: { ... },
  fontFamily: { ... },
  spacing: { ... }
}
```

### PostCSS - `postcss.config.js`
```javascript
// Añadir prefijos automáticos para navegadores antiguos
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {}
  }
}
```

---

## 🐛 Solución de Problemas

### "Command 'npm' not found" en Windows PowerShell
Usar `npm.cmd` en lugar de `npm`:
```powershell
npm.cmd run build:css
```

### CSS no se actualiza
1. Limpiar caché del navegador (Ctrl+Shift+Del)
2. Reiniciar watch mode: `npm run watch:css`
3. Verificar que `output.css` tiene fecha reciente

### Tema no persiste
- Verificar que localStorage está habilitado en el navegador
- Revisar la consola de desarrollador (F12) para errores

### Animaciones cortadas
- Desactivar "Reduce motion" en preferencias del sistema
- Verificar que GSAP está cargado correctamente

---

## 📄 Licencia

ISC

---

## 📞 Contacto

**Escuela de Posgrado**  
Universidad Nacional del Callao

---

## 🔗 Links Útiles

- [Documentación Tailwind CSS](https://tailwindcss.com/docs)
- [GSAP Animation Library](https://gsap.com)
- [MDN Web Docs](https://developer.mozilla.org)
- [PHP Manual](https://www.php.net/manual)

---

**Última actualización**: Abril 2026

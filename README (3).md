# UNAC Programas - Subpágina de Posgrado

Sistema de listado y detalle de programas académicos con diseño **glassmorphism**, fondo transparente, animaciones GSAP y Tailwind CSS.

---

## Archivos entregados

| Archivo | Descripción |
|---------|-------------|
| `programas.php` | Página completa standalone con `<html>`, `<head>` y `<body>`. Usar si quieres una página independiente. |
| `programas-content-only.php` | **Recomendado**. Solo el contenido `<main>` + scripts. Ideal para `include` en tu layout existente donde ya tienes header/footer. |
| `programa-detalle.php` | Endpoint AJAX que retorna el HTML del modal de detalle. Necesario para ambas versiones. |
| `css/programas.css` | Estilos con tus design tokens, glassmorphism y animaciones. |
| `js/programas.js` | Lógica de filtros, búsqueda, modal y animaciones GSAP. |

---

## Requisitos previos (CDNs)

Tu layout debe incluir en el `<head>`:

```html
<!-- Fuente Manrope (obligatoria para los tokens) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- GSAP + plugins (ScrollTrigger, ScrollTo) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
```

---

## Opción A: Incluir en tu layout existente (recomendado)

1. Copia la carpeta `programas/` completa a tu servidor.
2. En tu template PHP donde quieres mostrar los programas:

```php
<?php
// En la página de tu sitio donde va el contenido
// entre tu header y tu footer:

// Opcional: ajusta rutas si es necesario
// $cssPath = './ruta/al/css/programas.css';
// $jsPath  = './ruta/al/js/programas.js';

include 'programas/programas-content-only.php';
?>
```

3. **Importante**: edita las rutas en `programas-content-only.php` si moviste los archivos:
   - `$cssPath` → ruta al CSS
   - `$jsPath` → ruta al JS
   - `$jsonPath` → ruta al `programas.json`

4. Asegúrate de que `programa-detalle.php` esté accesible vía AJAX en la misma carpeta.

---

## Opción B: Página standalone

1. Copia la carpeta `programas/` a tu servidor.
2. Accede a `programas.php` directamente.
3. Ajusta las rutas en `programas.php` si es necesario.

---

## Rutas del JSON

Los archivos PHP intentan encontrar `programas.json` automáticamente en estas ubicaciones (en orden):

1. `../upload/programas.json` (relativo a la carpeta `programas/`)
2. `programas.json` (en la misma carpeta)
3. `data/programas.json`

Copia tu `programas.json` a cualquiera de esas rutas.

---

## Personalización

### Cambiar la imagen de fondo
Como el diseño usa **fondo transparente**, puedes agregar tu imagen de fondo en el contenedor padre de tu layout:

```css
body {
    background-image: url('tu-imagen.jpg');
    background-size: cover;
    background-attachment: fixed;
}
```

### Ajustar colores
Todos los colores usan tus **design tokens** de `:root`. Edita `css/programas.css` al inicio del archivo para cambiar la paleta.

### Animaciones GSAP
El archivo `js/programas.js` contiene animaciones de:
- Entrada stagger de cards
- Parallax del hero
- Contadores animados de stats
- ScrollTrigger reveals
- Hover effects en cards

Puedes desactivar GSAP eliminando los `<script>` de GSAP del `<head>`; el JS tiene fallback automático.

---

## Funcionalidades incluidas

- [x] Grid responsive de programas con imagen, badge de tipo, descripción
- [x] Filtros por tipo (Maestría, Doctorado, Especialidad) con animación
- [x] Buscador en tiempo real
- [x] Modal de detalle vía AJAX con backdrop blur
- [x] Tabs: Presentación | Perfiles | Plan de Estudios | Contacto
- [x] Acordeón de ciclos/cursos
- [x] Stats animadas con contadores
- [x] Glassmorphism en todas las superficies
- [x] Badges de color según tipo
- [x] Botones de descarga de brochure y contacto
- [x] Decoración con partículas flotantes
- [x] Lazy loading de imágenes
- [x] Soporte para móviles (responsive)

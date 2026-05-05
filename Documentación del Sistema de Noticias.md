# **Sistema de Gestión de Noticias \- Posgrado UNAC**

Este documento detalla las especificaciones técnicas, la estructura de datos y las tareas pendientes para la implementación del portal de noticias con gestión basada en archivos JSON.

## **📌 Especificaciones Técnicas**

### **1\. Sistema de Roles**

* **superadmin**: Gestión total de usuarios y configuración del sistema.  
* **posgrado\_unac**: Gestión de contenido (crear, editar, eliminar noticias) y personalización de la subpágina de detalles.

### **2\. Manejo de Datos (JSON & Media)**

* **Base de Datos**: Se utilizará un archivo JSON ubicado en la carpeta /data/news.json.  
* **Almacenamiento de Imágenes**: Todas las imágenes se cargarán en la carpeta /public/uploads/images/.  
* **Referencia**: El archivo JSON no almacenará la imagen en base64, sino la **ruta relativa** (string) hacia la carpeta de uploads.

## **📂 Estructura de Carpetas Sugerida**

/root  
│  
├── /data  
│   └── news.json          \# Archivo principal de datos  
│  
├── /public  
│   └── /uploads  
│       └── /images        \# Repositorio de imágenes del servidor  
│  
├── /auth                  \# Lógica de Login y Roles  
└── /views  
    ├── /news              \# Listado general de noticias  
    └── /details           \# Subpágina dinámica de detalle

## **✅ Lista de Tareas (Tasks)**

### **Fase 1: Autenticación y Seguridad**

* \[ \] Implementar pantalla de Login.  
* \[ \] Configurar middleware de verificación de rangos (superadmin / posgrado\_unac).  
* \[ \] Crear sistema de sesión persistente.

### **Fase 2: Gestión de Contenido (CRUD via JSON)**

* \[ \] Crear script de lectura/escritura para /data/news.json.  
* \[ \] Implementar formulario de subida de noticias para posgrado\_unac:  
  * Campos: Título, Imagen, Texto Referencial, Tipo de Noticia.  
* \[ \] Configurar el procesador de imágenes (Guardar en /uploads/images/ y retornar ruta al JSON).  
* \[ \] Implementar lógica de "Eliminar" (quitar entrada del JSON y borrar archivo físico de imagen).

### **Fase 3: Visualización y Detalles**

* \[ \] Desarrollar la Landing Page de Noticias (Cards con datos del JSON).  
* \[ \] Desarrollar la **Subpágina de Detalles**:  
  * Integrar cuerpo de noticia extendido.  
  * Sección de Links y Recursos descargables.  
  * Algoritmo de Sugerencias (basado en el campo "Tipo de Noticia").  
  * Widget de "Otras noticias recientes".

## **🛠️ Estructura del Objeto JSON (news.json)**

Cada entrada en el archivo debe seguir este esquema:

{  
  "id": "uuid-generado",  
  "titulo": "Título de la Noticia",  
  "imagen\_ruta": "/public/uploads/images/foto1.jpg",  
  "texto\_referencial": "Breve descripción para la card...",  
  "tipo\_noticia": "Académica",  
  "fecha\_creacion": "2023-10-27",  
  "contenido\_detallado": {  
    "cuerpo": "Texto completo de la noticia...",  
    "links": \[  
      {"label": "Inscripciones aquí", "url": "\[https://unac.edu.pe\](https://unac.edu.pe)"}  
    \],  
    "recursos": \[  
      {"nombre": "Guía PDF", "url": "/public/uploads/docs/guia.pdf"}  
    \],  
    "sugerencias": \["id\_relacionado\_1", "id\_relacionado\_2"\]  
  }  
}

## **🚀 Instrucciones para Desarrolladores**

1. **Para agregar una noticia**: El sistema debe recibir el FormData, guardar la imagen físicamente, generar un ID único, y hacer un push al array contenido en news.json.  
2. **Para modificar**: Se debe buscar por ID, reemplazar los valores (incluyendo la actualización de la ruta de imagen si se cambia) y sobreescribir el archivo JSON.  
3. **Seguridad de Archivos**: Asegurarse de que la carpeta /data no sea accesible públicamente desde el navegador mediante configuraciones de servidor (.htaccess o similar).
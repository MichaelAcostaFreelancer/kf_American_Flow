# K.F American Flow

Sitio web de presentación para boutique de moda urbana americana, construido con PHP, Bootstrap 5 local y JavaScript puro.

## 📌 Estado del proyecto

- Versión final para entrega.
- Navegación fija y responsive en móviles.
- Sección de suscripciones mayoristas realista para presentación B2B.
- Formulario de contacto con validación y backend PHP.
- Mapa de ubicación integrado en la página `ubicacion.php`.

## 🎯 Características principales

### Secciones

- **Hero**: Banner principal con imagen, título y CTA.
- **Colección Destacada**: Tarjetas visuales con productos.
- **Mayoristas**: Planes mayoristas ficticios para pedidos grandes.
- **Nuestra esencia**: Mensaje de marca y valores.
- **Productos**: Página de catálogo visual con tarjetas.
- **Ubicación**: Mapa integrado y detalles de tienda.
- **Contacto**: Formulario con validación y envío a backend.

## 🧩 Tecnologías utilizadas

### Frontend

- HTML5 semántico
- Bootstrap 5 local (`bootstrap/css`, `bootstrap/js`)
- CSS personalizado en `css/style.css`
- JavaScript nativo en `js/app.js`
- Font Awesome CDN para iconos

### Backend

- PHP
- MySQL(contactos)
- `includes/config.php` para conexión y sanitización
- `includes/process_contact.php` para el envío del formulario

### Nota

No hay herramientas de build ni dependencias de Node.js en este proyecto.

## 📁 Estructura del proyecto

proyecto_final/
├── `bootstrap/`                ← Librería Bootstrap local
│   ├── `css/`
│   └── `js/`
├── `css/`
│   └── `style.css`             ← Estilos personalizados
├── `fotos/`                    ← Imágenes locales utilizadas
├── `includes/`                 ← Componentes y backend PHP
│   ├── `config.php`            ← Configuración de base de datos y validación
│   ├── `footer.php`            ← Pie de página global
│   ├── `header.php`            ← Cabecera fija y menú
│   └── `process_contact.php`   ← Envío y guardado del formulario
├── `js/`
│   └── `app.js`                ← Animaciones y lógica interactiva
├── `index.php`                 ← Página principal con maqueta y secciones
├── `productos.php`             ← Catálogo visual de productos
├── `nosotros.php`              ← Página de marca y valores
├── `ubicacion.php`             ← Página con ubicación y mapa
├── `contacto.php`              ← Formulario de contacto
└── `README.md`                 ← Documentación del proyecto

## 🖼️ Maqueta y estructura de la página

La maqueta del sitio está construida principalmente en `index.php` y se organiza así:

- **Navbar**: menú fijo con enlaces a las páginas principales.
- **Hero**: imagen destacada, mensaje de marca, botón de llamada a la acción.
- **Colección Destacada**: tres tarjetas de producto con imágenes.
- **Sección mayorista**: tres planes ficticios para ventas al por mayor.
- **Nuestra esencia**: propuesta de valor de la marca y sus atributos.
- **Galería secundaria**: presentación visual adicional con overlay.
- **CTA final**: invitación a visitar el catálogo.

## 🛠️ Funcionalidades clave

- **Validación de formulario** en frontend y backend.
- **Formulario AJAX** con envío a `includes/process_contact.php`.
- **Mapa embebido** en `ubicacion.php` con Google Maps.
- **Animaciones suaves** en la entrada de secciones y tarjetas.
- **Estructura modular** con cabecera y pie comunes en `includes/`.

## 📊 Base de datos

El proyecto espera una base de datos MySQL llamada `kf_american_flow` y una tabla `contactos`.

Campos esperados:

- `nombre`
- `email`
- `telefono`
- `asunto`
- `producto`
- `mensaje`
- `fecha_creacion`
- `estado`

> Nota: no se incluye script SQL en este repositorio.

## 🚀 Cómo ejecutar

1. Copia el proyecto en un servidor PHP local (XAMPP, WAMP, Laragon, etc.).
2. Activa MySQL.
3. Ajusta las credenciales en `includes/config.php`.
4. Abre `index.php` en el navegador.

## 📌 Observaciones

- El proyecto es una maqueta de presentación, no una tienda con pago real.
- El contacto principal se maneja por teléfono: `809 395 5980`.
- El email se utiliza solo dentro del formulario de contacto.

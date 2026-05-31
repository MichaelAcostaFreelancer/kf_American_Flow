# K.F American Flow

Sitio web de presentación para boutique de moda urbana americana.

Versión final del proyecto: **1.0.0-final**

## 📌 Estado del proyecto

- Versión final para entrega.
- Navegación fija y responsive para escritorio y móvil.
- Sección mayorista ficticia añadida para presentaciones B2B.
- Formulario de contacto con validación y backend PHP.
- Mapa integrado en `ubicacion.php`.
- No hay `package.json`, `node_modules` ni herramientas de build.

## 🎯 Características principales

### Secciones

- **Hero**: Banner principal con título, texto y botón CTA.
- **Colección Destacada**: Tres tarjetas de producto en la página de inicio.
- **Mayoristas**: Sección de planes ficticios para pedidos grandes.
- **Nuestra esencia**: Bloque de valores y mensaje de marca.
- **Productos**: Catálogo visual de productos.
- **Ubicación**: Mapa de Google Maps embebido.
- **Contacto**: Formulario con campos obligatorios y envío al backend.

### Tecnologías

#### Frontend

- HTML5 semántico
- Bootstrap 5 local (`bootstrap/css`, `bootstrap/js`)
- CSS personalizado en `css/style.css`
- JavaScript nativo en `js/app.js`
- Font Awesome CDN para iconos

#### Backend

- PHP
- MySQL / MariaDB para almacenamiento de contactos
- `includes/config.php` para conexión y sanitización
- `includes/process_contact.php` para procesar envíos

## 📁 Estructura del proyecto

proyecto_final/
├── `bootstrap/`                ← Librería Bootstrap local
│   ├── `css/`
│   └── `js/`
├── `css/`
│   └── `style.css`             ← Estilos personalizados
├── `fotos/`                    ← Imágenes locales del sitio
├── `includes/`                 ← Componentes y backend PHP
│   ├── `config.php`            ← Configuración de base de datos y validación
│   ├── `footer.php`            ← Pie de página global
│   ├── `header.php`            ← Cabecera fija y navbar
│   └── `process_contact.php`   ← Envío y guardado de formulario
├── `js/`
│   └── `app.js`                ← Animaciones, validación y lógica interactiva
├── `index.php`                 ← Página principal con maqueta y secciones
├── `productos.php`             ← Catálogo visual de productos
├── `nosotros.php`              ← Página de marca y valores
├── `ubicacion.php`             ← Página con mapa y dirección
├── `contacto.php`              ← Formulario de contacto
└── `README.md`                 ← Documentación del proyecto

## 🖼️ Maqueta de la página

La maqueta del sitio se organiza principalmente en `index.php`:

- **Navbar fijo** con enlaces a secciones principales.
- **Hero** con imagen de portada, título y botón de llamada a la acción.
- **Colección destacada** con tarjetas de producto sin precios.
- **Sección mayorista** con tres planes de venta al por mayor.
- **Bloque de marca** con valores y mensaje de estilo.
- **Galería secundaria** con imagen de apoyo y overlay.
- **CTA final** para invitar a explorar el catálogo.

## 🛠️ Funcionalidades JavaScript

- **Navegación responsive**: menú colapsable en móvil.
- **Scroll animations**: entradas suaves para secciones con `IntersectionObserver`.
- **Validación de formulario**: validación en frontend antes del envío.
- **Envío AJAX**: formulario de `contacto.php` se envía a `includes/process_contact.php`.
- **Animaciones de tarjetas**: hover y transiciones en tarjetas de producto.

## 📊 Base de datos

El proyecto usa una base de datos MySQL llamada `kf_american_flow` y una tabla `contactos`.

Campos esperados:

- `nombre`
- `email`
- `telefono`
- `asunto`
- `producto`
- `mensaje`
- `fecha_creacion`
- `estado`

> Nota: el script SQL no está incluido en el repositorio.

## 🚀 Cómo ejecutar

1. Copia el proyecto en un servidor PHP local (XAMPP, WAMP, Laragon, etc.).
2. Activa Apache y MySQL.
3. Ajusta las credenciales en `includes/config.php`.
4. Abre `index.php` en el navegador.

## 📌 Observaciones

- Este proyecto es una maqueta de presentación, no un ecommerce real.
- El contacto principal se maneja por teléfono: `809 395 5980`.
- El email se usa solo dentro del formulario de contacto.
- No hay scripts de build, dependencias npm ni entornos de compilación.

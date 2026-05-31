# K.F AMERICAN FLOW

Versión final del proyecto: **1.0.0-final**

Sitio web responsivo de presentación para boutique de moda urbana americana, construido con PHP, Bootstrap 5 local y JavaScript puro.

## 📌 Estado del proyecto

- Versión final para entrega.
- Navegación fija y responsive en escritorio y móvil.
- Sección mayorista ficticia para ofertas B2B.
- Formulario de contacto con validación y backend PHP.
- Mapa integrado en `ubicacion.php`.
- No hay `package.json`, `node_modules` ni herramientas de build.

## 🎯 Características principales

### Secciones

- **Hero**: Banner de apertura con imagen destacada, texto y botón CTA.
- **Colección Destacada**: Tarjetas visuales de producto en la página principal.
- **Mayoristas**: Sección de planes ficticios para ventas al por mayor.
- **Nuestra esencia**: Mensaje de marca y valores diferenciales.
- **Productos**: Catálogo visual con tarjetas responsivas.
- **Ubicación**: Página de mapa embebido con datos de contacto.
- **Contacto**: Formulario con validación y envío a backend PHP.

### Tecnologías

#### Frontend

- HTML5 semántico
- Bootstrap 5 local
- CSS personalizado en `css/style.css`
- JavaScript nativo en `js/app.js`
- Font Awesome CDN para iconos

#### Backend

- PHP
- MySQL / MariaDB para almacenamiento de contactos
- `includes/config.php` para conexión y sanitización
- `includes/process_contact.php` para procesar envíos

## 📁 Estructura del proyecto

```
proyecto_final/
├── bootstrap/                  # Librería Bootstrap local
│   ├── css/
│   └── js/
├── css/
│   └── style.css               # Estilos personalizados
├── fotos/                      # Imágenes locales usadas en el sitio
├── includes/                   # Componentes y backend PHP
│   ├── config.php              # Conexión y validación
│   ├── footer.php              # Pie de página compartido
│   ├── header.php              # Cabecera fija y navegador
│   └── process_contact.php     # Envío y guardado de formulario
├── js/
│   └── app.js                  # Animaciones y lógica interactiva
├── index.php                   # Página principal con maqueta
├── productos.php               # Catálogo visual de productos
├── nosotros.php                # Página de marca y valores
├── ubicacion.php               # Página con ubicación y mapa
├── contacto.php                # Formulario de contacto
└── README.md                   # Documentación del proyecto
```

## 🖼️ Maqueta de la página

La maqueta se organiza de esta forma:

- **Navbar fijo** con enlaces a las páginas clave.
- **Hero** con imagen de apertura, título y botón.
- **Colección destacada** con tarjetas de producto.
- **Sección mayorista** para presentar planes B2B.
- **Bloque de marca** con valores, estilo y distintivos.
- **Galería secundaria** con imagen de apoyo y overlay.
- **CTA final** invitando a visitar el catálogo.

## 🛠️ Funcionalidades JavaScript

- **Navegación responsive**: menú colapsable en móvil.
- **Animaciones de entrada**: efectos suaves en secciones.
- **Validación de formulario**: comprobaciones antes del envío.
- **Envío al backend**: el formulario envía los datos a `includes/process_contact.php`.
- **Hover en tarjetas**: transiciones y elevación visual.

## 🎨 Paleta de colores

- **Negro**: `#000000`
- **Blanco**: `#FFFFFF`
- **Dorado**: `#c0a080`
- **Gris oscuro**: `#1a1a1a`
- **Gris claro**: `#f5f5f5`

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

> Nota: no se incluye script SQL en el repositorio.

## 🚀 Cómo ejecutar

1. Copia el proyecto en un servidor PHP local (XAMPP, WAMP, Laragon, etc.).
2. Activa Apache y MySQL.
3. Ajusta las credenciales en `includes/config.php`.
4. Abre `index.php` en el navegador.

## 📌 Observaciones

- El proyecto es una maqueta de presentación, no un ecommerce completo.
- El contacto principal se maneja por teléfono: `809 395 5980`.
- El email se usa únicamente en el formulario de contacto.
- No hay `package.json`, `node_modules` ni entorno de build.

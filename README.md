# K.F American Flow

Documentación técnica del proyecto de maqueta web para una boutique de moda urbana americana.

## Estructura de Archivos

proyecto_final/
├── `bootstrap/`                ← Librería Bootstrap local (CSS y JS)
│   ├── `css/`
│   └── `js/`
├── `css/`
│   └── `style.css`             ← Estilos personalizados del sitio
├── `fotos/`                    ← Imágenes locales utilizadas en la maqueta
├── `includes/`                 ← Componentes reutilizables y backend PHP
│   ├── `config.php`            ← Configuración de base de datos y funciones de validación
│   ├── `footer.php`            ← Pie de página global
│   ├── `header.php`            ← Cabecera fija y menú de navegación
│   └── `process_contact.php`   ← Lógica de envío y guardado del formulario
├── `js/`
│   └── `app.js`                ← Animaciones, validación y comportamiento interactivo
├── `index.php`                 ← Página principal con maqueta, productos destacados y sección mayorista
├── `productos.php`             ← Catálogo visual de productos
├── `nosotros.php`              ← Página de marca y valores
├── `ubicacion.php`             ← Página con mapa y dirección
├── `contacto.php`              ← Formulario de contacto y teléfono
└── `README.md`                 ← Documentación del proyecto

## Maqueta de la Página

La página está organizada en secciones visuales:

- `index.php`
  - Hero con imagen destacada, título y botón de acción.
  - Sección de "Colección Destacada" con tres tarjetas de producto.
  - Sección de "Suscripciones al por mayor" con tres planes mayoristas.
  - Bloque de marca "Nuestra esencia" con valores y estilo.
  - Llamado a la acción final para explorar el catálogo.

- `productos.php`
  - Galería de productos con tarjetas responsivas.
  - Filtro visual por categoría.
  - Diseño enfocado en mostrar imágenes y colección sin precios.

- `nosotros.php`
  - Contenido de marca con historia y valores.
  - Diseño de presentación simple y elegante.

- `ubicacion.php`
  - Mapa de Google embebido en contenedor responsivo.
  - Información de dirección y teléfono en panel lateral.

- `contacto.php`
  - Formulario con campos de nombre, teléfono, email, asunto y mensaje.
  - Validación de datos en frontend y backend.

## Tecnologías Utilizadas

- PHP
- Bootstrap 5 (local en `bootstrap/`)
- JavaScript puro
- MySQL / MariaDB (para almacenamiento de contactos)
- Font Awesome CDN (iconos)

## Backend y Validación

- `includes/config.php` maneja la conexión a la base de datos y define funciones de sanitización y validación.
- `includes/process_contact.php` procesa el formulario de contacto y guarda el mensaje en la base de datos.

Funciones principales:

- `sanitizeInput()` — Sanitiza la entrada del usuario.
- `isValidEmail()` — Valida formato de email.
- `isValidPhone()` — Valida números de teléfono básicos.

## Base de Datos

El proyecto espera una base de datos `kf_american_flow` con una tabla `contactos`.

Campos esperados:

- `nombre`
- `email`
- `telefono`
- `asunto`
- `producto`
- `mensaje`
- `fecha_creacion`
- `estado`

## Notas de Diseño

- El header está fijado y el body incluye espacio superior para evitar solapamiento.
- El mapa de ubicación se presenta en un contenedor con bordes redondeados y responsive.
- Se implementan animaciones suaves en la entrada de secciones.
- La sección mayorista se muestra con propuestas realistas de volumen y soporte.

## Revisión de Contenido Real

El repositorio contiene exclusivamente los archivos y carpetas listados en la "Estructura de Archivos". No hay scripts de instalación adicionales ni dependencias externas aparte de Bootstrap local y Font Awesome CDN.

## Cómo Trabajar con el Proyecto

- Ejecuta el proyecto en un servidor PHP local.
- Ajusta las credenciales de MySQL en `includes/config.php` si es necesario.
- Abre `index.php` para revisar la maqueta.
- `contacto.php` y `includes/process_contact.php` manejan la comunicación de formularios.

## Contacto principal

- Teléfono: `809 395 5980`
- El email no se muestra públicamente en el menú; se utiliza internamente en el formulario.

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.F American Flow - Moda Urbana Americana</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero-section overflow-hidden">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row align-items-center min-vh-100 g-0">
                <div class="col-lg-6 d-flex align-items-center px-4 px-lg-5 py-5">
                    <div class="hero-content">
                        <p class="eyebrow text-gold fw-bold mb-3 fade-in-up">Moda Urbana | Estilo Americano</p>
                        <h1 class="display-3 fw-bold mb-4 fade-in-up">Viste con actitud. Vive el estilo de K.F American Flow.</h1>
                        <p class="lead text-muted mb-4 fade-in-up animation-delay-1">Una selección curada de prendas urbanas, bolsos premium y accesorios con alma americana.</p>
                        <a href="productos.php" class="btn btn-dark btn-lg px-5 fw-bold fade-in-up animation-delay-2">Ver Colección</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                    <div class="hero-image-container hero-large fade-in-right animation-delay-3">
                        <img src="fotos/productos.jpeg" alt="Moda Americana" class="img-fluid hero-image zoom-in" onerror="this.src='https://via.placeholder.com/600x700/000000/ffffff?text=K.F+AMERICAN+FLOW'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="text-center mb-5">
                <p class="eyebrow text-gold fw-bold mb-2 fade-in-up">Colección Destacada</p>
                <h2 class="display-5 fw-bold mb-3 fade-in-up">Las prendas que definen la temporada</h2>
                <p class="lead text-muted fade-in-up animation-delay-1">Descubre la selección de productos basados en las imágenes reales de la colección.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 fade-in-up animation-delay-2">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="fotos/productos5.jpeg" alt="Colección 01" class="img-fluid product-image">
                        </div>
                        <div class="product-info p-4">
                            <h5 class="fw-bold mb-2">Colección 01</h5>
                            <span class="text-gold fw-bold">K.F American Flow</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up animation-delay-3">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="fotos/productos6.jpeg" alt="Colección 02" class="img-fluid product-image">
                        </div>
                        <div class="product-info p-4">
                            <h5 class="fw-bold mb-2">Colección 02</h5>
                            <span class="text-gold fw-bold">K.F American Flow</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up animation-delay-4">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="fotos/productos7.jpeg" alt="Colección 03" class="img-fluid product-image">
                        </div>
                        <div class="product-info p-4">
                            <h5 class="fw-bold mb-2">Colección 03</h5>
                            <span class="text-gold fw-bold">K.F American Flow</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white subscription-section">
        <div class="container-fluid px-4 px-lg-5">
            <div class="text-center mb-5">
                <p class="eyebrow text-gold fw-bold mb-2 fade-in-up">Mayorista</p>
                <h2 class="display-5 fw-bold mb-3 fade-in-up">Suscripciones al por mayor</h2>
                <p class="lead text-muted fade-in-up animation-delay-1">Planes mayoristas pensados para minoristas y distribuidores que buscan colección, volumen y entrega prioritaria.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 fade-in-up animation-delay-2">
                    <div class="subscription-card p-4 rounded-4 shadow-sm h-100">
                        <span class="subscription-label bg-dark text-white rounded-pill px-3 py-2 mb-3 d-inline-block">Básico</span>
                        <h5 class="fw-bold mb-3">Volumen inicial</h5>
                        <p class="text-muted mb-4">Pedido mínimo desde 20 unidades con surtido selecto de la temporada y condiciones preferenciales.</p>
                        <ul class="list-unstyled text-muted mb-4">
                            <li>Selección enfocada en best sellers</li>
                            <li>Precios por volumen</li>
                            <li>Atención prioritaria al distribuidor</li>
                        </ul>
                        <a href="contacto.php" class="btn btn-outline-dark btn-sm">Contactar mayorista</a>
                    </div>
                </div>
                <div class="col-lg-4 fade-in-up animation-delay-3">
                    <div class="subscription-card p-4 rounded-4 shadow-sm h-100">
                        <span class="subscription-label bg-gold text-dark rounded-pill px-3 py-2 mb-3 d-inline-block">Plus</span>
                        <h5 class="fw-bold mb-3">Surtido ampliado</h5>
                        <p class="text-muted mb-4">Mayor variedad de estilos y acceso a envíos programados para puntos de venta y distribuidores medianos.</p>
                        <ul class="list-unstyled text-muted mb-4">
                            <li>Líneas adicionales del catálogo</li>
                            <li>Gestión de envíos preferentes</li>
                            <li>Soporte para exhibición y venta</li>
                        </ul>
                        <a href="contacto.php" class="btn btn-outline-dark btn-sm">Contactar mayorista</a>
                    </div>
                </div>
                <div class="col-lg-4 fade-in-up animation-delay-4">
                    <div class="subscription-card p-4 rounded-4 shadow-sm h-100">
                        <span class="subscription-label bg-black text-white rounded-pill px-3 py-2 mb-3 d-inline-block">Exclusivo</span>
                        <h5 class="fw-bold mb-3">Programa completo</h5>
                        <p class="text-muted mb-4">Cobertura total de línea con inventario prioritario y coordinación de lanzamientos para clientes clave.</p>
                        <ul class="list-unstyled text-muted mb-4">
                            <li>Inventario completo disponible</li>
                            <li>Lanzamientos y reposiciones prioritarias</li>
                            <li>Consultoría de producto para exhibición</li>
                        </ul>
                        <a href="contacto.php" class="btn btn-outline-dark btn-sm">Contactar mayorista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row g-4">
                <div class="col-lg-6 fade-in-up animation-delay-1">
                    <div class="about-card p-5 rounded-4 shadow-sm bg-black text-white">
                        <span class="eyebrow text-gold fw-bold">Nuestra esencia</span>
                        <h2 class="fw-bold mb-4">Moda que habla por ti</h2>
                        <p class="mb-4">En K.F American Flow creamos piezas cuidadosamente seleccionadas para quienes buscan una estética urbana de clase mundial, sin perder frescura ni personalidad.</p>
                        <div class="d-flex gap-3 flex-wrap">
                            <span class="badge rounded-pill bg-gold text-dark py-2 px-3">Estilo</span>
                            <span class="badge rounded-pill bg-white text-dark py-2 px-3">Calidad</span>
                            <span class="badge rounded-pill bg-gold text-dark py-2 px-3">Actitud</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-in-left animation-delay-2">
                    <div class="gallery-item overflow-hidden rounded-4">
                        <img src="fotos/productos4.jpeg" alt="Colección Premium" class="img-fluid w-100 gallery-image">
                        <div class="gallery-overlay">
                            <span>Look urbano auténtico</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white text-center">
        <div class="container-fluid px-4 px-lg-5">
            <p class="eyebrow text-gold fw-bold mb-3 fade-in-up">Lo nuevo ya está aquí</p>
            <h2 class="display-5 fw-bold mb-4 fade-in-up">Visita nuestras colecciones y descubre tu próximo outfit</h2>
            <a href="productos.php" class="btn btn-outline-light btn-lg px-5 fw-bold fade-in-up animation-delay-1">Explorar Productos</a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>

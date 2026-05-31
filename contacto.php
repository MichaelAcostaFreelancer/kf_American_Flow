<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - K.F American Flow</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="page-header bg-dark text-white py-5 text-center">
        <div class="container-fluid px-4 px-lg-5">
            <p class="eyebrow text-gold fw-bold mb-3">Comunícate con nosotros</p>
            <h1 class="display-4 fw-bold mb-2">Contacto</h1>
            <p class="lead text-muted">Estamos disponibles por teléfono para atender tus preguntas; también deja tu email en el formulario para que podamos responderte.</p>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-5 fade-in-up">
                    <div class="contact-method-card p-5 bg-white rounded-4 shadow-sm h-100">
                        <div class="mb-4">
                            <h5 class="fw-bold">Llámanos</h5>
                            <p class="text-muted mb-3">Nuestro número de contacto es el siguiente:</p>
                            <h3 class="text-dark">809 395 5980</h3>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-3">Atención</h6>
                            <p class="text-muted mb-0">Lunes a Sábado: 9AM - 6PM</p>
                            <p class="text-muted">Domingo: cerrado.</p>
                            <p class="text-muted mt-3">No mostramos correo público; el formulario incluye email para que podamos responderte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 fade-in-up animation-delay-1">
                    <div class="contact-form-card p-5 bg-white rounded-4 shadow-sm">
                        <h4 class="fw-bold mb-4">Mensaje rápido</h4>
                        <form class="needs-validation" novalidate onsubmit="submitContactForm(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required minlength="3">
                                    <div class="invalid-feedback">Ingresa tu nombre.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" id="telefono" name="telefono" class="form-control" required minlength="7">
                                    <div class="invalid-feedback">Ingresa tu teléfono.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <div class="invalid-feedback">Ingresa un email válido.</div>
                                </div>
                                <div class="col-12">
                                    <label for="asunto" class="form-label">Asunto</label>
                                    <select id="asunto" name="asunto" class="form-select" required>
                                        <option value="">Selecciona un asunto</option>
                                        <option value="Información general">Información general</option>
                                        <option value="Consulta de producto">Consulta de producto</option>
                                        <option value="Sugerencias">Sugerencias</option>
                                        <option value="Suscripción">Suscripción</option>
                                    </select>
                                    <div class="invalid-feedback">Selecciona un asunto.</div>
                                </div>
                                <div class="col-12">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required minlength="10"></textarea>
                                    <div class="invalid-feedback">Escribe tu mensaje.</div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark btn-lg w-100">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>

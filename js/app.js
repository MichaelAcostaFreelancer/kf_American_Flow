/* ===========================================
   K.F AMERICAN FLOW - JAVASCRIPT PRINCIPAL
   =========================================== */

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initScrollToTop();
    initNavbarMenu();
    initScrollAnimations();
    initProductFilter();
    initFormValidation();
});

// ============================================
// SCROLL TO TOP BUTTON
// ============================================
function initScrollToTop() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    if (!scrollToTopBtn) return;

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('active');
        } else {
            scrollToTopBtn.classList.remove('active');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// ============================================
// NAVBAR MENU TOGGLE
// ============================================
function initNavbarMenu() {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (!navbarCollapse) return;

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navbarCollapse.classList.remove('show');
        });
    });
}

// ============================================
// SCROLL ANIMATIONS
// ============================================
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-up').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(element);
    });
}

// ============================================
// PRODUCT FILTER
// ============================================
function initProductFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    if (filterButtons.length === 0 || productItems.length === 0) return;

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Actualizar botón activo
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filtrar productos
            productItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

// ============================================
// FORM VALIDATION
// ============================================
function initFormValidation() {
    const forms = document.querySelectorAll('.needs-validation');
    
    if (forms.length === 0) return;

    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        }, false);
    });
}

// ============================================
// SUBMIT CONTACT FORM
// ============================================
function submitContactForm(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);

    const nombre = formData.get('nombre');
    const telefono = formData.get('telefono');
    const email = formData.get('email');
    const mensaje = formData.get('mensaje');

    // Validaciones básicas
    if (nombre.length < 3) {
        alert('El nombre debe tener al menos 3 caracteres');
        return;
    }

    if (telefono.length < 7) {
        alert('Por favor ingresa un teléfono válido');
        return;
    }

    if (!isValidEmail(email)) {
        alert('Por favor ingresa un email válido');
        return;
    }

    if (mensaje.length < 10) {
        alert('El mensaje debe tener al menos 10 caracteres');
        return;
    }

    // Enviar formulario
    fetch('includes/process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('¡Mensaje enviado correctamente!');
            form.reset();
            form.classList.remove('was-validated');
        } else {
            alert('Error al enviar: ' + (data.message || 'Error desconocido'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al enviar el mensaje');
    });
}

// ============================================
// VALIDAR EMAIL
// ============================================
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// ============================================
// CARGAR UBICACIÓN DEL STORAGE
// ============================================
function loadStoredLocation() {
    const ubicacion = localStorage.getItem('kf_ubicacion');
    if (ubicacion) {
        const elemento = document.querySelector('.location-address');
        if (elemento) elemento.textContent = ubicacion;
    }
}

document.addEventListener('DOMContentLoaded', loadStoredLocation);

// ============================================
// UPDATE LOCATION
// ============================================
function updateLocation() {
    const ubicacion = document.getElementById('ubicacion')?.value;
    const horario = document.getElementById('horario')?.value;

    if (ubicacion && horario) {
        localStorage.setItem('kf_ubicacion', ubicacion);
        localStorage.setItem('kf_horario', horario);
        
        const modal = bootstrap.Modal.getInstance(document.getElementById('editLocationModal'));
        if (modal) modal.hide();
        
        window.location.reload();
    }
}

// ============================================
// AGREGAR PRODUCTO AL FORMULARIO VÍA URL
// ============================================
window.addEventListener('load', function() {
    const params = new URLSearchParams(window.location.search);
    const producto = params.get('producto');
    
    if (producto) {
        const productInput = document.getElementById('producto');
        if (productInput) {
            productInput.value = producto;
        }
    }
});

// ============================================
// NAVBAR BACKGROUND ON SCROLL
// ============================================
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        if (window.pageYOffset > 50) {
            navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
        } else {
            navbar.style.backgroundColor = 'rgba(0, 0, 0, 1)';
        }
    }
});

// ============================================
// SMOOTH SCROLL PARA ANCHOR LINKS
// ============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            const target = document.querySelector(href);
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ============================================
// LOG WELCOME MESSAGE
// ============================================
console.log('%c🛍️  K.F AMERICAN FLOW', 'font-size: 18px; font-weight: bold; color: #c0a080;');
console.log('%cModa urbana americana | Estilo y Elegancia', 'font-size: 12px; color: #666;');

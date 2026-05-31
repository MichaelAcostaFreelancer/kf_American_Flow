<?php
/**
 * Configuración de Base de Datos
 * K.F American Flow
 */

// Credenciales de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'kf_american_flow');

// Crear conexión
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    error_log("Error de conexión: " . $conn->connect_error);
    die(json_encode([
        'success' => false,
        'message' => 'Error en la conexión a la base de datos'
    ]));
}
$conn->set_charset('utf8mb4');

// Función para sanitizar entrada
function sanitizeInput($input) {
    global $conn;
    return $conn->real_escape_string(htmlspecialchars(strip_tags(trim($input))));
}

// Función para validar email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Función para validar teléfono
function isValidPhone($phone) {
    return preg_match('/^[\d\s\-\+\(\)]{7,}$/', $phone);
}
?>

<?php
/**
 * Procesar Formulario de Contacto
 * K.F American Flow
 */

header('Content-Type: application/json');

// Incluir configuración de base de datos
require_once 'config.php';

// Verificar método POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode([
        'success' => false,
        'message' => 'Método no permitido'
    ]));
}

// Obtener datos del formulario
$name = isset($_POST['nombre']) ? sanitizeInput($_POST['nombre']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$phone = isset($_POST['telefono']) ? sanitizeInput($_POST['telefono']) : '';
$subject = isset($_POST['asunto']) ? sanitizeInput($_POST['asunto']) : '';
$producto = isset($_POST['producto']) ? sanitizeInput($_POST['producto']) : '';
$message = isset($_POST['mensaje']) ? sanitizeInput($_POST['mensaje']) : '';

// Validación de campos requeridos
$errors = [];

if (empty($name) || strlen($name) < 3) {
    $errors[] = 'El nombre debe tener al menos 3 caracteres';
}

if (empty($email) || !isValidEmail($email)) {
    $errors[] = 'Email inválido';
}

if (empty($phone) || !isValidPhone($phone)) {
    $errors[] = 'Teléfono inválido';
}

if (empty($subject)) {
    $errors[] = 'Debe seleccionar un asunto';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'El mensaje debe tener al menos 10 caracteres';
}

// Si hay errores, retornar respuesta de error
if (!empty($errors)) {
    http_response_code(400);
    die(json_encode([
        'success' => false,
        'message' => implode(', ', $errors)
    ]));
}

// Preparar query para insertar en la base de datos
$query = "INSERT INTO contactos (nombre, email, telefono, asunto, producto, mensaje, fecha_creacion, estado) 
          VALUES (?, ?, ?, ?, ?, ?, NOW(), 'nuevo')";

try {
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        throw new Exception("Error en la preparación: " . $conn->error);
    }
    
    // Vincular parámetros
    $stmt->bind_param(
        'ssssss',
        $name,
        $email,
        $phone,
        $subject,
        $producto,
        $message
    );
    
    // Ejecutar query
    if (!$stmt->execute()) {
        throw new Exception("Error al ejecutar: " . $stmt->error);
    }
    
    $contactId = $conn->insert_id;
    
    // Registrar en log
    error_log("Nuevo contacto creado - ID: $contactId - Email: $email");
    
    // Enviar respuesta exitosa
    http_response_code(200);
    die(json_encode([
        'success' => true,
        'message' => 'Mensaje enviado correctamente. Nos pondremos en contacto pronto.',
        'contact_id' => $contactId
    ]));
    
} catch (Exception $e) {
    error_log("Error al procesar contacto: " . $e->getMessage());
    http_response_code(500);
    die(json_encode([
        'success' => false,
        'message' => 'Error al procesar tu solicitud. Por favor, intenta de nuevo.'
    ]));
}
?>

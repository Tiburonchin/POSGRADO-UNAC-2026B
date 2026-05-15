<?php
/**
 * inscripcion/backend/handler.php
 * Manejador local de inscripciones (Autónomo)
 */

ob_start();
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(E_ALL);

try {
    // Cargar el servicio local
    require_once __DIR__ . '/EnrollmentService.php';
    
    // Capturar el JSON enviado desde el frontend
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data) {
        throw new Exception('No se recibieron datos válidos.');
    }

    $service = new EnrollmentService();

    // Limpiar y validar fecha de nacimiento (YYYY-MM-DD)
    $fechaNac = !empty($data['fecha_nac']) ? trim($data['fecha_nac']) : null;
    
    // Mapear datos
    $mappedData = [
        'email'             => trim($data['correo'] ?? ''),
        'dni'               => trim($data['dni'] ?? ''),
        'nombre'            => trim($data['nombres'] ?? ''),
        'apellidos'         => trim($data['apellidos'] ?? ''),
        'fechaNacimiento'   => $fechaNac,
        'celular'           => trim($data['celular'] ?? ''),
        'idPrograma'        => !empty($data['id_programa']) ? (int)$data['id_programa'] : null,
        'programa'          => trim($data['programa'] ?? 'Programa'),
        'facultad'          => trim($data['facultad'] ?? 'Facultad'),
        'medioConocimiento' => $data['medio_captacion'] ?? 'Directo'
    ];

    // Validaciones preventivas
    if (empty($mappedData['dni'])) throw new Exception('El DNI es obligatorio.');
    if (empty($mappedData['idPrograma'])) throw new Exception('Debe seleccionar un programa válido.');

    // Ejecutar el guardado
    $result = $service->saveInscription($mappedData);

    if (!$result['success']) {
        throw new Exception($result['message'] ?? 'Error desconocido al procesar la inscripción.');
    }

    ob_clean();
    echo json_encode([
        'success' => true,
        'message' => '¡Inscripción completada con éxito!'
    ]);

} catch (Exception $e) {
    if (ob_get_length()) ob_clean();
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>

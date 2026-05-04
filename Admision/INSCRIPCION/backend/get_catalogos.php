<?php
require_once 'Supabase.php';

// Desactivar visualización de errores
ini_set('display_errors', 0);
error_reporting(E_ALL);

header('Content-Type: application/json');

try {
    // Inspirado exactamente en getFormConfig() de SupabaseService.php
    // Usamos la sintaxis alias:columna de PostgREST
    $unidades = supabaseRequest('GET', '/rest/v1/unidades?select=id:id_unidad,nombre:nombre_unidad,director:director_unidad');
    $tipos = supabaseRequest('GET', '/rest/v1/tipos_programas?select=id:id_tipoprograma,nombre:nombre_tipoprograma');
    $programas = supabaseRequest('GET', '/rest/v1/programas?select=id:id_programa,id_unidad:id_unidad,id_tipo:id_tipoprograma,nombre:nombre_programa');

    // Verificar si hubo errores
    if (isset($unidades['error'])) throw new Exception($unidades['error']);
    if (isset($tipos['error'])) throw new Exception($tipos['error']);
    if (isset($programas['error'])) throw new Exception($programas['error']);

    echo json_encode([
        'success' => true,
        'unidades' => $unidades,
        'tipos' => $tipos,
        'programas' => $programas
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

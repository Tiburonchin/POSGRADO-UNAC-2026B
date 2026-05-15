<?php
require_once 'Supabase.php';

// Desactivar visualización de errores para evitar romper el JSON
ini_set('display_errors', 0);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

try {
    // 1. Intentar obtener datos de Supabase
    $unidades = supabaseRequest('GET', '/rest/v1/unidades?select=id:id_unidad,nombre:nombre_unidad,director:director_unidad');
    $tipos = supabaseRequest('GET', '/rest/v1/tipos_programas?select=id:id_tipoprograma,nombre:nombre_tipoprograma');
    $programas = supabaseRequest('GET', '/rest/v1/programas?select=id:id_programa,id_unidad:id_unidad,id_tipo:id_tipoprograma,nombre:nombre_programa');

    // Si Supabase falló o no devolvió datos, activamos el fallback
    if (isset($unidades['error']) || empty($unidades) || empty($programas)) {
        throw new Exception("Supabase unavailable or empty. Switching to fallback.");
    }

    echo json_encode([
        'success' => true,
        'source' => 'database',
        'unidades' => $unidades,
        'tipos' => $tipos,
        'programas' => $programas
    ]);

} catch (Exception $e) {
    // FALLBACK: Cargar desde el archivo JSON local
    $jsonPath = dirname(dirname(__DIR__)) . '/data/programas.json';
    
    if (file_exists($jsonPath)) {
        $jsonData = json_decode(file_get_contents($jsonPath), true);
        
        $fallbackUnidades = [];
        $fallbackProgramas = [];
        $fallbackTipos = [
            ['id' => 1, 'nombre' => 'Maestría'],
            ['id' => 2, 'nombre' => 'Doctorado'],
            ['id' => 3, 'nombre' => 'Segunda Especialidad']
        ];

        if (isset($jsonData['facultades'])) {
            foreach ($jsonData['facultades'] as $siglas => $f) {
                $fallbackUnidades[] = [
                    'id' => $siglas,
                    'nombre' => $f['nombre']
                ];
                
                if (isset($f['programas'])) {
                    foreach ($f['programas'] as $p) {
                        // Determinar ID de tipo
                        $tipoId = 1; // Default Maestría
                        if (stripos($p['tipo'], 'doctorado') !== false) $tipoId = 2;
                        if (stripos($p['tipo'], 'especialidad') !== false) $tipoId = 3;

                        $fallbackProgramas[] = [
                            'id' => $p['id'],
                            'id_unidad' => $siglas,
                            'id_tipo' => $tipoId,
                            'nombre' => $p['nombre']
                        ];
                    }
                }
            }
        }

        echo json_encode([
            'success' => true,
            'source' => 'json_fallback',
            'unidades' => $fallbackUnidades,
            'tipos' => $fallbackTipos,
            'programas' => $fallbackProgramas
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => "Backend unavailable and fallback JSON not found at $jsonPath"
        ]);
    }
}


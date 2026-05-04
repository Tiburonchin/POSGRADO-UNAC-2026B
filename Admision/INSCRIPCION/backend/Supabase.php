<?php
/**
 * inscripcion/backend/Supabase.php
 * Conexión universal usando file_get_contents (Sin cURL)
 */

ini_set('display_errors', 0);
error_reporting(E_ALL);

function supabaseRequest($method, $path, $data = null) {
    $envPath = dirname(dirname(__DIR__)) . '/.env';
    
    if (!file_exists($envPath)) {
        return ['error' => 'No se encontró el archivo .env'];
    }

    $env = [];
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        $parts = explode('=', $line, 2);
        if (count($parts) == 2) {
            $env[trim($parts[0])] = trim($parts[1]);
        }
    }
    
    $url = $env['SUPABASE_URL'] ?? null;
    $key = $env['SUPABASE_KEY'] ?? null;

    if (!$url || !$key) {
        return ['error' => 'Credenciales no encontradas en el .env'];
    }

    $fullUrl = rtrim($url, '/') . $path;
    
    // Configuración del contexto para file_get_contents (Alternativa a cURL)
    $options = [
        'http' => [
            'method'  => $method,
            'header'  => "apikey: $key\r\n" .
                         "Authorization: Bearer $key\r\n" .
                         "Content-Type: application/json\r\n" .
                         "Prefer: return=representation\r\n",
            'content' => $data ? json_encode($data) : null,
            'ignore_errors' => true // Para capturar errores de Supabase sin que PHP lance un Warning
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($fullUrl, false, $context);

    if ($response === false) {
        return ['error' => 'Error al conectar con el servidor (file_get_contents falló)'];
    }

    return json_decode($response, true);
}

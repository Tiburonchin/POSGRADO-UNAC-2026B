<?php
header('Content-Type: application/json; charset=utf-8');
$file = __DIR__ . '/../data/programas.json';
if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'File not found']);
}

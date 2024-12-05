<?php
$file = 'carousel_data.json';

if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    http_response_code(404);
    echo json_encode([]);
}
?>
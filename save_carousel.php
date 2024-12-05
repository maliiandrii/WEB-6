<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $items = $input['items'] ?? [];

    if (!empty($items)) {
        file_put_contents('carousel_data.json', json_encode($items));
        echo json_encode(['message' => 'Carousel saved successfully']);
    } else {
        echo json_encode(['message' => 'No items to save']);
    }
} else {
    http_response_code(405);
}
?>

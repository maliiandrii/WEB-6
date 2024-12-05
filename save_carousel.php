<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $slides = $_POST['slides'] ?? [];
    if (!empty($slides)) {
        file_put_contents('carousel_data.json', json_encode($slides));
        echo "Карусель успішно збережено!";
    } else {
        http_response_code(400);
        echo "Дані про слайди не отримано.";
    }
}
?>

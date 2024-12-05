<?php
header('Content-Type: application/json');

// Список слайдів
$slides = [
    ["text" => "Google", "url" => "https://www.google.com"],
    ["text" => "Render", "url" => "https://render.com"],
    ["text" => "Localhost Example", "url" => "http://localhost/page.html"]
];

// Перевіряємо, чи кожен URL має протокол
foreach ($slides as &$slide) {
    if (!preg_match('/^https?:\/\//', $slide['url'])) {
        $slide['url'] = 'https://' . $slide['url'];
    }
}

// Повертаємо JSON
echo json_encode($slides);
?>
<?php
$data = json_decode(file_get_contents('carousel_data.json'), true);
header('Content-Type: application/json');
echo json_encode($data);
?>

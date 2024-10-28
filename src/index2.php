<?php
$jsonFile = 'rooms.json';
$jsonData = file_get_contents($jsonFile);

if (file_exists($jsonFile)) {
    $rooms = json_decode($jsonData, true);

    echo '<pre>';
    print_r($rooms);
    echo '</pre>';
} else {
    echo "El archivo JSON no existe.";
}
?>

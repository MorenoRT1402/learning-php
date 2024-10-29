<?php
function loadJson($filePath) {
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        
        return json_decode($jsonData, true);
    } else {
        throw new Exception("El archivo JSON no existe: $filePath");
    }
}

function loadRooms() {
    return loadJson(__DIR__ . '/data/rooms.json');
}
?>

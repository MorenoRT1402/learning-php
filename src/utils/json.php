<?php
function load_json($filePath) {
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        
        return json_decode($jsonData, true);
    } else {
        throw new Exception("El archivo JSON no existe: $filePath");
    }
}

function json_load_rooms() {
    return load_json(__DIR__ . '/../data/rooms.json');
}
?>

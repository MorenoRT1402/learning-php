<?php
$jsonFile = 'rooms.json';

$roomFound = null;

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    
    $rooms = json_decode($jsonData, true);

    if (isset($_GET['id'])) {
        $requestedId = intval($_GET['id']);
        
        foreach ($rooms as $room) {
            if ($room['id'] === $requestedId) {
                $roomFound = $room;
                break;
            }
        }
    }
} else {
    echo "El archivo JSON no existe.";
}

if ($roomFound) {
    echo "<h2>Habitación Encontrada:</h2>";
    echo "<p><strong>Nombre:</strong> " . $roomFound['roomType'] . "</p>";
    echo "<p><strong>Número:</strong> " . $roomFound['number'] . "</p>";
    echo "<p><strong>Precio:</strong> " . $roomFound['rate'] . "</p>";
    echo "<p><strong>Descuento:</strong> " . $roomFound['discount'] . "%</p>";
} else {
    echo "<p>No se encontró ninguna habitación con ese ID.</p>";
}
?>

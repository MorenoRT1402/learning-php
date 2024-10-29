<!--
Acceder la página con un query param (localhost:8000/index4.php?id=1). Leer el parámetro de GET, importar las habitaciones JSON, 
y buscar dentro del array para ver si hay una habitación con el mismo ID. Si hay una, mostrarla con las propiedades Name, Number, Price y Discount
-->

<?php
include __DIR__ . '/utils/json.php';

$roomFound = null;

$rooms = load_rooms();

const ID_PARAM = 'id';

if (isset($_GET[ID_PARAM])) {
    $requestedId = intval($_GET[ID_PARAM]);
    
    foreach ($rooms as $room) {
        if ($room['id'] === $requestedId) {
            $roomFound = $room;
            break;
        }
    }
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

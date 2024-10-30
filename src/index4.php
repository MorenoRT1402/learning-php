<!--
Acceder la página con un query param (localhost:8000/index4.php?id=1). Leer el parámetro de GET, importar las habitaciones JSON, 
y buscar dentro del array para ver si hay una habitación con el mismo ID. Si hay una, mostrarla con las propiedades Name, Number, Price y Discount
-->

<?php
include __DIR__ . '/utils/json.php';
include __DIR__ . '/utils/path.php';

$room = null;

$rooms = load_rooms();

$id = intval(get_param_id());

foreach ($rooms as $roomData) {
    if ($roomData['id'] === $id) {
        break;
    }
}

$blade = include __DIR__ . '/config/setup.php';
echo $blade->run("room_details", ["room" => $roomData, "id" => $id]);

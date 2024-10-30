<!--
Acceder la página con un query param (localhost:8000/index6.php?id=1). Conectar a la base de datos de MySQL utilizando mysqli. 
Hacer una consulta para obtener una habitación (con el ID de GET) y mostrarla abajo utilizando el código de index4.php
-->

<?php
include __DIR__ . '/dto/room.php';
include __DIR__ . '/utils/path.php';

$id = (int)get_param_id();
$room = Room::fetchRoomByIDFromDB($id);

$blade = include __DIR__ . '/config/setup.php';
echo $blade->run("room_details", ["room" => $room, "id" => $id]);


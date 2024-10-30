<!--
Mostrar un formulario (method=”POST” y sin action) para crear una nueva habitación. 
Si accedes a la página con una peticion POST, mostrar la habitación nueva con el código de index4.php
-->

<?php
include_once __DIR__ . '/dto/room.php';
include_once __DIR__ . '/utils/path.php';

$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
$newRoom = null;

if ($is_post) {
    $newRoom = new Room(null, $_POST['roomType'], (int)$_POST['number'], (float)$_POST['rate'], (int)$_POST['discount']);
}

$blade = include __DIR__ . '/config/setup.php';
include_once __DIR__ . '/app/params.php';
echo $blade->run("create_room_form", ["room_types" => ROOM_TYPES]);

if ($is_post && $newRoom) {
    echo $blade->run("room_details", ["room" => $newRoom, "id" => $id]);
}
?>


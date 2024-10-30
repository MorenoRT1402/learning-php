<!--
Mostrar un formulario (method=”POST” y sin action) para crear una nueva habitación. 
Si accedes a la página con una peticion POST, mostrar la habitación nueva con el código de index4.php
-->

<?php
include_once __DIR__ . '/utils/mysql.php';
include_once __DIR__ . '/utils/path.php';
include_once __DIR__ . '/app/params.php';

$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
$newRoom = null;

if ($is_post) {
    $newRoom = [
        'roomType' => htmlspecialchars($_POST['roomType']),
        'number' => (int)$_POST['number'],
        'rate' => (float)$_POST['rate'],
        'discount' => (int)$_POST['discount']
    ];
}

include_once __DIR__ . '/views/create_room_template.php';

if ($is_post && $newRoom) {
    $room = $newRoom;
    include __DIR__ . '/views/room_template.php';
}
?>


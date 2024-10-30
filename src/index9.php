<!--
Utilizar el mismo código de index8.php pero esta vez guardar la habitación nueva en la base de datos de MySQL. Se puede confirmar visitando index5.php
-->

<?php
include_once __DIR__ . '/utils/mysql.php';
include_once __DIR__ . '/utils/path.php';

$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
$newRoom = null;

if ($is_post) {
    $roomType = htmlspecialchars($_POST['roomType']);
    $number = (int)$_POST['number'];
    $rate = (float)$_POST['rate'];
    $discount = (int)$_POST['discount'];
    
    $newRoomId = create_room($roomType, $number, $rate, $discount);
    $newRoom = load_room($newRoomId);
}

$blade = include __DIR__ . '/config/setup.php';
include_once __DIR__ . '/app/params.php';
echo $blade->run("create_room_form", ["room_types" => ROOM_TYPES]);

if ($is_post && $newRoom) {
    echo $blade->run("room_details", ["room" => $newRoom, "id" => $id]);
}
?>
<!--
Utilizar el mismo código de index8.php pero esta vez guardar la habitación nueva en la base de datos de MySQL. Se puede confirmar visitando index5.php
-->

<?php
include_once __DIR__ . '/utils/mysql.php';
include_once __DIR__ . '/utils/path.php';
include_once __DIR__ . '/app/params.php';

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

include_once __DIR__ . '/views/create_room_template.php';

if ($is_post && $newRoom) {
    $room = $newRoom;
    include __DIR__ . '/views/room_template.php';
}
?>
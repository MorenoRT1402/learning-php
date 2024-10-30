<!--
Utilizar el mismo código de index5.php pero en vez de mostrar las habitaciones abajo, utilizar una biblioteca ‘BladeOne’
-->

<?php

include_once __DIR__ . '/dto/room.php';
$rooms = Room::fetchRoomsFromDB();

$blade = include __DIR__ . '/config/setup.php';
echo $blade->run("rooms", ["rooms" => $rooms]);
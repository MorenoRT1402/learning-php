<!--
Utilizar el mismo código de index5.php pero en vez de mostrar las habitaciones abajo, utilizar una biblioteca ‘BladeOne’
-->

<?php

include_once __DIR__ . '/utils/mysql.php';
$rooms = load_rooms();

$blade = include __DIR__ . '/config/setup.php';
echo $blade->run("rooms", ["rooms" => $rooms]);
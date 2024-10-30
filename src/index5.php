<!--
Conectar a la base de datos de MySQL utilizando mysqli. Hacer una consulta para obtener las habitaciones y mostrarlas abajo utilizando el código de index3.php
-->

<?php
include __DIR__ . '/utils/mysql.php';

$rooms = load_rooms();

$blade = include_once __DIR__ . '/config/setup.php';
echo $blade->run("rooms", ["rooms" => $rooms]);
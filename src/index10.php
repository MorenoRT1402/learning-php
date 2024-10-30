<!--
Utilizar el mismo código de index5.php pero en vez de mostrar las habitaciones abajo, utilizar una biblioteca ‘BladeOne’
-->

<?php
require __DIR__ . '/../vendor/autoload.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

include_once __DIR__ . '/utils/mysql.php';
$rooms = load_rooms();

echo $blade->run("rooms", ["rooms" => $rooms]);

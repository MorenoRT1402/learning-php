<!--
Utilizar el mismo código para importar el archivo JSON pero esta vez pon una etiqueta <ol></ol> y mostrar cada habitación como un <li></li> utilizando un bucle de PHP. 
Mostrar las propiedades Name, Number, Price y Discount
-->

<?php
include __DIR__ . '/utils/json.php';

$rooms = load_rooms();

if ($rooms === null) {
    die('Error al decodificar el JSON');
}

$blade = include_once __DIR__ . '/config/setup.php';
echo $blade->run("rooms", ["rooms" => $rooms]);

?>
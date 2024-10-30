<!-- 
Copiar el archivo JSON de las habitaciones ficticios al proyecto (rooms.json), importar el archivo en index2.php 
y muestra el contenido dentro de una etiqueta <pre></pre> 
-->

<?php
include __DIR__ . '/dto/room.php';

try {
    $rooms = Room::fetchRoomsFromJSON();

    echo '<pre>';
    print_r($rooms);
    echo '</pre>';

} catch (Exception $e) {
    echo $e->getMessage();
}
?>

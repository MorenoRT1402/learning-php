<!--
Utilizar el código de index5.php para mostrar todas las habitaciones, pero incluir un formulario (sin method y sin action) para buscar también. 
Utilizar un if para ver si has buscado y hacer una consulta diferente para obtener las habitaciones WHERE name LIKE <search>
-->

<form>
    <label for="search">Buscar habitación:</label>
    <input type="text" id="search" name="search" placeholder="Introduce el nombre de la habitación">
    <button type="submit">Buscar</button>
</form>

<?php

    $searchTerm = htmlspecialchars($_GET['search']);
    include_once __DIR__ . '/dto/room.php';
    if (isset($searchTerm) && !empty($searchTerm)){
        $rooms = Room::fetchRoomsByTypeFromDB($searchTerm);
    }
    else{
        $rooms = Room::fetchRoomsFromDB();
    }

    $blade = include_once __DIR__ . '/config/setup.php';
    echo $blade->run("rooms", ["rooms" => $rooms]);
?>


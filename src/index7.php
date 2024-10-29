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
    include_once __DIR__ . '/utils/mysql.php';

    $searchTerm = htmlspecialchars($_GET['search']);
    if (isset($searchTerm) && !empty($searchTerm)){
        $rooms = load_rooms_by_type($searchTerm);
    }
    else{
        $rooms = load_rooms();
    }

    include_once __DIR__ . '/views/rooms_template.php';
?>


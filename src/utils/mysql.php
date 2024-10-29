<?php
$config = require __DIR__ . '/../../config.php';

function db_connection($config) {
    $host = $config['db_host'];
    $user = $config['db_user'];
    $password = $config['db_pass'];
    $database = $config['db_name'];

    $conn = new mysqli($host, $user, $password, $database);
    
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    return $conn;
}

function load_rooms() {
    global $config;
    $conn = db_connection($config);

    $query = "SELECT id, roomType, rate, discount FROM rooms"; 
    $result = $conn->query($query);

    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }

    $conn->close();

    return $rooms;
}
?>

<!--
Utilizar el mismo código para importar el archivo JSON pero esta vez pon una etiqueta <ol></ol> y mostrar cada habitación como un <li></li> utilizando un bucle de PHP. 
Mostrar las propiedades Name, Number, Price y Discount
-->

<?php
include __DIR__ . '/utils.php';

$rooms = loadRooms();

if ($rooms === null) {
    die('Error al decodificar el JSON');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>
<body>
    <h1>Lista de Habitaciones</h1>
    <ol>
        <?php foreach ($rooms as $room): ?>
            <li>
                <strong>Name:</strong> <?php echo htmlspecialchars($room['roomType']); ?><br>
                <strong>Number:</strong> <?php echo htmlspecialchars($room['number']); ?><br>
                <strong>Price:</strong> <?php echo htmlspecialchars($room['rate']); ?><br>
                <strong>Discount:</strong> <?php echo htmlspecialchars($room['discount']); ?>%
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>
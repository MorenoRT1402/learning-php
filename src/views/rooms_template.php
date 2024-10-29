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
        <?php if (empty($rooms)): ?>
            <p>No hay habitaciones disponibles.</p>
        <?php else: ?>
            <?php foreach ($rooms as $room): ?>
                <li>
                    <strong>Name:</strong> <?php echo htmlspecialchars($room['roomType']); ?><br>
                    <strong>Number:</strong> <?php echo htmlspecialchars($room['number']); ?><br>
                    <strong>Price:</strong> <?php echo htmlspecialchars($room['rate']); ?><br>
                    <strong>Discount:</strong> <?php echo htmlspecialchars($room['discount']); ?>%
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ol>
</body>
</html>
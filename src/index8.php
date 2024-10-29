<!--
Mostrar un formulario (method=”POST” y sin action) para crear una nueva habitación. 
Si accedes a la página con una peticion POST, mostrar la habitación nueva con el código de index4.php
-->

<?php
include_once __DIR__ . '/utils/mysql.php';
include_once __DIR__ . '/utils/path.php';
include_once __DIR__ . '/app/params.php';

$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
$newRoom = null;

if ($is_post) {
    $newRoom = [
        'roomType' => htmlspecialchars($_POST['roomType']),
        'number' => (int)$_POST['number'],
        'rate' => (float)$_POST['rate'],
        'discount' => (int)$_POST['discount']
    ];
}
?>

<form method="POST">
    <label for="roomType">Tipo de habitación:</label>
    <select id="roomType" name="roomType" required>
        <?php foreach (ROOM_TYPES as $type): ?>
            <option value="<?php echo htmlspecialchars($type); ?>"><?php echo htmlspecialchars($type); ?></option>
        <?php endforeach; ?>
    </select>

    <label for="number"></label>
    <input type="number" id="number" name="number" min="1" value="1" required><br>

    <label for="rate">Tarifa:</label>
    <input type="number" id="rate" name="rate" step="0.01" min="0" value="50" required><br>

    <label for="discount">Descuento (%):</label>
    <input type="number" id="discount" name="discount" step="1" min="0" max="100" value="0" required><br>

    <button type="submit">Crear habitación</button>
</form>

<?php
if ($is_post && $newRoom) {
    $room = $newRoom;
    include __DIR__ . '/views/room_template.php';
}
?>


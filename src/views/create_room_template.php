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
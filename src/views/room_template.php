<?php

if ($room) {
    echo '<h1>Detalles de la Habitación</h1>';
    echo '<strong>Name:</strong> ' . htmlspecialchars($room['roomType']) . '<br>';
    echo '<strong>Number:</strong> ' . htmlspecialchars($room['number']) . '<br>';
    echo '<strong>Price:</strong> ' . htmlspecialchars($room['rate']) . '<br>';
    echo '<strong>Discount:</strong> ' . htmlspecialchars($room['discount']) . '%';
} else {
    echo "No se encontró la habitación con ID: $id.";
}

?>
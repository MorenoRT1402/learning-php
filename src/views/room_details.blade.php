@if($room)
    <h1>Detalles de la Habitación</h1>
    <p><strong>Nombre:</strong> {{ htmlspecialchars($room['roomType']) }}</p>
    <p><strong>Número:</strong> {{ htmlspecialchars($room['number']) }}</p>
    <p><strong>Precio:</strong> {{ htmlspecialchars($room['rate']) }}</p>
    <p><strong>Descuento:</strong> {{ htmlspecialchars($room['discount']) }}%</p>
@else
    <p>No se encontró la habitación con ID: {{ $id }}.</p>
@endif

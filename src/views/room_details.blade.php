@if($room)
    <h1>Detalles de la Habitación</h1>
    <p><strong>Nombre:</strong> {{ htmlspecialchars($room->get_roomType()) }}</p>
    <p><strong>Número:</strong> {{ htmlspecialchars($room->get_number()) }}</p>
    <p><strong>Precio:</strong> ${{ number_format($room->get_rate(), 2) }}</p>
    <p><strong>Descuento:</strong> {{ htmlspecialchars($room->get_discount()) }}%</p>
@else
    <p>No se encontró la habitación con ID: {{ htmlspecialchars($id) }}.</p>
@endif

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Habitaciones</title>
</head>
<body>
    <h1>Habitaciones</h1>

    @if(count($rooms) > 0)
        <ul>
            @foreach ($rooms as $room)
                <li>
                    <strong>Nombre:</strong> {{ $room->get_roomType() }}<br>
                    <strong>Número:</strong> {{ $room->get_number() }}<br>
                    <strong>Tarifa:</strong> ${{ number_format($room->get_rate(), 2) }}<br>
                    <strong>Descuento:</strong> {{ $room->get_discount() }}%<br>
                </li>
                <br>
            @endforeach
        </ul>
    @else
        <p>No hay habitaciones disponibles.</p>
    @endif
</body>
</html>

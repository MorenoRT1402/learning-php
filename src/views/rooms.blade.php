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
                    <strong>Nombre:</strong> {{ $room['roomType'] }}<br>
                    <strong>Número:</strong> {{ $room['number'] }}<br>
                    <strong>Tarifa:</strong> ${{ $room['rate'] }}<br>
                    <strong>Descuento:</strong> {{ $room['discount'] }}%<br>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay habitaciones disponibles.</p>
    @endif
</body>
</html>

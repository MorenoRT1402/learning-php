<!-- 
Crear un array en PHP conteniendo 3 habitaciones (cada una es un array asociativo). Cada habitación tiene 5 propiedades: ID, Name, Number, Price, Discount. 
Muestra el array entero dentro de una etiqueta <pre></pre> 
-->

<?php
$habitaciones = [
    [
        'ID' => 1,
        'Name' => 'Suite Deluxe',
        'Number' => '101',
        'Price' => 150.00,
        'Discount' => 10
    ],
    [
        'ID' => 2,
        'Name' => 'Habitación Familiar',
        'Number' => '102',
        'Price' => 120.00,
        'Discount' => 5
    ],
    [
        'ID' => 3,
        'Name' => 'Habitación Individual',
        'Number' => '103',
        'Price' => 80.00,
        'Discount' => 0
    ]
];

echo '<pre>';
print_r($habitaciones);
echo '</pre>';
?>

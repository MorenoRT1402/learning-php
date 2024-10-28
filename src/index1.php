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

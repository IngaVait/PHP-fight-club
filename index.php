<?php
$drinks = [
    [
        'name' => 'Hendricks Gin',
        'price_stock' => 29,
        'discount' => 5,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=5588df69-950b-4f4f-946f-045bf16b81fe',
    ],
     [
        'name' => 'Viskis Jack Daniels',
        'price_stock' => 24,
        'discount' => 5,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=a0786b83-0e1c-47a8-b99b-77a9d3b6a73f',
    ],
     [
        'name' => 'Viskis Jameson',
        'price_stock' => 19,
        'discount' => 10,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=9a2fff2d-336b-4ab9-a229-79da012da5a8',
    ],
     [
        'name' => 'Romas Bacardi Dark',
        'price_stock' => 14,
        'discount' => 8,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=2730c47b-a87f-4418-b33e-2f56865a86f0',
    ],
];

foreach ($drinks as $key => $value) {
$drinks[$key]['price_retail'] = $drinks[$key]['price_stock'] - $drinks[$key]['price_stock']*$drinks[$key]['discount']*0.01;
}

var_dump($drinks);
?>
<html>
    <head>
        <title>Gerimai</title>
    </head>
    <body>
       
    </body>
</html>
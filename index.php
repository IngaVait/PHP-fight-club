<?php
$drinks = [
    [
        'name' => 'Hendricks Gin',
        'price_stock' => 29,
        'discount' => 5,
        'img' => 'https://cdn.shopify.com/s/files/1/1341/5633/products/274_hendricks_gin_high.jpg?v=1521740530',
    ],
    [
        'name' => 'Jack Daniels',
        'price_stock' => 24,
        'discount' => 5,
        'img' => 'https://manila-wine.com/media/catalog/product/cache/1/image/700x700/9df78eab33525d08d6e5fb8d27136e95/j/a/jack-daniels-old-no.7-1l.jpg',
    ],
    [
        'name' => 'Jameson',
        'price_stock' => 23,
        'discount' => 10,
        'img' => 'https://cdn11.bigcommerce.com/s-e6b77/images/stencil/1280x1280/products/14810/24522/86f69f42-e482-5547-9d7a-769e88f36cb8__14846.1530895777.jpg?c=2',
    ],
    [
        'name' => 'Bacardi Dark',
        'price_stock' => 14,
        'discount' => 8,
        'img' => 'https://cdn.diffords.com/contrib/bws/2017/10/59db869471e8c.jpg',
    ],
];

foreach ($drinks as $drink_index => $drink) {
    $drinks[$drink_index]['price_retail'] = $drink['price_stock'] - $drink['price_stock'] * $drink['discount'] * 0.01;
}

$h1 = 'Drink Catalogue';
?>
<html>
    <head>
        <title>Gerimai</title>
        <style>
            .container {
                height: 50vh;
                width: 100%;
                display: flex;
                justify-content: space-around;
            }
            .card {
                height: 300px;
                width: 300px;
            }
            .flex_wrap {
                height: 95%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
            .price {
                color: white;
                background: red;
                text-align: right;
            }
            .name {
                font-size: 2rem;
            }
            img {
                height: 100%;
                width: auto;
            }

        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <div class="container">
            <?php foreach ($drinks as $drink_index => $drink) : ?>
                <div class="card">
                    <div class="price"><?php print $drinks[$drink_index]['price_retail']; ?></div>
                    <div class="flex_wrap">
                    <img src="<?php print $drinks[$drink_index]['img']; ?>">
                    <div class="name"><?php print $drinks[$drink_index]['name']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
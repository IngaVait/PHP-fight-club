<?php
$months = 24;
$car_price_new = 30000; // eur
$depreciation = 2; //% per month
$car_price_after = $car_price_new;

for ($i = 1; $i <= $months; $i++) {
    $car_price_after = ceil($car_price_after - $car_price_after * 0.02);
}

$depr_perc = 100 - $car_price_after * 100 / $car_price_new;
$h1 = 'Kiek nuvertes masina';
$h2 = "Naujos masinos kaina $car_price_new eur.";
$h3 = "Po $months menesiu, masinos verte bus: $car_price_after eur.";
$h4 = "Masina nuvertes $depr_perc proc.";
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Dyzelio bake problema</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </body>
</html>
<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 1; $i < $months; $i++) {
    $wallet += $month_income - rand(500, 1000);
    if ($wallet < 0) {
        break;
    }
}

$h1 = 'Wallet Forecast';

if ($wallet < 0) {
    $h2 = "Atsargiai, $i menesi gali baigtis pinigai";
} else{
    $h2 = "Po $months menesiu prognozuojamas likutis: $wallet";
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Wallet Forecast</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h1><?php print $h2; ?></h1>
    </body>
</html>

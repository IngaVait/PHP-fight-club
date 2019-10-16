<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < 12; $i++) {
    $wallet += $month_income - rand(600, 1000);
    if ($wallet <= 0) {
        break;
    }
}

if ($wallet <= 0) {
     $h2 = "Atsargiai, $i menesi gali baigtis pinigai";
}else 
    $h2 = "Po $months menesiu prognozuojamas likutis: $wallet";

$h1 = 'Wallet Forecast';
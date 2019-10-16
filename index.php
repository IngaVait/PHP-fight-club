<?php
$days = 365;
//$cigs_mon_fri = rand(3, 5);
//$cigs_sat = rand(20, 40);
//$cigs_sun = rand(1, 3);
$pack_price = 3.5;
$count_mon_fri = 0;
$count_sat = 0;
$count_sun = 0;
$time_per_cig = 5;

for ($i = 1; $i <= $days; $i++) {
    $strtotime_param = "+$i days";
    $number = date("N", strtotime($strtotime_param));
    if ($number <= 5) {
        $count_mon_fri += rand(3, 5);
    } elseif ($number == 6) {
        $count_sat += rand(20, 40);
    } else {
        $count_sun += rand(1, 3);
    }
}
$h1 = 'Tavo rūkymo statistika';
$count = $count_mon_fri + $count_sat + $count_sun;
$money = ceil($count / 20) * $pack_price;
$count_min = $count * $time_per_cig;
$count_time = intdiv($count_min, 60).':'. ($count_min % 60);
$h2 = "Jei ir toliau rūkysi taip pat, per ateinančias $days dienas būsi prastovėjęs lauke $count_time valandų. <br> Ir ne tik surūkęs $count vnt. cigarečių, bet ir dūmais paleidęs $money eur.";
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Kiek tu surukai</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h1><?php print $h2; ?></h1>
        <?php for ($img = 1; $img <= $count; $img++) : ?>
            <img src="<?php print "../images/Cig.PNG"; ?>" alt="Cig"/>
        <?php endfor ?>
    </body>
</html>

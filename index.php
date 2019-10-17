<?php
$car_price_new = 30000; // eur
$depreciation = 2; //% per month
$santaupos = 15000;
$months = 0;

for($i = $car_price_new; $i >= $santaupos ; $i *= 0.98){
     $car_price_used = $car_price_new - $i;
     $months += 1;
}
$car_price_used = round($car_price_used, 2);
$depr_perc = 100 - round($car_price_used * 100 / $car_price_new);
$h1 = 'Kiek nuvertes masina';
$h2 = "Naujos masinos kaina $car_price_new eur.";
$h3 = "Sia masina galesi nusipirkti po $months men., kai jos verte bus $car_price_used";
$h4 = "Masina nuvertes $depr_perc proc.";

//$img_50eur = 'https://www.bankai.lt/upload/banknotai/big/2014/03/euro-2002-50-euros-f-17714.jpg';
//$img_20eur = 'https://www.bankai.lt/upload/banknotai/big/2015/07/euro-2002-20-euros-f-33253.jpg';
//$img_10eur = 'https://www.bankai.lt/upload/banknotai/big/2014/03/euro-2014-10-euro-f-17700.jpg';
//$img_100eur = 'http://www.santarve.lt/images/articles/2012/08/100-3.gif';
//$img_200eur = 'https://www.bankai.lt/upload/banknotai/big/2014/03/euro-2002-200-euros-f-17706.jpg';
//$img_500eur = 'http://www.ekspertai.eu/static/uploads/cache/800x600/2016-05-02/61347-500euros-jpeg.jpg';
//$img_5eur = 'https://www.seb.lt/sites/default/files/web/images/5euro_back_HR_europa.jpg';
//$img_2eur = 'https://i.colnect.net/f/3863/512/2-Euro.jpg';
//$img_1eur = 'http://www.kalykla.lt/image/data/naujienos/1Eur_rev.png';
//$img_50ct = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQEM7Mg4VtN95HbSaT_-2smB_09_pK_jm2gUWkXwV_iZrbFE9qd';

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Masinos reikalai</title>
        <style>
            
        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>


        <!--    namu darbe img daryti kaip divo bagrounda, ir koks tas bg apspres jo klase, tai greiciausiai cikla reikes kazkaip idomiai per tai prasukti/-->

    </body>
</html>
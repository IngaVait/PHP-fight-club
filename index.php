<?php
$car_price_new = 30000; // eur
$depreciation = 2; //% per month
$santaupos = 15000;
$months = 0;

for ($i = $car_price_new; $i >= $santaupos; $i *= 0.98) {
    $car_price_used = $car_price_new - $i;
    $months += 1;
}
$car_price_used = round($car_price_used, 2);
$depr_perc = 100 - round($car_price_used * 100 / $car_price_new);
$h1 = 'Kiek nuvertės tavo svajonių mašina';
$h2 = "Naujos mašinos kaina $car_price_new eur.";
$h3 = "Tu ją galėsi nusipirkti po $months men., kai jos vertė bus $car_price_used";
$h4 = "Mašina jau bus nuvertėjusi $depr_perc proc.";
$img_500eur = 'img_500eur';
$img_200eur = 'img_200eur';
$img_5eur = 'img_5eur';
$img_20ct = 'img_20ct';
$img_02ct = 'img_02ct';
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Masinos reikalai</title>
        <style>
            header {
                background: url(https://www.euroexchangeratenews.co.uk/wp-content/uploads/2016/06/Euro-note-denominations.jpg);
            }
            section {
                background: rgba(128, 0, 42, .7);
                color: lightgray;
                display: flex;  
                flex-direction: column;
                align-items: center;               
            }
            main {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
            }
            div {
                width: 229px;
                height: 118px;
            }
            .img_500eur {
                background: url(http://www.ekspertai.eu/static/uploads/cache/800x600/2016-05-02/61347-500euros-jpeg.jpg);
                background-size: cover;
            }
            .img_200eur {
                background: url(https://www.bankai.lt/upload/banknotai/big/2014/03/euro-2002-200-euros-f-17706.jpg);
                background-size: cover;
            }
            .img_5eur {
                background: url(https://www.seb.lt/sites/default/files/web/images/5euro_back_HR_europa.jpg);
                background-size: cover;
            }  
            .img_20ct {
                background: url(https://i.colnect.net/f/3362/572/20-Euro-Cent-Bratislava-Castle.jpg);
                background-repeat: no-repeat;
                background-size: 70px;
                width: 80px;
                padding: 5px;
            }  
            .img_02ct {
                background: url(https://i.colnect.net/f/2719/000/2-Euro-Cent.jpg);
                background-repeat: no-repeat;
                background-size: 70px;     
                width: 80px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <header>
            <section>
                <h1><?php print $h1; ?></h1>
                <h2><?php print $h2; ?></h2>
                <h3><?php print $h3; ?></h3>
                <h4><?php print $h4; ?></h4>
            </section>
        </header>
        <hr>
        <main>
            <?php for ($count_money = $car_price_used; $count_money > 500; $count_money -= 500) : ?>
                <div class="<?php print $img_500eur; ?>" > </div>
            <?php endfor; ?>
            <?php for ($to_200 = $count_money; $to_200 > 200; $to_200 -= 200) : ?>
                <div class="<?php print $img_200eur; ?>" > </div>
            <?php endfor; ?>
            <?php for ($to_5 = $to_200; $to_5 > 5; $to_5 -= 5) : ?>
                <div class="<?php print $img_5eur; ?>" > </div>
            <?php endfor; ?>
            <?php for ($to_20ct = $to_5; $to_20ct > 0.2; $to_20ct -= 0.2) : ?>
                <div class="<?php print $img_20ct; ?>" > </div>
            <?php endfor; ?>
            <?php for ($to_02ct = $to_20ct; $to_02ct > 0.02; $to_02ct -= 0.018) : ?>
                <div class="<?php print $img_02ct; ?>" > </div>
            <?php endfor; ?>
        </main>
    </body>
</html>
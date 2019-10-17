<?php
$petrol_in_tank = rand(20, 30);
$diesel_poured = rand(0, 5);

for ($diesel_limit = 0; ($petrol_in_tank + $diesel_limit + 1) * 0.1 > $diesel_limit; $diesel_limit++)
    if ($diesel_poured > $diesel_limit) {
        $h4 = "https://pics.me.me/i-kill-you-achmed-the-terrorist-48734574.png";
    } else {
        $h4 = "https://pics.me.me/good-memegenerator-net-good-grumpy-cat-says-good-meme-50351550.png";
    }
$h1 = 'Pripylei dyzelio į benz. mašiną?';
$h2 = "Benzino buvo: $petrol_in_tank";
$h3 = "Pripilta dyzelio: $diesel_poured";
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Dyzelio bake problema</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h1><?php print $h2; ?></h1>
        <h1><?php print $h3; ?></h1>
        <img src="<?php print $h4; ?>"/>
    </body>
</html>

<?php
$petrol_in_tank = rand(20, 30);
$diesel_in_tank = 0;
$diesel_limit = ($petrol_in_tank + $diesel_in_tank) / 10;

for ($i = $diesel_in_tank; $i <= $diesel_limit; $i++) {
   $tank = $petrol_in_tank + $diesel_in_tank;
   if($i == $tank / 10) {
       break;
   }
 }

$h1 = 'Pripylei dyzelio į benz. mašiną?';
$h2 = "Benzino buvo: $petrol_in_tank";
$h3 = "Max dyzelio riba: $i";
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
    </body>
</html>

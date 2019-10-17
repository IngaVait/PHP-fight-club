<?php
$petrol_in_tank = rand(20, 30);

for($diesel_limit = 0; ($petrol_in_tank + $diesel_limit + 1) * 0.1 > $diesel_limit; $diesel_limit++) 

$h1 = 'Pripylei dyzelio į benz. mašiną?';
$h2 = "Benzino buvo: $petrol_in_tank";
$h3 = "Max dyzelio riba: $diesel_limit";
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

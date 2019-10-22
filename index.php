<?php

$my_memories = [
    'baby driver',
    'baras',
    'gin tonic',
    'no water',
    'shots',
    'games',
    'awesome memories'
];
$h1 = 'Kas buvo penktadieni?!';
$h2 = 'Ingos prisiminimai';
?>
<!doctype html>
<html lang = "en">
<head>
<title> Penktadienio memories </title>
</head>
<body>
   <h1> <?php print $h1; ?> </h1>
   <h2> <?php print $h2; ?> </h2>
   <ul><?php       foreach ($my_memories as $value) : ?>
       <?php print $value; ?>
       <br>
       <?php endforeach; ?>
   </ul>
</body>
</html>
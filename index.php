<?php
$my_memories = [
    'baby driver',
    'baras',
    'gin tonic',
    'no water',
    'shots',
    'games',
    'awesome'
];

$friend_memories = [
    'taxi',
    'baras',
    'gin tonic',
    'beer',
    'shots',
    'games',
    'no memories'
];

foreach ($my_memories as $single_memory) {
    if(in_array($single_memory, $friend_memories, true)){
      $common_memories[]= $single_memory;
    }
}

$rand = rand(0, count($my_memories) - 1);
$fb_text = $my_memories[$rand];

$h1 = 'Kas buvo penktadieni?!';
$h2_1 = 'Ingos prisiminimai';
$h2_2 = 'Draugo prisiminimai';
$h2_3 = 'Vienodi prisiminimai';
$h3 = "Flashback $rand: $fb_text.";
?>
<!doctype html>
<html lang="en">
    <head>
        <title> Penktadienio memories </title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2_1; ?></h2>
        <ul><?php foreach ($my_memories as $memory) : ?>
                <li><?php print $memory; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3><?php print $h3; ?></h3>
        <h2><?php print $h2_2; ?></h2>
        <ul><?php foreach ($friend_memories as $memory) : ?>
                <li><?php print $memory; ?></li>
            <?php endforeach; ?>
        </ul>
        <h2><?php print $h2_3; ?></h2>
        <ul><?php foreach ($common_memories as $memory) : ?>
                <li><?php print $memory; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
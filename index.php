<?php

$race_track = [
    'start' => [
        'straight_after' => 500,
    ],    
    'corner_1' => [
        'right_side' => true,
        'angle' => 5,
        'straight_after' => 500,
    ],
      'corner_0' => [
        'right_side' => false,
        'angle' => 3,
        'straight_after' => 5,
    ],
      'corner_3' => [
        'right_side' => true,
        'angle' => 5,
        'straight_after' => 1000,
    ],
      'corner_4' => [
        'right_side' => false,
        'angle' => 4,
        'straight_after' => 10,
    ],
      'corner_5' => [
        'right_side' => true,
        'angle' => 10,
        'straight_after' => 200,
    ],
    'corner_6' => [
        'right_side' => true,
        'angle' => 3,
        'straight_after' => 200,
    ],
    'finish' => [
        'end_of_lap' => true,
    ]
 ];
 var_dump($race_track);

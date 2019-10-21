<?php

$array = [
    'lane_1st' => [
        'Pins_standing' => [
            'Row_1' => 1,
            'Row_2' => [0, 1],
            'Row_3' => [0, 0, 1],
            'Row_4' => [1, 0, 0, 1],
        ],
        'Status' => 'ready',
    ],
    'lane_2st' => [
        'Pins_standing' => [
            'Row_1' => 0,
            'Row_2' => [0, 0],
            'Row_3' => [0, 0, 0],
            'Row_4' => [0, 0, 0, 0],
        ],
        'Status' => 'not_ready',
    ],
];
var_dump($array);

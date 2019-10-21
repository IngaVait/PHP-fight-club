<?php

$array = [
    'lane_1st' => [
        'pins_standing' => [
            'row_1' => [1],
            'row_2' => [0, 1],
            'row_3' => [0, 0, 1],
            'row_4' => [1, 0, 0, 1],
        ],
        'in_condition' => true,
    ],
    'lane_2st' => [
        'pins_standing' => [
            'row_1' => [0],
            'row_2' => [0, 0],
            'row_3' => [0, 0, 0],
            'row_4' => [0, 0, 0, 0],
        ],
        'in_condition' => false,
    ],
];
var_dump($array);

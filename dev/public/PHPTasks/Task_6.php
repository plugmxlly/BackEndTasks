<?php

$array = [
    'first' => '1',
    'firstTwo' => [
        'two' => '2',
        'twoThree' => [
            'three' => '3'
        ]
    ], 
];         

echo '<pre>';
var_dump($array);
echo '</pre>';

$array['firstTwo']['twoThree']['threeDotFive'] = '3.5';

echo '<pre>';
var_dump($array);
echo '</pre>';
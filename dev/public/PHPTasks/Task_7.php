<?php

$carsSpeeds = [
    95,
    140,
    78
];

$sumOfSpeeds = 0;

foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
}

$countOfCars = 0;

foreach ($carsSpeeds as $cars) {
    $countOfCars++;
}

$averageSpeed = $sumOfSpeeds / $countOfCars; 

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
<?php

echo 'Task 1.1<br>';

$a = 3;
$b = 5;
$c = $a;
$a = $b;
$b = $c;

echo 'a = '. $a. ', '. 'b = '. $b;

echo '<br>';

echo '<br>Task 1.2';

$a = 3;
$b = 5;

$a = $a + $b; // 3 = 3 + 5 -> a = 8
$b = $a - $b; // 5 = 8 - 5 -> b = 3
$a = $a - $b; // 8 = 8 - 3 -> b = 5

echo '<br>a = '. $a. ', '. 'b = '. $b;


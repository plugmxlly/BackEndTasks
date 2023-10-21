<?php

// task 1

$nums = [1, 3, 2];
sort($nums);
echo implode(':', $nums) . '<br>';

// task 2

$nums1 = [1, 2, 3, 4, 5];
$newArray = array_slice($nums1, 1, 3);

foreach ($newArray as $values)
{
    echo $values . ' ';
}

// * * *
echo '<br>';
// * * *

// task 3

$str = '2 4 5 11 6 2';
$array2 = explode(' ', $str);
$newArray2 = array_unique($array2);

foreach ($newArray2 as $values2)
{
    echo $values2 . ' ';
}
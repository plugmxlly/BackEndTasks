<?php

$str = '3 4 5 6 8 8 4 4';
$nums = explode(' ', $str);

$duplicatedNumbers = [];

foreach ($nums as $num) 
{
    if (!isset($duplicatedNumbers[$num])) 
    {
        $duplicatedNumbers[$num] = 1;
    } 
    
    else 
    {
        $duplicatedNumbers[$num]++;
    }

    if ($duplicatedNumbers[$num] >= 2) 
    {
        echo $num . ' ';
    }
}


echo '<br>';

$str2 = '10 100 1 2 15';
$nums2 = explode(' ', $str2);

sort($nums2);
$count = count($nums2);

$maxNum = $nums2[$count - 1];
$maxMinus = $nums2[$count - 2];

echo $maxNum * $maxMinus;



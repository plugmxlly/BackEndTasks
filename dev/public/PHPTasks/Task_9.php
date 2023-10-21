<?php

$array = [1, 3, 5, 6, 10, 3, 3];
$target = 3;

function targetFound($array, $target)
{
    foreach ($array as $num)
    {
        if ($target == $num)
        {
            return true;
        }
    }
    return false;
}

echo (targetFound($array, $target) ? 'true' : 'false') . '<br>';

function numOfOcc($array, $target)
{
    $sum = 0;
    foreach ($array as $num)
    {
        if ($target == $num)
        {
            $sum++;
        }
    }
    return $sum;
}

echo 'Число вхождений искомого числа в массив - ' . numOfOcc($array, $target) . '<br>';

$str = '1 2 3 4 5 6 7 8 9';
$array = explode(' ', $str);

foreach ($array as $x)
{
    if ($x % 2 == 0)
        echo $x . ' ' . '<br>';
}

$n = 5;
$fib = [0, 1];

for ($i = 2; $i <= $n; $i++)
{
    $fib[] = $fib[$i - 1] + $fib[$i - 2];
}

foreach ($fib as $values)
{
    echo $values . ' ';
}



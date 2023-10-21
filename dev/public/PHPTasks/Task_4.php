<?php

function minimal(float $a, float $b, float $c)
{
    if ($a < $b && $a < $c)
        return $a;

    else if ($b < $a && $b < $c)
        return $b;

    return $c;  
}

$a = 2.9;
$b = 2.8;
$c = 2.7;

echo minimal($a, $b, $c) . '<br>';



function multiply(&$x, &$y)
{
    $x = $x * 2;
    $y = $y * 2;
}

$x = 5;
$y = 10;
multiply($x, $y);
echo $x .', ' . $y . '<br>';


function factorial($x)
{
    if ($x <= 1)
        return 1;
    
    return $x * factorial($x - 1);
}

$a = 5;
echo factorial($a) . '<br>';

function printNum($x)
{
    if ($x == 0)
        return 0;
    else 
        echo printNum($x - 1) . $x;
}

$a = 5;
echo printNum($a) . '<br>';
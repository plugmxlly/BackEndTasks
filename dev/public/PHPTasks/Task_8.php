<?php

$array = [];
$start = 345;
while ($start < 357)
{
    if ($start % 2 == 0)
    {
        $array[] = $start;
    }
    $start++;
}

foreach ($array as $elements)
{
    echo '<pre>';
    echo $elements ;
    echo '</pre>';
}


// while (true) {
// echo 1;
// }
// Этот код привел к бесконечному выводу единички, т.к. условие будет выполняться постоянно 


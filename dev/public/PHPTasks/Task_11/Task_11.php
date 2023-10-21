<?php

function anagram($str1, $str2) 
{
    if (count_chars($str1, 1) == count_chars($str2, 1)) 
    {
        echo "yes";
    }

    else 
    {
        echo "no";
    }

}

echo anagram('wolf', 'fflw');
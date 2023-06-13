<?php

/** 11. Write a PHP function to calculates its factorial, returning the result. */

function factorial($num)
{
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo factorial(7); 
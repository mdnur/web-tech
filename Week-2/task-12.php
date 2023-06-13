<?php

/** 12. Write a PHP script that for an array of numbers and returns the largest number in the array. */


function largestNumber($arr)
{
    $largest = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $largest = $arr[$i];
        }
    }
    return $largest;
}

echo largestNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]); 
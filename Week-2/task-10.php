<?php

/** 10. Write a PHP function to whether it is a leap year or not, returning true or false accordingly. */


function isLeapYear($year)
{
    return ($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0);
}

echo isLeapYear(2020) ? "Leap Year" : "Not a Leap Year";
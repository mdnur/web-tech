<?php

/**  Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE */

class CheckEvenOdd
{
    private $number;
    public function __construct($number)
    {
        $this->number = $number;
    }
    public function check()
    {
        if ($this->number % 2 == 0) {
            echo "Even";
        } else {
            echo "Odd";
        }
    }
}

$check = new CheckEvenOdd(6);
$check->check();
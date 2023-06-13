<?php

/** 4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE */

class LargestNumber
{
    private $number1;
    private $number2;
    private $number3;

    public function __construct($number1, $number2, $number3)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->number3 = $number3;
    }

    public function largest()
    {
        if ($this->number1 > $this->number2 && $this->number1 > $this->number3) {
            echo $this->number1;
        } elseif ($this->number2 > $this->number1 && $this->number2 > $this->number3) {
            echo $this->number2;
        } else {
            echo $this->number3;
        }
    }
}

$largest = new LargestNumber(10, 40, 30);
$largest->largest();
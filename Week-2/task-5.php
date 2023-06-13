<?php

/** Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-
ELSE */

class OddNumbers
{
    private $start;
    private $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function odd()
    {
        for ($i = $this->start; $i <= $this->end; $i++) {
            if ($i % 2 != 0) {
                echo $i . "\n";
            }
        }
    }
}

$odd = new OddNumbers(10, 100);
$odd->odd();
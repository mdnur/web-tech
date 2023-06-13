<?php


/** Write a PHP script to and determines a given number is a prime number or not, returning true
or false accordingly. */

function isPrime($num)
{
    if ($num == 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
echo isPrime(9)? "Prime Number" : "Not a Prime Number\n";
echo isPrime(7)? "Prime Number" : "Not a Prime Number";
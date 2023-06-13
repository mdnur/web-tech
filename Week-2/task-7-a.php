<?php

/** 7. Print the following shapes Hints: use NESTED LOOP. */


$int =5;

for ($i=0; $i < $int; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo "\n";
}
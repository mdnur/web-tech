<?php

/** 7. Print the following shapes Hints: use NESTED LOOP.  
 * 
 *
 */

$rows = 5;

for ($i = $rows - 1; $i >= 0; $i--) {
    $sample = 1;
    for ($j = 0; $j <= $i; $j++) {
        //prints star and space
        echo ($sample++ . " ");
    }
    echo "\n";
}
<?php
// Not Done

$array = array(
    array(1,2,3,"A"),
    array(1,2,"B","C"),
    array(1,"D","E","F"),
);


/**
 1 2 3
 1 2 
 1 
 */

$rows = 5;
echo $array[0][0] ." ". $array[0][1] . " " . $array[0][2] . "\n";
echo $array[1][0] ." ". $array[1][1] . " \n" ;
echo $array[2][0] . "\n";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j <= $i-$j; $j++) {
        echo ($array[$i][$j] . " ");
    }
    echo "\n";
}

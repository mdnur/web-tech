<?php
// Not Done

$array = array(
    array(1, 2, 3, "A"),
    array(1, 2, "B", "C"),
    array(1, "D", "E", "F"),
);



// foreach ($array as $row) {
//     foreach ($row as $element) {
//         if (is_string($element)) {
//             echo $element . " ";
//         }
//     }
//     echo "\n";
// }

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 4; $j++) {
        if (is_string($array[$i][$j])) {
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n";
}

/**
 1 2 3
 1 2 
 1 
 */

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3-$i; $j++) {
        echo ($array[$i][$j] . " ");
    }
    echo "\n";
}

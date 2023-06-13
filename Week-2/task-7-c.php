<?php
$rows = 5;
$letter = 'A';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $letter;
        $letter++;
    }
    echo "\n";
    //echo "<br>";
}

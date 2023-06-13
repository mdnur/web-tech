<?php

/**6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY */

class SearchElement
{
    private $array;
    private $element;

    public function __construct($array, $element)
    {
        $this->array = $array;
        $this->element = $element;
    }

    public function search()
    {
        $flag = false;
        foreach ($this->array as $value) {
            if ($value == $this->element) {
                $flag = true;
                break;
            }
        }
        if ($flag) {
            echo "Element found";
        } else {
            echo "Element not found";
        }
    }
}

$array = [1, 2, 3, 4, 5];
$search = new SearchElement($array, 5);
$search->search();
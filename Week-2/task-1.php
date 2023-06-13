<?php

/** The area of a Rectangle = length × width, perimeter = 2 × (length + width). */


class Rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length; // 5
        $this->width = $width; // 10
    }

    public function area()
    {
        return $this->length * $this->width;
    }

    public function perimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(5, 10);
echo $rectangle->area() . "\n";
echo $rectangle->perimeter() . "\n";
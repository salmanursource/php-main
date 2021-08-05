<?php
class Rectangle
{
    // Properties
    public $length;
    public $breadth;

    function __construct($l, $b)
    {
        $this->length = $l;
        $this->breadth = $b;
    }

    // Methods
    function getArea()
    {
        return $this->length * $this->breadth;
    }
}

// class MyRectange extends Rectangle
// {
//     public function printArea()
//     {
//     }
// }

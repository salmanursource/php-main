<?php
class Factorial
{
    // Properties
    public $number;

    // Constructor
    // A constructor allows you to initialize an object's properties upon creation of the object.
    // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    function __construct($num)
    {
        $this->number = $num;
    }

    // Methods
    function getFactorial()
    {
        // echo "Num = $this->number <br>";
        $fact = 1;
        $i = 2;
        while ($i <= $this->number) {
            $fact *= $i;
            $i++;
        }
        return $fact;
    }
}

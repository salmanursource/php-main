<?php
class Mutiplication
{
    public $number;
    function getMultiplicationTable()
    {
        echo "<br> Multiplication table of $this->number <br><br>";
        for ($i = 1; $i <= 10; $i++) {
            $ans = $this->number * $i;
            echo "$this->number x $i = $ans <br>";
        }
    }
}

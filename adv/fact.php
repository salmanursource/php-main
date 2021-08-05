<?php

function checkFactorial()
{
    $No = 5;
    $Factorial = 1;
    echo "The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).
    For Example n! = n × (n − 1)! <br><br>";

    echo "Factorial of $No = ";
    for ($x = $No; $x >= 1; $x--) {
        $Factorial *= $x;
        $ans = $x != 1 ? "$x x " : $x;
        echo $ans;
    }
    echo " = $Factorial";
}

checkFactorial();

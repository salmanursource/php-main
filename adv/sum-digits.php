<!DOCTYPE html>
<html>

<body>
    <h1> *Sum of Digits Program* </h1>
    <?php

    /*

Without ability to think and devise solution to problems, the value of
a programmer is ______. 

*/

    function getSum($n)
    {
        $sum = 0;
        while ($n != 0) {
            $lastDigit = $n % 10;  // 3, 2, 1
            $sum += $lastDigit;  // sum = 3 + 2 = 5 + 1 = 6;
            $n = $n / 10; // 
        }
        return $sum;
    }

    $n = 123;

    // 3 + 2 + 1 = 6
    $sum = getSum($n);

    echo "Sum of entered digits is $sum";
    ?>

</body>

</html>
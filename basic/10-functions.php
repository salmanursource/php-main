<!DOCTYPE html>
<html>

<body>
    <h1> *Functions* </h1>

    <?php

    # Functions can be classified as System Defined & User Defined  

    # Functions can be classified as Void & Returning-Value function  


    # Step 1 - Function without params
    /*
    function printStars()
    {
        echo "**************************************************";
    }
    printStars();
    */


    # Step 2 - Function with one param
    /*
    function printStars($count)
    {
        for ($i = 0; $i < $count; $i++) {
            echo "*";
        }
    }
    printStars(50);
    */


    # Step 3 - Function with two params

    function decorate($count, $char)
    {
        echo "<br>";
        for ($i = 0; $i < $count; $i++) {
            echo $char;
        }
        echo "<br>";
    }
    //decorate(75, '@');




    # Step 4 - Functions doing calculation & printing results
    /*
    function calcFact($n)
    {
        $fact = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }

        echo "Factorial of $n = $fact";
    }
    calcFact(5);
    */


    # Step 5 - Functions doing calculation & returning result value
    function getFact($n)
    {
        $fact = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }

    $n = 8;
    $fact = getFact($n); // $fact = 120;
    decorate(100, '*');
    echo "Factorial of $n is $fact";
    decorate(100, '*');


    ?>

</body>

</html>
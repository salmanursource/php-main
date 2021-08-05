<!DOCTYPE html>
<html>

<body>
    <h1> *Sorting Arrays* </h1>
    <h2> Ascending Order</h2>
    <?php
    #Sort String Ascending
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";

    #Sort Numbers Ascending
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    $arrlength = count($numbers);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }
    ?>

    <h2> Descending Order</h2>

    <?php
    #Sort String Descending
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";

    #Sort Numbers Descending
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    echo "<br>";
    $arrlength = count($numbers);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }
    ?>
</body>

</html>
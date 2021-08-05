<!DOCTYPE html>
<html>

<body>
    <h1> *Indexed Arrays* </h1>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $firstCar = $cars[0];

    $len = count($cars);  // length of array using function count()

    // for ($i = 0; $i < $len; $i++) {
    //     echo $cars[$i] . "<br>";
    // }

    foreach ($cars as $car) {
        echo $car . "<br>";
    }
    ?>

</body>

</html>
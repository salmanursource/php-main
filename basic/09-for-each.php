<!DOCTYPE html>
<html>

<body>
    <h1> *For Each Loop* </h1>
    <h4> The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</h4>

    <?php
    $cars = array("Honda City", "Hyundai i20", "Suzuki Swift", "Mahindra Bolero");
    //$cars = ["Honda City", "Hyundai i20", "Suzuki Swift", "Mahindra Bolero"];

    echo "First element of array -> " . $cars[0] . "<br>";

    echo "<ul>";
    foreach ($cars as $car) {
        echo "<li>$car</li>";
    }
    echo "</ul>"
    ?>

</body>

</html>
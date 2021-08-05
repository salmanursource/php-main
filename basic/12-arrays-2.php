<!DOCTYPE html>
<html>

<body>
    <h1> *Associative Arrays* </h1>
    <h4> Associative arrays are arrays that use named keys that you assign to them</h4>
    <?php

    $countries = array(
        "IN" => "India",
        "US" => "United States of America",
        "AE" => "United Arab Emirates"
    );

    $countries = [
        "IN" => "India",
        "US" => "United States of America",
        "AE" => "United Arab Emirates"
    ];

    echo "IN is Country Code for " . $countries['IN'] . "<br><br>";

    foreach ($countries as $key => $value) {
        echo "Key = " . $key . ", Value =" . $value;
        echo "<br>";
    }
    ?>

</body>

</html>
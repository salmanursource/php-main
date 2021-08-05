<!DOCTYPE html>
<html>

<body>
    <h1>Do While Loop</h1>
    <h4> Condition is checked at the end. Hence, the loop will run at least once</h4>
    <?php

    $i = 1;

    do {
        echo "The number is: $i <br>";
        $i++;
    } while ($i <= 10);

    ?>

</body>

</html>
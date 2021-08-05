<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Echo session variables that were set on previous page
    echo "Welcome " . $_SESSION["user"] . "<br>";
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";

    //print_r($_SESSION);

    // remove all session variables
    //session_unset();

    // destroy the session
    //session_destroy();
    ?>

</body>

</html>
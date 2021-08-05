<!DOCTYPE html>
<html>

<body>

    <?php
    // Start the session
    session_start();

    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["user"] = "Rashid";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

</body>

</html>
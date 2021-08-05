<!DOCTYPE HTML>
<html>

<body>
    <h1> Update Person </h1>
    <?php

    $servername = "localhost";  // "127.0.0.1"
    $username = "root";
    $password = "";

    $dbname = "northwind";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_GET["id"];

    $sql = "SELECT id, first_name, last_name, email, `address` FROM persons where id = $id";
    $records = $conn->query($sql);

    if ($records->num_rows > 0) {

        $row = $records->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $address = $row["address"];

    ?>

        <form action="db-save.php" method="post">
            First Name: <input type="text" name="first_name" value="<?php echo $first_name ?>"><br><br>
            Last Name: <input type="text" name="last_name" value="<?php echo $last_name ?>"><br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email ?>"><br><br>
            Address: <input type="text" name="address" value="<?php echo $address ?>"><br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>"><br><br>

            <input type="submit">
        </form>

    <?php
    } else {
        echo "Some error occured in retrieving info..";
    }
    $conn->close();
    ?>

</body>

</html>
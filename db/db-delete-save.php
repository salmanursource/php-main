<!-- *db-save.php* -->
<!DOCTYPE HTML>
<html>

<body>
    <?php

    $servername = "localhost";  // "127.0.0.1"
    $username = "root";
    $password = "";

    $dbname = "northwind";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET["id"];

    $sql = "Delete from persons where id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
    <div>
        <a href="db-select2.php">View Records</a>
    </div>

</body>

</html>
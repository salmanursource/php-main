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

$sql = "SELECT id, first_name, last_name, email, `address` FROM persons";
$records = $conn->query($sql);

echo "Number of rows returned " . $records->num_rows . "<br>";
if ($records->num_rows > 0) {
    // output data of each row
    while ($row = $records->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name - " . $row["first_name"] . " " . $row["last_name"] . " | Email - " . $row["email"] . $row["address"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

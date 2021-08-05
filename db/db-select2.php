<?php include 'db-connect.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table,
        td,
        th {
            border: 1px solid gray;
            border-collapse: collapse;
            padding: 3px;
            text-align: center !important;
        }
    </style>
</head>

<body>
    <div class="w3-container">
        <h1> *View & Search Records* </h1>

        <form action="" method="get">
            <input type="text" name="searchTextBox" id="searchTextBox">
            <input type="submit" value="Search">
        </form>

        <?php


        if (!empty($_GET))  // on submit of form
        {
            $searchText = $_GET['searchTextBox'];
            $sql = "SELECT id, first_name, last_name, email, `address` FROM persons where first_name like '%$searchText%' or last_name like '%$searchText%' or email like '%$searchText%' ";
        } else {
            $sql = "SELECT id, first_name, last_name, email, `address` FROM persons";
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table class='w3-table-all w3-card-4'> <tr>  <th>ID</th>  <th>First Name</th>  <th>Last Name</th> <th>Email</th> <th>Address</th> <th>Edit</th> <th>Delete</th></th></th></tr>";

            while ($row = $result->fetch_assoc()) {
                $rowHtml =  "<tr>";
                $rowHtml .=  "<td>" . $row["id"] . "</td>";
                $rowHtml .=  "<td>" . $row["first_name"] . "</td>";
                $rowHtml .=  "<td>" . $row["last_name"] . "</td>";
                $rowHtml .=  "<td>" . $row["email"] . "</td>";
                $rowHtml .=  "<td>" . $row["address"] . "</td>";
                $rowHtml .=  "<td><a href='db-update.php?id=" . $row["id"] . "'>Update</a></td>";
                $rowHtml .=  "<td><a href='db-delete-save.php?id=" . $row["id"] . "'>Delete</a></td>";
                $rowHtml .= "</tr>";
                echo $rowHtml;
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <div>
            <a href="db-insert.html">Add Record</a>
        </div>

    </div>
    <?php include 'footer.php' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo of factorial program using class & object</title>
</head>

<body>
    <h1>
        Demo of Mutiplication program using class & object
    </h1>
    <form action="" method="post">
        <label for="numberTxtBox">Number: </label>
        <input type="text" name="numberTxtBox"><br><br>
        <input type="submit">
    </form>

    <?php
    include 'mutiplication.php';

    if (!empty($_POST)) {
        $num = $_POST["numberTxtBox"];
        $f = new Mutiplication();
        $f->number = $num;
        echo  $f->getMultiplicationTable();
    }
    ?>
</body>

</html>
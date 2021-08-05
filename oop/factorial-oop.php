<!DOCTYPE html>
<html lang="en">

<head>
    <title>Factorial Program using Class & Object Demo</title>
    <style>
        body {
            font-family: Arial, Helvetica;
        }
    </style>
</head>

<body>
    <h1>Factorial Program using Class & Object Demo</h1>
    <form action="" method="post">
        <label for="numberTxtBox">Number:</label>
        <input type="text" name="numberTxtBox"><br><br>
        <input type="submit">
    </form>

    <?php
    include 'factorial.php';
    include 'rectangle.php';

    if (!empty($_POST))  // on submit of form
    {
        $num = $_POST["numberTxtBox"]; // read value of textbox
        // echo "Num = $num <br>";
        $factObj = new Factorial($num);   // create an object of Factorial class
        $smallRectangle = new Rectangle(3, 4);
        $bigRectangle = new Rectangle(20, 30);

        // $cyl = new Cuboid();
        // $cyl->length = 10;
        // $cyl->width = 15;
        // $cyl->height = 20;

        // $cyl = new Cuboid(10, 15, 20);

        // $factObj->number = $num;   // set property number of factorial object

        echo "Factorial of $num = " . $factObj->getFactorial() . "<br>";
        echo "Area of rectangle = " . $smallRectangle->getArea() . "<br>";
        echo "Area of rectangle = " . $bigRectangle->getArea() . "<br>";
    }

    ?>

</body>

</html>
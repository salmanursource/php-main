<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $n = $_POST["numberTxtBox"];

    function getFact($n)
    {
        $fact = 1;
        $i = 2;
        while ($i <= $n) {
            $fact *= $i;
            $i++;
        }
        return $fact;
    }
    echo "Factorial of $n = " . getFact($n);
    ?>

</body>

</html>
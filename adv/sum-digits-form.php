<!DOCTYPE html>
<html>

<body>
    <h1> Sum of Digits Program </h1>
    <form action="sum-digits-form.php" method="post">
        Enter a number: <input type="text" name="numberTxtBox"><br>
        <input type="submit">
    </form>

    <?php
    if (!empty($_POST)) {

        function getSum($n)
        {
            $sum = 0;
            while ($n != 0) {
                $lastDigit = $n % 10;
                $sum += $lastDigit;
                $n = $n / 10;
            }
            return $sum;
        }

        $n = $_POST["numberTxtBox"];
        $sum = getSum($n);
        echo "Sum of entered digits is $sum";
    }
    ?>

</body>

</html>
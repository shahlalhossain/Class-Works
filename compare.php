<html>
<head>
    <title>Compare 2 Numbers</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        First Number: <input type="text" name="number1" /> <br>
        Second Number: <input type="text" name="number2" />
        <input type="submit" value="Compare" />

    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number1 = $_POST['number1']. "<br />";
    $number2 = $_POST['number2']. "<br />";

    if ($number1 && $number2) {
        echo ("Number1: " . $number1);
        echo ("Number2: " . $number2);

        if ((int)$number1 > (int)$number2) {
            echo "First Number is greater than Second Number";
        }

        if ((int)$number1 < (int)$number2) {
            echo "First Number is less than Second Number";
        }

        if ((int)$number1 == (int)$number2) {
            echo "Two Number is Equal";
        }
    }
}
?>

<html>
<head>
    <title>Multiplication</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <label for="number1">Input First Number:</label>
    <input type="text" id="number1" name="number1" /> <br>
    <label for="number2">Input Second Number:</label>
    <input type="text" id="number2" name="number2" />
    <input type="submit" value="Multiply" />

</form>
</body>
</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number1 = $_POST['number1'] . "<br />";
    $number2 = $_POST['number2'] . "<br />";

    if ($number1 && $number2) {
        echo("Number1: " . $number1);
        echo("Number2: " . $number2);

        $multi = (int)$number1 * (int)$number2;

        echo 'Multiplication of the Two Given Number ('.(int)$number1 .'x'. (int)$number2.') is = '.$multi;
    }
}
?>
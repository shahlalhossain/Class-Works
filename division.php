<html>
<head>
    <title>Division</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Input First Number: <input type="text" name="number1" /> <br>
    Input Second Number: <input type="text" name="number2" />
    <input type="submit" value="Divide" />

</form>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number1 = $_POST['number1']. "<br />";
    $number2 = $_POST['number2']. "<br />";

    if ($number1 && $number2) {
        echo("Number1: " . $number1);
        echo("Number2: " . $number2);

        if ((int)$number2 === 0) {
            echo "Cannot divide by zero";
            return;
        }

        $division = (int)$number1 / (int)$number2;

        echo 'Division of the Two Given Number ('.(int)$number1 .'÷'. (int)$number2.') is = '.$division;
    }
}
?>
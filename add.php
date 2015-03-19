<html lang="en">
<head>
    <title>Add 2 Numbers</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        First Number: <input type="text" name="number1" /> <br>
        Second Number: <input type="text" name="number2" />
        <input type="submit" value="Add" />
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number1 = $_POST['number1']. "<br />";
    $number2 = $_POST['number2']. "<br />";

    if ($number1 && $number2) {
        $sum = (int) $number1 + (int) $number2;
        echo "Sum of the Two Given number is: "."$sum";
    }
}
?>

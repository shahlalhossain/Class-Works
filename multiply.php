
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Input First Number: <input type="text" name="number1" /> <br>
    Input Second Number: <input type="text" name="number2" />
    <input type="submit" value="Multiply" />
</form>
</body>
</html>



<?php

$number1 = $_POST['number1']. "<br />";
$number2 = $_POST['number2']. "<br />";

$multi = $number1 * $number2;

echo "Multiplication of the Two Given number is ="."$multi";

?>
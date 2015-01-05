
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Input First Number: <input type="text" name="number1" /> <br>
    Input Second Number: <input type="text" name="number2" />
    <input type="submit" value="Compare" />
</form>
</body>
</html>



<?php

$number1 = $_POST['number1']. "<br />";
$number2 = $_POST['number2']. "<br />";


if($number1 > $number2)
{
    echo "$number1" . " is greater than" . " $number2";
}
else
{
    echo "Two Number is Equal";
}
?>

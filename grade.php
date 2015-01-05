
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">

    Input Number: <input type="text" name="number" /> <br>
        <input type="submit" value="Generate Grade" />
</form>
</body>
</html>




<?php

$number1 = $_POST['number'] . "<br />";

if($number1 >= 80 && $number1 <= 100)
{
    echo "A+";
}

elseif($number1 >= 70 && $number1 <= 79)
{
    echo "A";
}

elseif($number1 >= 60 && $number1 <= 69)
{
    echo "A-";
}

elseif($number1 >= 50 && $number1 <= 59)
{
    echo "B";
}

elseif($number1 >= 40 && $number1 <= 49)
{
    echo "C";
}

elseif($number1 >= 33 && $number1 <= 39)
{
    echo "D";
}

elseif($number1 >= 0 && $number1 <= 32)
{
    echo "Fail";
}

else
{
    echo "Invalid Number";
}

?>
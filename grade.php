<html>
<head>
    <title>Calculate Grade</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        Input Number: <input type="text" name="number" />
        <input type="submit" value="Generate Grade" />

    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number = $_POST['number'];

    if ($number) {
        if($number >= 80 && $number <= 100) {
            echo "Obtain Number:". (int)$number ." and Grade is: A+";
        } elseif($number >= 70 && $number <= 79) {
            echo "Obtain Number:". (int)$number ." and Grade is: A";
        } elseif($number >= 60 && $number <= 69) {
            echo "Obtain Number:". (int)$number ." and Grade is: A-";
        } elseif($number >= 50 && $number <= 59) {
            echo "Obtain Number:". (int)$number ." and Grade is: B";
        } elseif($number >= 40 && $number <= 49) {
            echo "Obtain Number:". (int)$number ." and Grade is: C";
        } elseif($number >= 33 && $number <= 39) {
            echo "Obtain Number:". (int)$number ." and Grade is: D";
        } elseif($number >= 0 && $number <= 32) {
            echo "Fail";
        } else {
            echo "Invalid Number";
        }
    }
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    if ($name) {
        echo "Hi, ". $_POST['name']. " have a good day!!!" ."<br />";
    }
}
?>

<html lang="en">
<head>
    <title>Greetings</title>
</head>
<body>
<form action="" method="POST">
    <label for="name">Enter Name: </label>
    <input type="text" id="name" name="name" />

    <input type="submit" value="Go" />
</form>
</body>
</html>
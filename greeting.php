<?php

echo "Hi, ". $_POST['name']. " have a good day!!!" ."<br />";
?>

<html>
<body>
<form action="" method="POST">
    Input Username: <input type="text" name="name" />

    <input type="submit" value="Go" />
</form>
</body>
</html>
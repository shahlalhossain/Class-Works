<?php

$x = 0;
$y = 1;


for($i=0;$i<=99;$i++)

{

    $z = $x + $y;
    echo $z."\n";
    $x=$y;
    $y=$z;
}
?>
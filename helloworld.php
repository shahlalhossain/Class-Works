<!-- Example 1-->

<?php //Start php
echo 'Hello World'; //statement ends with semicolon(;) sign.
echo '<br>';
?><!-- End php-->



<!--('') and (;) are two php Syntax-->
<!--echo 'Hello World';-->
<!--Nothing-->




<?php
//Example 2

$valueA = 20;

$valueB = 15;

if($valueA > $valueB){

    echo "Value A is Bigger than Value B";

    echo '<br>';

    $valueA = $valueB; //assigns the value of B to A

    print "Value A is now equal to: $valueB";

    echo '<br>';
}




//Example 3

$a = 123456789;

echo $a; //results in the value of $a bring printed

echo '<br>';

echo '$a'; //results in the word $a bring printed

echo '<br>';

echo "$a"; //results in the value of $a bring printed

echo '<br>';

echo "Hello $a how are you?";

echo '<br>';

echo 'Who said: "I\'ll be back"?';
//Who said: "I'll be back"?

$school1 = "Doulot Khan Govt Girl's High School";

$school2 = 'Doulot Khan Govt Girl\'s High School';

echo '<br>';

echo $school1;

echo '<br>';

echo $school2;






//Example 4

echo '<br>';

$name = 'Shahlal Hossain';

for ($i=1; $i<=5; $i++)
{
    echo "Hello $name <br/>";
}


//Example 5

$name = 'Shahlal Hossain';

echo '"Hello World"';

echo '<br>';

echo "\"This is a message from $name\"";

echo '<br>';




//Example 6

$number1 = "100";

$number2 = 12;

$world = "Hello";


echo '<br>';

echo $number1 + $world;

echo '<br>';

echo $number1 + $number2;

echo '<br>';

echo $world + $world;
echo '<br>';



//Example 7

$x = (7+3) * 6;
echo $x;
echo '<br>';

$y = 100/(4*5);
echo $y;
echo '<br>';

$z = 7 + (5 * (8/2) + (4+6));
echo $z;
echo '<br>';


//Example 8 (about array)
$words_in_sentence = array('Programming', 'in', 'PHP', 'is', 'fun');

echo $words_in_sentence[2];
echo '<br>';

$my_test_array1 = array('2' => 1, '3' => 3, "b" => 4, '4' => 4);
$my_test_array1[5] = "Shahlal";

//echo $my_test_array1[5];
var_dump($my_test_array1);

//$my_test_array2 = array('Shahlal' => 5);
//$result = array_merge($my_test_array1, $my_test_array2);
//var_dump($result);
echo '<br>';



//Example 9 (about array)
define ('TEST', 'This is a test');
echo TEST . PHP_EOL;
//echo Test . PHP_EOL;
echo '<br>';



//Example 10 (about array)
$fruit = array("grapes", "apple", "cherry");
echo $fruit[2][3];
echo '<br>';



//Example 11 (about array)
$arr = array("data" => "USA", 12 => true);
echo $arr['data'];
echo '<br>';
echo $arr['12'];
echo '<br>';


//Example 12 (about array)

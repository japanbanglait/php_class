<?php
$color = "red";
echo "My car is " . $color . "<br>"; //need to add dot if you want to add any line before or after any variable

echo " i'm  learning  php <br>";
$txt = "W3Schools.com"; // $ sign use befor variable
echo "I love $txt! <br>"; // can call var inside ""

$x=5;
$y=6;
echo $x + $y . "<br>"; //  example of sum
var_dump($x); #  this function use for finding variable data type & value
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$x = $y = $z = "Fruit";
echo "<br>".$x .$y .$z;

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
function mTest() {
    $a = 6; // local scope
    global $x; // calling global function inside function
    echo "sum =" . $a + $x;
    echo "<p>Variable x inside function is: $a</p>";
  }
  mTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: </p> <br>";

  $C= 4;
  $D= 5;
function mySum (){
    $GLOBALS['C'] = $GLOBALS['C'] + $GLOBALS['D'];
}
mySum ();
ECHO $C . "<br>";

function ytest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  ytest();
  echo "<br>";
  ytest();
  echo "<br>";
  ytest();


?>
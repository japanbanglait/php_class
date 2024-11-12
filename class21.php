<pre>
<?php

echo "i am sabbir";
echo "<br>";
$x = 6;
$y = 9;
echo $x + $y;
$x = 5; // global scope
function myTest($x) {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  } 
  myTest($x);
  
  echo "<p>Variable x outside function is: $x</p>";
  function mystaticfunc() {
    static $x = 1;
    echo $x;
    $x++;
  }
  
  mystaticfunc();
  echo "<br>";
  mystaticfunc();
  echo "<br>";
  mystaticfunc();
  class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  echo "<br>";
  $x = "John";
 echo "Hello $x";
 echo "<br>";
 $x = "Hello World!";
 echo str_replace("World", "Dolly", $x);
 echo "<br>";
 $x = "Hello World!";
 echo strtolower($x);
 echo "<br>";
 $x = "concatenate";
 $y = "string";
 $z = "$x $y";
 echo $z;
 echo "<br>";
 $x = 'i am \'happy\' ';
echo $x;
echo "<br>";
$x = "Hello\nWorld";
echo $x;
echo "<br>";
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>



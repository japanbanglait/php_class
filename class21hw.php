<?php
echo "<p>PHP is Fun!</p>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";

$txt1 ="php";
echo "<h1>my $txt1</h1>";


print "Hello";
//same as:
print("Hello");

//-------------- php data type-----------

 $a = "hello world"; //string
 echo " <br>";
  var_dump( $a);

$b = 4567; //integer
echo " <br>";
var_dump( $b);

$c = 3.04;//float
echo " <br>";
var_dump( $c);

$d = true;//bool
echo " <br>";
var_dump( $d);

$e = array("index1","index2", "index3");
echo " <br>";
var_dump( $e);

//object

class Car {
public $color;
public $model;
public function __construct($model,$color){

    $this->color = $color;
    $this->model = $model;
}
public function messege(){
return  "my car is" . $this->color . " " . $this->model . "!" ; 
}

}
$myCar = new Car("red", "Volvo");
var_dump($myCar); 

//null
$A = null;
var_dump($A);

//change data type
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

//string

$B= " esha"; // difference between double & single quotes
echo "hello $B <br>";
echo 'hello $B'. "<br>";
echo strlen($B) . "<br>"; // string length count
echo str_word_count($B) ."<br>";// string word count
echo  strpos("hi ehsa", "hi"); // spotting a string

echo  " <br>" . strtoupper($B) . "<br>";//upper case letter conversion
echo strtolower($B);// lower case letter conversion
echo "<br>" . str_replace("esha","farsa",$B); //string replace
echo  "<BR>" . strrev($B) . "<br>"; // string reverse

echo "<input value='" . $B . "'>";
echo "<br>";
echo "<input value='" . trim($B) . "'>" ,"<br>";// removing white space

$y =  explode(" ", $B);//converting string into arry
print_r ($y);

//-----------string concatenate-----------
$m = "Hello";
$n = "World";
$z = $m . $n;
echo $z;
$Z = " $m $n";
echo "<br>"  . $Z;

//--------------string slicing-----------
$v = "Hello World!";
echo "<br>" . substr($v, 6);
echo "<br>" . substr($v, -5, 3);
echo "<br>" . substr($v, 5, -3);

// ----------Escape Characters------------
$g = "We are the so-called \"Vikings\" from the north.";
echo  "<br>" . $g;

//-----------number-----------

$e = 5985;
var_dump(is_int($e)) ."<br>";//integer

$f = 59.85;
var_dump(is_int($f)) ."<br>";

$j = 10.365;
var_dump(is_float($j)) ."<br>";//float

$k = 1.9e411;
var_dump($k);// finit or infinite
echo "<br>";
$i = acos(8);
var_dump($i);// NaN, NOT A NUMBER
echo "<br>";
$j = 5985;
var_dump(is_numeric($j));//  to find ,if the num is numeric or not numeric
echo "<br>";
// Cast float to int
$p = 23465.768;
$int_cast = (int)$p;
echo $int_cast;

echo "<br>";

// Cast string to int
$q = "23465.768";
$int_cast = (int)$q;
echo $int_cast;


?>
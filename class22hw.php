<?php 

//----------casting--------------

//to cast to string

$a = 5; //int
$b = 5.23; //float
$c = "hello"; //string
$d = true; //bool
$e = NULL; //NULL

 $a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e; 

/* $a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e; */

/* $a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e; */

/* $a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e; */

/* $a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e; */

/* $a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e; */

/* $a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e; */

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//----------math----------
echo (pi());
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
echo (abs(-6.54));
echo "<br>";
echo(sqrt(64));
echo "<br>";
echo(round(0.60));
echo "<br>";
echo(round(0.49));
echo "<br>";
echo(rand());
echo "<br>";
echo(rand(10, 100));
echo "<br>";

//------------php constant--------------

define("ESHAS_ATTIRE", " Welcome to ESHA'S ATTIRE ");
echo ESHAS_ATTIRE;
echo "<br>";
const MYCAR = "Volvo";
echo MYCAR;
echo "<br>";

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
  return __FUNCTION__;
}

 echo  "<br>" . myTest();


//---------magic constant-------------
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;
echo  "<br>" . __LINE__;

//------------- operators ---------------
$x = 10;  
$y = 6;

echo "<br>" . $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";
echo $x ** $y . "<br>";

//----------------- assignment operators ----------------  
$x += 100;
echo $x . "<br>";

$x -= 30;
echo $x  . "<br>" ;
$x*=2;
echo $x . "<br>" ;
$x/=20;
echo $x . "<br>" ;
$x %= 3;
echo $x . "<br>" ;

// Comparison Operators

var_dump($x == $y);
echo "<br>" ;
var_dump($x === $y); 
echo "<br>" ;
var_dump($x != $y); 
echo "<br>" ;
var_dump($x !== $y); 
echo "<br>" ;
var_dump($x > $y); 
echo "<br>" ;
var_dump($x < $y);
echo "<br>" ;
var_dump($x >= $y);
echo "<br>" ;
var_dump($x <= $y);  
echo "<br>" ;
//PHP Increment / Decrement Operators

echo ++$x;
echo "<br>" ;
echo $x++;
echo "<br>" ;
$a= 5;
echo --$a;
echo "<br>" ;
echo $a--;
echo "<br>" ;
//PHP Logical Operators
$c = 100;  
$d = 50;

if ($c == 100 and $d == 50) {
    echo "Hello world!";
}
echo "<br>" ;
if ($c == 100 or $d == 80) {
    echo "Hello";
}
echo "<br>" ;
if ($c == 100 xor $d == 80) {
    echo "Welcome!";
}
echo "<br>" ;
if ($c == 100 && $d == 50) {
    echo "Hello world!";
}
echo "<br>";

if ($c == 100 || $d == 70 ){
    echo "hello teacher";
}
echo "<br>";

if(!($c == 80)){
    echo "welcome student";
}
echo "<br>";

//String Operators (Concatenation)
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
echo "<br>";

//Array Operators
$e = array( "a" => "red" , "b" => "green");
$f = array( "c" => "blue" , "d" => "yellow");
print_r($e + $f);
echo "<br>";
var_dump($e == $f);
echo "<br>";
var_dump($e === $f);
echo "<br>";
var_dump($e != $f);
echo "<br>";
var_dump($e <> $f);
echo "<br>";
var_dump($e !== $f);

//---------PHP If...Else...Elseif---------
if (5>4){
    echo  "<br>" . " have a good day";
}

if($d < 70){
    echo "<br>" . "good morning" . "<br>";
}

// Comparison Operators
$g = 100;  
$h = 100;

if ($g === $h) {
  echo "$g is identical to $h";
}
echo "<br>";
if ($g != $h) {
    echo "$g is not equal to $h";
}
echo "<br>";

$i = 1;
$j = 8;
$k = 5;

if($i<$j && $j > $k){

    echo "both conditions are true";
}
echo "<br>";

if ($i == 1 || $i == 2 || $i == 3){
    echo " $i is a number between 1 to 3";
}

// if ..elseif.. else

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";

$j = 5;

if ($j < 10) $k = "esha";
echo $k . "<br>";

$l = 13;
$m = $l <10 ? "farsa" : "nawer";
 echo $m;

 $a = 13;

if ($a >10){
echo "above 10";
 if($a>20){
     echo "grater then 10";
 } else{
     echo "not more then 20";
 }
}
echo "<br>";

//--------switch----------------
$favcolor = "red";

switch($favcolor){
 case "red" :
 echo "favorite color red ";
 break;
 case "blue" :
 echo "favorite color blue";
 break;
 case "green" :
 echo "favorite color green";
 break;
 default :
 echo " your favorite color is is neither red, blue, nor green! ";
} 
echo "<br>";

//-----------loops------------

//while loops
$p = 1;

while ($p < 6) {
  echo $p;
  $p++;
}
echo "<br>";


$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
echo "<br>";

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
echo "<br>";

$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;

echo "<br>";

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i . "<br>";
}

//do while loops

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);


for( $x = 0; $x <= 10; $x++){
    echo "the number is : $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br> <br>";
  }

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3)continue;
    echo "The number is: $x <br>";
  }


  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }

  // foreach

  $color = array("red", "green", "blue", "yellow");

  foreach($color as $x){
    if ($x == "blue") break;
    echo "$x <br>";
  }

  $members = array( "peter" => "35", "jon" => "45", "leo" => "47", "kim" => "37");

  foreach($members as $x => $y){

    echo "$x : $y <br>";
  }

  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "green") $x = "pink";
}

var_dump($colors);



//------------------- function--------------------

function myMessage(){

  echo "Hello World ! <br>";
}

myMessage();

function familyName ($name){
  echo " $name Rafnes <br>";
}

familyName ("janny");
familyName ("kim");

function family($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

family("Hege", "1975");
family("Stale", "1978");
family("Kai Jim", "1983");

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight( 70);
setHeight( );


function sum($x , $y){

 $z = $x +$y  ;
  return $z;
}
echo "5 +  10 = " . sum(5, 10) . "<br>";

function add_five(&$value){
  $value += 5;
}

 $num =2;
 add_five($num);
 echo $num;


 //variadic function

 function sumMyNumbers(...$x){
  $n = 0;
  $len = count($x);
   for($i = 0; $i < $len; $i++){
   $n += $x[$i]; 
  }
  return $n;
 }
 
 $a = sumMyNumbers(5, 2, 6, 2, 7, 7);

 echo "<br>" . $a; 

 
 function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

//----------array-------------

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
echo "<br>";

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

echo "<br>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

echo "<br>";

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

var_dump($fruits);

echo "<br>";
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";


echo "<br>";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);

echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

//Output the array:
var_dump($cars);

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);

echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);



 












?>

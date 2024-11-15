<pre>
<?php
echo "class 22 homework";
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
echo "<br>";
echo(pi());
echo "<br>";
echo(min(0, 150, 35, 15, 9, -250) . "<br>");
echo(max(0, 150, 35, 15, 9, -250));
echo "<br>";

echo(abs(-6.7));

echo "<br>";
define("GREETING", "Welcome to japan bangla it.com!");
echo GREETING;
echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
echo "<br>";


class Fruits {
    public function myValue(){
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  echo "<br>";
  echo __DIR__;
  echo "<br>";
  echo __FILE__;
  echo "<br>";
  function myValue(){
    return __FUNCTION__;
  }
  echo myValue();

  echo "<br>";
  $x = 102;  
$y = 8;

echo $x / $y;
echo "<br>";
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}


echo "<br>";
$x = 100;  
$y = 100;

if ($x >= $y) {
  echo "$x is greater than, or equal to $y";
}
echo "<br>";
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
echo "<br>";
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
echo "<br>";
function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
echo "<br>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
echo "<br>";
function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, myFunction);
  
  $myArr[2]();
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

?>
</pre>
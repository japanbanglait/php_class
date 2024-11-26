<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
    <style>
        
    </style>
</head>
<body>
    <h1>PHP Class 22</h1>
    <h2>PHP Number</h2>
    <p>There are three main types of number of PHP</p>
    <ol>
        <li>Integer</li>
        <li>String</li>
        <li>Boolean</li>
    </ol>
    <?php
    $x = 10;
    $y = 12.5;
    $z = "20";
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    ?>
    <hr>
    <h2>PHP Casting</h2>
    <p>PHP casting is needed to change a variable from one data type to another</p>
    <h3>Cast to String</h3>
    <?php
     $a = 10;
     $b = 8.4;
     $c = "PHP";
     $d = true;
     $e = NULL;
     $a = (string)$a;
     $b = (string)$b;
     $c = (string)$c;
     $d = (string)$d;
     $e = (string)$e;
     var_dump($a);
     echo "<br>";
     var_dump($b);
     echo "<br>";
     var_dump($c);
     echo "<br>";
     var_dump($d);
     echo "<br>";
     var_dump($e);
    ?>
    <h3>Cast to Integer</h3>
    <?php
    $x = "10";
    $y =10.5;
    $z = true;
    $x =(int)$x;
    $y =(int)$y;
    $z = (int)$z;
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
   ?>
   <h3>Cast to Array</h3>
   
   <?php
   $x = 10;
   $y =10.5;
   $z = true;
   $x =(array)$x;
   $y =(array)$y;
   $z = (array)$z;
   var_dump($x);
   echo "<br>";
   var_dump($y);
   echo "<br>";
   var_dump($z);
  ?>
  <h1>PHP Math Function</h1>
  <ol>
    <li>pi()</li><li>min()</li><li>max()</li><li>abs()</li><li>sqrt()</li><li>round()</li><li>random()</li>
    <br>
  <?php
  echo "1. pi(): ";
  echo (pi());
  echo "<br>";

  echo "2. max(): ";
  echo(max(10,20,30,40));
  echo "<br>";

  echo "3. min(): ";
  echo(min(10,20,30,40));
  echo "<br>";

  echo "4. abs(): ";
  echo(abs(-10.5));
  echo "<br>";

  echo "5. sqrt(): ";
  echo ("10^2: " . sqrt(100));
  echo "<br>";
  echo ("0^2: " . sqrt(0));
  echo "<br>";
  echo ("1^1: " . sqrt(1));
  echo "<br>";

  echo "6. round(): ";
  echo (round(10.5));
  echo "<br>";
  echo (round(10.3));
  echo "<br>";

  echo "7. rand(): ";
  echo(rand());

  ?>
  <h1>PHP Constant</h1>
  <p>To create a constant, must use the "define(name, value)"</p>
  <ol>
    <li>Define(name, value)</li><li>Const Keyword</li><li>Constant Array</li><li>Constant Global</li>
  </ol>
  <p><strong>Define</strong> is used to show Global and Array constant.</p>
  <br>
  <?php
  define("name", "1. define(name, value) : This is PHP constant");
  echo name;
  echo"<br>";
  const car = "2. Const : Nissan";
  echo car;
  echo "<br>";
  define("cars", ["Tyota", "Nissan"]);
  echo "3. Constant Array : " . cars[1]; 
  echo "<br>";

  define("how", "4. Global Constant: This is PHP Global constant");
  function myTest(){
    echo how;
}
myTest();
  ?>
  <h2>PHP Operators</h2>
  <ol>
    <li>Arithmetic Operators</li><li>Assingment Operators</li><li>Comparison Operators</li><li>Increment/Decrement Opeartor</li>
    <li>Logical Operator</li><li>String Operator</li><li>String Opeeator</li><li>Array Operator</li><li>Conditional assignment Operator</li>
</ol>
<br>
  <?php
  $x = 20;
  $y = 10;
  
  echo "Arithmetic Operators($x + $y): " . $x + $y; 
  echo "<br>"; 
  echo "Arithmetic Operators($x - $y): " . $x - $y;
  echo "<br>";  
  echo "Arithmetic Operators($x * $y): " . $x * $y; 
  echo "<br>"; 
  echo "Arithmetic Operators($x / $y): " . $x / $y; 
  echo "<br>";  
  echo "Arithmetic Operators($x % $y): " . $x % $y; 
  echo "<br>"; 
  echo "Arithmetic Operators($x ** $y): " . $x ** $y; 
  echo "<br>";
  
?>
<?php
$a = 20;
$a += 100;
echo "Assignment Operators +=a" . $a;

?>


   

</body>
</html>
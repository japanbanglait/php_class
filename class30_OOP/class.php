<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Object Oriented Program</h2>
  <h3>Class</h3>
  <?php
  class party{
    public $name = "The name of party is Mission Japan";
    public $number = "Members are 1000";
    public $address = "Tokyo";
  }
  function info(){
    return "Missionary Team";
  }
  $group = new party();
  echo $group-> name. "<br>";
  echo $group->number. "<br>";
  echo $group->address;
  #echo $group->info();
?>
<p>=====================**=================</p>
<h3> Dynamic Class</h3>
<?php
class car{
    public $name; 
    public $number;
    public $address; 
  }
  function Dynamic(){
    return "Missionary Team";
  }
   $group = new car();
   $group-> name = "Toyota";
   echo $group->name ."<br>";

   $group = new car();
   $group-> number = 1000; 
   echo $group->number."<br>";

   $group = new car();
   $group-> address = "Tokyo"; 
   echo $group->address;
  
?>
<p>===============***================</p>
<p>Method and Object inside the class</p>
<?php
// class car{
//     public $name; 
//     public $number;
//     public $address; 
//   }
//   function Dynamic(){
//     return "Missionary Team";
//   }
//    $group = new car();
//    $group-> name = "Toyota";
//    echo $group->name ."<br>";

//    $group = new car();
//    $group-> number = 1000; 
//    echo $group->number."<br>";

//    $group = new car();
//    $group-> address = "Tokyo"; 
//    echo $group->address;
class subject{
       public $english; 
       public $marks;

  function info($english, $marks){
    $this->english = $english;
    $this->marks = $marks;
    
    return  "Medium : " .$this->english. "Marks : ".$this->marks;
  }
}
$mahir = new subject();
echo $mahir->info(" English ", 70);
echo "<br>";

$sabbir = new subject;
echo $mahir->info(" Bangla ", 80);

?>  
</body>
</html>
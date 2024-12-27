<?php
class subject{
    public $english; 
    public $marks;

function info(){
 
 return  "Medium : " .$this->english. "Marks : ".$this->marks;
}
}
class mahirinfo extends subject{
   public function message(){
    return "This is Inheritance";
   }
}
$mahir = new mahirinfo("English :", "70" );
echo $mahir->info();


?>
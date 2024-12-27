<?php

class car{
    public $name; 
    public $number;
    public $address; 
  }
   function __construct($name, $number, $address){
    $this->name = $name;
    $this->number= $number;
    $this->address = $address;
  }
  function info(){
    return "Name : ". $this->name. "Number". $this->number. "Address ".$this->address;
  }
  $mahir = new car("Toyota", "2000", "Tokyo");
  echo $mahir->info();
  
  ?>
<?php

/**
 * inheriting base class methods and properties in the child class . 
 * is called inheritance.
 * variables and methods which are difined inside the parant class are 
 * accisible to child class . 
 * To perform inheritace we need to make one class child class to other .
 * child class can use the properties of base class but base class cant use child class properties and methods.
 * 
 * to make child class we uses extends keyword.
 * 
 */


 class animal{      //base class

   public  $color, $weight,$hight,$sound;
   function __construct($c="black",$h=5,$w=50,$s="mav"){

    $this->color =$c;
    $this->hight =$h;
    $this->weight =$w;
    $this->sound =$s;


   }

   function show(){
    echo (
        "color is : ".$this->color."</br>".
        "height is : ".$this->hight."</br>".
        "weight is : ".$this->weight ."</br>".
        "sound is : ".$this->sound ."</br>"
    
    );
   }
 }

 class cat extends animal{          //derived class
    public $name, $bread;
    function __construct($n,$b){
        $this->name = $n;
        $this->bread=$b;
    }

    function show(){
        echo "<pre>";
        echo (
            "color is : ".$this->color."</br>".
            "height is : ".$this->hight."</br>".
            "weight is : ".$this->weight ."</br>".
            "sound is : ".$this->sound ."</br>".
            "name is : ".$this->name ."</br>".
            "bread is : ".$this->bread ."</br>"
        );
    }
 }
$an1 = new animal("yellow",5,22,"df");
 $cat1 = new cat("rina","dark");

 $cat1->show();




  
 //** second example of inheritance  */

 class employee{
    public $name, $age ,$salary;

    function __construct($n='nikhil',$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }

    function info()
    {
        echo "<h1> <center> Employee prof </center></h1>";
        echo "Employee name : ".$this->name."</br>";
        echo "Employee age : ".$this->age."</br>";
        echo "Employee salary : ".$this->salary."</br>";
    }
 }


 class manager extends employee{
    function __construct(){
        echo "<br> <h1> manager constructor colled </h1>";
    }
 }


  $e1 = new employee('nikhil',22,2000000);
$e1->info();

$m1 = new manager();
$m1->info();
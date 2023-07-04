<?php

/**
 * class : it is a  bluerint of the objects.
 *          which contains properties and methods .
 *  object : it is instance of the class without 
 *          object class have not any physicle instance.
 *          we can use class methods and properties using object. 
 * 
 * this   : this is a special type of keyword which is used to 
 *          refrence  curront object of the class. 
 *          it also uses $sign before this keyword ans uses -> then property name . 
 * 
 * constructor  : this is a special type of method in php which called
 *              automatically when object of that class is created 
 * 
 *              we can create it using __constroct() and pass params to use properties 
 *              this method have params or may not .  
 */

 class car{
  public  $color,
    $wheels,
    $window,
    $company,
    $isnew ;

    function drive(){
        echo " car is driving by driver </br>";
    }

    function engin(){
        echo " Engine started successfully </br>";
    }

    function details(){
        echo (
        "car color : ".$this->color. " </br>".
        "car wheels : ".$this->wheels. " </br>".
        "car window : ".$this->window. " </br>".
        "car company : ".$this->company. " </br>".
        "car company : ".$this->isnew);
    }
 }

 $c1 = new car();
 $c1->color = " red" ;
 $c1->details();

 class calculator{
    public $a,$b,$c;

    function sum ( $a,$b){
        $this->a = $a ; 
        $this->b =$b;

        $this->c= $this->a +$this->b;

        return $this->c;
    }

    
    function mult ( $a,$b){
        $this->a = $a ; 
        $this->b =$b;

        $this->c= $this->a  * $this->b;

        return $this->c;
    }

    
    function sub ( $a,$b){
        $this->a = $a ; 
        $this->b =$b;

        $this->c= $this->a - $this->b;

        return $this->c;
    }
    
    function div ( $a,$b){
        $this->a = $a ; 
        $this->b =$b;

        $this->c= $this->a / $this->b;

        return $this->c;
    }
 }

 $cal1= new calculator();

 echo "answer of sum is = ".$cal1->sum(6,8). "</br>";
 echo "answer of sub is = ".$cal1->sub(6,8). "</br>";
 echo "answer of div is = ".$cal1->div(6,8). "</br>";
 echo "answer of mult is = ".$cal1->mult(6,8). "</br>";


// q1 write the class which will print 'my class has initialized !' .

class myclass{
    function __construct(){     //this is constructor which called automatically when object is created .
        echo "'My class has initialized !'";
    }
}

$my1 = new myclass();

/**
 * write an introductory message 
 * "hello all, I am nikhil",where "nikhil"is  an argument value
 *   of methos within class. 
 */

 class arg{
    function __construct($name){
        echo "</br>"."\"hello all, I am ".$name."\"";

    }
 }

 $ar1 =new arg("nikhil");


 /**
  * write a class that claculates factorial of a number 
  */

  class factorial{
    public $no,$ans;

    function fact($no){
        $this->no = $no;
        $fact =1;
        for ($i=1; $i<= $this->no ; $i++){
            $fact = $fact * $i;
        }
        echo " ans is : ".$fact;
    }
  }

  $fac1 = new factorial();
  $fac1->fact(5);


  /**
   * write a function that takes an array as input and sort that array
   * using sort function .

   */

   class sorting{
    public $arr;

    function sor(array $arr1){
        print_r ($arr1);
        $this->arr = $arr1;
echo "</br>";
        $sorted = $this->arr;
        sort($sorted);

        print_r($sorted);
        
    }

   }

   $test = new sorting();

   $test->sor(array(2,1,4,6,8));
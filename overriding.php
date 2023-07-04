<?php

/**
 * PROPERTY OVERRIDING : when we uses same property of a class inside another class is called 
 * property overriding.
 * 
 * property takes value of property based on their class . if the object is of base class then it will take property as base class peoperty.
 * if that peoperty of class is of child class then that will show property of child class.
 * 
 * 
 * 
 * METHOD OVERRIDING : when we uses same function of base class in another class is called method 
 * overriding . in that method no of params are same and same function name .
 * means same function with same no of parameters is called method overriding.
 * 
 * the function will be return values based on their class returned funtion .
 * 
 */

 class base {
    public $name = "base class property";

    public function calc($a,$b){
        return $a*$b;
    }
 }
 class child  extends base {
    public $name = "child class property";

    public function calc($a,$b){
        return $a+$b;
    }
 } 

 //creating object of base class to see output 
 $b1 = new base();
 echo $b1->name;
echo  $b1->calc(2,5);   // in parent class its performing multiplication but in child its performing addition. 

echo"</br></br>";

  //creating object of child class to see output 
  $c1= new child();
  echo $c1->name;
echo $c1->calc(2,5);    // in the child class this method performing adding insted of this in  base class its performing multiplication.

echo "</br></br>";


/**
 * 
 * function overloading : when function with same name but diffrent no of parameters is called function overloading .
 *  in php we cant use funtion overloading like other oops supported languages.
 * 
 * to use function overloading in php we uses magic function
 * which is 
 * __call(funtion name ,no of  arguments ){
 * }
 * __call()  : this function takes two arguments funtionname and no of arguments. 
 */
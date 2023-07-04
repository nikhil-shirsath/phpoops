<?php

/**
 * when we want to create a class and we dont want that other cam esily create its object and access that class 
 * at that time we uses abstract class or we makes a class abstract .
 * 
 * to make a class abstract  we need to use abstract keyword before class name 
 *  we can access that class using creating a derived class of that class . 
 * its a secure class .
 * 
 * 
 * 
 * 
 *  when we creates a abstract class there are conditions that 
 * 1.there must be a abstract method
 * 2.only declare abstract method inside the base class with abstrack keyword . 
 * 3. define that abstract class inside derived class .
 */

 //create a abstract class with abstract keyword 

 abstract class base {

    protected $name= "accessed ";
    
    abstract protected  function show($a,$b); 
 }

 class derived extends base {

    public function show($x,$y){     //public because we have to call outside the class 
        echo  $x+$y;                    // in defination must be same as parent class declaration
        echo $this->name;
    }
 }
//  $b1 = new base();  //Fatal error: Uncaught Error: Cannot instantiate abstract class base.

$c1 = new derived();
$c1->show(10,22); //using derived class object we can access abstract method.
 
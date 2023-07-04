<?php

/**
 * interface : unlike inheritace one class inheriting properties and methods of another one class is inheritance,
 *          but if we want that one class should be inheriting from multiple classes then its not possible in inheritance.
 *          for that we have a consept of interface .
 * 
 * using interface we can inherit multiple classes inside one class ,
 * 
 * for this we dont have to create a class we have to create interface .
 * it have some restrictions
 * 1. we cant define   properties.
 * 2. it works like abstract class we cant create its abstract class .
 * 3. all methods are abstract methods we will just declare them cant define
 * 4. we will define them inside derived class.
 * 5.dont have to give any acess modifiers
 * 
 * it can be use by classes only byt use implements keywords and all the interface name .
 * 
 */

 interface A {
   //$a;            //cant declare or define variables indide interface
    function sum($a,$b);
 }

 
 interface B {
    function sub($a,$b);
 }

 
 interface C {
    function mult($a,$b);
 }

 class derived implements A,B,C{
    public function sum($a,$b){     //must be implement 
        echo $a+$b."</br>";
    }
    public function sub($a,$e){
        echo $a-$."</br>";
    }
    public function mult($a,$b){
        echo $a*$b."</br>";
    }
 }

 $d1= new derived();

 $d1->sub(2,4);
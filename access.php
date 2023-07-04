<?php

/**
 * we can apply restrictions to access methods and properties .
 * keywords which are useful to apply restrictions on the properties and methods
 * are called access specifiers .
 *1.private 2. public 3.protected

 private ; access private property we need a constructor or a another public function 
 
 1 public ; we can access this specifier inside class , in base class and outide the class .
 */

 class A {
   public $name;
   
   public function show(){
    echo " this fumction inside the class A ". $this->name;
   } 
 }


 class B extends A{

    public function get(){
        echo " <br> function in class B : ".$this->name;
    }
 }
 $a1= new A();
 $a1->name = " nikhil ";
 $a1->show(); 

 $a1= new B();
 $a1->name = " nikhil shirsath";
 $a1->get(); 






class base {
  // public $name ;

  protected $name;
  protected $age;
  public function __construct($n){
    $this->name = $n;
  }
  public function show(){
    echo " </br> base class name is : ".$this->name;
    echo " </br> base class age is : ".$this->age;

  }


}

class derived extends base{

function __construct(){
  echo " </br> <h1>derived class worked </h1>";
  // info(77);
}

}



$b1= new base("animal ");
$b1->show();    //public function accessible outside the class also 
//$b1->name = "dog"; //public property accessible outside the class also 
$b1->show();    

/**
 * now a i have changed access specifier to protected .
 * it accisible in drived class and itself .
 * 
 * we can change private access specifiers property using constructor or another method.
 */

//  $b1->name = "nikhil";// this will give error.
$b1 = new base (" cow "); // in this way we are changing using constructer and that constructor is public.

$b1->show();

// $b1->info(10);
$b1->show();


$d1 = new derived();


/**
 * private access specifiers this are accisible inside that class itself .
 * this cannt access outside the class or derived class .
 * To use private properties we need a public constructor or a public function of that same class .
 */



 class pbase{
  private $locker;

  public function __construct($amt){
    $this->locker = $amt;
  }

  public function showAmt(){
   echo "</br > <h1>". $this->locker ."<h1>";
  }
 }

 $lc1= new pbase(2000);
 $lc1->showAmt();
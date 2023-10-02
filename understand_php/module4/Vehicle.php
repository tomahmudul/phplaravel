<?php
// class Vehicle{
//     public $name;

//     public function start(){
//         echo $this->name ." Engine start.....\n";
//     }

//     public function end(){
//         echo $this->name ." Engine stop\n";
//     }   

//     public function drive(){
//         echo "I am drive in parent class.\n";
//     }
    
// }

// class car extends Vehicle{
//     public function drive(){
//         echo "I am drive in car class.\n";
//     }
// }

// class Motorcycle extends Vehicle{
//     public function drive(){
//         echo "I am drive in motorcycle class.\n";
//     }
// }


// $mycar = new Car();
// $mycar->name = "BMW";

// $mycar->drive();

// $bike = new Motorcycle();
// $bike->name = "Triumph Tiger";

// // calling child class method
// $bike->drive();


// class ParentClass{
//     protected $name = "";

//     function __construct($name) {    

//         echo "I am parent class constructor.\n";
//         $this->name = $name;
//         $this->sayHi();        
//     }
//     function sayHi(){
//         echo "Hi {$this->name}\n";
//     }

//     function newMethod(){
//         echo "child class method\n";
//     }

// }

// class ChildClass extends ParentClass{

//     function sayHi(){
//         echo "Hello {$this->name}";
//         $this->newMethod();
//     }

    
// }

// $cc = new ChildClass('ABCD');
abstract class Dumper{

    abstract public function dump($data);
}

class Webdumper extends Dumper{

    public function dump($data){
        echo "<pre>";
        var_dump($data);
        echo "</ pre>";
    }
}

$webdumper = new Webdumper();
$webdumper->dump("php abstract class");   


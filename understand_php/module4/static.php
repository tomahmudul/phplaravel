<?php
class Grettings{
    public static function welcome(){
        echo "This is called second";
        echo "Hello world!";
    }

    public function __construct(){
        echo "This is called first";
        $this->welcome();
    }

    public function anotherfunc(){
       self::welcome();
    }
}

//Grettings::welcome();
$gt = new Grettings();
$gt->anotherfunc();

class A{
    public static function welcome(){
        echo "Hello world!";
    }
}

class B{
    public function message() {
        A::welcome();       
    }
}

$obj = new B();
$obj->message();




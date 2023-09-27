<?php
//class defination
//  class Person{
//     public $age;

//     public function getAge(){
//         return $this->age;
//     }
//  }

//  $person = new Person();
//  $person->age = "40";

//  $anotherPerson = new Person();
//  $anotherPerson->age = "50";

//  echo $person->getAge();
//  echo $anotherPerson->getAge();

// use of $this and self
// class Person{
//     public static $count;

//     public static function getCount(){
//         return self::$count;
//     }
// }
// Person::$count = 35;
// var_dump(Person::$count);

// $person = new Person();
// var_dump($person->getCount());

// Person::$count = 23;
// var_dump(Person::$count);

// var_dump($person->getCount());

// $anotherPerson = new Person();
// var_dump($anotherPerson->getCount());

//inheritance
// class ParentClass
// {
//     public $name = "Name of The ParentClass";

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// class ChildClass extends ParentClass
// {

// }

// $child = new ChildClass();
// var_dump($child->getName());

// public - for all, private- for personal, protected- for own and its inherited class

/**
 * Define MyClass
 */
class MyClass {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

class MyClass2 extends MyClass {

    function printHello() {
        echo $this->public;
        echo $this->protected;
        //echo $this->private;
    }
}

// $obj = new MyClass();
// $obj->printHello(); // Shows Public, Protected and Private

// $obj2 = new MyClass2();
// $obj2->printHello();

// class TestClass {
//     function __construct() {
//         print "From the constructor\n";
//     }
//  }

//  $bc = new TestClass();

//  class TestClass {
//     function __construct() {
//         print "From the constructor\n";
//         $this->name = "MyDestructableClass";
//     }

//     function __destruct() {
//         print "Destroying ";
//     }
//  }

//  class SubClass extends TestClass {
//     function __construct() {
//         parent::__construct();
//         print "In SubClass constructor\n";
//     }
//  }

//  $test = new SubClass();

class Fruit {
    public $name;
    public $color;

    function __construct( $name, $color ) {
        $this->name = $name;
        $this->color = $color;
    }

    function getName() {
        return $this->name;

    }
    function getColor() {
        return $this->color;
    }

    function __destruct() {
        echo "Destructing ..." . $this->name;
        echo "Destructing ..." . $this->color;
    }
}

$apple = new Fruit( "Apple", "red" );
echo $apple->getName();
echo $apple->getColor();
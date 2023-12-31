<?php
//class - A class is a user-defined data type which includes local variables and local methods. A class generally includes local variables and local methods.
//Object - object is an instance of the class which holds the local variables with values assigned and using the object we can call the local methods defined in the class.
//public - accessible from anywhere
//private - accessible from class only
//protected - accessible form main class and subclass but not outside
//abstract - used for only classes and member functions
//final -  class method defined as final can not be changed or overriden by any subclass

/* Access Modifer	classes	functions	variables
public	Not Applicable	Applicable	Applicable
private	Not Applicable	Applicable	Applicable
protected	Not Applicable	Applicable	Applicable
abstract	Applicable	Applicable	Not Applicable
final	Applicable	Applicable	Not Applicable */

/*
public Access Modifier
If we do not specify any access modifiers, all classes and its members are treated as public by default.*/

class Calculator{
    public $num1;
    public $num2;
    public $sum;
    public $multiplication;
    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add(){
        $this->sum = $this->num1 + $this->num2;
        return $this->sum;
    }

    public function multiplication(){
        $this->multiplication = $this->num1 * $this->num2;
        return $this->multiplication;
    }
    
}

$cal = new Calculator(12, 23);
echo $cal->add();
echo PHP_EOL;
echo $cal->multiplication();

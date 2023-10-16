<?php
class Fruits{
    public $name;
    public $color;
    public $weight;

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;

        $this->myFunction();
    }

    public function myFunction(){
        echo "myFunction is called form parent class";
    }

    public function getName(){
        return $this->name;
    }
    function getColor(){
        return $this->color;
    }

    function getWeight(){
        return $this->weight;
    }

}

$apple = new Fruits("Apple","Red", "50gm");
//print_r($apple);

$apple->name = "Apple";
$apple->color = "Red";
$apple->weight = "100gm";
echo $apple->getName();
echo "\n";
echo $apple->getColor();
echo "\n";
echo $apple->getWeight();
<?php 
class Fruit{
    public $name;
    public $color;

    public function setName($name){  
        $this->name = $name;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

}

$ft =  new Fruit();
$ft->setName("Apple");
$ft->setColor("Red");
print_r($ft);

$ft->name = 'Guava';
$ft->color = 'Green';
print_r($ft);
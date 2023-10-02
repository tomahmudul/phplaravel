<?php
//1. Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter.
class Rectangle{
    private $length;
    private $width;
    public $area;
    public $perimeter;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
        $this->calculateArea();
        $this->calculatePerimeter();
    }
     private function calculateArea(){
        $this->area = $this->length * $this->width;
    }

    private function calculatePerimeter(){
        $this->perimeter = 2 * ($this->length + $this->width);
    }

    public function getArea(){
        return $this->area;
    }
    public function getPerimeter(){
        return $this->perimeter;
    }

}

$ra = new Rectangle(12,9);
echo "Area: ".$ra->getArea();
echo PHP_EOL;
echo "Perimeter: ".$ra->getPerimeter();
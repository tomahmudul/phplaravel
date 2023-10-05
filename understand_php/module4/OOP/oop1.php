<?php
class Car{
    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;

    public function hello(){
        return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color."</i>";
    }



}

$bmw = new Car() ;
$bmw->comp = "BMW";
$bmw->color = "blue";
echo $bmw->comp;
echo $bmw->color;
echo $bmw->hello();

echo PHP_EOL;

$mercedes = new Car() ;
$mercedes->comp = "Mercedes Benz";
echo $mercedes->comp;
echo $mercedes->color;
echo $mercedes->hello();
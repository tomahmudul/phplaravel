<?php
abstract class Car{
    protected $tankVolume;

    abstract public function calcNumMilesOnFullTank();

    public function setTankVolume($volume){
        $this->tankVolume = $volume;
    }
}

class Honda extends Car{
    public function calcNumMilesOnFullTank(){
        $miles = $this->tankVolume * 30;
        return $miles;
    }
}

class Toyota extends Car{
    public function calcNumMilesOnFullTank($value = ""){   
        $miles = $this->tankVolume * 33;
        return $miles . " ".$value."\n";
    }

    public function getColor(){
        return "beige";
    }
}

$toyota = new Toyota();
$toyota->setTankVolume(10);
echo $toyota->calcNumMilesOnFullTank(10);
echo $toyota->getColor();


<?php
class Car {

    //private
    protected $model = "N/A";

    public function __construct( $model = null ) {
        if ( $model ) {
            $this->model = $model;
        }
    }

    public function setModel( $model ) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function hello() {
        return "beep, I am " . $this->model;
    }
}

class SportsCar extends Car {

    private $style = "fast and furious";

    public function driveItWithStyle() {
        return "Drive a " . $this->model. " as " . $this->style;
    }

    public function hello() { //method ovverriding
        return "Hallo";
    }

}

$scar = new SportsCar( "Mercedes" );
$scar->setModel( "Ferrari" );
echo $scar->hello();

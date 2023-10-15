<?php
//access modifier
class Car {

    //private
    private $model = "N/A";

    public function __construct( $model = null ) {
        if ( $model ) {
            $this->model = $model;
        }
    }

    public function setModel( $model ) {

        $allowedModels = ["Mercedes benz", "BMW"];

        if ( in_array( $model, $allowedModels ) ) {
            $this->model = $model;
        } else {
            $this->model = "not in allowed list.";
        }

    }

    public function getModel() {
        return "The ".__CLASS__." model is " . $this->model;
    }
}

$mercedes = new Car("Mercedes");

// We try to access a private property from outside the class.
//$mercedes -> model = "Mercedes benz";
//$mercedes->setModel( "Mercedsdses benz" );
echo $mercedes->getModel();

<?php

//class: Class is nothing but a blueprint or user defined data type which can be used by creating its object
class Human{
    public static $genders = ["Male", "Female", "Other"];

    static function getFeatures($genders){
        if($genders == "Male"){
            echo "Men will be men";
        }elseif($genders == "Female") {
            echo "Women's mind is a maze";
        }
        elseif($genders == "Other") {
            echo "All are born equal";
        }
    }

}

class Male extends Human{
    public static $genders = "Male";

    public function geMaleFeatures(){
        $this->getFeatures(self::$genders);
    }
}

$human = new Human();
$male = new Male();

//echo $human->genders;
//$human->getFeatures("Male");

$male->geMaleFeatures();

<?php
class Studytonight {
    // variable with a default value
    public $url = "studytonight.com";
    
    // simple class method
    public function desc() {
        echo "Studytonight helps you learn Coding.";
    }
}

// creating class object
$obj = new Studytonight();
// accessing class variable
echo $obj->url . "\n";
// calling class method
$obj->desc();
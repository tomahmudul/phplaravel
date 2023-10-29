<?php
class Person{
    private $fname;
    private $lname;

    function set_fname($new_fname){ 
        $this->fname = $new_fname;
    }

    function show_name($fname, $lname){
        echo "My name is : ". $this->fname ." ". $lname." \n";
    }

}

$john = new Person();
$john->set_fname("John");
$john->show_name("", "Wick");

$james = new Person();
$james->show_name("James", "Bond");





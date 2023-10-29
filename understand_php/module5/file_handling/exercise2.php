<?php

$person = [
    "name"=> "XYZ",
    "id"=> "some_id",
    "age"=> "25",
    "sex"=> "M"
];

function getMaternityLeave($person){
    if("F" == $person["sex"]){
        echo "processed";
    }else{
        throw new GenderMissmatchException($person);
    }
}

class GenderMissmatchException extends Exception{
    private $person;
    function __construct($person) {
        $this->person = $person;
        parent::__construct("Gender Missmatch\n");
    }

    function getExceptionDetails(){
        echo "Gender Missmatch for person {$this->person['id']}\n";
    }
}

try {
    getMaternityLeave($person);
} catch (GenderMissmatchException $e) {
    echo $e->getMessage();
    echo $e->getExceptionDetails();
} catch (Exception $e) {
    echo $e->getMessage();
}

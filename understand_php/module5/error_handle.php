<?php
//custom error handler

/* function custom_error_handler($errno, $errstr, $errfile, $errline){
    echo "Error[". $errno ."] : ". $errstr ." in ".$errfile." on line number ". $errline."\n";
}


set_error_handler("custom_error_handler");
//trigger_error("Error on this file");


function customDivision($divident, $divisor){
    if(0 == $divisor){
        trigger_error("Can't divide by 0");
    }else{
        return $divident/$divisor;
    }
}


echo customDivision(8, 0); */

//fatal error

ini_set("display_errors",0);
register_shutdown_function("fatal_error_handler");

function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        echo "Fatal error occured";
    }
}

//no_function();
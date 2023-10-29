<?php
//Write a PHP program to read and display the contents of a text file.

function custom_error_handler($errno, $errstr, $errfile, $errline){
    echo "Error[". $errno ."] : ". $errstr ." in ".$errfile." on line number ". $errline."\n";
}

set_error_handler("custom_error_handler");

$filename = "../public/population.txt";

function checkFileExists($filename){
    if(!file_exists($filename)){
       throw new Exception("". $filename ." doesn't exists.");        
    }

    return true;
}

try{

    if(checkFileExists($filename)){

        $lineCount = 0;
        
        $fp = fopen($filename,"r");
        while(!feof($fp)){
            $line = fgets($fp);
            if(false != $line){
                $lineCount++;
            }
        }

        fclose($fp);
        echo "Number of lines in the file are : {$lineCount}";

    }    

}catch(Exception $e){
    echo "An error occurred: ".$e->getMessage()."\n";
}
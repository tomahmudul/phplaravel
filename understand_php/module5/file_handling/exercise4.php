<?php
function readCSVFile($filename){
    
    try{
        $fp = fopen($filename,"r");
        if($fp === false){
            throw new Exception("Error: opening the file ". $filename ." ");
        }

        $line = array();
        while (($data = fgetcsv($fp)) !== false) {
            echo "";
            foreach($data as $cell) {
                echo "";
                echo "" . htmlspecialchars($cell) . "";
            }
            echo "";
        }
       
    
    }catch(Exception $e){
        echo "An error occurred: ".$e->getMessage()."\n";
    }
}

$filename = "../public/SampleCSVFile_2kb.csv";
readCSVFile($filename);




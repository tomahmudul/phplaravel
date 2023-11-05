<?php
function writeToFile($filename, $content){
    
    try{
        $fp = fopen($filename,"w");
        if($fp === false){
            throw new Exception("Error: opening the file ". $filename ." ");
        }

        fwrite($fp, $content);    
        fclose($fp);  

        echo "Content written to {$filename} successfully";
    
    }catch(Exception $e){
        echo "An error occurred: ".$e->getMessage()."\n";
    }
}

$filename = "../public/string.txt";
$content = "PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.";

writeToFile($filename,$content);




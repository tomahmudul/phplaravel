<?php
function validateInput( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

function saveData($data, $fileName){        
    //print_r($data);exit;
    file_put_contents( $fileName, json_encode( $data, JSON_PRETTY_PRINT ) );
}

function checkFileExists($filePath) {
    if (!file_exists($filePath)) {
        echo "File does not exist at path: " . $filePath;
    } 
}

function readDataFile( $filename ) {
    try {
        $jsonContents = file_get_contents( $filename );

        if ( $jsonContents === false ) {
            throw new Exception( "Error reading the file." );
        }

        $decodedData = json_decode( $jsonContents, true );

        if ( $decodedData === null ) {
            throw new Exception( "Error decoding the data." );
        }

        return $decodedData;

    } catch ( Exception $e ) {
        echo "An error occurred: " . $e->getMessage();
    }
}

function appendDataToFile($filename, $content){
    try {
        $fileHandle = fopen($filename, 'a');
        if ($fileHandle === false) {
            throw new Exception("Error opening the file for appending.");
        }

        fwrite($fileHandle, $content);
        fclose($fileHandle);
        echo "Content added to the file successfully.";

    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}

<?php
// integer float string boolean
$intVar = 4;
$floatVar = 4.25;
$stringVar = 'Hello world';
$boolVar = true;

echo $intVar . '\n';
echo $floatVar . '<br>';
echo $stringVar . '<br>';
echo $boolVar . '<br>';

function fact( $num ) {
    if ( $num == 0 ) {
        return 1;
    } else {
        return $num * fact( $num - 1 );
    }
}

echo fact( 5 );
<?php
/* class Students {
    public $name;
    public $age;

    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age = $age;
        if ( $this->age < 4 ) {
            throw new Exception( "Age is invalid", 1001 );
        }
        $this->display();
    }

    public function display() {
        printf( "My name is %s and age is %d", $this->name, $this->age );
    }
}
try {
    $st = new Students( "Rahim", 0 );
} catch ( Exception $e ) {
    echo $e->getCode() . ":" . $e->getMessage();
} finally {

} */

class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new NetworkException();
    
}

try {
    testException();
} catch (MyException $e) {
    echo "MyException executed.";
} catch (NetworkException $e) {
    echo "NetworkException executed.";
}
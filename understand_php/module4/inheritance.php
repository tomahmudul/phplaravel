<?php
//PHP: Inheritance
class Myclass {
    public $font_size;
    public $font_color;
    public $string_name;

    function __construct( $fontSize, $fontColor, $stringName ) {
        $this->font_size = $fontSize;
        $this->font_color = $fontColor;
        $this->string_name = $stringName;

        $this->propertyPrint();
    }
    public function propertyPrint() {
        // echo $this->font_size."\n";
        // echo $this->font_color."\n";
        // echo $this->string_name."\n";

        echo $custom_text = "<p style=\"font-size:{$this->font_size};color:{$this->font_color};\">{$this->string_name}</p>";
    }
    public function __destruct() {
        //echo "Destroying ".$this->font_size.", ".$this->font_color." & ".$this->string_name;
    }
}

class Mysubclass extends Myclass{
    public function propertyPrint() {
        echo $custom_text = "<p style=\"font-size:{$this->font_size};color:{$this->font_color};text-decoration:underline;\">{$this->string_name}</p>";
    }
}


 $f = new Myclass( '20px', 'red', 'Object Oriented Programming' );
// $f->propertyPrint();

$mc = new Mysubclass('16px', 'green', 'Object Oriented Programming' );
//$mc->propertyPrint();


//$mc1 = new Myclass('12px', 'blue', 'Object Oriented Programming' );
//$mc1->propertyPrint();

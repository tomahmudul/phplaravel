<?php
class Product {
    // properties
    public int $id;
    public string $name;
    public float $price;

    // Initialize id, name and price properties
    public function __construct($id, $name, $price ) {        
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Returns product price as string  with two decimal places.
    public function getFormattedPrice(){
        return "\$".number_format( $this->price, 2, ".", "" );
    }

    //Prints the details of the product
    public function showDetails() {
        $productDetails = <<<EOD
        Product Details:
        - ID: {$this->id}
        - Name: {$this->name}
        - Price: {$this->getFormattedPrice()}
        EOD;
        echo $productDetails . "\n\n";
    }
}

// Test the Product class
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
// //product 2
// $product->id = 2;
// $product->name = 'Formal Shirt';
// $product->price = 15.56789;
// $product->showDetails();
// //product 3
// $product->id = 3;
// $product->name = 'Casual Pant';
// $product->price = 25.1245;
// $product->showDetails();
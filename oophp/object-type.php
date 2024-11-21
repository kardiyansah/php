<?php 

class Product {
    public $title,
           $writer,
           $publisher,
           $price;
    
    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0 ) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function getLabel() {
        return "$this->writer, $this->publisher";
    }    

}

class PrintInfoProduct {
                            // Object type
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()}, (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Product("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000);
$product2 = new Product("Naruto", "Masashi Kishimoto", "Shounen jump", 30000);
$product3 = new Product("Dragon Ball");

$print = new PrintInfoProduct();
echo $print->print($product1);
echo "<br>";
echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Book : " . $product2->getLabel();
echo "<br>";
var_dump($product3);

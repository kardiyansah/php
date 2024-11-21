<?php 

class Product {
    public $title,
           $writer,
           $publisher,
           $price;
    
    // Constructor method adalah metode khusus yang dijalankan otomatis ketika menginstance sebuah class
    // Cara membuat magic method
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

$product1 = new Product("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000);
$product2 = new Product("Naruto", "Masashi Kishimoto", "Shounen jump", 30000);
$product3 = new Product("Dragon Ball");

echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Book : " . $product2->getLabel();
echo "<br>";
var_dump($product3);
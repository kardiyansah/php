<?php 

class Product {
    // Cara membuat property
    public $title,
           $writer,
           $publisher,
           $price;

    // Cara membuat method
    public function getLabel() {
        return "$this->writer, $this->publisher";
    }    

}

// $product1 = new Product();
// $product1->title = "naruto";

// var_dump($product1);

// echo "<br>";

$product2 = new Product();
$product2->title = "the Psychology of money";
$product2->writer = "Morgan Housel";
$product2->publisher = "Harriman House";
$product2->price = 65000;

// var_dump($product2);

$product3 = new Product();
$product3->title = 'Naruto';
$product3->writer = 'Masashi kishimoto';
$product3->publisher = 'Shounen jump';
$product3->price = 30000;

echo "Comic : $product3->writer, $product3->publisher";
echo "<br>";
echo "Comic : " . $product3->getLabel();
echo "<br>";
echo "Book : " . $product2->getLabel();
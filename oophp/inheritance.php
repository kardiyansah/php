<?php 

// Inheritance
// Menciptakan hierarki antar class ( parent & child )
// Child class, mewarisi semua property & method dari parentnya( yang visible )
// Child class, memperluas(extends) fungsionalitas dari parentnya

// Class parent
class Product {
    public $title,
           $writer,
           $publisher,
           $price,
           $totalPages,
           $playingTime;
    
    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $totalPages = 0, $playingTime = 0, ) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->totalPages = $totalPages;
        $this->playingTime = $playingTime;
    }

    public function getLabel() {
        return "$this->writer, $this->publisher";
    }    

    public function getFullInfo() {
        $str = "{$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        return $str;
    }
}

// Cara membuat child class
// Child class, mewarisi semua property & method dari parentnya( yang visible )
class Book extends Product {
    public function getFullInfo() {
        $str = "Book : {$this->title} | {$this->getLabel()}, (Rp. {$this->price}) - {$this->totalPages} Pages.";
        return $str;        
    }
}


class Game extends Product {
    public function getFullInfo() {
        $str = "Game : {$this->title} | {$this->getLabel()}, (Rp. {$this->price}) ~ {$this->playingTime} Hours.";
        return $str;        
    }
}


class PrintInfoProduct {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()}, (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Book("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262, 0,);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50,);

// Book | Morgan Housel, Harriman House, (Rp. 65000) - 262 Pages.
echo $product1->getFullInfo();
echo '<br>';
// Game | Neil Druckman, Sony Computer, (Rp. 250000) ~ 50 Hours.
echo $product2->getFullInfo();
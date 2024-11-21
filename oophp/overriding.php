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

    public function getFullInfo() {
        $str = "{$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        return $str;
    }
}

class Book extends Product {
    public $totalPages;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $totalPages = null ) {

        parent::__construct( $title, $writer, $publisher, $price );
        $this->totalPages = $totalPages;

    }

    public function getFullInfo() {
        // Cara mengambil nama method yang sama dari class parent / overriding
        $str = "Book : " . parent::getFullInfo() . " - {$this->totalPages} Pages.";
        return $str;        
    }
}


class Game extends Product {
    public $playingTime;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $playingTime = null ) {

        parent::__construct( $title, $writer, $publisher, $price );
        $this->playingTime = $playingTime;

    }

    public function getFullInfo() {
        // Cara mengambil nama method yang sama dari class parent / overriding
        $str = "Game : " . parent::getFullInfo() . " ~ {$this->playingTime} Hours.";
        return $str;        
    }
}


class PrintInfoProduct {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()}, (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Book("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262,);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50,);

// Book | Morgan Housel, Harriman House, (Rp. 65000) - 262 Pages.
echo $product1->getFullInfo();
echo '<br>';
// Game | Neil Druckman, Sony Computer, (Rp. 250000) ~ 50 Hours.
echo $product2->getFullInfo();
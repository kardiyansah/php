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
           $playingTime,
           $type;
    
    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $totalPages = 0, $playingTime = 0, $type = null ) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->totalPages = $totalPages;
        $this->playingTime = $playingTime;
        $this->type = $type;
    }

    public function getLabel() {
        return "$this->writer, $this->publisher";
    }    

    public function getFullInfo() {
        $str = "{$this->type} : {$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        if ( $this->type == "Komik" ) {
            $str .= " - {$this->totalPages} Pages.";
        } else {
            $str .= " - {$this->playingTime} Hours.";
        }

        return $str;
    }
}

class PrintInfoProduct {
    public function print( Product $product ) {
        $str = "{$product->title} | {$product->getLabel()}, (Rp. {$product->price})";
        return $str;
    }
}

$product1 = new Product("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262, 0, "Komik");
$product2 = new Product("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

// Book | Morgan Housel, Harriman House, (Rp. 65000) - 262 Pages.
echo $product1->getFullInfo();
echo '<br>';
// Game | Neil Druckman, Sony Computer, (Rp. 250000) ~ 50 Hours.
echo $product2->getFullInfo();
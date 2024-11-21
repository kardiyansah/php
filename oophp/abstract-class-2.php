<?php 

abstract class Product {

    private $title,
            $writer,
            $publisher,
            $price,
            $discount = 0;
    
    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0 ) {
        $this->title = $title;
        $this->writer = $writer;
        $this->publisher = $publisher;
        $this->price = $price;
    }

    public function getLabel() {
        return "$this->writer, $this->publisher";
    }    

    abstract public function getFullInfo();

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        return $str;
    }

    public function setTitle( $newTitle ) {
        $this->title = $newTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setWriter( $newWriter ) {
        $this->writer = $newWriter;
    }

    public function getWriter() {
        return $this->writer;
    }

    public function setPublisher( $newPublisher ) {
        $this->publisher = $newPublisher;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPrice( $newPrice ) {
        $this->price =$newPrice;
    }

    public function getPrice() {
        return $this->price - ( $this->price * $this->discount / 100 );
    }

    public function setDiscount( $discount ) {
        $this->discount = $discount;
    }

    public function getDiscount() {
        return $this->discount;
    }
    
}

class Book extends Product {
    public $totalPages;

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $totalPages = null ) {

        parent::__construct( $title, $writer, $publisher, $price );
        $this->totalPages = $totalPages;

    }

    public function getFullInfo() {
        $str = "Book : " . $this->getInfo() . " - {$this->totalPages} Pages.";
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
        $str = "Game : " . $this->getInfo() . " ~ {$this->playingTime} Hours.";
        return $str;        
    }
}


class PrintInfoProduct {
    public $listProducts = array();

    public function insertProduct( Product $product ) {
        $this->listProducts[] = $product;
    }

    public function print() {
        $str = "List Products : <br>";

        foreach ( $this->listProducts as $product ) {  
            $str .= "- {$product->getFullInfo()} <br>";
        }

        return $str;
    }
}

$product1 = new Book("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262,);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50,);

$printProduct = new PrintInfoProduct();
$printProduct->insertProduct( $product1 );
$printProduct->insertProduct( $product2 );
echo $printProduct->print();

<?php namespace App\Product;

abstract class Product {

    protected $title,
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

    abstract public function getInfo();

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
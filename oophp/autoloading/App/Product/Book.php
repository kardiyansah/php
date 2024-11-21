<?php

class Book extends Product implements ProductInfo {
    public $totalPages;

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        return $str;
    }

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $totalPages = null ) {

        parent::__construct( $title, $writer, $publisher, $price );
        $this->totalPages = $totalPages;

    }

    public function getFullInfo() {
        $str = "Book : " . $this->getInfo() . " - {$this->totalPages} Pages.";
        return $str;        
    }
}
<?php namespace App\Product;

class Game extends Product implements ProductInfo {
    public $playingTime;

    public function getInfo() {
        $str = "{$this->title} | {$this->getLabel()}, (Rp. {$this->price})";
        return $str;
    }

    public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0, $playingTime = null ) {

        parent::__construct( $title, $writer, $publisher, $price );
        $this->playingTime = $playingTime;

    }

    public function getFullInfo() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->playingTime} Hours.";
        return $str;        
    }
}
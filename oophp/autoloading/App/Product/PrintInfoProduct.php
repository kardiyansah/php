<?php

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
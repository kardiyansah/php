<?php

require_once 'App/Init.php';

$product1 = new Book("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262,);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50,);

$printProduct = new PrintInfoProduct();
$printProduct->insertProduct( $product1 );
$printProduct->insertProduct( $product2 );
echo $printProduct->print();
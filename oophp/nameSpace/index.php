<?php 

// Cara menulis namespace 
// namespace Vendor\Namespace\SubNamespace;
require_once 'App/Init.php';

// $product1 = new Book("The Psychology Of Money", "Morgan Housel", "Harriman House", 65000, 262,);
// $product2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50,);

// $printProduct = new PrintInfoProduct();
// $printProduct->insertProduct( $product1 );
// $printProduct->insertProduct( $product2 );
// echo $printProduct->print();

// Cara memberikan nama lain untuk namespace
use App\Product\User as productUser;
use App\Service\User as serviceUser;

new productUser();
echo '<br>';
new serviceUser();
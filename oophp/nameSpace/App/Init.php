<?php

// require_once 'Product/ProductInfo.php';
// require_once 'Product/Product.php';
// require_once 'Product/Book.php';
// require_once 'Product/Game.php';
// require_once 'Product/PrintInfoProduct.php';
// require_once 'Product/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function( $class ) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Product//' . $class . '.php';
});

spl_autoload_register(function( $class ) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service//' . $class . '.php';
});
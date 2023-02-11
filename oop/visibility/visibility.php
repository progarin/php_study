<?php
require_once "visibilityClass.php";

#PRIVATE & PROTECTED
$product = new Product("Apple", 10_000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

#PROTECTED
$productDummy = new ProductDummy("Melon", 15_000);
echo $productDummy->info() . PHP_EOL;

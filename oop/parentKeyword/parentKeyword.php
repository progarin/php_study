<?php
require_once "parent.php";

use Data\{Shape, Triangle, Circle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$triangle = new Triangle();
echo $triangle->getCorner() . PHP_EOL;

$circle = new Circle();
echo $circle->getCorner() . PHP_EOL;

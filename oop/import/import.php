<?php

require_once "oop/data/namespaceClass.php";

#use ,  as , grup declaration {}
use Data\One\{Age as umur, Address as alamat};
use Data\One\Name as yourName1;
use Data\Two\Name as yourName2;
use function Data\Three\yourName as yourName3;
use const Data\Three\APPLICATION as APP;

$name1 = new yourName1();
$name2 = new yourName2();
$age = new umur();
$address = new alamat();

$age->umur(20);
$address->alamat("Kuningan");

echo APP . PHP_EOL;
yourName3("Garin Ravindra");

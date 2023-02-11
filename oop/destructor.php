<?php
require_once "data/person.php";

$garin = new Person();
$garin->name(NULL);
echo "==================" . PHP_EOL;
$garin->yourAge(12);
echo "==================" . PHP_EOL;
$garin->yourStatus(true);
echo "==================" . PHP_EOL;
$garin->gender();
echo "==================" . PHP_EOL;

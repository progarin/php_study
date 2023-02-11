<?php

$data = [1, 2, 3, 4, 5];

// MENGUBAH DATA ARRAY DENGAN FUNCTION YANG KITA BUAT
$dataValue = fn (int $data) => $data * 10;

$dataResult = array_map($dataValue, $data);
var_dump($dataResult);

// REVERSE DATA ARRAY
rsort($data);
var_dump($data);

// MENGAMBIL SEBUAH KEYS ARRAYS DAN VALUES ARRAY
var_dump(array_keys($data));
var_dump(array_values($data));

$human = [
    "firstName" => "Garin",
    "lastName" => "Ravindra"
];

var_dump(array_keys($human));
var_dump(array_values($human));

<?php

// function perhitungan(int $number)
// {
//     for ($number = 1; $number <= 5; $number++) {
//         echo "Mari Belajar Perhitungan Dari Ke-$number" . PHP_EOL;
//     }
// }
// perhitungan(1);

$segitiga = function (int $alas, int $tinggi, callable $filter) {
    $keliling = call_user_func($filter, $alas, $tinggi);
    echo "Hasil-nya Adalah : $keliling" . PHP_EOL;
};

$result = function (int $alas, int $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
};

$segitiga(10, 10, $result);

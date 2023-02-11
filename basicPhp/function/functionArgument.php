<?php
// INI ADALAH ARGUMENT YANG DIKIRIM KAN
function sayHello($hello)
{
    echo "$hello dunia" . PHP_EOL;
}

sayHello("HALLO");
// ========================================

// INI ADALAH ARGUMENT DEFAULT
function namaKamu($nama, $umur = "")
{
    echo "Username Kamu Adalah $nama Dan Umur-Nya Adalah $umur" . PHP_EOL;
}

namaKamu("Garin Ravindra", "17");
// =====================================

// INI ADALAH TYPE DECLARATION
function sum(int $uangJajan, int $uangSekolah)
{
    $penjumlahan = $uangJajan + $uangSekolah;

    echo "Jumlah-nya adalah : $penjumlahan" . PHP_EOL;
}

sum(100_000, 10_000);
sum("100000", "10000");
sum(true, false);
// ================================== Jika pake integer ke array atau sebaliknya bakal error

// ARGUMENT LIST PAKAI ARRAY
function num(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "TOTAL " . implode(",", $values) . " = $total" . PHP_EOL;
}

num(1, 2, 3, 4, 5);

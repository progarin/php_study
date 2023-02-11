<?php
// SETIAP ANONYMOUS FUNCTION HARUS ADA TITIK KOMA DI AKHIR

$greeting = function ($name) {
    echo $name . PHP_EOL;
};

$greeting("Garin Ravindra");

// ===============
# CARA -1
function sayGoodBye($name, $filter)
{
    $finalName = $filter($name);
    echo "GOOD BYE $finalName " . PHP_EOL;
}

sayGoodBye("Garin Ravindra", function (string $name): string {
    return strtolower($name);
});

// ================
// CARA - 2
function sayGoodNight($name, $filter)
{
    $finalName = $filter($name);
    echo "GOOD NIGHT $finalName " . PHP_EOL;
}

$goodNight = function (string $name): string {
    return strtoupper($name);
};

sayGoodNight("Garin Ravindra", $goodNight);

// ANONYMOUS FUNCTION INI TIDAK BISA MENG-AKSES SEBUAH VARIBLE YANG DILUAR FUNCTION
# use()

$firstName = "Garin";
$lastName = "Ravindra";

$fullName = function () use ($firstName, $lastName) {
    echo "Halo $firstName $lastName" . PHP_EOL;
};

$fullName();
// Kita tidak bisa merubah varible-nya ketika varible itu di deklarasi ulang, jadi hanya 1x saja dia langsung memasukan nilai-nya ke anonymous function tersebut

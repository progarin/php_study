<?php
// Mengakses seluruh data array secara otomatis
$nama = [
    "nama_pendek"  => "Garin",
    "nama_panjang"  => "Garin Ravindra"
];

foreach ($nama as $key => $value) {
    echo "$key Kamu : $value" . PHP_EOL;
}

$umur = [
    "garin" => 16,
    "ramadhan" => 17
];

foreach ($umur as $name => $nilai) {
    echo "Nama Kamu $name Umur-Nya Adalah : $nilai" . PHP_EOL;
}

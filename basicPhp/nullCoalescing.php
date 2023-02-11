<?php
// Pengecekan Sebuah Nilai
$data = [
    "Aksi" => NULL
];

$buat = $data["Aksi"] ?? 'Kosong';

echo $buat;

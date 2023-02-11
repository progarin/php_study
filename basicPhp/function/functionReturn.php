<?php
// FUNCTION RETURN
function jum(int $pertama, int $kedua)
{
    $hasil = $pertama * $kedua;
    return $hasil;
}

$result = jum(5, 5);
var_dump($result);

// FUNCTION RETURN TIDAK HANYA DIGUNAKAN SEKALI SAJA TAPI BISA BERKALI KALI KECUALI VALUE NYA.
function nilai($nilai)
{
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } elseif ($nilai >= 30) {
        return "E";
    }
}

$result = nilai(100);

echo $result;

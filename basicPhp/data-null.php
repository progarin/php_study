<?php
// Is_Null - Dibutuhkan Ketika Mengecek Sebuah Variable Ada Nilai-nya Atau Tidak Tapi Yakin Ada Varible-nya
$name = null;

echo $name;
var_dump(is_null($name));

//Unset - Dibutuhkan Ketika Kita Ingin menghapus sebuah variable
$age = 100;
unset($age); //varible otomatis sudah di hapus

// ISSET - Dibutuhkan ketika kita ingin mengecek sebuah variable dan nilai ada atau tidak dan apakah kita yakin bahwa varible itu ada atau tidak
$address = "Bandung";
$address = null;

echo "Apakah Alamat Saya Benar Ada?\n";
var_dump(isset($address));

echo "Apakah umur saya benar ada?\n";
var_dump(isset($age));

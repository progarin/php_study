<?php
// PHP KIND OF 3 VARIABLE

// GLOBAL SCOPE ==> hanya bisa digunakan diluar sebuah function , jika global scope berada dalam sebuah funtion maka terjadi sebuah error
$myName = "Garin Ravindra";
$herName = "Lila Amalia";

function myName()
{
    global $myName; //<== digunakan untuk mengakses sebuah global scope dari dalam local scope
    echo $myName . PHP_EOL;
    echo $GLOBALS['herName'] . PHP_EOL; //<== bersifat super global atau bisa digunakan scope manapun
}
myName();

// LOCAL SCOPE ==> varibale yang hanya bisa digunakan didalam sebuah function itu sendiri , tidak bisa diluar function atau pun didalam function lain
function callMe()
{
    $yourName = "Eko Kurniawan Khannedy";
    echo $yourName . PHP_EOL;
}
callMe();
// echo $yourName; <== jika di run maka akan error


// STATIC SCOPE <== DIA AKAN MENYIMPAN SEBUAH NILAI JIKA PERNAH DIEKSEKUSI DARI YANG SEBELUMNYA, JADI KETIKA KITA PANGGIL KEMBALI VARIABLE-NYA MAKA AKAN MENGAMBIL NILAI DARI NILAI YANG SUDAH PERNAH DI EKSEKUSI
function number()
{
    static $counter = 1;
    echo "Belajar Berhitung : $counter" . PHP_EOL;
    $counter++;
}

number();
number();
number();
number();
number();

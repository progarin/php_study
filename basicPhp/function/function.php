<?php

function sayHello()
{
    echo "Hello Garin" . PHP_EOL;
}

sayHello();

// function tidak akan bisa di deklarasi jika belum pernah di eksekusi - CONTOH
$baru = true;

if ($baru) {
    function sayHai()
    {
        echo "Hai Dunia";
    }
}

sayHai();

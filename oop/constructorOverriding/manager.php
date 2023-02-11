<?php

class Manager
{
    var $name;
    var $age;
    var $address;

    function __construct(string $name = "", int $age = 20, string $address = "")
    {
        echo $this->name = $name . PHP_EOL;
        echo $this->age = $age . PHP_EOL;
        echo $this->address = $address . PHP_EOL;
    }
}

class Vp extends Manager
{
    function __construct(string $name = "")
    {
        #tidak wajib tapi direkomendasi-kan
        parent::__construct($name, 100);
    }
}

class Child extends Manager
{
    function __construct(string $address = "")
    {
        parent::__construct($address, 30, "Japan");
    }
}

#DI CONSTRUCTOR OVERRIDING BOLEH MENGGANTI , MENAMBAH ,ATAU MENGUBAH SUATU PARAMETER TERSEBUT , TETAPI JIKA DI FUNCTION OVERRIDING ITU BOLEH TAPI WARNING.
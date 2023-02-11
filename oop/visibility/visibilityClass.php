<?php

#VISIBILITY TERBAGI MENJADI 3 YAITU - PUBLIC , PROTECTED , PRIVATE

#PUBLIC - Bisa Digunakan Dimana Saja.
#Protected - Hanya Digunakan Dalam Sebuah Atau Turunannya.
#Private - Hanya Bisa Digunakan Di Dalam Class-nya Sendiri.
class Product
{
    #private
    // private string $name;
    // private int $price;

    #protected
    protected string $name;
    protected int $price;


    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "$this->name" . PHP_EOL;
        echo "$this->price" . PHP_EOL;
    }
}

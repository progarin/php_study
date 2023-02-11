<?php
class Constructor
{
    var string $name;
    var ?string $address = "Japan";

    function __construct(string $name, ?string $address)
    {
        echo "Halo $name Dari $address" . PHP_EOL;
    }
}

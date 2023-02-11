<?php

class Manager
{
    public $name;

    public function sayGoodMorning(string $name)
    {
        echo "Hai $name , Good Morning From Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function sayGoodMorning(string $name)
    {
        echo "Hai $name , Good Morning From VicePresident $this->name" . PHP_EOL;
    }
}

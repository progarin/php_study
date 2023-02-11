<?php

class Mother
{
    var $name;

    function motherName($name)
    {
        echo "Hi $name, My Name Is $this->name" . PHP_EOL;
    }
}

class Child extends Mother
{
    function child()
    {
    }
}

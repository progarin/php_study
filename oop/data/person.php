<?php

class Person
{
    const GENDER = "Male";

    var string $name = "Anonymous";
    var string $address = "japan"; #default properties
    var int $age;
    var $status;

    function name(?string $name)
    {
        if ($name == "Garin Ravindra") {
            echo "Hi Welcome $name" . PHP_EOL;
        } else {
            echo "Who The Hell Are You?" . PHP_EOL;
        }
    }

    function address(?string $address)
    {
        if ($address === NULL) {
            echo "Where Is Your Planet?" . PHP_EOL;
        } else {
            #this keyword
            echo "Your Address Are In $this->address" . PHP_EOL;
        }
    }

    function yourAge(int $age)
    {
        if ($age >= 18) {
            echo "You're Mature Bro/Girl" . PHP_EOL;
        } else {
            echo "Still Young Kid :P" . PHP_EOL;
        }
    }

    function yourStatus(?bool $status)
    {
        echo "Udah Nikah Belum Bang?" . PHP_EOL;
        if ($status === true) {
            echo "Have A Nice Life" . PHP_EOL;
        } else {
            echo "Yang Sabar Ya Bang :(" . PHP_EOL;
        }
    }

    #self keyword
    function gender()
    {
        echo "Your Gender Is " . self::GENDER . PHP_EOL;
    }

    #destructor
    function __destruct()
    {
        echo "This $this->name Is Destroyed" . PHP_EOL;
    }
}

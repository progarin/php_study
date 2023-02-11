<?php
function &getValue()
{
    static $value = 100;
    return $value;
}

$x = &getValue();
$x = 500;

$y = &getValue();

echo $y;

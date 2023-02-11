<?php

namespace Data;

class Shape
{
    function getCorner()
    {
        return -10;
    }
}

class Triangle extends Shape
{
    function getCorner()
    {
        return 3;
    }
}

class Circle extends Shape
{
    function getCorner()
    {
        return parent::getCorner();
    }
}

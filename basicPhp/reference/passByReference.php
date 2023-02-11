<?php

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;

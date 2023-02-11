<?php
// function counter(int $number)
// {
//     if ($number == 0) {
//         return 1;
//     } else {
//         return $number * counter($number - 1);
//     }
// }

// var_dump(counter(3));

function loop($value)
{
    if ($value == 0) {
        return 0;
    } else {
        loop($value - 1);
        echo "Pertambahan Ke-$value" . PHP_EOL;
    }
}

var_dump(loop(5));

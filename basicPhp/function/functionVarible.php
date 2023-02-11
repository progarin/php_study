<?php
function hello(string $friend, $converter)
{
    $friendName = $converter($friend);

    echo "Halo $friendName" . PHP_EOL;
}

function sampleFunction(string $friend): string
{
    return "Selamat Datang $friend";
}

$result = "hello";

$result('Garin ravindra', 'sampleFunction');
$result('Garin ravindra', 'strtoupper');
$result('Garin ravindra', 'strtolower');

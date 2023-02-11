<?php

$goodMorning = function ($name, callable $filter) {
    $finalName = call_user_func($filter, $name);

    echo $finalName . PHP_EOL;
};

$goodMorning("Garin ravindra", "strtolower");

$goodMorning("Garin ravindra", function (string $name): string {
    return strtolower($name);
});

$goodMorning("Garin ravindra", fn ($name) => strtoupper($name));

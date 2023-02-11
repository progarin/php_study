<?php

$laptop = false;

if ($laptop == true) {
    function bonus(int $bonusMouse, int $laptopROG): int
    {
        return $laptopROG + $bonusMouse;
    }

    $bundle = bonus(1_000_000, 20_000_000);
    echo "Kamu Membeli  $bundle" . PHP_EOL;
} else {
    function yourName(string $name)
    {
        echo "Terima Kasih Atas Kunjungannya $name" .  PHP_EOL;
    }

    yourName('Garin Ravindra');
}

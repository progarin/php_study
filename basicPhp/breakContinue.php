<?php
$counter = 1;

// BREAK
while ($counter <= 20) {
    echo "Ini Adalah Break Yang Ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// CONTINUE
for ($secondCounter = 0; $secondCounter <= 10; $secondCounter++) {
    if ($secondCounter % 2 == 0) {
        continue;
    }
    echo "Counter : $secondCounter" . PHP_EOL;
}

$name = true;

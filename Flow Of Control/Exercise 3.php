<?php

echo "Enter a positive rounded number and I will tell how many digits your number has: " . PHP_EOL;
$number = readline();

$count = 0;

if ($number == 0) {
    $count = 1;
} else {
    while ($number > 0) {
        $number = (int)($number / 10);
        $count++;
    }
}

echo "Number has $count digits";
<?php

echo "Max value (number): ";
$maxValue = readline();

for ($i = 1; $i <= $maxValue; $i++) {
    echo $i . " ";

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz" . " ";
    } elseif ($i % 3 === 0) {
        echo "Fizz" . " ";
    } elseif ($i % 5 === 0) {
        echo "Buzz" . " ";
    }

    if ($i % 20 === 0) {
        echo "\n";
    }
}
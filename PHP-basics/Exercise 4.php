<?php

$originalArray = [];
for ($i = 0; $i < 10; $i++) {
    $originalArray[] = rand(1,100);
}

$arrayCopy = $originalArray;

echo "The original array is: " . PHP_EOL;
array_pop($originalArray);
array_push($originalArray, -7);
echo implode(",", $originalArray) . PHP_EOL;

echo "The original array copy is: " . PHP_EOL;
echo implode(",", $arrayCopy) . PHP_EOL;
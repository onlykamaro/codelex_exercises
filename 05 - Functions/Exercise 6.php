<?php

// Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
// Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
// Create a function that doubles the integer number.
// Within the loop using php in-built function print out the double of the number value (using your custom function).

$array = [1, 2, 3, 3.5, "test"];

function doubleInteger ($number) {
    if (is_int($number)) {
        return $number * 2;
    } else {
        return $number;
    }
}

for ($i = 0; $i < count($array); $i++) {
    $element = $array[$i];
    $doubleNumber = doubleInteger($element);
    echo "Element at index $i: $doubleNumber \n";
}

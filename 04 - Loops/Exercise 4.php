<?php

// Create a non associative array with integers and print out only integers that divides by 3 without any left.

$array = [3, 5, 9, 13, 21];

foreach ($array as $item) {
    if ($item % 3 === 0) {
        echo $item . ' ';
    }
}
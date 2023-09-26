<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$searchValue = (int)readline();
if (in_array($searchValue, $numbers)) {
    echo "The number $searchValue you are looking for is in the array" . PHP_EOL;
} else {
    echo "The number $searchValue you are looking for is not in the array" . PHP_EOL;
}


//todo check if an array contains a value user entered
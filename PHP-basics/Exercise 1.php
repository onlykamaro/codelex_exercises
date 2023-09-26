<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: " . PHP_EOL;
foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}

//todo
echo "Sorted numeric array: " . PHP_EOL;
sort($numbers);
$arrLength = count($numbers);
for ($i = 0; $i < $arrLength; $i++) {
    echo $numbers[$i] . PHP_EOL;
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: " . PHP_EOL;
foreach ($words as $word) {
    echo $word . PHP_EOL;
}

//todo
echo "Sorted string array: " . PHP_EOL;
sort($words);
$arrayLength = count($words);
for ($in = 0; $in < $arrayLength; $in++) {
    echo $words[$in] . PHP_EOL;
}

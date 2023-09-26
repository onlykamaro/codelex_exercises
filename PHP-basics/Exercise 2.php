<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$arrayLength = count($numbers);
$arraySum = array_sum($numbers);

echo $avg = $arraySum / $arrayLength;
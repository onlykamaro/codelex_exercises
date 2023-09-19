<?php

// Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper bound,
// so that we can change their values easily. Also compute and display the average.

$min = 1;
$max = 100;

$sum = 0;
$count = 0;

for ($i = $min; $i <= $max; $i++) {
    $sum += $i;
    $count++;
}

$avg = $sum / $count;

echo "The total sum from $min to $max is $sum \n";
echo "The average of numbers between $min and $max is $avg";
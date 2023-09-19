<?php

// Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$compute = 1;

for ($i = 1; $i <= 10; $i++) {
    $compute *= $i;
}

echo "The multiplication of numbers between 1 and 10 is $compute";
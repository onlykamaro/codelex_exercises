<?php

// Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
// Range should be stored within the 2 separated variables $y and $z.

$y = 30;
$z = 65;
$int = 50;

if ($int >= $y && $int <= $z) {
    echo "correct";
}
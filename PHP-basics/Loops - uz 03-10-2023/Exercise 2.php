<?php

echo "Input number of terms: ";

$n = readline();

$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result *= $i;
}

echo $result;
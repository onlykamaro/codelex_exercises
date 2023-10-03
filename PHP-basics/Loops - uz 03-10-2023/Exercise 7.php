<?php

function roll() {
    return rand(1, 6);
}

echo "Welcome to Roll Two Dice" . PHP_EOL;

while (true) {
    $desiredSum = (int)readline("Enter your desired sum (2-12): ");

    if ($desiredSum < 2 || $desiredSum > 12) {
        echo "Your entered sum is not possible, enter sum between 2 and 12" . PHP_EOL;
        continue;
    }

    while (true) {
        $dice1 = roll();
        $dice2 = roll();
        $currentSum = $dice1 + $dice2;

        echo "$dice1 and $dice2 = $currentSum" . PHP_EOL;

        if ($currentSum === $desiredSum) {
            break;
        }
    }
}
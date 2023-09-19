<?php

// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

function CheckOddEven(int $number): bool {
    if ($number % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = (int) readLine("Enter number: ");

if (CheckOddEven($number)) {
    echo "Number is even - " . "bye!";
} else {
    echo "Number is odd - " . "bye!";
}
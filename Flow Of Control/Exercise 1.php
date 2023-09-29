<?php

echo "Input the 1st number: ";
$number1 = readline();

echo "Input the 2nd number: ";
$number2 = readline();

echo "Input the 3rd number: ";
$number3 = readline();

if ($number1 > $number2 && $number1 > $number3) {
    echo "1st number is the largest of all numbers";

} elseif ($number2 > $number1 && $number2 > $number3) {
    echo "2nd number is the largest of all numbers";

} elseif ($number3 > $number2 && $number3 > $number1){
    echo "3rd number is the largest of all numbers";
} else {
    echo "The numbers are all the same";
}
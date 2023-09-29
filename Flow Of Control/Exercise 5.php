<?php

function strToDigits(string $char) {
    $char = strtoupper($char);
    switch ($char) {
        case 'A':
        case 'B':
        case 'C':
            return 2;
        case 'D':
        case 'E':
        case 'F':
            return 3;
        case 'G':
        case 'H':
        case 'I':
            return 4;
        case 'J':
        case 'K':
        case 'L':
            return 5;
        case 'M':
        case 'N':
        case 'O':
            return 6;
        case 'P':
        case 'Q':
        case 'R':
        case 'S':
            return 7;
        case 'T':
        case 'U':
        case 'V':
            return 8;
        case 'W':
        case 'X':
        case 'Y':
        case 'Z':
            return 9;
        default:
            return -1;
    }
}

echo "Enter a string: ";
$string = readline();

$digits = "";
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    $digit = strToDigits($char);
    if ($digits!= -1) {
        $digits .= $digit;
    } else {
        echo "Invalid character in the input";
        exit (1);
    }
}

echo "Keypad digits: $digits" . PHP_EOL;
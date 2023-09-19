<?php

// Create a variable $plateNumber that stores your car plate number.
// Create a switch statement that prints out that its your car in case of your number.

$plateNumber = "JK3333";

switch ($plateNumber) {
    case "IZ1234":
        echo "Your number is IZ1234";
        break;
    case "JK3333":
        echo "Your number is JK3333";
        break;
    case "Burunduks":
        echo "Your number is Burunduks";
        break;
    default:
        echo "Your number is not in the system";
}
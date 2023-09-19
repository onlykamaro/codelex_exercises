<?php

// Write a program that picks a random number from 1-100. Give the user a chance to guess it.
// If they get it right, tell them so. If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

$computerNumber = rand(1, 100);
$playerGuess = (int) readLine("Your guess is: ");

if ($playerGuess == $computerNumber) {
    echo "Congratulations! You guessed it!";
} elseif ($playerGuess < $computerNumber) {
    echo "Too low!";
} else {
    echo "Too high";
}
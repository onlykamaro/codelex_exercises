<?php

function Piglet () {
    $totalScore = 0;

    echo "Welcome to the game - Pig" . PHP_EOL;

    while (true) {
        $roll = rand(1, 6);
        echo "You rolled: $roll". PHP_EOL;

        if ($roll === 1) {
            echo "You rolled 1. Game over, you lost all your points." . PHP_EOL;
            $totalScore = 0;
            break;
        } else {
            $totalScore += $roll;
            echo "Your current score is: $totalScore" . PHP_EOL;
        }
        echo "Roll again or quit? (yes/no)" . PHP_EOL;
        $choice = readline();

        if (strtolower($choice) !== "yes") {
            break;
        }
    }
    echo "Your final score is: $totalScore";
}

Piglet();
<?php

$maxRow = 3;
$maxColumn = 4;

$balance = 1000;
$betAmount = 10;

$elements = [
    'A' => 2,
    'B' => 3,
    'C' => 4,
    'D' => 5,
];

while ($balance > 0) {
    echo "Your current balance is $balance$" . PHP_EOL;
    echo "Feeling lucky? Place your bet (or 'q' to quit): ";

    $input = trim(fgets(STDIN));

    if ($input === 'q') {
        echo "Game stopped! Your final balance is: $balance$" . PHP_EOL;
        break;
    }

    if (!is_numeric($input) || $input < $betAmount) {
        echo "ERROR: Invalid bet amount. Enter a valid bet amount." . PHP_EOL;
        continue;
    }

    $betAmount = (int)$input;

    $board = [];

    for ($row = 0; $row < $maxRow; $row++) {
        for ($column = 0; $column < $maxColumn; $column++) {
            $board[$row][$column] = array_rand($elements);
        }
    }

    displayBoard($board);

    $payout = calculatePayout($board, $elements, $betAmount);
    $balance += $payout;

    if ($payout > 0) {
        echo "Congratulations! You won $payout$" . PHP_EOL;
    } else {
        echo "Sorry, you lost $betAmount$" . PHP_EOL;
        $balance -= $betAmount;
    }
}

if ($balance <= 0) {
    echo "Game over! You ran out of money." . PHP_EOL;
}

function displayBoard(array $board)
{
    foreach ($board as $row) {
        foreach ($row as $column => $element) {
            echo "[$element]";
        }
        echo PHP_EOL;
    }
}

function calculatePayout(array $board, array $elements, $bet)
{
    $payout = 0;

    foreach ($board as $row) {
        $uniqueElements = array_count_values($row);
        foreach ($uniqueElements as $element => $count) {
            if ($count >= 3) {
                $payout += $elements[$element] * $bet;
            }
        }
    }

    return $payout;
}

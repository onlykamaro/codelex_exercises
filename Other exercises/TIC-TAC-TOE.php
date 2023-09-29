<?php

$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];

$currentPlayer = "X";

function printBoard (array $board)
{
    echo "\n";
    for ($row = 0; $row < 3; $row++) {
        for ($column = 0; $column < 3; $column++) {
            echo $board[$row][$column];
            if ($column < 2) {
                echo "|";
            }
        }
        echo "\n";
        if ($row > 2) {
            echo "-----\n";
        }
    }
    echo "\n";
}

function checkWinner(array $board, string $player): string
{
    for ($row = 0; $row < 3; $row++) {
        if ($board[$row][0] === $player && $board[$row][1] === $player && $board[$row][2] === $player) {
            return true;
        }
    }

    for ($column = 0; $column < 3; $column++) {
        if ($board[$column][0] === $player && $board[$column][1] === $player && $board[$column][2] === $player) {
            return true;
        }
    }

    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2]) {
        return true;
    }

    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}

function isBoardFull(array $board): bool
{
    for ($row = 0; $row < 3; $row++) {
        for ($column = 0; $column < 3; $column++) {
            if ($board[$row][$column] === ' ') {
                return false;
            }
        }
    }
    return true;
}

while (true) {
    printBoard($board);

    echo "Player $currentPlayer turn. Enter row (0-2) and column (0-2) separated by space (example: '2 2: ";
    $input = readline();

    list($row, $column) = explode(' ', $input);

    if ($row >= 0 && $row <= 2 && $column >= 0 && $column <= 2 && $board[$row][$column] === ' ') {
        $board[$row][$column] = $currentPlayer;

        if (checkWinner($board, $currentPlayer)) {
            printBoard($board);
            echo "Player $currentPlayer wins!";
            break;
        } elseif (isBoardFull($board)) {
            printBoard($board);
            echo "It's a draw!";
            break;
        }
        $currentPlayer = ($currentPlayer === "X") ? "0" : "X";
     } else {
        echo "ERROR! Something is wrong with your input. Try again! \n";
    }
}
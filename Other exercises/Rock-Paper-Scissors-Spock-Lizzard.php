<?php declare(strict_types=1);

// rock > scissors, lizard
// paper > rock, spock
// scissors > paper, lizard
// lizard > spock, paper
// spock > scissors, rock

$elements = [
    "rock", "paper", "scissors", "lizard", "spock"
];

$userPick = readline("Choose your element: " . implode(" or ", $elements) . ":");

if (in_array(strtolower($userPick), $elements) === false) {
    echo "Invalid element selected!";
    exit;
}

$computerPick = $elements[array_rand($elements)];

if ($userPick === $computerPick) {
    echo "It's a tie!";
    exit;
}

if (($userPick === ($elements[0]) ) && ($computerPick === ($elements[2]) || $computerPick === ($elements[3])))
{
    echo "User wins!";
    exit;
}

if (($userPick === ($elements[1]) ) && ($computerPick === ($elements[0]) || $computerPick === ($elements[4])))
{
    echo "User wins!";
    exit;
}

if (($userPick === ($elements[2]) ) && ($computerPick === ($elements[1]) || $computerPick === ($elements[3])))
{
    echo "User wins!";
    exit;
}

if (($userPick === ($elements[3]) ) && ($computerPick === ($elements[1]) || $computerPick === ($elements[4])))
{
    echo "User wins!";
    exit;
}

if (($userPick === ($elements[4]) ) && ($computerPick === ($elements[2]) || $computerPick === ($elements[0])))
{
    echo "User wins!";
    exit;
}

echo "Computer wins!";
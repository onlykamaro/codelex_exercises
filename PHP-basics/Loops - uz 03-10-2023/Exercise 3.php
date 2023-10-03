<?php

echo "Enter your first word: ";
$firstWord = readline();

echo "Enter your second word: ";
$secondWord = readline();

$totalLength = strlen($firstWord) + strlen($secondWord);
$needDots = max(0, 30 - $totalLength);

echo $firstWord . str_repeat('.', $needDots) . $secondWord . PHP_EOL;
<?php

$randomWords = ["zebra", "giraffe", "clay", "tower", "pencil", "notebook", "headphones", "music", "wolf", "toy"];

$gameWord = $randomWords[array_rand($randomWords)];
$spiltWord = str_split($gameWord);

$triesAvailable = 5;
$wrongGuesses = [];
$rightGuesses = array_fill(0, count($spiltWord), "-");


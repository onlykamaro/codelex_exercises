<?php declare(strict_types=1);

// Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
// Print this value out.

function main(string $str): string
{
    return $str . "codelex";
}

echo main("Hello ");
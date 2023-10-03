<?php

echo "Enter minimum integer: " . PHP_EOL;
$min = (int) readline();

echo "Enter maximum integer: " . PHP_EOL;
$max = (int) readline();

for ($i = 0; $i <= $max - $min; $i++)
{
    for ($x = $min; $x <= $max; $x++)
    {
        $value = $x + $i;

        if ($value > $max)
        {
            echo $value - ($max - $min) - 1;
        } else {
            echo $value;
        }

    }
    echo PHP_EOL;
}

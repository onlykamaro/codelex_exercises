<?php

$size = 0;

function draw ($size) {
    for ($i = 0; $i < $size; $i++) {
        for ($n = 0; $n < $size - $i - 1; $n++) {
            echo "/";
        }

        for ($n = 0; $n < 2 * $i; $n++) {
            echo "*";
        }

        for ($n = 0; $n < $size - $i - 1; $n++) {
            echo "\\";
        }
        echo PHP_EOL;
    }
}

draw(5);
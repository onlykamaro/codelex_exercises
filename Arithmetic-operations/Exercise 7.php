<?php

// Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:
//Note: The correct value is -490.5m.

$initialPosition = 0;
$startVelocity = 0;
$acceleration = -9.81;
$time = 10;

$distance = $initialPosition + ($startVelocity * $time) + (0.5 * $acceleration * $time * $time);

echo $distance;
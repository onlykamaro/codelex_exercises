<?php

function calculateCircle (float $circleRadius): float
{
    $circleArea = pi() * $circleRadius * $circleRadius;
    if ($circleRadius < 0)
    {
        return "ERROR! The number you entered is negative! Only positive values are accepted!";
    }
    return $circleArea;
}

function calculateRectangle (float $length, float $width): float
{
    $rectangleArea = $length * $width;
    if ($length < 0 || $width < 0)
    {
        return "ERROR! The number you entered is negative! Only positive values are accepted!";
    }
    return $rectangleArea;
}

function calculateTriangle (float $base, float $height): float
{
    $triangleArea = $base * $height * 0.5;
    if ($base < 0 || $height < 0)
    {
        return "ERROR! The number you entered is negative! Only positive values are accepted!";
    }
    return $triangleArea;
}

while (true)
{
    echo "Geometry calculator:" . PHP_EOL;
    echo "1. Calculate the Area of a Circle" . PHP_EOL;
    echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
    echo "3. Calculate the Area of a Triangle" . PHP_EOL;
    echo "4. Quit" . PHP_EOL;
    echo "Please pick a function (1-4): " . PHP_EOL;

    $choice = readline();

    switch ($choice)
    {
        case "1":
            echo "Enter circle radius: ";
            $circleRadius = readline();
            echo "Circle area is: " . calculateCircle($circleRadius) . PHP_EOL;
            break;
        case "2":
            echo "Enter rectangle length: ";
            $length = readline();
            echo "Enter rectangle width: ";
            $width = readline();
            echo "Rectangle area is: " . calculateRectangle($length, $width) . PHP_EOL;
            break;
        case "3":
            echo "Enter triangle base: ";
            $base = readline();
            echo "Enter triangle height: ";
            $length = readline();
            echo "Triangle area is: " . calculateTriangle($base, $length) . PHP_EOL;
            break;
        case "4":
            exit;
        default:
            echo "ERROR! Wrong input! Please choose between 1-4" . PHP_EOL;
    }
}
<?php

function calculateBMI (float $weight, float $height, string $unit): float
{
    if ($unit === "metric") {
        $bmi = $weight / ($height * $height);
    } elseif ($unit === "imperial") {
        $bmi = $weight / ($height * $height) * 703;
    } else {
        return "ERROR! Invalid unit! Please choose (metric) or (imperial).";
    }

    return $bmi;
}

function weightStatus (float $bmi): string
{
    if ($bmi < 18.5) {
        return "BMI is too low - Person is underweight!";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "BMI is normal - Person is in good shape";
    } else {
        return "BMI is too high - Person is overweight";
    }
}

//$weight = 150;
//$height = 68;
//$unit = "imperial";
$weight = 68;
$height = 1.7;
$unit = "metric";

$bmi = calculateBMI($weight, $height, $unit);

    $status = weightStatus($bmi);

    echo "Unit chosen: " . $unit . PHP_EOL;
    echo "Persons BMI is: " . $bmi. PHP_EOL;
    echo "Persons weight status is: " . $status . PHP_EOL;

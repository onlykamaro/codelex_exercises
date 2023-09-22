<?php

function calculatePay (string $name, float $basePay, int $hoursWorked): string
{
    $maxExtraHoursPerWeek = 60;
    $maxBasicHoursPerWeek = 40;
    $minHourlyRate = 8;
    $overtimeRate = 1.5;

// Check if hours worked exceed the weekly limit
    if ($hoursWorked > $maxExtraHoursPerWeek) {
        return "ERROR! $name has worked too many hours this week!";
    }

// Check if hourly rate meets the state minimum
    if ($basePay < $minHourlyRate) {
        return "ERROR! $name is not being paid enough!";
    }
// Calculate total pay
    if ($hoursWorked <= $maxBasicHoursPerWeek) {
        $totalPay = $hoursWorked * $basePay;
    } else {
        $normalPay = $basePay * $maxBasicHoursPerWeek;
        $overtimePay = ($hoursWorked - $maxBasicHoursPerWeek) * $basePay * $overtimeRate;
        $totalPay = $normalPay + $overtimePay;
    }
    return "$name has earned - $totalPay$ this week";
}

$employees =
    [
        ["Robert", 7.5, 35],
        ["Janis", 8.2, 47],
        ["Andis", 10.00, 73]
    ];

foreach ($employees as $employee)
{
    $name = $employee[0];
    $basePay = $employee[1];
    $hoursWorked = $employee[2];

    echo calculatePay($name, $basePay, $hoursWorked) . PHP_EOL;
}
<?php

// Create a 2D associative array in 2nd dimension with fruits and their weight.
$fruits = [
    ["name" => "Pear", "weight" => 0.3],
    ["name" => "Apple", "weight" => 0.2],
    ["name" => "Orange", "weight" => 0.4],
    ["name" => "Melon", "weight" => 11],
    ["name" => "Watermelon", "weight" => 10],
];

// Create a function that determines if fruit has weight over 10kg.
function isOver10kg($weight): bool {
    return $weight >= 10;
}

// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
$shippingCosts = [
    "over_10kg" => 2,
    "under_10kg" => 1,
];

// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
foreach ($fruits as $fruit) {
    $fruitName = $fruit["name"];
    $fruitWeight = $fruit["weight"];
    if (isOver10kg($fruitWeight)) {
        $fruitCost = $shippingCosts["over_10kg"];
    } else {
        $fruitCost = $shippingCosts["under_10kg"];
    }
    echo "Fruit: $fruitName, Weight: $fruitWeight kg, Shipping Cost: $fruitCost euros \n";
}

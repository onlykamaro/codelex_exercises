<?php declare(strict_types=1);

// Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object).
// Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array. Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

function createClient(string $name, int $budget, array $licenses): stdClass
{
    $client = new stdClass();
    $client->name = $name;
    $client->budget = $budget;
    $client->licenses = $licenses;
    return $client;
}

$client = createClient(
    readline("Client name: "),
    (int) readline("Client budget: "),
    explode(",", readline("Client licenses: "))
);

echo PHP_EOL;

function createWeapon(string $name, string $license, int $price): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    createWeapon("Glock", "A", 200),
    createWeapon("Rifle", "B", 1000),
    createWeapon("Sniper", "C", 2000),
    createWeapon("Tazer", "D", 100),
    createWeapon("Knife", "D", 70),
];

function afford(stdClass $client, array $weapons): array
{
    $affordableWeapons = [];

    foreach ($weapons as $weapon) {
        if (in_array($weapon->licence, $client->licenses) && $client->budget >= $weapon->price)
        {
            $affordableWeapons [] = $weapon;
        }
    }

    return $affordableWeapons;
}

$affordableWeapons = afford($client, $weapons);

foreach ($affordableWeapons as $weapon)
{
    echo "You can buy: {$weapon->name} for price of {$weapon->price}" . PHP_EOL;
}
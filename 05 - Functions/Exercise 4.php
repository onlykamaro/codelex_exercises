<?php

// Create an array of objects that uses the function of exercise 3
// but in loop printing out if the person has reached age of 18.

function createPerson(string $name, string $surname, int $age): stdClass {
    $person = new stdClass();
    $person->name = $name;
    $person->surname = $surname;
    $person->age = $age;

    return $person;
}

function isOver18 ($person):bool
{
    return $person->age >= 18;
}

$person = createPerson("John", "Doe", 21);
$person = createPerson("Jane", "Doe", 14);

if (isOver18($person)){
    echo "Person is over 18 years old";
} else {
    echo "Person is under 18 years old";
}
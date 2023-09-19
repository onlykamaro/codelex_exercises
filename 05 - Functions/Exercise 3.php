<?php

// Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

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

$person = createPerson("john", "doe", 21);

if (isOver18($person)){
    echo "Person is over 18 years old";
} else {
    echo "Person is under 18 years old";
}
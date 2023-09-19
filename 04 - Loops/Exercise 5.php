<?php

// Create an associative array with objects of multiple persons.
// Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every persons personal data.

$john = new stdClass();
$john->name = "John";
$john->surname = "Dove";
$john->age = 30;
$john->birthday = '1992-10-10';


$jane = new stdClass();
$jane->name = "Jane";
$jane->surname = "Dove";
$jane->age = 32;
$jane->birthday = '1990-10-10';


$bob = new stdClass();
$bob->name = "Bob";
$bob->surname = "Johnson";
$bob->age = 29;
$bob->birthday = '1993-10-10';


$persons = [$john, $jane, $bob];

foreach ($persons as $person) {
//    echo "$person->name $person->surname ($person->birthday | $person->age)" . PHP_EOL;
    echo "$person->name $person->surname ($person->birthday | $person->age) \n";
}
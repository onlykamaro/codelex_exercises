<?php

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $father;
    private ?Dog $mother;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = null;
        $this->mother = null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setFather($father): void
    {
        $this->father = $father;
    }

    public function setMother($mother): void
    {
        $this->mother = $mother;
    }

    public function fathersName(): string
    {
        return $this->father ? $this->father->getName() : 'Unknown';
    }

    public function hasSameMotherAs($otherDog): bool
    {
        return $this->mother && $otherDog->mother && ($this->mother->getName() === $otherDog->mother->getName());
    }
}

class DogTest {
    public static function Main() {
        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");

        $max->setMother($lady);
        $max->setFather($rocky);

        $coco->setMother($molly);
        $coco->setFather($buster);

        $rocky->setMother($molly);
        $rocky->setFather($sam);

        $buster->setMother($lady);
        $buster->setFather($sparky);

        echo "Max's father: " . $max->fathersName() . PHP_EOL;
        echo "Sparky's father: " . $sparky->fathersName() . PHP_EOL;

        if ($coco->hasSameMotherAs($rocky)) {
            echo "Coco and Rocky have the same mother.\n";
        } else {
            echo "Coco and Rocky do not have the same mother.\n";
        }
    }
}

DogTest::Main();
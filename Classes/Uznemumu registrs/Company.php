<?php

declare(strict_types=1);

class Company
{
    private string $name;
    private string $registrationNumber;
    private string $address;

    public function __construct(
        string $name,
        int $registrationNumber,
        string $address
    )
    {
        $this->name = $name;
        $this->regcode = $registrationNumber;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getRegistrationNumber(): int
    {
        return $this->registrationNumber;
    }
    public function getAddress(): string
    {
        return $this->address;
    }


}
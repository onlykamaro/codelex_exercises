<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance < 0)
        {
            return "$this->name, $this->balance$";
        } else {
            return "$this->name, $this->balance$";
        }
    }
}

$ben = new BankAccount("Benson", -14.45);

echo $ben->showUserNameAndBalance();
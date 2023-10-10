<?php

class Account
{
    private string $accountName;
    private float $balance;

    public function __construct(string $accountName, float $balance)
    {
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        if ($amount >= 0) {
            $this->balance += $amount;
        }
    }

    public function withdrawal($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function __toString(): string
    {
        return "Bank account: $this->accountName. Current balance: $$this->balance";
    }
}

function transfer(Account $from, Account $to, int $howMuch)
{
    $from->withdrawal($howMuch);
    $to->deposit($howMuch);
}

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

transfer($a, $b, 50);
transfer($b, $c, 25);

echo "Transfer in progress" . PHP_EOL;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo $c . PHP_EOL;

$testAccount = new Account("Test", 100);
$testAccount->deposit(20);

echo $testAccount . PHP_EOL;

$matt = new Account("Matt's account", 1000);
$myaccount = new Account("My account", 0);

$matt->withdrawal(100);
$myaccount->deposit(100);

echo $matt . PHP_EOL;
echo $myaccount . PHP_EOL;


/*
$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state";
echo $bartosAccount;
echo $bartosSwissAccount;

$bartosAccount->withdrawal(20);
echo "Barto's account balance is now: " . $bartosAccount->getBalance();
$bartosSwissAccount->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartosSwissAccount->getBalance();

echo "Final state";
echo $bartosAccount;
echo $bartosSwissAccount;
*/
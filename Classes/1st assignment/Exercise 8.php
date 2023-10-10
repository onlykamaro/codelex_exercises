<?php declare(strict_types=1);

class SavingsAccount
{
    private int $annualInterestRate;
    private int $balance;

    private int $totalDeposits = 0;
    private int $totalWithdrawals = 0;
    private int $totalInterestEarned = 0;

    public function __construct(int $initialBalance, int $annualInterestRate)
    {
        $this->balance = $initialBalance;
        $this->annualInterestRate = $annualInterestRate;
    }

    public function deposit($amount): void
    {
        $this->balance += $amount;
        $this->totalDeposits += $amount;
    }

    public function withdraw($amount): void
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $this->totalWithdrawals += $amount;
        } else {
            echo "Insufficient funds. Your current balance is: $this->balance";
        }
    }

    public function calculateMonthlyInterest(): void
    {
        $monthlyInterestRate = $this->annualInterestRate / 12;
        $monthlyInterest = $this->balance * $monthlyInterestRate;
        $this->balance += $monthlyInterest;
        $this->totalInterestEarned += $monthlyInterest;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function getTotalDeposits(): int
    {
        return $this->totalDeposits;
    }

    public function getTotalWithdrawal(): int
    {
        return $this->totalWithdrawals;
    }

    public function getTotalInterestRate(): int
    {
        return $this->totalInterestEarned;
    }
}

echo "Enter your current balance: ";
$initialBalance = intval(readline());

echo "Enter annual interest rate: ";
$annualInterestRate = intval(readline());

echo "How many months is the account open: ";
$months = intval(readline());

$savingsAccount = new SavingsAccount($initialBalance, $annualInterestRate);

for ($i = 1; $i <= $months; $i++)
{
    echo "Enter the amount deposited in month $i: ";
    $deposit = intval(readline());
    $savingsAccount->deposit($deposit);

    echo "Enter the amount you withdraw in month $i: ";
    $withdraw = intval(readline());
    $savingsAccount->withdraw($withdraw);

    $savingsAccount->calculateMonthlyInterest();
}

$endingBalance = $savingsAccount->getBalance();
$totalDeposits = $savingsAccount->getTotalDeposits();
$totalWithdrawals = $savingsAccount->getTotalWithdrawal();
$totalInterestEarned = $savingsAccount->getTotalInterestRate();

echo "Total deposited: $" . number_format($totalDeposits, 2) . PHP_EOL;
echo "Total withdrawals: $" . number_format($totalWithdrawals, 2) . PHP_EOL;
echo "Total interest earned: $" . number_format($totalInterestEarned, 2) . PHP_EOL;
echo "Ending balance in account: $" . number_format($endingBalance, 2) . PHP_EOL;
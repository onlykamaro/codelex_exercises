<?php

class Product
{
    private float $price;
    private int $amount;
    private string $name;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct()
    {
        echo $this->name . ", " . $this->price . " EUR, " . $this->amount . " units" . PHP_EOL;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}

$banana = new Product("Banana", 1.1, 13);
$banana->printProduct();

$mouse = new Product("Logitech mouse", 70.00, 14);
$mouse->printProduct();
$mouse->setPrice(100.00);
$mouse->setAmount(10);
$mouse->printProduct();

$iphone = new Product("iPhone 5s", 999.99, 3);
$iphone->printProduct();
$iphone->setPrice(899.00);
$iphone->setAmount(1);
$iphone->printProduct();

$epson = new Product("Epson EB-U05", 440.46, 1);
$epson->printProduct();
$epson->setPrice(400.00);
$epson->setAmount(2);
$epson->printProduct();
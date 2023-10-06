<?php

class Survey
{
    private int $totalCustomers;
    private float $percentPurchasedEnergyDrinks;
    private float $percentCitrusFlavored;

    public function __construct(int $totalCustomers, float $percentPurchasedEnergyDrinks, float $percentCitrusFlavored)
    {
        $this->totalCustomers = $totalCustomers;
        $this->percentPurchasedEnergyDrinks = $percentPurchasedEnergyDrinks / 100;
        $this->percentCitrusFlavored = $percentCitrusFlavored / 100;
    }

    public function getTotalCustomers ():int
    {
        return $this->totalCustomers;
    }

    public function calculateCustomersWhoPurchasedEnergyDrinks():float
    {
        return round($this->totalCustomers * $this->percentPurchasedEnergyDrinks);
    }

    public function calculateCustomersWhoPreferedCitrusFlavour():float
    {
        return round($this->calculateCustomersWhoPurchasedEnergyDrinks() * $this->percentCitrusFlavored);
    }
}

$surveyResults = new Survey(12467, 14, 64);

$numberOfCustomersWhoPurchasedEnergyDrinks = $surveyResults->calculateCustomersWhoPurchasedEnergyDrinks();

$numberOfCustomersWhoPreferedCitrusFlavour = $surveyResults->calculateCustomersWhoPreferedCitrusFlavour();

echo "Total number of people surveyed: 
" . $surveyResults->getTotalCustomers() . PHP_EOL;

echo "Approximate number of customers who purchased energy drinks per week:
$numberOfCustomersWhoPurchasedEnergyDrinks" . PHP_EOL;

echo "Approximate number of customers who prefer citrus flavored energy drinks:
$numberOfCustomersWhoPreferedCitrusFlavour" . PHP_EOL;

/*
fixme
echo "Total number of people surveyed " . $surveyed;
echo "Approximately " . ? . " bought at least one energy drink";
echo ? . " of those " . "prefer citrus flavored energy drinks.";
*/
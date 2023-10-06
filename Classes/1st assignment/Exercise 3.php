<?php

class FuelGauge
{
    private int $fuel;
    
    public function __construct()
    {
        $this->fuel = 0;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function increaseFuel()
    {
        if ($this->fuel < 70)
        {
            $this->fuel++;
        }
    }

    public function decreaseFuel()
    {
        if ($this->fuel > 0)
        {
            $this->fuel--;
        }
    }
}

class Odometer
{
    private int $mileage;
    private FuelGauge $fuelGauge;

    public function __construct(FuelGauge $fuelGauge)
    {
        $this->mileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function increaseMileage()
    {
        if ($this->mileage < 999999)
        {
            $this->mileage++;

            if ($this->mileage % 10 === 0)
            {
                $this->fuelGauge->decreaseFuel();
            }

            if ($this->mileage >= 999999)
            {
                $this->mileage = 0;
            }
        }
    }
}

$fuelGauge = new FuelGauge();
$odometer = new Odometer($fuelGauge);

while ($fuelGauge->getFuel() < 70)
{
    $fuelGauge->increaseFuel();
}

while ($fuelGauge->getFuel() > 0)
{
    $odometer->increaseMileage();

    echo "Mileage: " . $odometer->getMileage() . " km / Fuel: " . $fuelGauge->getFuel() . " liters" . PHP_EOL;
}

echo "Car run out of fuel!";
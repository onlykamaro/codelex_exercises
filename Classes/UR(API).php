<?php

declare(strict_types=1);

class UR
{
    private string $api =
    'https://data.gov.lv/dati/lv/api/3/action/datastore_search?q=jones&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9';
    private array $data;

    public function __construct()
    {
        $this->data = $this->fetchData($this->api);
    }

    private function fetchData (string $url): array
    {
        return json_decode(file_get_contents($url), true);
    }

    public function searchCompany($name, $regNumber)
    {

    }

    public function displayData (): void
    {
        foreach ($this->data as $dataInfo) {
            $name = $dataInfo['name'];
            $type = $dataInfo['type'];
            $regNumber = $dataInfo['regcode'];
            $address = $dataInfo['address'];
            $registered = $dataInfo['registered'];
            $terminated = $dataInfo['terminated'];

            echo "Name: $name" . PHP_EOL;
            echo "Type: $type" . PHP_EOL;
            echo "Reg. number $regNumber" . PHP_EOL;
            echo "Address: $address" . PHP_EOL;
            echo "Registered: $registered" . PHP_EOL;
            echo "Terminated: $terminated" . PHP_EOL;
            echo "---------------------------------" . PHP_EOL;
        }
    }

    public function run(): void
    {
        while(true) {
            echo "Latvijas Uzņēmumu Reģistrs" . PHP_EOL;
            echo "1. Apskatīt Uzņēmumus" . PHP_EOL;
            echo "2. Iziet" . PHP_EOL;
            $choice = readline("Izvēlies darbību: ");

            switch ($choice) {
                case "1":
                    $this->displayData();
                    break;
                case "2":
                    exit();
                default:
                    echo "Kļūda! Mēģini vēlreiz!";
            }
        }
    }
}

$dataCollection = new UR();
$dataCollection->run();
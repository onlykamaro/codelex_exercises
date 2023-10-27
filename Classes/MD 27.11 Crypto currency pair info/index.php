<?php

declare(strict_types=1);

class CryptocurrencyPrice
{
    private string $api = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";

    public function __construct()
    {}

    public function fetchPriceData(string $symbol1, string $symbol2): ?array
    {
        $url = $this->api . strtoupper($symbol1) . "BTC";
        $response = file_get_contents($url);

        if ($response === false) {
            return null;
        }

        $data = json_decode($response, true);

        if ($symbol1 !== "BTC") {
            $url = $this->api . strtoupper($symbol2) . "BTC";
            $response2 = file_get_contents($url);
            if ($response2 !== false) {
                $data2 = json_decode($response2, true);
                $data['price_in_' . strtoupper($symbol2)] = $data2['lastPrice'];
            }
        }

        return $data;
    }

    public function displayPrices(string $symbol1, string $symbol2): void
    {
        $data = $this->fetchPriceData($symbol1, $symbol2);

        if ($data) {
            echo "Current Price for 1 " . strtoupper($symbol1) . " in BTC: " . $data['lastPrice'] . " BTC" . PHP_EOL;

            if (isset($data['price_in_' . strtoupper($symbol2)])) {
                echo "Current Price for 1 " . strtoupper($symbol1) . " in " . strtoupper($symbol2) . ": " . $data['price_in_' . strtoupper($symbol2)] . " " . strtoupper($symbol2) . PHP_EOL;
            }
        } else {
            echo "Unable to fetch data for " . strtoupper($symbol1) . PHP_EOL;
        }
    }
}

echo "Enter two cryptocurrency symbols (e.g., ETH LTC): ";
$userInput = readline();
$symbols = explode(" ", $userInput);

if (count($symbols) != 2) {
    echo "Please provide two cryptocurrency symbols." . PHP_EOL;
    exit(1);
}

$cryptoPrice = new CryptocurrencyPrice();
$cryptoPrice->displayPrices($symbols[0], $symbols[1]);
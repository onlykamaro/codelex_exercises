<?php

declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class Conversion
{
    private Client $client;
    private const API_URL = 'https://api.freecurrencyapi.com/v1/latest';
    private const API_KEY = 'fca_live_ymIqC29MLkUvj1DTVEzUJX62rcASjw4NIaFNQkVt';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function exchange(Currency $baseCurrency, CurrencyCollection $currencies, float $amount): array
    {
        //$url = self::API_URL . "?apikey=" . self::API_KEY . "&currencies={$targetCurrency->getIsoCode()}&base_currency={$baseCurrency->getIsoCode()}";
        $url = $this->getUrl($baseCurrency, $currencies);

        $result = $this->client->get($url);
        $result = (string) $result->getBody();
        $result = json_decode($result, true);

        $results = [];

        foreach ($result['data'] as $isoCode => $rate) {
            $result[$isoCode] = $rate * $amount;
        }
        return $results;
    }

    public function getUrl (Currency $baseCurrency, CurrencyCollection $currencies): string
    {
        $params = [
            'apikey' => self::API_KEY,
            'currencies' => implode(',', $currencies->getIsoCodes()),
            'base_currencies' => $baseCurrency->getIsoCode()
        ];
        return self::API_URL . "?" . http_build_query($params);
    }
}
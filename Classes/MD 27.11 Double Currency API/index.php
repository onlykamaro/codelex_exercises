<?php

declare(strict_types=1);

require_once 'vendor\autoload.php';

use App\Currency;
use App\Conversion;
use App\CurrencyCollection;

$input = readline("Enter conversion: ");
$targetCurrencyIsoCodes = explode(' ', readline("Enter currency to convert to: "));

[$amount, $baseCurrencyIsoCode] = explode(' ', $input);

$conversion = new Conversion();

$targetCurrencies = new CurrencyCollection($targetCurrencyIsoCodes);

$results = $conversion->exchange(
    new Currency($baseCurrencyIsoCode),
    $targetCurrencies,
    (float) $amount
);

foreach ($results as $isoCode => $value)
{
    echo "{$isoCode} -> {$value}" . PHP_EOL;
}

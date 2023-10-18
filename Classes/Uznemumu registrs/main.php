<?php

declare(strict_types=1);

require_once "Company.php";
require_once "CompanyCollection.php";
require_once "ApiFetcher.php";

echo "Search company by name / registration number / other" . PHP_EOL;
$q = trim(readline());

if (empty($q)) {
    exit("Search can't be an empty field");
}

$baseUrl = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";

try {
    $apiFetcher = new ApiFetcher($baseUrl);
    $collection = $apiFetcher->retrieveDataFromApi($q);

    if (empty($records)) {
        exit("No records of company ($q) found". PHP_EOL);
    }

    foreach ($collection->getCompanies() as $company) {
        /** @var Company $company */
        echo "Company Name: " . $company->getName() . PHP_EOL;
        echo "Registration Number: " . $company->getRegistrationNumber() . PHP_EOL;
        echo "Company Address: " . $company->getAddress() . PHP_EOL;
        echo "___________________________________";
    }
} catch (Exception $e) {
    exit ($e->getMessage() . PHP_EOL);
}
<?php

declare(strict_types=1);

class ApiFetcher
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function retrieveDataFromApi(string $q): CompanyCollection
    {
        $url = $this->baseUrl . '&' . http_build_query(['q' => $q]);

        $response = file_get_contents($url);

        if (!$response)
        {
            throw new Exception("Failed to fetch data from API");
        }

        $data = json_decode($response);

        if ($data === null || !$data->success) {
            throw new Exception("API request was not successful or an error occurred");
        }

        $collection = new CompanyCollection();

        foreach ($data->result->records as $record) {
            $collection->add(new Company(
                $record->name,
                $record->regcode,
                $record->address
            ));
        }

        return $collection;
    }
}
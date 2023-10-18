<?php

declare(strict_types=1);

class CompanyCollection
{
    private array $companies;

    public function __construct(array $companies = [])
    {
        foreach ($companies as $company)
        {
            $this->add($company);
            /*if (!$company instanceof Company)
                continue;

            $this->companies = $companies;*/
        }
    }

    public function add(Company $company)
    {
        $this->companies [] = $company;
    }

    public function getCompanies(): array
    {
        return $this->companies;
    }
}
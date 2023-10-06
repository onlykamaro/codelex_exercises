<?php

class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }
    public function getDay()
    {
        return $this->day;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }
    public function getMonth()
    {
        return $this->month;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }

    public function displayDate()
    {
        return $this->getDay() . "/" . $this->getMonth() . "/" . $this->getYear();
    }
}

echo (new Date(05, 10, 2023))->displayDate();
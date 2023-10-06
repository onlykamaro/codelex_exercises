<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function GetPG($movies)
    {
        $pgMovies = [];

        foreach ($movies as $movie)
        {
            if ($movies-rating === "PG")
            {
                $pgMovies[] = $movie;
            }
        }
        return $pgMovies;
    }
}

$movie1 = new Movie("Casino Royale", "Eon Productions", "PG13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG13");
$movie3 = new Movie("Spider-Man: Into The Spider-Verse ", "Columbia Pictures", "PG");


<?php

declare(strict_types=1);

class RickAndMortyEpisodes
{
    private string $api = 'https://rickandmortyapi.com/api/episode';
    private string $episodeList;
    private string $ratingsFile;
    private array $episodes;
    private array $ratings;

    public function __construct()
    {
        $this->episodeList = $this->api;
        $this->ratingsFile = "ratings.json";
        $this->episodes = $this->fetchEpisodes($this->episodeList);
        $this->ratings = file_exists($this->ratingsFile)
            ? json_decode(file_get_contents($this->ratingsFile), true) : [];
    }

    private function fetchEpisodes(string $url): array
    {
        return json_decode(file_get_contents($url), true);
    }

    public function displayEpisodes(): void
    {
        foreach ($this->episodes['results'] as $episode) {
            $id = $episode['id'];
            $name = $episode['name'];
            $episodeNumber = $episode['episode'];
            $rating = $this->ratings[$id] ?? "N/A";

            echo "ID: $id" . PHP_EOL;
            echo "Episode Name: $name" . PHP_EOL;
            echo "Episode Number: $episodeNumber" . PHP_EOL;
            echo "Episode Rating: $rating" . PHP_EOL;
            echo "-------------------------------" . PHP_EOL;
        }
    }

    public function rateEpisode(int $episodeID, int $rating): void
    {
        if ($rating < 1 || $rating > 10) {
            echo "Invalid rating. Please rate 1-10" . PHP_EOL;
        } elseif (isset($this->ratings[$episodeID])){
            $existingRating = $this->ratings[$episodeID];
            $totalRatings = count($existingRating);
            $newAvgRating = ($existingRating + $rating) / ($totalRatings + 1);
            $this->ratings[$episodeID] = $newAvgRating;
        } else {
            $this->ratings[$episodeID] = $rating;
        }
        file_put_contents($this->ratingsFile, json_encode($this->ratings));
        echo "Episode $episodeID has been rated. Average rating is now " . $this->ratings[$episodeID] . PHP_EOL;
    }

    public function run(): void
    {
        while (true) {
            echo "Rick and Morty Episodes" . PHP_EOL;
            echo "1. View All Episodes" . PHP_EOL;
            echo "2. Rate Episode" . PHP_EOL;
            echo "3. Exit" . PHP_EOL;
            $choice = readline("Choose action: ");

            switch ($choice) {
                case '1':
                    $this->displayEpisodes();
                    break;
                case '2':
                    $episodeId = (int)readline("Enter the episode ID to rate: ");
                    $rating = (int)readline("Enter your rating (1-10): ");
                    $this->rateEpisode($episodeId, $rating);
                    break;
                case '3':
                    exit();
                default:
                    echo "Invalid choice. Try again.\n";
            }
        }
    }
}

$collection = new RickAndMortyEpisodes();
$collection->run();
<?php

class Application
{
    private $videoStore;
    public function __construct()
    {
        $this->videoStore = new VideoStore([]);
    }

    public function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        echo "Enter title: ";
        $title = readline();
        $this->videoStore->addVideo($title);
        echo "Video '$title' added to store's inventory";
    }

    private function rent_video()
    {
        echo "Enter video title you want to rent: ";
        $title = readline();
        if ($this->videoStore->checkOutVideo($title)) {
            echo "You have rented video: '$title'" . PHP_EOL;
        } else {
            echo "The video '$title' you're trying to rent is not available" . PHP_EOL;
        }
    }

    private function return_video()
    {
        echo "Enter title of video you want to return: ";
        $title = readline();
        if ($this->videoStore->returnVideo($title)) {
            echo "You've returned video '$title'" . PHP_EOL;
        } else {
            echo "The video '$title' hasn't been checked out or it does not exist in inventory" . PHP_EOL;
        }
    }

    private function list_inventory()
    {
        echo "Our inventory: " . PHP_EOL;
        $this->videoStore->listInventory();
    }
}

class VideoStore
{
    private array $inventory;

    public function __construct()
    {
        $this->inventory = [];
    }

    public function addVideo($title)
    {
        $video = new Video($title);
        $this->inventory[] = $video;
    }

    public function checkOutVideo($title)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() === $title && !$video->isCheckedOut()) {
                return $video->checkOut();
            }
        }
        return false;
    }

    public function returnVideo($title)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() === $title && $video->isCheckedOut()) {
                return $video->returnVideo();
            }
        }
        return false;
    }

    public function receiveRating($title, $rating)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() === $title) {
                $video->receiveRating($rating);
                return true;
            }
        }
        return false;
    }

    public function listInventory()
    {
        foreach ($this->inventory as $video) {
            $status = $video->isCheckedOut() ? "Checked Out" : "Available in store";
            echo "Title: " . $video->getTitle() . PHP_EOL;
            echo "Average user rating: " . $video->getAverageRating() . PHP_EOL;
            echo "Status: " . $status . PHP_EOL;
        }
    }
}

class Video
{
    private string $title;
    private bool $isCheckedOut;
    private float $avgUserRating;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->isCheckedOut = false;
        $this->ratings = [];
    }

    public function checkOut()
    {
        if (!$this->isCheckedOut) {
            $this->isCheckedOut = true;
            return true;
        }
        return false;
    }

    public function returnVideo()
    {
        if ($this->isCheckedOut) {
            $this->isCheckedOut = false;
            return true;
        }
        return false;
    }

    public function receiveRating($rating)
    {
        if ($rating >= 1 && $rating <= 5) {
            $this->ratings[] = $rating;
        }
    }

    public function getAverageRating()
    {
        $totalRatings = count($this->ratings);
        if ($totalRatings === 0) {
            return 0;
        }
        $sumOfRatings = array_sum($this->ratings);
        return $sumOfRatings / $totalRatings;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function isCheckedOut()
    {
        return $this->isCheckedOut;
    }
}

$app = new Application();
$app->run();
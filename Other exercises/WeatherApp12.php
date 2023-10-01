<?php
$apiKey = '{API KEY}';

$city = 'Riga';

$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

$response = file_get_contents($apiUrl);

$data = json_decode($response, true);

if (isset($data['main']) && isset($data['weather'])) {
    $temperature = $data['main']['temp'];
    $description = $data['weather'][0]['description'];

    echo "City: {$city}\n";
    echo "Temperature: {$temperature}°C\n";
    echo "Description: {$description}\n";
}

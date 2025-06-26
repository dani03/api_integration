<?php

namespace App\Services\Weather\Repositories;

use App\Services\Weather\Dtos\WeatherData;
use App\Services\Weather\Exceptions\WeatherException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class WeatherRepository implements WeatherInterface
{
    private PendingRequest $http;
    public function __construct()
    {
        // Globaly set the base url and accept json
        $this->http = Http::baseUrl('https://api.weatherapi.com')
            ->acceptJson();
    }
    public function getByCity(string $city): WeatherData
    {
        $response = $this->http->get('v1/current.json', [
            'key' => config('services.weather.key'),
            'q' => $city,
        ]);

       /* if ($response->failed()) {
            return ['error' => 'Unable to fetch weather data'];
        } */
        throw_if($response->failed(), WeatherException::class, 'Unable to fetch weather data');

        return WeatherData::fromArray($response->json());
    }


}

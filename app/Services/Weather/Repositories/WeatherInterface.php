<?php
namespace App\Services\Weather\Repositories;

use App\Services\Weather\Dtos\WeatherData;

interface WeatherInterface
{
    public function getByCity(string $city): WeatherData;
}

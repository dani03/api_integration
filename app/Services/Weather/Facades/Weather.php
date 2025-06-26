<?php

namespace App\Services\Weather\Facades;


use App\Services\Weather\Repositories\WeatherInterface;
use App\Services\Weather\Repositories\WeatherRepository;
use Illuminate\Support\Facades\Facade;

class Weather extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return WeatherInterface::class;
    }
}

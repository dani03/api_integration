<?php

namespace App\Services\Weather\Providers;


use App\Services\Weather\Repositories\WeatherInterface;
use App\Services\Weather\Repositories\WeatherRepository;
use Illuminate\Support\ServiceProvider;

class WeatherProvider extends ServiceProvider
{
    public function register(): void
    {
        match ($this->app->environment()) {
            default => $this->app->bind(WeatherInterface::class, WeatherRepository::class),
        };
    }
}

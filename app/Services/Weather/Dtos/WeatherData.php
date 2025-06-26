<?php

namespace App\Services\Weather\Dtos;

use Spatie\LaravelData\Data;

class WeatherData extends Data
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $location,
        public float $temperature,
        public string $condition
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['location']['name'],
            $data['current']['temp_c'],
            $data['current']['condition']['text']
        );
    }
}

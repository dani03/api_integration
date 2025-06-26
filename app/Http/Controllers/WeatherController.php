<?php

namespace App\Http\Controllers;

use App\Services\Weather\Facades\Weather;
use App\Services\Weather\Repositories\WeatherRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WeatherController extends Controller
{
    public function getWeather(): JsonResponse
    {
    $city = 'chicago';
        $weather = Weather::getByCity($city);
        if (isset($weather['error'])) {
            return response()->json($weather, 500);
        }

        return response()->json([
            'city' => $weather['location']['name'],
            'temperature' => $weather['current']['temp_c'],
            'condition' => $weather['current']['condition']['text']
        ]);
    }
}

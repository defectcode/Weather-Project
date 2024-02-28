<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\WeatherData;
use Illuminate\Pagination\LengthAwarePaginator;

class WeatherService
{
    public function syncWeatherData()
    {
        $response = Http::get('http://api.openweathermap.org/data/3.0/onecall', [
            'lat' => '33.44',
            'lon' => '-94.04',
            'appid' => config('services.openweathermap.api_key'),
        ]);

        if ($response->successful()) {
            $weatherData = $response->json();

            WeatherData::create([
                'city' => $weatherData['city']['name'],
                'description' => $weatherData['current']['weather'][0]['description'],
                'temperature' => $weatherData['current']['temp'],
                'humidity' => $weatherData['current']['humidity'],
            ]);
        } else {
            dd($response->body());
            Log::error('API request to OpenWeatherMap failed: ' . $response->status() . ' - ' . $response->body());
        }
    }
}

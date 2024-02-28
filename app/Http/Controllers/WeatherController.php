<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;


use App\Services\WeatherService;

class WeatherController extends Controller
{

    public function index()
    {
        $weatherService = new WeatherService();
        $weatherService->syncWeatherData();

        $weatherData = $weatherService->getAllWeatherData();


        return View::make('admin.weather.index', ['weatherData' => $weatherData]);
    }
}

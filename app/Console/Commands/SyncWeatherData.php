<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\WeatherService;

class SyncWeatherData extends Command
{
    protected $signature = 'sync:weather';

    protected $description = 'Sync weather data from OpenWeatherMap API to database';

    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        parent::__construct();
        $this->weatherService = $weatherService;
    }

    public function handle()
    {
        $this->info('Starting weather data synchronization...');

        $this->weatherService->syncWeatherData();

        $this->info('Weather data synchronization completed.');
    }
}

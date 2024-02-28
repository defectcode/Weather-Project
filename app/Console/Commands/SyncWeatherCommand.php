<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncWeatherCommand extends Command
{


    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');

        $this->commands([
            \App\Console\Commands\SyncWeatherCommand::class,
        ]);
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-weather-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}

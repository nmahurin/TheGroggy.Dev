<?php

namespace App\Console;

use App\Console\Commands\HarvestTelemetry;
use App\Console\Commands\HarvestWeather;
use App\Models\Telemetry\CommandLogs;
use Carbon\Carbon;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Stringable;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->command(HarvestWeather::class)
            ->everyTwoHours()
            ->before(function(){
                /** Drop weather logs older than 7 days */
                CommandLogs::myLogs('weather')
                    ->where('created_at', '<=', Carbon::now()->subDays(7))->delete();

                CommandLogs::create([
                    'start_time' => Carbon::now(),
                    'job' => 'weather'
                ]);
            })
            ->onSuccess(function(Stringable $output){
                CommandLogs::myLogs('weather')
                    ->orderByDesc('created_at')
                    ->first()->update([
                        'end_time' => Carbon::now(),
                        'status' => 1,
                        'output' => $output
                    ]);
            })
            ->onFailure(function(Stringable $output){
                CommandLogs::myLogs('weather')
                    ->orderByDesc('created_at')
                    ->first()->update([
                        'end_time' => Carbon::now(),
                        'status' => 2,
                        'output' => $output
                    ]);
            });


        $schedule->command(HarvestTelemetry::class)
            ->everyThirtyMinutes()
            ->before(function(){
                /** Drop telemetry logs older than 2 days */
                CommandLogs::myLogs('telemetry_counts')
                    ->where('created_at', '<=', Carbon::now()->subDays(2))->delete();

                CommandLogs::create([
                    'start_time' => Carbon::now(),
                    'job' => 'telemetry_counts'
                ]);
            })
            ->onSuccess(function(Stringable $output){
                CommandLogs::myLogs('telemetry_counts')
                    ->orderByDesc('created_at')
                    ->first()->update([
                        'end_time' => Carbon::now(),
                        'status' => 1,
                        'output' => $output
                    ]);
            })
            ->onFailure(function(Stringable $output){
                CommandLogs::myLogs('telemetry_counts')
                    ->orderByDesc('created_at')
                    ->first()->update([
                        'end_time' => Carbon::now(),
                        'status' => 2,
                        'output' => $output
                    ]);
            });



    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    /*protected function scheduleTimezone(){
        return 'America/Indianapolis';
    }*/

}

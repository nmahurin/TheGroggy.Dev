<?php

namespace App\Console\Commands;

use App\Models\ForecastDays;
use App\Models\GeolocationMetaDatas;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class HarvestWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'harvest:weather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '
            Grabs the weather data from the gov weather API: api.weather.gov using the WGS 84 
            latitude / longitude in 4 degrees of precision. 
            Greenwood IN  = 39.6137 N ,-86.1067 W
            
            Current run time of this job is every night
            
            1 -> (Only Needed Once-ish) Retrieve the metadata for your location from 
                    https://api.weather.gov/points/39.6137,-86.1067
            2 -> (Only Needed Once-ish) Get back JSON, find forecast in properties object
                    # Lots of other information available in 
            3 -> Retrieve forecast from endpoints located in step 2
                    https://api.weather.gov/gridpoints/IND/59,61/forecast
                    https://api.weather.gov/gridpoints/IND/59,61/forecast/hourly
            4 -> Truncate database table and write newly harvested data
            5 -> Write the completion time in the log, keep logs for no more than 14 days
        ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public $latitude = 39.6137;
    public $longitude = -86.1067;
    public $updateElevation = false;
    /**
     *  Execute the console command.
     *
     */
    public function handle(){

        $metaData = GeolocationMetaDatas::orderByDesc('created_at')->first();
        if( ( !isset($metaData->id) ) ){
            $status = $this->harvestMetaData();
            $this->updateElevation = true;
        }

        $this->harvestDailyForecast();


        return 0;
    }

    private function harvestMetaData(): int{
        /** @var $metaData */
        $metaDataResponse = Http::get(
            'https://api.weather.gov/points/'. $this->latitude .','. $this->longitude
        );

        if($metaDataResponse->successful()){
            GeolocationMetaDatas::truncate();
            $metaData = $metaDataResponse->json()['properties'];
            GeolocationMetaDatas::create([
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,

                'cwa' => $metaData['cwa'],
                'forecast_office' => $metaData['forecastOffice'],
                'grid_id' => $metaData['gridId'],
                'grid_x' => $metaData['gridX'],
                'grid_y' => $metaData['gridY'],
                'forecast' => $metaData['forecast'],
                'forecast_hourly' => $metaData['forecastHourly'],
                'forecast_grid_data' => $metaData['forecastGridData'],
                'observation_stations' => $metaData['observationStations'],

                'city' => $metaData['relativeLocation']['properties']['city'],
                'state' => $metaData['relativeLocation']['properties']['state'],
                'bearing' => $metaData['relativeLocation']['properties']['bearing']['value'],

                'forecast_zone' => $metaData['forecastZone'],
                'county' => $metaData['county'],
                'fire_weather_zone' => $metaData['fireWeatherZone'],
                'time_zone' => $metaData['timeZone'],
                'radar_station' => $metaData['radarStation'],
            ]);
        }elseif($metaDataResponse->failed()){
            echo 'forked Metadata';
        }
        return $metaDataResponse->status();
    }

    private function harvestDailyForecast(){
        $url = GeolocationMetaDatas::first()->forecast;
        $dailyForecastsResponse = Http::get(
            $url
        );
        if($dailyForecastsResponse->successful()){
            ForecastDays::truncate();

            // get elevation from response and update metadata if needed
            if($this->updateElevation){
                GeolocationMetaDatas::first()->update([
                    'elevation' => $dailyForecastsResponse->json()['properties']['elevation']['value']
                ]);
            }

            foreach($dailyForecastsResponse->json()['properties']['periods'] as $day){
                ForecastDays::create([
                    'number' => $day['number'],
                    'name' => $day['name'],
                    'start_time' => (new Carbon($day['startTime'])),
                    'end_time' => (new Carbon($day['endTime'])),
                    'is_daytime' => $day['isDaytime'] ? 1 : null,
                    'temperature' => $day['temperature'],
                    'temperature_unit' => $day['temperatureUnit'],
                    'temperature_trend' => $day['temperatureTrend'],
                    'wind_speed' => $day['windSpeed'],
                    'wind_direction' => $day['windDirection'],
                    'icon' => $day['icon'],
                    'short_forecast' => $day['shortForecast'],
                    'detailed_forecast' => $day['detailedForecast']
                ]);
            }

        }elseif($dailyForecastsResponse->failed()){
            echo $dailyForecastsResponse;
        }
        return $dailyForecastsResponse->status();
    }

}

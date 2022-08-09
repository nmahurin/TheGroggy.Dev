<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeolocationMetaDatas extends Model{
    use HasFactory;

    protected $fillable = [
        'latitude',
        'longitude',

        'cwa',
        'forecast_office',
        'grid_id',
        'gridX',
        'gridY',
        'forecast',
        'forecast_hourly',
        'forecast_grid_data',
        'observation_stations',

        'city',
        'state',
        'bearing',

        'forecast_zone',
        'county',
        'fire_weather_zone',
        'time_zone',
        'radar_station',

        'elevation',
    ];

}

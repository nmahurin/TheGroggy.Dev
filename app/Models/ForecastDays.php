<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForecastDays extends Model{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'start_time',
        'end_time',
        'is_daytime',
        'temperature',
        'temperature_unit',
        'temperature_trend',
        'wind_speed',
        'wind_direction',
        'icon',
        'short_forecast',
        'detailed_forecast'
    ];

}

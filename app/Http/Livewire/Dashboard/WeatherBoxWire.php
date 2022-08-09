<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\ForecastDays;
use Livewire\Component;

class WeatherBoxWire extends Component
{
    public $forecastDays;

    public function render(){
        return view('livewire.dashboard.weather-box-wire');
    }

    public function mount(){
        $this->fill([
            'forecastDays' => ForecastDays::get()
        ]);
    }

}

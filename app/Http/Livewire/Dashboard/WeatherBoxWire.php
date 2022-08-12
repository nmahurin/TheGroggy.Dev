<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\ForecastDays;
use Livewire\Component;

class WeatherBoxWire extends Component
{
    public $forecastDays;

    public function render(){
        /*dd(ForecastDays::get()->pluck('icon')->toArray());*/
        return view('livewire.dashboard.weather-box-wire');
    }

    public function mount(){
        $this->fill([
            'forecastDays' => ForecastDays::get()->each(function($item){
                $arrays = explode('/', explode('/land/', $item->icon)[1]);
                array_shift($arrays);
                $arrays = array_map(function($item){
                    return preg_replace('/\?size=medium/', '', $item);
                }, $arrays);
                $precipArray = [];
                $iconArray = [];
                foreach($arrays as $key => $string){

                    $chance = explode(',', $arrays[$key]);
                    if(count($chance) > 1){
                        $precipArray[$chance[0]] = $chance[1];
                        $iconArray[$chance[0]] = $chance[0];
                    }else{
                        $iconArray[$string] = $string;
                        $precipArray[$arrays[$key]] = "0";
                    }
                }
                $item->precip = $precipArray;
                $item->icons = $iconArray;

            })
        ]);
    }

}

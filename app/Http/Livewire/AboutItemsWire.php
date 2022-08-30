<?php

namespace App\Http\Livewire;

use App\Models\AboutItems;
use Livewire\Component;

class AboutItemsWire extends Component{

    public $aboutItems;

    /** Similar to a __constructor */
    public function render(){
        return view('livewire.about-items-wire')
            ->layout('layouts.main');
    }

    public function mount(){
        $this->fill([
            'aboutItems' => AboutItems::get(),
        ]);
    }

}

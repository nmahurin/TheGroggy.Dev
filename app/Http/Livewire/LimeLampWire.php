<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LimeLampWire extends Component{

    public function render(){
        return view('livewire.lime-lamp-wire')
            ->layout('layouts.main');
    }
    
}

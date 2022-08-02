<?php

namespace App\Http\Livewire\Other;

use Livewire\Component;

class PieRackWire extends Component{

    public function render(){
        return view('livewire.other.pie-rack-wire')
            ->layout('layouts.main');
    }

}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainPageWire extends Component{


    public function render(){
        return view('livewire.main-page-wire')
            ->layout('layouts.main');
    }


}

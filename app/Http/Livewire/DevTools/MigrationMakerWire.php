<?php

namespace App\Http\Livewire\DevTools;

use Livewire\Component;

class MigrationMakerWire extends Component{


    public function render(){
        return view('livewire.dev-tools.migration-maker-wire')
            ->layout('layouts.main');
    }

}

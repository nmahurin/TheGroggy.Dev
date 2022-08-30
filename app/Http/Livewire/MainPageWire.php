<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class MainPageWire extends Component{


    public function render(){
        /*$user = User::find(1)->fill([
            'password' => Hash::make('')
        ])->save();*/
        return view('livewire.main-page-wire')
            ->layout('layouts.main');
    }


}

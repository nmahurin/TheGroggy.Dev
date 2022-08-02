<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AccountPageWire extends Component{


    public function render(){
        return view('livewire.auth.account-page-wire')
            ->layout('layouts.main');
    }

}

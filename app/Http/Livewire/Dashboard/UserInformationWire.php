<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class UserInformationWire extends Component
{
    public $users;

    public function render(){

        return view('livewire.dashboard.user-information-wire');
    }

    public function mount(){
        $this->fill([
            'users' => User::get()
        ]);
    }

}

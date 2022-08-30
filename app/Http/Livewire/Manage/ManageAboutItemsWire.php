<?php

namespace App\Http\Livewire\Manage;

use App\Models\AboutItems;
use Livewire\Component;

class ManageAboutItemsWire extends Component{

    protected $rules = [

    ];

    public function render(){
        return view('livewire.manage.manage-about-items-wire')
            ->layout('');
    }


}
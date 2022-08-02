<?php

namespace App\Http\Livewire\Manage;

use App\Models\AboutItems;
use Livewire\Component;

class ManageAboutItemsWire extends Component{

    public $aboutItems1;
    public $aboutItem2;
    public $aboutItem3;

    protected $rules = [
        'aboutItems1.*.body' => 'required',
        'aboutItem2.*' => 'required',
        'aboutItem3.*' => 'required',
    ];

    public function render(){
        return view('livewire.manage.manage-about-items-wire')
            ->layout('layouts.main');
    }

    public function mount(){
        $this->fill([
            'aboutItems1' => AboutItems::where('location', 1)->get(),
            'aboutItem2' => AboutItems::where('location', 2)->first(),
            'aboutItem3' => AboutItems::where('location', 3)->first(),
        ]);
    }

    public function saveAboutItems(){
        $this->validateOnly('aboutItems1.*.body');

        foreach($this->aboutItems1 as $item){
            $item->save();
        }
    }

}
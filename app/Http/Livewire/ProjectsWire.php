<?php

namespace App\Http\Livewire;

use App\Models\Projects;
use Livewire\Component;

class ProjectsWire extends Component{
    public $projects = [];

    public function render(){

        return view('livewire.projects-wire')
            ->layout('layouts.main');
    }


    public function mount(){
        $this->fill([
            'projects' => Projects::get(),
        ]);
    }

}

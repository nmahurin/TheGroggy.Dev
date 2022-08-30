<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class ReportsWire extends Component
{
    public $reports;

    public function render(){
        return view('livewire.dashboard.reports-wire');
    }

    public function mount(){
        $this->fill([
            'reports' => [],
        ]);
    }

}

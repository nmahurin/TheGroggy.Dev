<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Telemetry\CommandLogs;
use Livewire\Component;

class UsageInformationWire extends Component{

    public $logTypes;
    public $graphs;

    public function render(){

        return view('livewire.dashboard.usage-information-wire');
    }

    public function mount(){
        $this->fill([
            'logTypes' => CommandLogs::select('job')->groupBy('job')->get()->toArray(),
            'graphs' => CommandLogs::orderByDesc('created_at')->get()
        ]);
    }

}

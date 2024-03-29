<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class ActionItemsWire extends Component
{
    public $actionItems;

    public function render(){
        return view('livewire.dashboard.action-items-wire');
    }

    public function mount(){
        $chart = rand(1,2);
        $this->fill([
            'actionItems' => [
                [
                    'title' => 'Mails',
                    'svg' => 'email',
                    'count' => rand(1,4),
                    'level' => 'lime-400',
                    'url' => '/mailish',
                ],[
                    'title' => 'Errors',
                    'svg' => 'danger-triangle',
                    'count' => rand(3,7),
                    'level' => 'red-400',
                    'url' => '/dashboard',
                ],[
                    'title' => 'Downloads',
                    'svg' => 'download',
                    'count' => rand(15,23),
                    'level' => 'white',
                    'url' => '/dashboard',
                ],[
                    'title' => 'Traffic',
                    'svg' => $chart == 1 ?  'chart-up' : 'chart-down',
                    'count' => rand(3, 37),
                    'level' => $chart == 1 ? 'lime-400' : 'red-400',
                    'url' => '/reports',
                ]
            ]
        ]);
    }

}

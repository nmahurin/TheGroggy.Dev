<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class ActionItemsWire extends Component
{
    public $actionItems;

    public function render(){
        $this->fillItems();
        return view('livewire.dashboard.action-items-wire');
    }

    /*public function mount(){
        $this->fill([
            'actionItems' =>
        ]);
    }*/

    public function fillItems(){
        $chart = rand(1,2);
        $this->actionItems = [
            [
                'title' => 'Mails',
                'svg' => 'email',
                'count' => rand(1,4),
                'level' => 'lime-400',
            ],[
                'title' => 'Errors',
                'svg' => 'danger-triangle',
                'count' => rand(3,7),
                'level' => 'red-400',
            ],[
                'title' => 'Downloads',
                'svg' => 'download',
                'count' => rand(15,23),
                'level' => 'white',
            ],[
                'title' => 'Traffic',
                'svg' => $chart == 1 ?  'chart-up' : 'chart-down',
                'count' => rand(3, 37),
                'level' => $chart == 1 ? 'lime-400' : 'red-400',
            ]
        ];
    }

}

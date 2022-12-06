<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class ReportsWire extends Component
{
    public $reports;

    public function render(){
        $this->reports = [
            1 => [
                'span' => 1,
                'title' => 'Annual Years Per People',
                'data' => 'Looks at the amount of years annually per person.'
            ],
            2 => [
                'span' => 1,
                'title' => 'Site Traffic and Things',
                'data' => 'One of these should look official.'
            ],
            3 => [
                'span' => 2,
                'title' => 'Something to do with squirrels',
                'data' => 'I\'m not sure if I spelled that correctly.'
            ],
            4 => [
                'span' => 1,
                'title' => 'Amount of green one website can handle',
                'data' => 'A lot.'
            ],
            5 => [
                'span' => 1,
                'title' => 'Rainfall near the equator relative to the amount of cake I can eat.',
                'data' => 'There may be some correlation there. Probably not but there is no excuse not to collect the data.'
            ],
            6 => [
                'span' => 1,
                'title' => 'Slime ranching income',
                'data' => 'Some people find it profitable'
            ],
            7 => [
                'span' => 1,
                'title' => 'Salt generated on an average work day',
                'data' => 'It only goes up'
            ],
            8 => [
                'span' => 2,
                'title' => 'This should be a longer title, a report on long titles should do',
                'data' => 'Look at the BODY on this '
            ],
            9 => [
                'span' => 1,
                'title' => 'Report 9',
                'data' => 'I don\'t even want to give this one a name.'
            ],

        ];
        return view('livewire.dashboard.reports-wire');
    }

    /*public function mount(){
        $this->fill([
            'reports' => [],
        ]);
    }*/

}

<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\MailishEmail;
use Livewire\Component;

class MailishWire extends Component{

    public $mailishItems;
    public $selectedMail;

    public function render(){
        return view('livewire.dashboard.mailish-wire');
    }

    public function mount(){
        $this->fill([
            'mailishItems' => MailishEmail::with('userFrom')
                ->where('to', \Auth::user()->id ?? null)->get(),
        ]);
    }

    /**
     *     End init functions
     */


    public function selectMail($id){
        $this->selectedMail = $this->mailishItems->where('id', $id)->first();
    }

}

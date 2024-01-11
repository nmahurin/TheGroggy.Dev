<?php

namespace App\Http\Livewire;

use App\Models\MailishEmail;
use Livewire\Component;

class MailModalWire extends Component
{

    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    public function render(){
        return view('livewire.mail-modal-wire');
    }

    public function storeMail(){
        MailishEmail::create([
            ''
        ]);
    }

}

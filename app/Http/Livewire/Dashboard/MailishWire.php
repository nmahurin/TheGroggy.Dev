<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\MailishEmail;
use Livewire\Component;

class MailishWire extends Component{

    public $mailishItems;

    public function render(){
        //$this->fillMailish();
        //$this->mailishItems = MailishEmail::where('to', \Auth::user()->id ?? null)->get();
        return view('livewire.dashboard.mailish-wire');
    }

    public function mount(){
        $this->fill([
            'mailishItems' => MailishEmail::with('userFrom')->where('to', \Auth::user()->id ?? null)->get(),
        ]);
    }

    public function fillMailish(){
        $this->mailishItems = [
            [
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'I\'ll add another for overflow y testing.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Rutrum quisque non tellus orci ac. Consectetur adipiscing elit duis tristique sollicitudin nibh sit. Dolor purus non enim praesent elementum facilisis. Pretium fusce id velit ut. Eget nunc scelerisque viverra mauris in aliquam sem. Fringilla urna porttitor rhoncus dolor purus. Pellentesque id nibh tortor id aliquet lectus proin nibh nisl. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Tellus cras adipiscing enim eu turpis.',
                //'status' => '',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'Yet another, in case someone is really popular',
                'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                //'status' => '',
            ]
        ];
        foreach($this->mailishItems as $item){
            MailishEmail::firstOrCreate($item);
        }
    }

}

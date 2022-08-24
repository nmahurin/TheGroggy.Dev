<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\MailishEmail;
use Livewire\Component;

class MailishWire extends Component{

    public $mailishItems;
    public $selectedMail;

    public function render(){
        //$this->fillMailish();
        //$this->mailishItems = MailishEmail::where('to', \Auth::user()->id ?? null)->get();
        return view('livewire.dashboard.mailish-wire');
    }

    public function selectMail($id){
        $this->selectedMail = $this->mailishItems->where('id', $id)->first();
    }

    public function mount(){
        $this->fill([
            'mailishItems' => MailishEmail::with('userFrom')
                ->where('to', \Auth::user()->id ?? null)->get(),
        ]);
    }

    public function fillMailish(){
        $this->mailishItems = [
            [
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'Email Subject.',
                'body' => 'Email <b>body</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Rutrum quisque non tellus orci ac. Consectetur adipiscing elit duis tristique sollicitudin nibh sit. Dolor purus non enim praesent elementum facilisis. Pretium fusce id velit ut. Eget nunc scelerisque viverra mauris in aliquam sem. Fringilla urna porttitor rhoncus dolor purus. Pellentesque id nibh tortor id aliquet lectus proin nibh nisl. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Tellus cras adipiscing enim eu turpis.',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'People like otters',
                'body' => 'This is factual. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'Why limes though?',
                'body' => 'The color, really. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'Star Wars: it\'s good stuff',
                'body' => 'Still not caught up on the TV shows. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'More testing 1',
                'body' => 'Stuff and things. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ],[
                'to' => 1,
                'from' => \Auth::user()->id ?? null,
                'subject' => 'More testing 2',
                'body' => 'Stuff and things 3. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ]
        ];
        foreach($this->mailishItems as $item){
            MailishEmail::firstOrCreate($item);
        }
    }

}

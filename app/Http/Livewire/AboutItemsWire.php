<?php

namespace App\Http\Livewire;

use App\Models\AboutItems;
use Livewire\Component;

class AboutItemsWire extends Component{

    public $aboutItems1;
    public $aboutItem2;
    public $aboutItem3;

    protected $rules = [
        'aboutItems1.*.body' => 'required',
        'aboutItem2.*' => 'required',
        'aboutItem3.*' => 'required',
    ];

    /** Similar to a __constructor */
    public function render(){
        //$this->fillAbout();
        return view('livewire.about-items-wire')
            ->layout('layouts.main');
    }

    public function mount(){
        $this->fill([
            'aboutItems1' => AboutItems::where('location', 1)->get(),
            'aboutItem2' => AboutItems::where('location', 2)->first(),
            'aboutItem3' => AboutItems::where('location', 3)->first(),
        ]);
    }

    /** More methods to more or less seed the initial DB */
    public function fillAbout(){
        $this->aboutItems1 = [
            1 => [
                'location' => 1,
                'shown' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Rutrum quisque non tellus orci ac. Consectetur adipiscing elit duis tristique sollicitudin nibh sit. Dolor purus non enim praesent elementum facilisis. Pretium fusce id velit ut. Eget nunc scelerisque viverra mauris in aliquam sem. Fringilla urna porttitor rhoncus dolor purus. Pellentesque id nibh tortor id aliquet lectus proin nibh nisl. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Tellus cras adipiscing enim eu turpis.',
            ],
            2 => [
                'location' => 1,
                'shown' => 1,
                'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
            ],
        ];
        $this->aboutItem2 = [
            'location' => 2,
            'shown' => 1,
            'body' => '<img src="/images/pi-3-question.jpg" class="">',
        ];
        $this->aboutItem3 = [
            'location' => 3,
            'shown' => 1,
            'header' => 'The Raspberry Pi 3b+',
            'body' => 'Specs:',
        ];

        foreach($this->aboutItems1 as $item){
            AboutItems::firstOrCreate($item);
        }
        AboutItems::firstOrCreate($this->aboutItem2);
        AboutItems::firstOrCreate($this->aboutItem3);


    }

}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavigationWire extends Component{

    public $menus = [];

    public function render(){
        $this->menus = [
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Lime Desk Lamp',
                'url' => '/lime-desk-lamp'
            ],
            [
                'name' => 'Dashboard',
                'url' => '/dashboard'
            ],
            [
                'name' => 'Other Projects',
                'sub_menus' => [
                    [
                        'name' => 'Power Supply',
                        'url' => '/desktop-power-supply',
                    ],
                    [
                        'name' => 'Pi Rack',
                        'url' => '/pi-rack',
                    ]
                ]
            ],
            [
                'name' => 'Dev Tools',
                'sub_menus' => [
                    [
                        'name' => 'Migration Maker',
                        'url' => '/migration-maker'
                    ],
                ]
            ]
        ];
        return view('livewire.navigation-wire');
    }

}

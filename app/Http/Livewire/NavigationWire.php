<?php

namespace App\Http\Livewire;

use App\Models\AboutItems;
use App\Models\Posts;
use Livewire\Component;

class NavigationWire extends Component{

    public $subMenus = [];

    public function render(){
        $this->subMenus = [
            'about' => [
                1 => [
                    'svg' => 'lime-4-minimalist-1', // About.
                    'title' => 'About',
                    'order' => 1,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam quis enim lobortis scelerisque fermentum dui faucibus in ornare. Rutrum quisque non tellus orci ac. Consectetur adipiscing elit duis tristique sollicitudin nibh sit. Dolor purus non enim praesent elementum facilisis. Pretium fusce id velit ut. Eget nunc scelerisque viverra mauris in aliquam sem. Fringilla urna porttitor rhoncus dolor purus. Pellentesque id nibh tortor id aliquet lectus proin nibh nisl. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Tellus cras adipiscing enim eu turpis.',
                ],
                2 => [
                    'svg' => 'exclamation-circle', // Me
                    'title' => 'Developer',
                    'order' => 2,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'This is me. Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                3 => [
                    'svg' => 'laravel',
                    'title' => 'Laravel',
                    'order' => 3,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Laravel Page Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                4 => [
                    'svg' => 'livewire',
                    'title' => 'Livewire',
                    'order' => 4,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                5 => [
                    'svg' => 'tailwind',
                    'title' => 'Tailwind CSS',
                    'order' => 5,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                6 => [
                    'svg' => 'alpine-js',
                    'title' => 'Alpine JS',
                    'order' => 6,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                7 => [
                    'svg' => 'raspberrypi',
                    'title' => 'Raspberry Pi',
                    'order' => 7,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                8 => [
                    'svg' => 'mariadb',
                    'title' => 'Mariadb',
                    'order' => 8,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ],
                9 => [
                    'svg' => 'apache',
                    'title' => 'Apache',
                    'order' => 9,
                    'shown' => 1,
                    'location' => 1,
                    'body' => 'Pharetra massa massa ultricies mi quis hendrerit. Rhoncus urna neque viverra justo nec ultrices. Sed cras ornare arcu dui vivamus. Adipiscing elit pellentesque habitant morbi. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Quisque egestas diam in arcu. Vitae nunc sed velit dignissim sodales ut eu sem integer. Ut etiam sit amet nisl purus. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam faucibus purus in massa. Vitae tortor condimentum lacinia quis vel eros donec ac. Id porta nibh venenatis cras. Ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et. Scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices sagittis orci a scelerisque purus semper eget duis. In arcu cursus euismod quis viverra nibh cras pulvinar. Eget nullam non nisi est sit amet facilisis magna etiam. Neque convallis a cras semper auctor neque vitae tempus.',
                ]
            ],
            'projects' => Posts::get(),
            /*[
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
            ]*/
        ];
        return view('livewire.navigation-wire');
    }

}

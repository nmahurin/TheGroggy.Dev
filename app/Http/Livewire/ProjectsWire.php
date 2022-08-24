<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class ProjectsWire extends Component{
    public $mainPosts = [];
    public $subPosts = [];

    public function render(){

        //$this->fillPosts();

        /*$this->mainPosts = Posts::where('location', 1)->get();
        $this->subPosts = Posts::where('location', 2)->get();*/

        return view('livewire.projects-wire')
            ->layout('layouts.main');
    }


    public function mount(){
        $this->fill([
            'mainPosts' => Posts::where('location', 1)->get(),
            'subPosts' => Posts::where('location', 2)->get()
        ]);
    }

    /** Only necessary after DB migrations */
    public function fillPosts(){
        $this->mainPosts = [
            [
                'title' => 'About',
                'order' => 1,
                'description' => 'Lean Infrastructure with Maximum Efficiency (LIME desk LAMP)',
                'url' => '/about',
                'shown' => 1,
                'location' => 1,
                'span' => 2,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>',
                'body' => 'Contains a rough overview of the Pi Lamp Stack and some of the goals for this site. Author information, links to tools and packages used on this site, and other information will be found here',
            ],
            [
                'title' => 'Lime Desk Lamp',
                'order' => 2,
                'description' => 'A tiny Pi powered LAMP stack!',
                'url' => '/lime-desk-lamp',
                'shown' => 1,
                'location' => 1,
                'span' => 1,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                </svg>',
                'body' => 'The hosting solution behind this site. A full fledged LAMP stack running on a (currently) single Raspberry Pi Model 3b.',
            ],
            [
                'title' => 'Dashboard',
                'order' => 3,
                'description' => 'Everybody loves reports',
                'url' => '/dashboard',
                'shown' => 1,
                'location' => 1,
                'span' => 1,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd" />
                </svg>',
                'body' => 'The dashboard contains anything and everything administrative users would want. This is a mock up of a simple dashboard for this site. Here you will find things like the ability to add a panel to this list, reports, and some telemetry to see how well the pi stacks up to normal servers.',
            ],
            [
                'title' => 'Migration Maker',
                'order' => 4,
                'description' => 'Tool for building Laravel Migrations',
                'url' => '/migration-maker',
                'shown' => 1,
                'location' => 1,
                'span' => 1,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>',
                'img' => '<div class="h-20 mx-6 border-2 border-slate-500 bg-slate-700 rounded-lg overflow-hidden text-center necron:bg-lime-800 
                                necron:border-lime-700 flex flex-col items-center justify-center">
                            <div class="w-20 h-20 rounded-full flex flex-col items-center justify-center bg-slate-800 text-lime-400 
                                    necron:text-lime-800 necron:bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current group-hover:fill-lime-400" viewBox="0 0 20 20">
                                    <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                                </svg>
                            </div>
                        </div>',
            ],
            [
                'title' => 'Pi Rack',
                'order' => 5,
                'description' => 'A 3D printed rack for the pi',
                'url' => '/pi-rack',
                'shown' => 1,
                'location' => 1,
                'span' => 1,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
                </svg>',
                'body' => 'For scalability a rack will be made to house the pi module with a custom power delivery system. The goal being to have at least 2 pi modules running this server together doing various different functions. One handling storage and the database/redis while the other hosts apache, etc. Another experiment down the line is to see if it is possible to load balance these.',
            ],
        ];
        $this->subPosts = [
            [
                'title' => 'Desktop Power Supply',
                'order' => 5,
                'description' => 'A handy desktop power supply',
                'url' => '/desktop-power-supply',
                'shown' => 1,
                'location' => 2,
                'span' => 1,
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                </svg>',
                'body' => '3D printed power supply using an old computer 350W ATX power supply. The items here are for reference while constructing the power supply to power the pi rack. Also a good read for anyone interested in miniature electronics, low voltage power delivery, or 3D printing.',
            ],
        ];

        foreach($this->mainPosts as $item){
            Posts::firstOrCreate($item);
        }
        foreach($this->subPosts as $item){
            Posts::firstOrCreate($item);
        }
    }

}

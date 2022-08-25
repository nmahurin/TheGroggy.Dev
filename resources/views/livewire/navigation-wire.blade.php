<div class="absolute top-32 left-6 hidden max-h-[80vh] w-[15%]
    lg:block lg:flex lg:flex-col lg:gap-10 text-center">
    {{--{{ dd(Request::url(), Request::is('*' . 'migration-maker')) }}--}}
    <div class="flex flex-col gap-2">
        <x-main-page-buttons link="/about" text="About" classes="w-full dark:bg-slate-700 bg-slate-100" />
        @if(Route::current()->getName() == 'about')
            @foreach($subMenus['about'] as $subMenu)
                <div class="cursor-pointer rounded-md p-1 dark:text-white dark:hover:text-lime-400
                    hover:bg-slate-500 hover:text-lime-400"
                     :class="currentSlide == {{ $subMenu['order'] }} ?
                        'dark:bg-slate-600 bg-slate-500 dark:text-lime-400 text-lime-400'
                        : '' "
                    @click="pickSlide({{ $subMenu['order'] }})">
                    {{ $subMenu['title'] ?? '' }}
                </div>
            @endforeach
        @endif
    </div>

    <div class="flex flex-col gap-2">
        <x-main-page-buttons link="/projects" text="Projects" classes="w-full dark:bg-slate-700 bg-slate-100" />
        @if(in_array(Route::current()->getName(), ['projects', 'lime-desk-lamp', 'migration-maker', 'pi-rack',
            'desktop-power-supply']))
            @foreach($subMenus['projects'] as $subMenu)
                <a href="{{ $subMenu->url ?? '#' }}" class="rounded-md p-1 dark:text-white dark:hover:text-lime-400
                    hover:bg-slate-500 hover:text-lime-400
                    {{ Request::is('*' . preg_replace('/\//', '', $subMenu->url)) ?
                        'dark:bg-slate-600 bg-slate-500 dark:text-lime-400 text-lime-400'
                        : '' }}"
                >
                    {{ $subMenu->title ?? '' }}
                </a>
            @endforeach
        @endif
    </div>

    <div class="flex flex-col">
        <x-main-page-buttons link="/dashboard" text="Dashboard" classes="w-full dark:bg-slate-700 bg-slate-100" />
    </div>


</div>
<div class="absolute top-32 left-[3%] hidden max-h-[80vh] w-1/5
    lg:block lg:flex lg:flex-col lg:gap-10 text-center">
    {{--{{ dd(Request::url(), Request::is('*' . 'migration-maker')) }}--}}
    <div class="flex flex-col">

        <x-big-nav-buttons link="/about" text="About" classes="w-full dark:bg-slate-700 bg-slate-100
            {{ Route::current()->getName() == 'about' ? ' mb-4 ' : '' }}" />

        @if(Route::current()->getName() == 'about')
            @foreach($subMenus['about'] as $key => $subMenu)

                <div class="cursor-pointer rounded-md py-1 dark:hover:text-lime-400
                    hover:border-b-2 hover:border-solid hover:border-lime-400
                    hover:scale-105 transition duration-75 active:scale-100 hover:z-40
                    hover:bg-slate-500 dark:hover:bg-slate-800 hover:text-lime-400 items-center z-20
                    hover:shadow-nav-buttons relative group {{ $key == 1 ? 'hidden' : '' }}"
                     :class="currentSlide == {{ $subMenu['order'] }} ?
                        'dark:bg-slate-800 bg-slate-500 text-lime-400 border-b-2 border-solid border-lime-400'
                        : 'dark:text-white' "
                    @click="pickSlide({{ $subMenu['order'] }})">

                        {{ $subMenu['title'] ?? '' }}
                    <div class="group-hover:opacity-100"
                        :class="currentSlide == {{ $subMenu['order'] }} ? 'opacity-100' : 'opacity-0' ">
                        <x-two-lines classes="" />
                    </div>

                </div>

            @endforeach
        @endif

    </div>

    <div class="flex flex-col">

        <x-big-nav-buttons link="/projects" text="Projects" classes="w-full dark:bg-slate-700 bg-slate-100
            {{ Route::current()->getName() == 'projects' ? ' mb-4 ' : '' }}" />

        @if(in_array(Route::current()->getName(), ['projects', 'lime-desk-lamp', 'migration-maker', 'pi-rack',
            'desktop-power-supply']))
            @foreach($subMenus['projects'] as $subMenu)

                <a href="{{ $subMenu->url ?? '#' }}" class="rounded-md p-2 dark:text-white dark:hover:text-lime-400
                    hover:border-b-2 hover:border-solid hover:border-lime-400
                    hover:scale-105 transition duration-75 active:scale-100 hover:z-40
                    hover:bg-slate-500 dark:hover:bg-slate-800 hover:text-lime-400 items-center z-20
                    hover:shadow-nav-buttons relative group
                    {{ Request::is('*' . preg_replace('/\//', '', $subMenu->url)) ?
                        'dark:bg-slate-600 bg-slate-500 dark:text-lime-400 text-lime-400'
                        : '' }}"
                >

                    {{ $subMenu->title ?? '' }}
                    <x-two-lines classes="opacity-0 group-hover:opacity-100 " />

                </a>

            @endforeach
        @endif

    </div>

    <div class="flex flex-col">

        <x-big-nav-buttons link="/dashboard" text="Dashboard" classes="w-full dark:bg-slate-700 bg-slate-100" />

    </div>


</div>
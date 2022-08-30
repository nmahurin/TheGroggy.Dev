<div class="lg:hidden">
    <div class="absolute top-3 right-3 h-10 w-20 bg-slate-800 rounded-full
        transition duration-150 flex items-center necron:bg-lime-100 dark:bg-slate-100"
        @click="toggleSmMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-20 fill-white dark:fill-black necron:fill-black" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>
    </div>
    <div class="flex flex-col pt-2 p-4 gap-2 items-end absolute bg-white z-[-1] top-16
        right-0 bg-opacity-90 w-5/6 rounded-md necron:bg-lime-100 dark:bg-slate-500"
         :class="showSmMenu ? 'scrollbar' : 'hidden', smMenu">

        <div class="flex flex-row gap-2 items-center content-center w-full justify-around">

            <x-theme-toggles />

            <a href="/account" class="flex py-3 px-6 text-white bg-slate-700 rounded-md border-white border-2
                dark:bg-slate-800">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </a>

        </div>

        @foreach($menus as $key => $menu)

            @if(!isset($menu['sub_menus']))

                <a href="{{ $menu['url'] }}" class="w-full py-5
                    border-2 border-slate-100 rounded-md bg-slate-700 text-white
                    necron:bg-lime-800 pl-4 dark:bg-slate-800">

                    {{ $menu['name'] }}
                </a>

            @else
            <div class="w-full flex flex-col gap-4" x-data="{ showSubMenu: false }">
                <div class="py-5 pl-4
                    border-b-2 border-white rounded-md bg-slate-700 border-2 text-white
                    necron:bg-lime-800 relative active:bg-slate-50 active:text-slate-700 dark:bg-slate-800"
                    @click="showSubMenu = ! showSubMenu"
                >

                {{ $menu['name'] }}


                {{-- This span is just an svg --}}
                    <span class="group-hover:hidden absolute bottom-6 right-2 h-6 w-6 border-2 border-white text-center
                            text-white rounded-full justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>

                </div>

                @foreach($menu['sub_menus'] ?? [] as $sub_menu)
                    @if(isset($sub_menu['url']))
                        <a class="py-5 pl-4 ml-6
                                border-b-2 border-white rounded-md bg-slate-700 border-2 text-white dark:bg-slate-800
                                necron:bg-lime-800 active:bg-slate-50 active:text-black"
                           x-show="showSubMenu"
                           href="{{ $sub_menu['url'] }}">
                            @endif

                            {{ $sub_menu['name'] }}

                            @if(isset($sub_menu['url']))
                        </a>
                    @endif
                @endforeach
            </div>


            @endif

    @endforeach
    </div>

</div>
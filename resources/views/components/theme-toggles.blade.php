<div class="hidden fixed bottom-0 right-2 lg:block flex flex-col">

    <div class="flex flex-row rounded-full h-8 w-12 p-0.5 text-gray-800 dark:text-white
        border-2 border-black dark:bg-slate-800 bg-slate-100 necron:bg-lime-100 necron:border-lime-800
         my-1"
         id="darkModeSwitch"
        @click="toggleTheme('dark')"
    >

        <svg xmlns="http://www.w3.org/2000/svg" class="transition-transform" viewBox="0 0 20 20" fill="currentColor"
             :class="[themes.dark ? 'rotate-180 translate-x-4' : '']">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>

    </div>


    <div class="flex flex-row p-0.5 h-8 w-12 rounded-full border-2 border-black dark:bg-slate-800
        bg-slate-100 necron:bg-lime-100 necron:border-lime-800 my-1"
         id="necronSwitch"
    @click="toggleTheme('necron')"
    >
        <span class="transition-transform h-6 w-6 rounded-full bg-lime-400 dark:bg-lime-400"
            :class="[themes.necron? 'translate-x-4' : '']">
        </span>
    </div>


    {{-- For now this is ignored unless I'm logged in, going to be neat when the auth is set up to support it.  --}}
    @if(\Auth::check() && \Auth::user()->id == 1)
        <div class="flex flex-row p-0.5 h-8 w-12 rounded-full border-2 border-black dark:bg-slate-800
        bg-slate-100 necron:bg-lime-100 necron:border-lime-800 my-1"
             id="devSwitch"
            @click="toggleDev()"
            >
            <span class="transition-transform h-6 w-6 rounded-full bg-violet-500 necron:bg-violet-500"
                  :class="[dev? 'translate-x-4' : '']">
            </span>
        </div>
    @endif
</div>
<div class=" z-20 group lg:cursor-pointer
    {{ Route::current()->getName() != 'index' ? ' fixed top-0 right-4 h-52 w-52 ' :
        ' absolute lg:block h-52 w-52 top-4 lg:top-40 right-4 lg:right-1/4 ' }}"
    @click="toggleTheme('dark')"
    >

    <div class="w-28 h-28 group-hover:scale-110 rounded-full text-slate-800 p-6 transition absolute
        z-20 cursor-pointer top-0 right-0 bottom-0 left-0  m-auto"
         x-transition:enter="transition -translate-x-20 translate-y-20 duration-300 delay-0"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-20"
         x-transition:leave="transition translate-x-20 -translate-y-20 duration-500 delay-0"
         x-transition:leave-start="opacity-40"
         x-transition:leave-end="opacity-0"
         x-show=" ! themes.dark ">
        @include('svg.sun-outline')
    </div>

    <div class="w-28 h-28 group-hover:scale-110 rounded-full text-lime-400 p-6 transition absolute delay-0
        z-20 cursor-pointer top-0 right-0 bottom-0 left-0  m-auto"
         x-transition:enter="transition -translate-x-20 translate-y-20 duration-300 delay-0"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-60"
         x-transition:leave="transition translate-x-20 -translate-y-20 duration-500 delay-0"
         x-transition:leave-start="opacity-40"
         x-transition:leave-end="opacity-0"
         x-show=" themes.dark ">

        @include('svg.moon-outline')

    </div>

    <div class="absolute pt-[50%] w-52 h-52 top-0 right-0 bottom-0 left-0  m-auto
            flex flex-col gap-1">
        <div class="flex flex-row justify-around">
            <div class="h-12 w-12 dark:text-slate-400 group-hover:scale-115 transition">
                @include('svg.cloud-clear')
            </div>
            <div class="h-16 w-16 text-slate-400 group-hover:scale-110 transition">
                @include('svg.cloud-clear')
            </div>
        </div>
        <div class="flex flex-row justify-center pl-8">
            <div class="h-12 w-12 text-slate-400 dark:text-lime-400 group-hover:scale-125 transition">
                @include('svg.cloud-clear')
            </div>
        </div>
    </div>

</div>
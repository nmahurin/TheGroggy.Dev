<div class="absolute fixed top-20 right-20 lg:block flex flex-row z-20 justify-center w-1/6
    {{ Route::current()->getName() == 'index' ? '' : '' }}"
    >

    <div class="w-28 h-28 hover:shadow-main-page-theme rounded-full text-slate-800 p-6 transition absolute delay-0
        z-20"
         x-transition:enter="transition -translate-x-40 translate-y-40 rotate-90 duration-2000"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-20"
         x-transition:leave="transition translate-x-40 -translate-y-40 rotate-90 duration-2000"
         x-transition:leave-start="opacity-40"
         x-transition:leave-end="opacity-0"
         x-show=" ! themes.dark "
        @click="themes.dark = true">
        @include('svg.sun-outline')
    </div>

    <div class="w-28 h-28 hover:shadow-main-page-theme rounded-full text-lime-400 p-6 transition absolute delay-0
        z-20"
         x-transition:enter="transition -translate-x-40 translate-y-40 rotate-90 duration-2000"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-20"
         x-transition:leave="transition translate-x-40 -translate-y-40 rotate-90 duration-2000"
         x-transition:leave-start="opacity-40"
         x-transition:leave-end="opacity-0"
         x-show=" themes.dark "
         :class=" themes.dark ? '' : ' opacity-0 ' "
        @click="themes.dark = false">

        @include('svg.moon-outline')

    </div>

    <div class="absolute pt-[50%] w-52 h-52 lg:right-40 lg:-top-32
            flex flex-col gap-1">
        <div class="flex flex-row justify-around">
            <div class="h-12 w-12 dark:text-slate-400">
                @include('svg.cloud-clear')
            </div>
            <div class="h-16 w-16 text-slate-400">
                @include('svg.cloud-clear')
            </div>
        </div>
        <div class="flex flex-row justify-center pl-8">
            <div class="h-12 w-12 text-slate-400 dark:text-lime-400">
                @include('svg.cloud-clear')
            </div>
        </div>
    </div>

</div>
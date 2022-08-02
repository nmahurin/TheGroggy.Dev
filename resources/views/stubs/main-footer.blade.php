<div class="flex flex-col text-white pt-4 gap-4 hidden lg:block">
    <div class="font-bold text-xl border-b border-white mb-2 text-lime-400">Tech</div>
    <div class="flex flex-row flex-wrap gap-4">
        <a href="https://laravel.com" target="_blank" class="h-12 w-12 p-2 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.laravel')
        </a>
        <a href="https://laravel-livewire.com" target="_blank" class="w-12 h-12 p-2 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.livewire')
        </a>
        <a href="https://tailwindcss.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full p-2 border-2 border-white border-solid">
            @include('svg.tailwind')
        </a>
    </div>
    <div class="flex flex-row flex-wrap gap-4 mt-4">
        <a href="https://raspberrypi.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full p-2 border-2 border-white border-solid">
            @include('svg.raspberrypi')
        </a>
        <a href="https://mariadb.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full p-2 border-2 border-white border-solid">
            @include('svg.mariadb')
        </a>
        <a href="https://apache.org" target="_blank" class="h-12 w-24 bg-slate-100 rounded-full p-2">
            @include('svg.apache')
        </a>
    </div>
</div>


<div class="flex flex-col text-white pt-4 gap-4">
    <div class="font-bold text-xl border-b border-white mb-2 text-lime-400">Connect</div>
    <div class="flex flex-row flex-wrap gap-4">
        <a href="https://reddit.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.reddit')
        </a>
        <a href="https://www.linkedin.com/in/nathan-mahurin-87939a190" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.linked_in')
        </a>
        <a href="https://github.com/nmahurin" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.github')
        </a>
        <a href="https://twitter.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.twitter')
        </a>
        <a href="https://discord.com" target="_blank" class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid">
            @include('svg.discord')
        </a>
    </div>
</div>

<div class="flex flex-col text-white pt-4 gap-4">
    <span class="font-bold text-xl border-b border-white mb-2 text-lime-400">Contact</span>
    <div class="flex flex-row justify-between items-center lg:w-64 pr-4">
        <span>Nathan Mahurin</span>
        <span class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid"
            @click="toggleMailModal">
            <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20" fill="black">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
        </span>
    </div>
    {{--<span>317-771-3594</span>--}}
</div>
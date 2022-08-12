<div class="
        {{ request()->routeIs('dashboard') ? 'bg-slate-100 dark:bg-slate-700' : 'bg-slate-100 dark:bg-slate-800' }}"
     x-data="{
        actionItems: {{ json_encode($actionItems) }}
    }"
    x-cloak>

    <div class="flex flex-row bg-slate-700 text-white text-xl p-4 rounded-md dark:bg-slate-800 dark:text-lime-400 gap-1
        {{ request()->routeIs('dashboard') ? '' : 'hidden' }}"
        >
        <span>{{ \Auth::user()->name ?? '' }}'s</span><span class="text-white">Notifications</span>
    </div>

    {{--@for($i = 0; $i < $actionsItems->count(); $i = $i + 4)--}}
    <div class="flex flex-row justify-around
        {{ request()->routeIs('dashboard') ? 'p-5 gap-4' : 'p-2 gap-2' }}">

        @foreach($actionItems as $item)

            <a class="bg-slate-700 dark:bg-slate-800 border-{{ $item['level'] }} rounded-full p-2
                border-2
                dark:hover:bg-slate-900 border-solid relative cursor-pointer hover:text-{{ $item['level'] }} text-white"
                href="{{ $item['url'] }}">

                <div class="{{ request()->routeIs('dashboard') ? 'lg:w-20 lg:h-20' : 'h-10 w-10' }}">
                    @include('svg.' . $item['svg'], ['classes' => ''])
                </div>

                <span class="absolute top-0 right-0 w-{{ $item['count'] > 10 ? 10 : 8 }} bg-slate-800 border border-solid border-slate-500
                    text-{{ $item['level'] }} text-xl text-center rounded-full flex flex-row justify-center items-center
                    {{ request()->routeIs('dashboard') ? 'h-8' : 'h-5' }}">
                {{ $item['count'] }}
                </span>

            </a>

        @endforeach

    </div>
    {{--@endfor--}}


</div>

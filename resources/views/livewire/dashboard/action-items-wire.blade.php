<div class="p-0" x-data="{
    actionItems: {{ json_encode($actionItems) }}
}">

    <div class="flex flex-row bg-slate-700 text-white text-xl p-4 rounded-md dark:bg-slate-800 dark:text-lime-400 gap-1">
        <span>{{ \Auth::user()->name ?? '' }}'s</span><span class="text-white">Notifications</span>
    </div>

    {{--@for($i = 0; $i < $actionsItems->count(); $i = $i + 4)--}}
    <div class="flex flex-row justify-around p-5 gap-4">

        @foreach($actionItems as $item)

            <div class="bg-slate-700 dark:bg-slate-800 dark:border-{{ $item['level'] }} rounded-full p-2
                border-2
                dark:hover:bg-slate-900 border-solid relative cursor-pointer hover:text-lime-400 text-white">

                <span class="w-12 h-12">
                    @include('svg.' . $item['svg'], ['classes' => ''])
                </span>

                <span class="absolute top-0 right-0 h-8 w-{{ $item['count'] > 10 ? '10' : 8 }} bg-slate-800 border border-solid border-slate-500
                    text-{{ $item['level'] }} text-xl text-center rounded-full flex flex-row justify-center items-center">
                {{ $item['count'] }}
                </span>

            </div>

        @endforeach

    </div>
    {{--@endfor--}}


</div>

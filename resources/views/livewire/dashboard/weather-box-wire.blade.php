<div x-data="{
    forecastDays: {{ $forecastDays->where('is_daytime', 1) }},
    forecastNights: {{ $forecastDays->where('is_daytime', null) }},
    tempColor(temp){
        if(temp > 80){
            return 'text-red-300';
        }else if(temp < 60){
            return 'text-blue-300';
        }
    }
}">

    {{--<div class="flex flex-row overflow-x-auto scrollbar lg:justify-around">

        <template x-for="day in forecastDays">
        @foreach($forecastDays as $day)
            <div class="bg-slate-100 dark:bg-slate-700 flex flex-col gap-1 items-center border-slate-500 border border-solid
                rounded-md">

                <span class="text-xl text-bold text-wrap text-slate-800 dark:text-white">{{ $day->name }}</span>
                <span class="text-slate-800 dark:text-white"
                      :class="tempColor(day.temperature)"
                >{!! $day->temperature . '&deg;' !!}</span>
                <img class="" src="{{ $day->icon }}" />
                <span>

                </span>

            </div>
        @endforeach
        </template>

    </div>--}}


    <div class="grid grid-cols-2 gap-2 p-2">

        <div class="flex flex-col gap-2">

            <template x-for="day in forecastDays">
                <div class="bg-slate-100 dark:bg-slate-700 flex flex-col gap-1 items-center border-slate-500 border border-solid
                rounded-md">

                    <span x-text="day.name" class="text-xl text-bold text-wrap text-slate-800 dark:text-white"></span>
                    <span x-text="day.temperature + '&deg;'"
                          class="dark:text-white text-slate-800"
                          :class="tempColor(day.temperature)"
                    ></span>
                    <img class="" :src="day.icon" />
                    <span>

                    </span>

                </div>
            </template>

        </div>

        <div class="flex flex-col gap-2">

            <template x-for="day in forecastNights">
                <div class="bg-slate-100 dark:bg-slate-700 flex flex-col gap-1 items-center border-slate-500 border border-solid
                rounded-md">

                    <span x-text="day.name" class="text-xl text-bold text-wrap text-slate-800 dark:text-white"></span>
                    <span x-text="day.temperature + '&deg;'"
                          class="text-slate-800 dark:text-white"
                          :class="tempColor(day.temperature)"
                    ></span>
                    <img class="" :src="day.icon" />
                    <span>

                    </span>

                </div>
            </template>

        </div>

    </div>

</div>

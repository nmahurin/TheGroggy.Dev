<div x-data="{
    forecasts: {{ $forecastDays }},
    tempColor(temp){
        if(temp > 80){
            return 'text-red-300';
        }else if(temp < 60){
            return 'text-blue-300';
        }else{
            return 'text-slate-800 dark:text-white'
        }
    },
}">
{{--{{ dd($forecastDays->skip(3)->first()) }}--}}
    <div class="flex flex-col">
        <template x-for="day in forecasts">
            <div class="bg-slate-100 dark:bg-slate-700 grid grid-cols-4
                border-slate-500 border border-solid
                rounded-md p-2 min-h-[3rem]">

                <span x-text="day.name" class="text-bold text-slate-800 dark:text-white"></span>
                <span x-text="day.temperature + '&deg;'"
                      :class="tempColor(day.temperature)"
                ></span>
                <span class="flex flex-row justify-between col-span-2">
                    {{--<img :src="day.icon" />--}}
                    <div class=""
                         :class="day.icons.few ? 'text-slate-900 dark:text-lime-400' : 'text-slate-300 dark:text-slate-500'">
                        <div class="w-6 h-6">
                            @include('svg.sun-filled')
                        </div>
                    </div>

                    <div class=""
                         :class="day.icons.sct ? 'text-slate-900 dark:text-lime-400' : 'text-slate-300 dark:text-slate-500'">
                        <div class="h-6 w-6">
                            @include('svg.cloud-clear')
                        </div>
                    </div>

                    <div :class="day.icons.bkn ? 'dark:text-lime-400 text-slate-900' : 'text-slate-300 dark:text-slate-500'">
                        <div class="h-6 w-6">
                            @include('svg.cloud-full')
                        </div>
                    </div>

                    <div class="flex flex-col"
                         :class="day.icons.tsra_sct ? 'dark:text-lime-400 text-slate-900' : 'text-slate-300 dark:text-slate-500'">
                        <div class="h-6 w-6">
                            @include('svg.cloud-rain-1')
                        </div>
                        <div x-text="day.precip.tsra_sct ? day.precip.tsra_sct + '&percnt;' : ''"
                             class="text-xs text-center"></div>
                    </div>

                    <div class="text-slate-300 dark:text-slate-500 flex flex-col gap-1">
                        <div class="h-6 w-6">
                            @include('svg.cloud-rain-heavy')
                        </div>
                        <div>

                        </div>
                    </div>

                    <div class="flex flex-col"
                        :class="day.icons.tsra_hi ? 'dark:text-lime-400 text-slate-900' : 'text-slate-300 dark:text-slate-500'">
                        <div class="h-6 w-6">
                            @include('svg.cloud-lightning-rain-fill')
                        </div>
                        <div x-text="day.precip.tsra_hi ? day.precip.tsra_hi + '&percnt;' : ''"
                             class="text-xs text-center"></div>
                    </div>

                </span>

            </div>
        </template>
    </div>



</div>

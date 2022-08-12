<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-bold text-2xl leading-tight">
            The<span class="text-lime-400">Groggy</span>.Dev Dashboard
        </h2>
    </x-slot>--}}

    <div class="py-6">
        <div class="max-w-[95%] lg:max-w-[90%] mx-auto sm:px-1 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 bg-white dark:bg-slate-700 overflow-hidden
                shadow-xl sm:rounded-lg lg:p-6 lg:gap-6 items-start gap-4 lg:min-h-[80vh] w-full">

                <div class="flex flex-col gap-4">

                    <div class="border-slate-500 border-2 border-solid rounded-lg">
                        @livewire('dashboard.action-items-wire')
                    </div>

                    <div class="border-slate-500 border-2 border-solid rounded-lg overflow-x-auto
                        max-w-full scrollbar">
                        @livewire('dashboard.weather-box-wire')
                    </div>

                </div>

                <div class="flex flex-col gap-4 lg:col-span-2">

                    <div class="border-slate-500 border-2 border-solid rounded-lg">
                        @livewire('dashboard.usage-information-wire')
                    </div>

                    <div class="border-slate-500 border-2 border-solid rounded-lg">
                        @livewire('dashboard.user-information-wire')
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

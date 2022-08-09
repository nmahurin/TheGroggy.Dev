<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl leading-tight">
            The<span class="text-lime-400">Groggy</span>.Dev Dashboard
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-[80%] mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:flex lg:flex-row bg-white overflow-hidden shadow-xl sm:rounded-lg
                p-6 gap-6">

                <div class="basis-1/3 flex flex-col justify-center items-center gap-4">

                    <div class="p-4 border-slate-500 border-2 border-solid rounded-lg w-full">
                        Action Items
                    </div>

                    <div class="p-4 border-slate-500 border-2 border-solid rounded-lg w-full">
                        Something
                    </div>

                </div>

                <div class="basis-2/3 flex flex-col justify-center items-center gap-4">

                    <div class="p-4 border-slate-500 border-2 border-solid rounded-lg w-full">
                        Usage Reports
                    </div>

                    <div class="p-4 border-slate-500 border-2 border-solid rounded-lg w-full">
                        @livewire('dashboard.user-information-wire')
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

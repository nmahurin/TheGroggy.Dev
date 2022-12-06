<div class="flex flex-col lg:flex-row min-h-full p-5 gap-2" x-data="{
        showReport: false,
        showReport(){
            this.showReport = true;
        },
    }">

    <div class="basis-[10%] hidden lg:block"></div>

    <div class="basis-[90%] bg-slate-200 dark:bg-slate-800 min-h-full p-5
        flex flex-col lg:grid lg:grid-cols-4 gap-4 rounded-lg min-h-[70vh] ">

        @foreach($reports as $report)
            <div class="col-span-{{ $report['span'] }} border border-slate-500 border-solid rounded-md">
                <header>
                    <h4 class="bg-slate-500 dark:bg-slate-700 text-lg rounded-md p-2 dark:text-white">
                        {{ $report['title'] }}
                    </h4>
                </header>
                <div class="dark:text-white p-4">
                    {{ $report['data'] }}
                </div>
            </div>
        @endforeach



    </div>

    <div class="basis-[10%] hidden lg:block"></div>

</div>

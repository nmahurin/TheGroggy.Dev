<div>

    @foreach($logTypes as $log)
        <div class="w-full p-1 bg-slate-700 dark:bg-slate-800 text-center text-sm text-white dark:text-lime-400
            rounded-md">
            {{ $log['job'] }}
        </div>

        <div class="grid grid-cols-5 text-slate-800 dark:text-white">
            <span class="text-center p-1 border-b border-solid border-slate-500">#</span>
            <span class="text-center p-1 border-b border-solid border-slate-500">Start Time</span>
            <span class="text-center p-1 border-b border-solid border-slate-500">End Time</span>
            <span class="text-center p-1 border-b border-solid border-slate-500">Status</span>
            <span class="text-center p-1 border-b border-solid border-slate-500">Output</span>
        @foreach($graphs->where('job', $log['job'])->take(5) as $item)
            <span class="text-right p-1">{{ $item->id }}</span>
            <span class="text-right p-1">{{ $item->start_time ?? '' }}</span>
            <span class="text-right p-1">{{ $item->end_time ?? '' }}</span>
            <span class="text-right p-1">{{ $item->my_status }}</span>
            <span class="text-right p-1">{{ $item->output ?? 'N/A' }}</span>
        @endforeach
        </div>
    @endforeach

</div>

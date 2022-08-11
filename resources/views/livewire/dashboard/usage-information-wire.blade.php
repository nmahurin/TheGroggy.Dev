<div class="bg-slate-100 dark:bg-slate-700">

    @foreach($logTypes as $log)

        <table class="w-full py-2 my-2">
            <caption class="p-1 bg-slate-700 dark:bg-slate-800 text-center text-white dark:text-lime-400
            rounded-md text-bold">{{ preg_replace('/_/', ' ', $log['job']) }}</caption>
            <thead>
            <tr class="bg-slate-600">
                <th class="text-slate-100">#</th>
                <th class="text-slate-100">Start Time</th>
                <th class="text-slate-100">End Time</th>
                <th class="text-slate-100">Status</th>
                <th class="text-slate-100">Output</th>
            </tr>
            </thead>
            <tbody>
            @foreach($graphs->where('job', $log['job'])->take(5) as $item)
                <tr>
                    <td class="p-1 dark:text-slate-100">{{ $item->id }}</td>
                    <td class="p-1 dark:text-slate-100">{{ $item->formatThis('start_time', 'Y-m-d H:i') }}</td>
                    <td class="p-1 dark:text-slate-100">{{ $item->formatThis('end_time', 'Y-m-d H:i') }}</td>
                    <td class="p-1 dark:text-slate-100">{{ $item->my_status }}</td>
                    <td class="p-1 dark:text-slate-100">

                        {{ $item->output ? 'Yes' : 'No' /*substr($item->output ?? '', 0, 20)*/ }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--<div class="w-full p-1 bg-slate-700 dark:bg-slate-800 text-center text-white dark:text-lime-400
            rounded-md text-bold">
            {{ preg_replace('/_/', ' ', $log['job']) }}
        </div>--}}

        {{--<div class="grid grid-cols-5 text-slate-800 dark:text-white">
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
        </div>--}}
    @endforeach

</div>

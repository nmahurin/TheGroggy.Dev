<a href="{{ $link }}" {{ $attributes->merge(['class' => (Request::is('*' . preg_replace('/\//', '', $link)) ?
                    ' bg-slate-500 dark:bg-slate-800 text-lime-400 border-lime-400 '
                    : ' dark:text-white dark:border-white border-slate-500 ') .
                    'border-b-2 border-solid hover:shadow-nav-buttons
                    p-2 hover:bg-slate-500 dark:hover:bg-slate-800 rounded-md hover:text-lime-400
                    dark:hover:text-lime-400 relative group
                    hover:scale-105 transition duration-75 active:scale-100
                    hover:border-lime-400 dark:hover:border-lime-400 border-l-2 ' . $classes ?? '']) }}
>
    <button type="button" class="text-xl">
        {{ $text }}
    </button>
    <x-three-lines classes="" />
</a>
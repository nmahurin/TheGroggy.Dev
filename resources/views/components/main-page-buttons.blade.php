<a href="{{ $link }}" {{ $attributes->merge(['class' => 'border-b-2 border-solid dark:border-white border-slate-500
                    p-3 hover:bg-slate-700 dark:hover:bg-slate-800 rounded-md hover:text-lime-400
                    dark:hover:text-lime-400 dark:text-white relative
                    hover:border-lime-400 dark:hover:border-lime-400 border-l-2 ' . $classes ?? '']) }}>
    <button type="button" class="text-2xl">
        {{ $text }}
    </button>
    <x-three-lines classes="" />
</a>
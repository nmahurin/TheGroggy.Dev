<a href="{{ $link }}" {{ $attributes->merge(['class' => (Request::is('*' . preg_replace('/\//', '', $link))
                        ? ' hover ' : '') .
                     'border-b-2 border-solid hover:shadow-main-buttons
                    dark:border-white border-slate-500
                    p-3 hover:bg-slate-500 dark:hover:bg-slate-800 rounded-md hover:text-lime-400
                    dark:hover:text-lime-400 dark:text-white relative group
                    hover:scale-105 transition duration-75 active:scale-100
                    hover:border-lime-400 dark:hover:border-lime-400 border-l-2 ' . $classes ?? '']) }}
     >
    <button type="button" class="text-2xl">
        {{ $text }}
    </button>
    <x-three-lines classes="" />
    <div class="hidden lg:block main-page-reflection absolute -bottom-14 dark:-bottom-20 left-0 w-full h-full blur-lg
        transition-opacity duration-500 opacity-0
        group-hover:opacity-100 bg-lime-400">
    </div>
</a>
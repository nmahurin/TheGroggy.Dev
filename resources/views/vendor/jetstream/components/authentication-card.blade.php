<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-100
    dark:bg-slate-700">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg
        dark:bg-slate-800 necron:bg-lime-100 bg-slate-200
        ">
        {{ $slot }}
    </div>
</div>

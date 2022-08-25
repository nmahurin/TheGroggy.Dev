<div class="main-slot relative bg-slate-100 basis-full">

    <div class="hidden dev:block h-24 text-3xl text-center dark:text-white">
        Dev Message
    </div>

    <div class="h-[80%] w-[80%] lg:w-1/2 absolute left-0 right-0 top-16 md:top-0 bottom-0 mx-auto md:m-auto
        flex flex-col gap-20 justify-center text-slate-900">
        <div class="text-5xl lg:text-7xl dark:text-white text-center">
            The<span class="dark:text-lime-400">Groggy</span><span class="text-lime-400">.</span>Dev
        </div>
        <div class="grid grid-rows-3 lg:grid-cols-3 gap-10 lg:gap-4 px-6 lg:px-1/4 text-center">

            <x-main-page-buttons link="/about" text="About" classes="dark:bg-transparent" />

            <x-main-page-buttons link="/projects" text="Projects" classes="dark:bg-transparent" />

            <x-main-page-buttons link="/dashboard" text="Dashboard" classes="dark:bg-transparent" />

        </div>
    </div>

</div>
<div class="main-slot">

    <div class="hidden dev:block h-24 text-3xl text-center dark:text-white">
        Dev Message
    </div>

    {{--<div class="page-header-box relative">
        <div class="h-10 w-10 lg:h-16 lg:w-16 absolute left-4 top-5 md:left-6 md:top-2 text-center bg-slate-700
            text-lime-400 border-slate-800 p-2 rounded-full border-solid necron:bg-lime-50">
            @include('svg.lime-4-minimalist-1')
        </div>

        <div>
            <span class="text-lime-400 necron:text-black">Lime</span> Desk Lamp
        </div>

        <div class="h-16 w-16 absolute right-6 top-2 bg-slate-700 text-lime-400 border-slate-800 p-2 rounded-full
            border-solid hidden md:block necron:bg-lime-50">
            @include('svg.lime-4-minimalist-1')
        </div>
    </div>--}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-2 md:px-6 mt-8">
        @foreach($mainPosts as $post)
            @include('stubs.main-page.default', ['post' => $post])
        @endforeach
    </div>

    {{--<div class="page-header-box">
        <span class="text-lime-400 necron:text-black">Personal </span> Projects
    </div>--}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-2 md:px-6 mt-8">
        @foreach($subPosts as $post)
            @include('stubs.main-page.default', ['post' => $post])
        @endforeach
    </div>
</div>
<div class="group relative border-2 border-slate-500 bg-white rounded-md
         hover:scale-105 transition-transform duration-300 hover:bg-slate-700
         necron:hover:bg-white hover:text-white necron:hover:text-black necron:border-white
         dark:border-white
        dark:bg-slate-800 dark:text-white md:col-span-{{ $post->span }}">
@if(isset($post->url))
    <a href="{{ $post->url }}">
@endif
    <div class="border-b-2 border-slate-500 mb-4 necron:border-lime-800 dark:bg-slate-700 necron:bg-white
            dark:text-lime-400 flex flex-row items-center relative pl-8 justify-around">
        <x-three-lines classes="" />

        <div class="text-xl font-bold py-3 necron:text-black text-center relative">

            {{ $post->title ?? ''}}

        </div>

        <div class="border-2 h-8 w-8 border-slate-500 rounded-full necron:border-lime-800
             necron:text-black flex flex-col justify-center items-center text-lime-400 bg-slate-500
            justify-self-end">
            {!! $post->svg ?? '' !!}
        </div>


    </div>

    <div class="m-5 font-bold">
        {{ $post->description ?? '' }}
    </div>

    <div class="m-5 max-h-32 overflow-hidden md:overflow-y-scroll md:hidden-scrollbar md:hover:scrollbar">
        {!! $post->body ?? $post->img ?? '' !!}
    </div>

    @if(strlen($post->body ?? '') >= 180)
        <span class="group-hover:hidden absolute bottom-6 right-10 h-6 w-6 border-2 border-slate-500 text-center
            text-slate-500 rounded-full justify-center necron:border-lime-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </span>
    @endif
@if(isset($post->url))
</a>
@endif
</div>
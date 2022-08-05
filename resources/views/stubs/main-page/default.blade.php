<div class="group relative border-2 border-slate-500 bg-white rounded-md
         hover:scale-105 transition-transform duration-300 hover:bg-slate-700 necron:hover:bg-white hover:text-white
        necron:hover:text-black necron:border-white
        dark:bg-slate-800 dark:text-white md:col-span-{{ $post->span }}">
@if(isset($post->url))
    <a href="{{ $post->url }}">
@endif
    <div class="border-b-2 border-slate-500 mb-4 flex necron:border-lime-800 bg-slate-700 necron:bg-white">
        <span class="absolute top-3 left-6 h-8 w-8 border-2 border-slate-500 rounded-full necron:border-lime-800
            text-lime-400 necron:text-black flex flex-col justify-center items-center">
            {!! $post->svg ?? '' !!}
        </span>

        <div class="text-xl pl-16 font-bold py-3 necron:text-black text-lime-400">
            {{ $post->title ?? ''}}
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
<div x-data="{
    shown: false,
}" @mouseover.away=" shown = false "
    class="">
    <div class="nav-with-subs" @mouseover="shown = ! shown">

        {{ $menu['name'] }}

        {{-- This span is just an svg --}}
        <span class="absolute bottom-6 right-2 h-6 w-6 border-2 border-white text-center
            text-white rounded-full justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

    </div>

    @foreach($menu['sub_menus'] ?? [] as $sub_menu)
        @if(isset($sub_menu['url'])) <a href="{{ $sub_menu['url'] }}"> @endif
            <div class="nav-subs" x-show="shown" x-transition.duration.400ms>
                {{ $sub_menu['name'] }}
            </div>
            @if(isset($sub_menu['url'])) </a> @endif
    @endforeach
</div>
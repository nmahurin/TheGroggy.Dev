<div class="absolute top-28 left-6 hidden lg:block max-h-[80vh] max-w-[15%]">

    @foreach($menus as $key => $menu)

        @if(isset($menu['sub_menus']))

            @include('stubs.nav.with-subs', ['menu' => $menu])

        @else

            @include('stubs.nav.url', ['menu' => $menu])

        @endif

    @endforeach


</div>
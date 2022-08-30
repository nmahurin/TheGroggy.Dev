<div class="main-slot">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-2 md:px-6 mt-8">
        @foreach($projects as $project)
            @include('stubs.main-page.default', ['project' => $project])
        @endforeach
    </div>

</div>

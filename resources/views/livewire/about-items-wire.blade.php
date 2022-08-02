<div class="main-slot">
    <div class="page-header-box">
        The Lime Lamp Project
    </div>

    <div class="flex px-10 flex-col lg:flex-row gap-6">

        <div class="basis-1/2 flex flex-col gap-4 plain-text-box">
            @foreach($aboutItems1 as $i => $item)
                <p class="p-5">{!! $item->body !!}</p>
            @endforeach
        </div>

        <div class="h-fit p-2 basis-1/2 flex flex-col gap-6 pb-6">

            <div class="basis-1/2 plain-img-box">
                {!! $aboutItem2->body !!}
            </div>

            <div class="basis-1/2 plain-text-box">
                <h4>{!! $aboutItem3->header !!}</h4>
                <p class="p-5">{!! $aboutItem3->body !!}</p>
            </div>

        </div>

    </div>

</div>
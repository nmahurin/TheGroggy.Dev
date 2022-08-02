<div class="main-slot">
    <div class="page-header-box">
        The Lime Lamp Project
    </div>

    <div class="flex px-10 flex-col lg:flex-row gap-6">

        <div class="basis-1/2 flex flex-col gap-4 plain-text-box">
            @foreach($aboutItems1 as $i => $item)
                <p class="p-5 dev:hidden">{!! $item->body !!}</p>

                <textarea wire:model.defer="aboutItems1.{{ $i }}.body"
                          rows="10"
                          class="p-4 w-full scrollbar dev:block hidden rounded-md"></textarea>
                @if($loop->last)
                    <button class="py-6 w-32 place-self-end bg-slate-500 text-white necron:text-white necron:bg-lime-800
                        dark:bg-slate-100 dark:text-black rounded-lg hidden dev:block" type="button"
                            wire:click="saveAboutItems" @click="toggleTheme('dev')">
                    Save
                    </button>
                @endif

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
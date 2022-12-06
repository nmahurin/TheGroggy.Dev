<div class="flex flex-col lg:flex-row min-h-full p-5 gap-2" x-data="{
        showMail: false,
        showMailItem(){
            this.showMail = true;
        },
    }">


    <div class="basis-[10%] hidden lg:block"></div>

    <div class="basis-[90%] bg-slate-200 dark:bg-slate-700 min-h-full p-5
        flex flex-col lg:flex-row gap-4 rounded-lg min-h-[70vh]">

        <div class="basis-1/3 p-2 flex flex-col gap-4 "
             x-show=" window.matchMedia('(max-width:600px)') || showMail == false "
             x-cloak>

            <input type="text" class="border-l-2 border-t-2 border-b border-solid border-lime-400 rounded-md
                bg-slate-800 focus:outline-none focus:ring-2 focus:ring-lime-400 text-white
                active:ring-lime-100 hover:ring-2 hover:ring-white hover:outline-none" placeholder="Search.." />

            <div class="grow py-5 rounded-md border-t-2 border-b-2 border-solid border-slate-200
                text-white flex flex-col gap-2 p-1 lg:h-[65vh] scrollbar overflow-y-auto">
                @forelse($mailishItems as $mail)

                    <div class="border-l-2 border-t-2 border-b border-white rounded-md flex flex-col gap-2 cursor-pointer
                                hover:border-slate-500 dark:bg-slate-800 bg-slate-300 text-slate-800 dark:text-white"
                        wire:click="selectMail({{ $mail->id }})"
                        @click="showMailItem">
                        <div class="flex flex-row p-2 text-white bg-slate-500 dark:bg-slate-700 gap-1">
                            <span>{{ substr($mail->subject ?? '', 0 , 45) }}</span>
                            <span class="dark:text-lime-400 font-bold">
                                @if(strlen($mail->subject ?? '') > 45) ... @endif
                            </span>
                        </div>
                        <div class="flex flex-row p-1">
                            <span class="dark:text-lime-400 text-xs indent-4">From:</span>
                            <span class="text-xs font-bold">
                                {{ $mail->userFrom->name ?? '' }}
                            </span>
                        </div>
                        <div class="flex flex-row p-1 pb-2 justify-between">
                            <span class="text-xs indent-4">
                                {{ substr($mail->body ?? '', 0, 120) }}
                            </span>
                            <span class="text-lime-400">
                                @if(strlen($mail->body ?? '') >= 120) ... @endif
                            </span>
                        </div>
                    </div>

                @empty
                    <span class="text-xs text-slate-500">There's nothing here</span>
                @endforelse

            </div>

        </div>

        <div class="basis-2/3 bg-slate-300 dark:bg-slate-800 lg:grow rounded-md border-l-2 border-t-2 border-b
            border-solid dark:border-lime-400 border-slate-900 flex flex-col pr-4 relative min-h-screen
                lg:min-h-full lg:h-full"
             x-show=" window.matchMedia('(max-width:600px)') || showmail " x-cloak>

            <div class="min-h-[10%] p-2 border-b-2 border-solid border-slate-700 flex flex-row flex-wrap
                justify-start
                gap-2 w-full bg-slate-500 dark:bg-slate-700 rounded-md justify-items-end">

                <button type="button" class="py-2 px-4 main-button flex flex-row gap-1 items-center" x-show="showMail">
                    <span class="w-4 h-4">@include('svg.reply')</span>
                    <span><span class="text-white underline">R</span>eply</span>
                </button>

                <button type="button" class="py-2 px-4 main-button flex flex-row gap-1 items-center" x-show="showMail">
                    <span class="w-4 h-4">@include('svg.email')</span>
                    <span>(<span class="underline text-white">U</span>n) read</span>
                </button>

                <button type="button" class="py-2 px-4 main-button" x-show="showMail">
                    <span class="text-xl font-bold">&minus;</span>
                    <span class="text-white underline">D</span>elete
                </button>

                <button type="button" class="py-2 px-4 main-button justify-self-end">
                    <span class="text-xl font-bold">&plus;</span>
                    <span class="text-white underline">N</span>ew
                </button>

            </div>


            <div class="min-h-[10%] p-2 pl-8 border-b-2 border-solid border-slate-700 flex flex-col justify-center
                text-white bg-slate-500 dark:bg-slate-800"
                x-show="showMail">
                <span wire:loading.remove wire:target="selectMail">
                    {{ $selectedMail->subject ?? '' }}
                </span>
                <span wire:loading.remove wire:target="selectMail">
                    {{ isset($selectedMail->id) ? '- ' . $selectedMail->userFrom->name : '' }}
                </span>
            </div>

            <div class="grow p-4 indent-4 dark:text-white" x-show="showMail"  wire:loading.remove wire:target="selectMail">
                {{ $selectedMail->body ?? '' }}
            </div>

            <div class="h-1/2 w-1/2 absolute left-0 right-0 top-0 bottom-0 text-center m-auto
                    text-lime-400/50 flex flex-col gap-6 items-center"
                 x-show="showMail"
                 wire:loading wire:target="selectMail">
                <div class="text-slate-500 text-center text-sm">
                    Otter for reference.
                </div>
                <div class="h-44 w-44" wire:loading wire:target="selectMail">
                    @include('svg.otter')
                </div>
            </div>

            <div class="h-1/2 w-1/2 absolute left-0 right-0 top-0 bottom-0 text-center m-auto
                    text-lime-400/50 flex flex-col gap-6 items-center"
                 x-show="! showMail">
                <div class="text-slate-500 text-center text-sm">
                    Otter for reference.
                </div>
                <div class="h-44 w-44">
                    @include('svg.otter')
                </div>
            </div>


        </div>

    </div>

    <div class="basis-[10%] hidden lg:block"></div>

</div>

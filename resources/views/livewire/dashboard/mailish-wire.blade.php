<div class="flex flex-col lg:flex-row min-h-full p-5 gap-2" x-data="{
        showMail: false,
        mailItems: {{ $mailishItems }},
        selectedMail: {user_from: ''},
        showMailItem(mail){
            this.selectedMail = mail;
            this.showMail = true;
        },


    }">


    <div class="basis-[10%] hidden lg:block"></div>

    <div class="basis-[90%] bg-slate-700 dark:bg-slate-800 min-h-full p-5
        flex flex-col lg:flex-row gap-4 rounded-lg min-h-[70vh]">

        <div class="basis-1/3 p-2 flex flex-col gap-4 "
             x-show=" window.matchMedia('(max-width:600px)') || showMail == false "
             x-cloak>

            <input type="text" class="border-l-2 border-t-2 border-b border-solid border-lime-400 rounded-md
                bg-slate-800 focus:outline-none focus:ring-2 focus:ring-lime-400 text-white
                active:ring-lime-100 hover:ring-2 hover:ring-white hover:outline-none" placeholder="Search.." />

            <div class="grow py-5 rounded-md border-t-2 border-b-2 border-solid border-slate-500
                bg-slate-800 text-white flex flex-col gap-2 p-1 lg:h-[65vh] scrollbar overflow-y-auto">
                @if($mailishItems->count() >= 1)
                    <template x-for="mail in mailItems" :key="mail.id">
                        <div class="border-l-2 border-t-2 border-b border-white rounded-md flex flex-col gap-2 cursor-pointer
                                hover:border-slate-500"
                            @click="showMailItem(mail)">
                            <div class="flex flex-row p-2 bg-slate-700 gap-1">
                                <span x-text="mail.subject.substring(0, 45)"></span>
                                <span class="text-lime-400 font-bold" x-text="mail.subject.length >= 45 ? '  ...' : ''"></span>
                            </div>
                            <div class="flex flex-row p-1">
                                <span class="text-lime-400 text-xs indent-4">From:</span>
                                <span class="text-xs font-bold" x-text="mail.user_from.name"></span>
                            </div>
                            <div class="flex flex-row p-1 pb-2 justify-between">
                                <span class="text-xs indent-4" x-text="mail.body.substring(0, 120)"></span>
                                <span class="text-lime-400" x-text="mail.body.length >= 120 ? '...' : ''"></span>
                            </div>
                        </div>
                    </template>

                    @if($mailishItems->count() >= 5)
                        <div class="w-full my-5 py-4 h-16 border-dashed border text-center text-xs text-slate-200
                            border-slate-300 cursor-pointer hover:border-slate-500">

                            Load More
                        </div>
                    @endif

                @else
                <span class="text-xs text-slate-500">There's nothing here</span>
                @endif

            </div>

        </div>

        <div class="basis-2/3 bg-slate-800 lg:grow rounded-md border-l-2 border-t-2 border-b border-solid border-lime-400
            flex flex-col pr-4 relative min-h-screen lg:min-h-full lg:h-full"
             x-show=" window.matchMedia('(max-width:600px)') || showmail " x-cloak>

            <div class="min-h-[10%] p-2 border-b-2 border-solid border-slate-700 flex flex-row flex-wrap content-center
                gap-2 w-full bg-slate-700 rounded-md justify-items-end">

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


            <div class="min-h-[10%] p-2 pl-8 border-b-2 border-solid border-slate-700 flex flex-col justify-center text-white"
                x-show="showMail">
                <span x-text="selectedMail.subject"></span>
                <span x-text="'- ' + selectedMail.user_from.name" class="text-lime-400 pl-8 font-bold"></span>
            </div>

            <div class="grow p-4 text-white indent-4" x-show="showMail" x-text="selectedMail.body"></div>


            <div class="h-1/2 w-1/2 absolute left-0 right-0 top-0 bottom-0 text-center m-auto
                    text-lime-400/50 flex flex-col gap-6 items-center"
                x-show=" ! showMail ">
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

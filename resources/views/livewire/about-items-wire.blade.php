<div class="main-slot"
x-data="{

}">

    <div class="grid grid-col-1 gap-4 text-slate-900 dark:text-white py-4">

        <div class="flex flex-row justify-center gap-4 border-t-2 border-t-slate-500 border-solid border-b-2
            dark:bg-slate-700 border-b-slate-500 p-4">
            @foreach($aboutItems as $item)
                <span class="rounded-full dark:bg-slate-700 h-4 w-4 border dark:border-lime-400 border-solid cursor-pointer
                    border-slate-500 hover:bg-slate-500 dark:hover:bg-lime-50"
                    :class="currentSlide == {{ $item['order'] }} ? 'dark:bg-lime-50 bg-slate-500' : '' "
                    @click="pickSlide({{ $item['order'] }})">

                </span>
            @endforeach
        </div>

        <div class="plain-text-box transition relative h-screen">
            <div class="border border-slate-800 dark:bg-slate-700 absolute h-20 w-8 top-1/2 bottom-1/2 left-1
                rounded-md cursor-pointer z-10 text-slate-900"
                @click="goLeft()">

                <svg class="h-full w-full rotate-180" fill="currentColor" viewBox="0 0 91 91" id="Layer_1" style="enable-background:new 0 0 91 91;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <path class="st0" d="M36.6,43.5C31.1,49,25.7,54.8,20.7,60.8c-5.1,6.2-12,13.7-12.7,21.9c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C36.3,30,27,18.8,19.7,6.2   C15-1.9,2.2,5.6,7.2,13.5C14.8,25.7,24.6,35.8,36.6,43.5z"/><path class="st0" d="M72.9,43.5C67.3,49,62,54.8,57,60.8C52,67.1,45,74.5,44.3,82.7c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C72.6,30,63.3,18.8,56,6.2   c-4.7-8.1-17.5-0.6-12.5,7.3C51.1,25.7,60.9,35.8,72.9,43.5z"/>
                    </g>
                </svg>

            </div>

            @foreach($aboutItems as $item)

                <div class="pb-5 top-0 left-0 transition absolute h-full z-0"
                     x-transition:enter="transition -translate-x-40 duration-200"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-20"
                     x-transition:leave="transition translate-x-40 duration-200"
                     x-transition:leave-start="opacity-50"
                     x-transition:leave-end="opacity-0"
                     x-show=" currentSlide == {{ $item['order'] }} ">


                    <div class="border-b-2 border-slate-500 mb-4 necron:border-lime-800 dark:bg-slate-700 necron:bg-white
                        dark:text-lime-400 flex flex-row items-center relative pl-8 justify-around">
                        <x-three-lines classes="" />
                        <div class="text-xl font-bold py-3 necron:text-black text-center relative">
                            {{ $item['title'] }}
                        </div>

                    </div>
                    {{--<p class="text-2xl mb-4 text-slate-50 dark:text-lime-400 bg-slate-500 p-5">
                        {{ $item['title'] }}
                    </p>--}}

                    <p class="indent-4 p-5 px-12">
                        {{ $item['body'] }}
                    </p>

                </div>

            @endforeach


            <div class="border border-slate-800 dark:bg-slate-700 absolute h-20 w-8 top-1/2 bottom-1/2 right-1
                rounded-md cursor-pointer z-10 text-slate-900"
                @click="goRight()">

                <svg class="h-full w-full" fill="currentColor" viewBox="0 0 91 91" id="Layer_1" style="enable-background:new 0 0 91 91;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g><path class="st0" d="M36.6,43.5C31.1,49,25.7,54.8,20.7,60.8c-5.1,6.2-12,13.7-12.7,21.9c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C36.3,30,27,18.8,19.7,6.2   C15-1.9,2.2,5.6,7.2,13.5C14.8,25.7,24.6,35.8,36.6,43.5z"/><path class="st0" d="M72.9,43.5C67.3,49,62,54.8,57,60.8C52,67.1,45,74.5,44.3,82.7c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C72.6,30,63.3,18.8,56,6.2   c-4.7-8.1-17.5-0.6-12.5,7.3C51.1,25.7,60.9,35.8,72.9,43.5z"/>
                </g></svg>

            </div>


        </div>

        <div class="flex flex-row justify-center gap-4 border-t-2 border-t-slate-500 border-solid border-b-2
                    dark:bg-slate-700 border-b-slate-500 p-4">
            @foreach($aboutItems as $item)
                <span class="rounded-full dark:bg-slate-700 h-4 w-4 border dark:border-lime-400 border-solid cursor-pointer
                            border-slate-500 hover:bg-slate-500 dark:hover:bg-lime-50"
                      :class="currentSlide == {{ $item['order'] }} ? 'dark:bg-lime-50 bg-slate-500' : '' "
                @click="pickSlide({{ $item['order'] }})">

                </span>
            @endforeach
        </div>


    </div>

</div>
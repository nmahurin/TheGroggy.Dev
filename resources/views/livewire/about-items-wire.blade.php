<div class="main-slot"
x-data="{
    currentSlide: 1,
    transitionSlide( direction ){
        if(direction == 1){
            this.currentSlide++;
        }else{
            this.currentSlide--;
        }
    },
    pickSlide( id ){
        this.currentSlide = id;
    },
    goRight(){
        if(this.currentSlide < 9){
            this.transitionSlide(1);
        }else{
            this.pickSlide(1);
        }
    },
    goLeft(){
        if(this.currentSlide > 1){
            this.transitionSlide(2);
        }else{
            this.pickSlide(9);
        }
    }
}">

    <div class="grid grid-col-1 gap-4">

        <header class="flex flex-row lg:justify-around bg-slate-700 p-2 overflow-x-auto scrollbar w-[95vw] lg:w-full
            dark:bg-slate-800 gap-2 p-4 rounded-lg">
            @foreach($aboutItems as $item)

                <div class="p-4 border border-solid border-lime-400 rounded-md flex flex-col gap-4 justify-center
                    hover:bg-slate-800
                    items-center cursor-pointer dark:hover:bg-slate-700"
                     :class="currentSlide == {{ $item['order'] }} ? 'dark:bg-slate-700' : 'bg-slate-800' "
                    @click="pickSlide({{ $item['order'] }})">

                    <div class="h-12 w-12 bg-slate-100 rounded-full p-2 border-2 border-white border-solid">
                        @include('svg.' . $item['svg'], ['classes' => 'text-lime-400'])
                    </div>

                    <p class="text-center text-white">
                        {{ $item['title'] }}
                    </p>

                </div>

            @endforeach
        </header>

        <div class="flex flex-row justify-center gap-4 border-t-2 border-t-slate-500 border-solid border-b-2
            bg-slate-800 border-b-slate-500 p-4">
            @foreach($aboutItems as $item)
                <span class="rounded-full bg-slate-700 h-4 w-4 border border-lime-400 border-solid cursor-pointer
                    hover:bg-lime-50"
                    :class="currentSlide == {{ $item['order'] }} ? 'bg-lime-50' : '' "
                    @click="pickSlide({{ $item['order'] }})">

                </span>
            @endforeach
        </div>

        <div class="plain-text-box transition relative h-screen">
            <div class="border border-slate-800 bg-slate-700 absolute h-24 w-12 top-1/2 bottom-1/2 left-0
                rounded-md cursor-pointer z-10"
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


                    <p class="text-2xl mb-4 text-lime-400 bg-slate-700 p-5">
                        {{ $item['title'] }}
                    </p>

                    <p class="indent-4 p-5">
                        {{ $item['body'] }}
                    </p>

                </div>

            @endforeach


            <div class="border border-slate-800 bg-slate-700 absolute h-24 w-12 top-1/2 bottom-1/2 right-0
                rounded-md cursor-pointer z-10"
                @click="goRight()">

                <svg class="h-full w-full" fill="currentColor" viewBox="0 0 91 91" id="Layer_1" style="enable-background:new 0 0 91 91;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g><path class="st0" d="M36.6,43.5C31.1,49,25.7,54.8,20.7,60.8c-5.1,6.2-12,13.7-12.7,21.9c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C36.3,30,27,18.8,19.7,6.2   C15-1.9,2.2,5.6,7.2,13.5C14.8,25.7,24.6,35.8,36.6,43.5z"/><path class="st0" d="M72.9,43.5C67.3,49,62,54.8,57,60.8C52,67.1,45,74.5,44.3,82.7c-0.1,1.3,1.5,2.5,2.7,2   c7.7-3.1,13.1-11.4,18.6-17.4c6.7-7.3,13.6-14.4,20.9-21c2.8-2.5,1.9-7.3-1.2-9.1C72.6,30,63.3,18.8,56,6.2   c-4.7-8.1-17.5-0.6-12.5,7.3C51.1,25.7,60.9,35.8,72.9,43.5z"/>
                </g></svg>

            </div>


        </div>

        <div class="flex flex-row justify-center gap-4 border-t-2 border-t-slate-500 border-solid border-b-2
                bg-slate-800 border-b-slate-500 p-4">
            @foreach($aboutItems as $item)
                <span class="rounded-full bg-slate-700 h-4 w-4 border border-lime-400 border-solid cursor-pointer"
                      :class="currentSlide == {{ $item['order'] }} ? 'bg-lime-50' : '' "
                @click="pickSlide({{ $item['order'] }})">
                </span>
            @endforeach
        </div>


    </div>

</div>
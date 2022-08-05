<div x-show="showMailModal" @keydown.escape="showMailModal = false" x-cloak
     class="w-full absolute left-0 right-0 h-[70vh] lg:h-screen
         bg-white top-12 lg:top-0 z-50 gap-4 p-5 rounded-lg drop-shadow-lg bg-opacity-50 grid grid-cols-3
            lg:pt-20">

    <div></div>

    <div class="grid grid-cols-1 gap-4 p-5 rounded-lg bg-slate-800 col-span-3 lg:col-span-1 h-full overflow-y-scroll
        lg:overflow-auto relative">

        <div class="absolute top-3 right-3 font-bold text-3xl h-12 w-12 rounded-full bg-slate-800
            flex flex-col justify-center items-center cursor-pointer border-lime-400 border-2 border-solid text-white
            hover:text-lime-400"
            @click="showMailModal = false">

            <span>
                    &times;
            </span>

        </div>

        <div class="bg-slate-700 border-l-2 border-t-2 border-lime-400 border-solid flex flex-col p-5 rounded-lg">
            <label for="" class="text-bold text-lime-400 mb-2">Your Name:</label>
            <input name="nameInput" type="text" class="rounded-md focus:outline-none focus:ring-1 focus:ring-lime-400
            active:ring-lime-100">
        </div>



        <div class="bg-slate-700 border-l-2 border-t-2 border-lime-400 border-solid flex flex-col p-5 rounded-lg">
            <label for="subjectInput" class="text-bold text-lime-400 mb-2">Subject:</label>
            <input name="subjectInput" type="text" class="rounded-md focus:outline-none focus:ring-1 focus:ring-lime-400
            active:ring-lime-100">
        </div>

        <div class="bg-slate-700 border-l-2 border-t-2 border-lime-400 border-solid  flex flex-col p-5 rounded-lg">
            <label for="emailBody" class="text-bold text-lime-400 mb-2">Email:</label>
            <textarea name="emailBodyInput" rows="5" class="rounded-md focus:outline-none focus:ring-1 focus:ring-lime-400
            active:ring-lime-100"></textarea>
        </div>

        <div class="bg-slate-700 border-l-2 border-t-2 border-lime-400 border-solid flex flex-row justify-end p-5 rounded-lg">
            <button class="bg-slate-800 hover:text-lime-400 text-white text-center items-center w-1/3 rounded-lg text-2xl
                    border border-slate-500 border-solid" type="button">
                Send
            </button>
        </div>

    </div>

    <div></div>

</div>

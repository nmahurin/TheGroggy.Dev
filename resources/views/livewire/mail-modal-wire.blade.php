<div x-show="showMailModal" @keydown.escape="showMailModal = false" x-cloak
     class="lg:w-1/2 w-full absolute left-0 right-0 lg:right-1/4 lg:left-1/4 h-[70vh] lg:h-[80vh]
         bg-white top-20 lg:top-28 z-50 gap-4 p-5 rounded-lg drop-shadow-lg bg-opacity-50">

    <div class="grid grid-cols-1 gap-4 p-5 rounded-lg bg-slate-800 h-full w-full overflow-y-scroll lg:overflow-auto">
        <div class="absolute top-5 right-5 lg:top-3 lg:right-3 font-bold text-3xl h-12 w-12 rounded-full bg-white
            flex flex-col justify-center items-center cursor-pointer border-lime-400 border-2 border-solid"
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

</div>

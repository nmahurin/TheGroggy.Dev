<footer class="flex flex-col md:flex-row pl-4 lg:justify-evenly bg-slate-700 border-t-2 gap-4 pb-6 border-white
                necron:bg-lime-800 dark:bg-slate-800">

    <div></div>

    <div></div>

    <div class="flex flex-col text-white pt-4 gap-4">
        <span class="font-bold text-xl border-b border-white mb-2 text-lime-400">Contact</span>
        <div class="flex flex-row justify-between items-center lg:w-64 pr-4 cursor-pointer">
            <span>Nathan Mahurin</span>
            <span class="h-12 w-12 bg-slate-100 rounded-full border-2 border-white border-solid"
            @click="toggleMailModal">
            <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 20 20" fill="black">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
            </span>
        </div>
        {{--<span>317-771-3594</span>--}}
    </div>

</footer>
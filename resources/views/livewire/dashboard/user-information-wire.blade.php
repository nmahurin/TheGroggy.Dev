<div x-data="{
    users: {{ $users }},
    formatDate(time){
        let date = new Date(time);
        return date.toLocaleDateString();
    },
}">

    <div class="bg-slate-700 dark:bg-slate-800 text-lime p-4 text-center rounded-lg border-slate-500 border-solid border
        text-lime-400 text-2xl mb-6">
        Registered Users
    </div>

    <div class="w-full border-slate-500 border-solid border-b border-t flex flex-row p-2">
        <span class="basis-1/5 font-bold">#</span>
        <span class="basis-1/5 font-bold">Name</span>
        <span class="basis-1/5 font-bold">Email</span>
        <span class="basis-1/5 font-bold">Created At</span>
        <span class="basis-1/5"></span>
    </div>


    <template x-for="user in users" :key="user.email">
        <div class="w-full border-slate-500 border-solid border-b flex flex-row p-2
            ">
            <span class="basis-1/5" x-text="user.id"></span>
            <span class="basis-1/5" x-text="user.name"></span>
            <span class="basis-1/5" x-text="user.email"></span>
            <span class="basis-1/5" x-text="formatDate(user.created_at)"></span>
            <span class="basis-1/5 flex flex-row justify-end pr-4">
                <div class="rounded-lg bg-slate-700 hover:bg-slate-800 w-1/2 p-2 h-12 cursor-pointer">
                    @include('svg.cog-o', ['classes' => 'float-right text-lime-400 h-8'])
                </div>
            </span>
        </div>
    </template>



</div>

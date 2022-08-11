<div x-data="{
    users: {{ $users }},
    editUser: '',
    currentPage: 1,
    formatDate(time){
        let date = new Date(time);
        return date.toLocaleDateString();
    },
    toPage(page){

    }
}" class="flex flex-col gap-4 bg-slate-100 dark:bg-slate-700">

    <div class="bg-slate-700 flex flex-row justify-center p-2 dark:bg-slate-800 rounded-md">

        <span class="rounded-full bg-slate-700 h-4 w-4 border border-lime-400 border-solid cursor-pointer
                hover:bg-lime-50"
              :class="currentPage = 1 ? '' : ''"
                @click="toPage(1)">
        </span>

    </div>

    <div class="bg-slate-700 dark:bg-slate-800 text-lime p-1 text-center rounded-md
        dark:text-lime-400 text-sm text-white font-bold">
        Registered Users
    </div>

    <div class="border-slate-500 border-solid border-b border-t flex flex-row p-2 m-2">
        <span class="basis-1/5 font-bold text-slate-800 dark:text-lime-400">#</span>
        <span class="basis-1/5 font-bold text-slate-800 dark:text-lime-400">Name</span>
        <span class="basis-1/5 font-bold text-slate-800 dark:text-lime-400">Email</span>
        <span class="basis-1/5 font-bold text-slate-800 dark:text-lime-400">Created At</span>
        <span class="basis-1/5"></span>
    </div>


    <template x-for="user in users" :key="user.email">
        <div class="flex flex-col gap-2">
            <div class="border-slate-500 border-solid border-b flex flex-row p-2"
                 :class="editUser == user.id ? 'bg-slate-500 text-lime-400' : ''"
            >
                <span class="basis-1/5 text-slate-800 dark:text-white" x-text="user.id"></span>
                <span class="basis-1/5 text-slate-800 dark:text-white" x-text="user.name"></span>
                <span class="basis-1/5 text-slate-800 dark:text-white" x-text="user.email"></span>
                <span class="basis-1/5 text-slate-800 dark:text-white" x-text="formatDate(user.created_at)"></span>
                <span class="basis-1/5 flex flex-row justify-end items-center pr-4">

                    <div class="rounded-lg bg-slate-700 dark:bg-slate-800 hover:bg-slate-800 dark:hover:bg-slate-900
                        w-1/2 p-2 h-12 cursor-pointer flex-row"
                        @click=" editUser = (editUser == user.id)? '' : user.id ">

                        <span x-show="editUser != user.id">
                            @include('svg.cog-o', ['classes' => 'text-lime-400 h-8'])
                        </span>
                        <span x-show="editUser == user.id">
                            @include('svg.cog-o', ['classes' => 'text-red-500 h-8'])
                        </span>

                    </div>
                </span>
            </div>

            <div class="h-16 bg-white dark:bg-slate-600 border-slate-500 border-2 border-solid text-black rounded-lg
                flex flex-row gap-4 justify-around p-2"
                 x-show=" editUser == user.id ">

                <div class="bg-slate-100 dark:bg-slate-700 p-2 rounded-md flex flex-row justify-center items-center
                                text-white cursor-pointer">
                    Reset Password
                </div>

                <div class="bg-slate-100 dark:bg-slate-700 p-2 rounded-md flex flex-row justify-center items-center
                                text-white cursor-pointer">
                    Activation link
                </div>

                <div class="bg-slate-100 dark:bg-slate-700 p-2 rounded-md flex flex-row justify-center items-center
                                text-white cursor-pointer">
                    Update Information
                </div>

                <div class="bg-slate-100 dark:bg-slate-700 text-red-400 p-2 rounded-md flex flex-row justify-center
                        border border-solid items-center border-red-400 bg-slate-100 cursor-pointer
                        hover:text-red-400">

                    Delete
                </div>

            </div>
        </div>
    </template>

    <div class="bg-slate-700 flex flex-row justify-center p-2 dark:bg-slate-800 rounded-md">
        <span class="rounded-full bg-slate-700 h-4 w-4 border border-lime-400 border-solid cursor-pointer
                hover:bg-lime-50"
              :class="currentPage = 1 ? '' : ''"
            @click="toPage(1)">

        </span>
    </div>

</div>

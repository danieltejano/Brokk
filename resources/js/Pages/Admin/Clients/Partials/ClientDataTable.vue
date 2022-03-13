<template>
    <div class="flex flex-col col-span-2 sm:col-span-4 lg:col-span-6 xl:col-span-12 xl:row-span-6 xl:p-5">
        <!-- Search Bar -->
        <div class="flex bg-slate-200 dark:bg-slate-800 rounded-full  space-x-3">
            <div class="flex items-center justify-center w-16 h-full dark:bg-slate-700 bg-slate-300 rounded-l-full">
                <Icon icon="fluent:search-28-regular" class="h-8 w-8"/>
            </div>
            <input class="py-2 bg-slate-200 dark:bg-slate-800 w-full focus:ring-slate-300 ring-0 focus:outline-none rounded-r-full" placeholder="Search for a Customer" v-model="this.searchForm.term" name="search_term" id="search_term"/>
        </div>
        <!-- Table -->
        <div class="overflow-auto lg:overflow-visible w-full h-full mt-5 scrollbar scrollbar-track-transparent scrollbar-thumb-rounded-full dark:scrollbar-thumb-slate-800">
            <table class="table dark:text-slate-400 border-separate space-y-6 text-sm w-full h-full p-5">
                <thead class="bg-slate-200 dark:bg-slate-800  dark:text-slate-500">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Name</th>
                        <th class="p-3 text-left">Account Number</th>
                        <th class="p-3 text-left">Renewal Date</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr  class="dark:hover:bg-slate-700  bg-slate-100 shadow dark:bg-slate-800">
                        <td class="p-3 text-center ">
                            1
                        </td>
                        <td class="p-3 ">
                            <div class="flex w-full justify-evenly items-center">
                                <img class="rounded-full h-12 w-12 min-w-[3rem] object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3 min-w-[14rem] cursor-pointer">
                                    <div class="">Juan Dela Cruz Espania <span class="border-emerald-600 text-emerald-600 border-2 font-bold dark:text-slate-50 rounded-md px-2 mt-3">599</span></div>
                                    <div class="text-slate-500">mail@rgmail.com</div> 
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            09695521354
                        </td>
                        <td class="p-3 font-bold">
                            2 days from now
                        </td>
                        <td class="p-3">
                            <div class="flex w-full">
                                <span class="bg-yellow-400 dark:bg-inherit dark:border-2 dark:border-yellow-400 dark:text-slate-50 rounded-md px-2 min-w-[8rem]">Billed, Not Paid</span>
                            </div>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    <tr  class="dark:hover:bg-slate-700  bg-slate-100 shadow dark:bg-slate-800">
                        <td class="p-3 text-center ">
                            1
                        </td>
                        <td class="p-3 ">
                            <div class="flex w-full justify-evenly items-center">
                                <img class="rounded-full h-12 w-12 min-w-[3rem] object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3 min-w-[14rem] cursor-pointer">
                                    <div class="">Juan Dela Cruz Espania <span class="border-emerald-600 text-emerald-600 border-2 font-bold dark:text-slate-50 rounded-md px-2 mt-3">599</span></div>
                                    <div class="text-slate-500">mail@rgmail.com</div> 
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            09695521354
                        </td>
                        <td class="p-3 font-bold">
                            2 days from now
                        </td>
                        <td class="p-3">
                            <div class="flex w-full">
                                <span class="bg-yellow-400 dark:bg-inherit dark:border-2 dark:border-yellow-400 dark:text-slate-50 rounded-md px-2 min-w-[8rem]">Billed, Not Paid</span>
                            </div>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    <tr  class="dark:hover:bg-slate-700  bg-slate-100 shadow dark:bg-slate-800">
                        <td class="p-3 text-center ">
                            1
                        </td>
                        <td class="p-3 ">
                            <div class="flex w-full justify-evenly items-center">
                                <img class="rounded-full h-12 w-12 min-w-[3rem] object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3 min-w-[14rem] cursor-pointer">
                                    <div class="">Juan Dela Cruz Espania <span class="border-emerald-600 text-emerald-600 border-2 font-bold dark:text-slate-50 rounded-md px-2 mt-3">599</span></div>
                                    <div class="text-slate-500">mail@rgmail.com</div> 
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            09695521354
                        </td>
                        <td class="p-3 font-bold">
                            2 days from now
                        </td>
                        <td class="p-3">
                            <div class="flex w-full">
                                <span class="bg-yellow-400 dark:bg-inherit dark:border-2 dark:border-yellow-400 dark:text-slate-50 rounded-md px-2 min-w-[8rem]">Billed, Not Paid</span>
                            </div>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    <tr  class="dark:hover:bg-slate-700  bg-slate-100 shadow dark:bg-slate-800">
                        <td class="p-3 text-center ">
                            1
                        </td>
                        <td class="p-3 ">
                            <div class="flex w-full justify-evenly items-center">
                                <img class="rounded-full h-12 w-12 min-w-[3rem] object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3 min-w-[14rem] cursor-pointer">
                                    <div class="">Juan Dela Cruz Espania <span class="border-emerald-600 text-emerald-600 border-2 font-bold dark:text-slate-50 rounded-md px-2 mt-3">599</span></div>
                                    <div class="text-slate-500">mail@rgmail.com</div> 
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            09695521354
                        </td>
                        <td class="p-3 font-bold">
                            2 days from now
                        </td>
                        <td class="p-3">
                            <div class="flex w-full">
                                <span class="bg-yellow-400 dark:bg-inherit dark:border-2 dark:border-yellow-400 dark:text-slate-50 rounded-md px-2 min-w-[8rem]">Billed, Not Paid</span>
                            </div>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    <tr  class="dark:hover:bg-slate-700  bg-slate-100 shadow dark:bg-slate-800">
                        <td class="p-3 text-center ">
                            1
                        </td>
                        <td class="p-3 ">
                            <div class="flex w-full justify-evenly items-center">
                                <img class="rounded-full h-12 w-12 min-w-[3rem] object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3 min-w-[14rem] cursor-pointer">
                                    <div class="">Juan Dela Cruz Espania <span class="border-emerald-600 text-emerald-600 border-2 font-bold dark:text-slate-50 rounded-md px-2 mt-3">599</span></div>
                                    <div class="text-slate-500">mail@rgmail.com</div> 
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            09695521354
                        </td>
                        <td class="p-3 font-bold">
                            2 days from now
                        </td>
                        <td class="p-3">
                            <div class="flex w-full">
                                <span class="bg-yellow-400 dark:bg-inherit dark:border-2 dark:border-yellow-400 dark:text-slate-50 rounded-md px-2 min-w-[8rem]">Billed, Not Paid</span>
                            </div>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="dark:text-slate-400 dark:hover:text-slate-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import {pickBy, throttle} from 'lodash'
import {Icon} from '@iconify/vue'
export default {
    setup() {
        
    },
    components: {
        Icon,
    },
    props: {
        filters: Object
    },
    data(){
        return{
            searchForm: this.$inertia.form({
                term: this.filters.term
            })
        }
    },
    watch:{
        form:{
            deep:true,
            handler: 
                throttle(
                    function(){
                        this.$inertia.get(route('admin.customers'), pickBy(this.form), {preserveState: true, preserveScroll:true})
                    }, 700
                ),
        }
    }
}
</script>

<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:last-child,
	tr th:last-child {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
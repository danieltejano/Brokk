<template>
    <div :class=" isExpanded ? 'col-span-2 row-span-4 sm:col-span-2 xl:col-span-2 xl:row-span-4 bg-white shadow rounded-2xl dark:bg-slate-800 order-last' : 'col-span-1 row-span-1 bg-white shadow rounded-2xl dark:bg-slate-800' ">
        <div class="flex w-full justify-between  rounded-t-2xl bg-sky-600 ">
            <IconButton @click="isExpanded = !isExpanded" icon="" size="6" label="Collapse"/>
            <span class="font-semibold text-lg text-slate-50">Client</span>
            <div :class="isExpanded ? 'flex w-10 pr-3' : 'flex w-5'">
                <IconButton v-show="isExpanded" @click="isExpanded = !isExpanded" icon="icon-park-outline:collapse-text-input" size="6" label="Collapse"/>
            </div>
        </div>
        <div v-show="!isExpanded" class="flex flex-col items-center p-3">
            <div class="flex space-x-1">
                <IconButton v-show="!isExpanded" @click="isExpanded = !isExpanded" icon="fluent:people-16-regular" size="8" label="Expand"/>
                <span class="text-3xl font-bold">14</span>
            </div>
            <span>Clients</span>
        </div>
        <div v-show="isExpanded" class="flex flex-col p-3  space-y-3"> 
            <!-- Client Header -->
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <Icon icon="fluent:note-edit-20-regular" class="h-8 w-8 hover:"/>
                    <span class="text-lg font-bold">Client</span>
                </div>
                <IconButton @click="showModal = !showModal" icon="fluent:add-16-filled" size="6" label="New Note"/>
            </div>
            
            <div class="flex flex-col p-2 rounded-2xl bg-slate-50 dark:bg-slate-700/80 h-96 shadow overflow-y-scroll overflow-x-hidden scrollbar scrollbar-track-transparent scrollbar-thin scrollbar-thumb-slate-200 scrollbar-thumb-rounded-full scrollbar-track-rounded-full">

            </div>
            <RightModal :show="showModal" @close="showModal = !showModal">
                <div class="flex flex-col justify-between w-full ">
                    <div class="w-full h-full">
                        <div class="flex space-x-3 items-center">
                            <Icon icon="fluent:note-edit-20-regular" class="h-12 w-12 hover:"/>
                            <div class="flex flex-col">
                                <span class="text-lg md:text-3xl font-bold tracking-wide uppercase">Create new notes</span>
                                <span class="text-lg md:text-lg  tracking-wide uppercase">Lets make some notes 📝</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full px-5 mt-5">
                        <span>save</span>
                        <span>cancel</span>
                    </div>
                </div>
            </RightModal>
        </div>
    </div>
</template>

<script>
import RightModal from "@/Components/RightModal"
import {Icon} from '@iconify/vue'
import IconButton from '@/Components/IconButton'

export default {
    setup() {
        
    },
    components: {
        Icon,
        IconButton,
        RightModal,
    },
    data(){
        return {
            isExpanded: false,
            showModal: false,
        }
    }
}
</script>
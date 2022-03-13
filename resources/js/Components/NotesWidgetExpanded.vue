<template>
    <div>
        <div v-show="isExpanded" class="flex flex-col p-3  space-y-3">
            <!-- Expander -->
            
            <!-- Notes Header -->
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <Icon icon="fluent:note-edit-20-regular" class="h-8 w-8 hover:"/>
                    <span class="text-lg font-bold">Notes</span>
                </div>
                <IconButton @click="showModal = !showModal" icon="fluent:add-16-filled" size="6" label="New Note"/>
                
            </div>
            
            <div class="flex flex-col p-2 rounded-2xl bg-slate-50 dark:bg-slate-700/80 h-96 shadow overflow-y-scroll overflow-x-hidden scrollbar scrollbar-track-transparent scrollbar-thin scrollbar-thumb-slate-200 scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
                <NotesWidgetItem />
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
                        <div class="mt-4 w-full xl:px-5">
                            <jet-label for="note_header" value="Header:" />
                            <jet-input id="note_header" type="text" class="mt-1 block w-full" v-model="form.header" required/>
                        </div>
                        <div class="mt-4 w-full xl:px-5 min-h-64 ">
                            <jet-label for="note_header" value="Note:" />
                            <div class="flex flex-col w-full p-5 min-h-64 h-96 overflow-visible bg-white dark:bg-slate-700 dark:text-slate-50 rounded-2xl mt-2">
                                <QuillEditor theme="bubble" toolbar="essential" class="z-50" />
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
import IconButton from '@/Components/IconButton'
import NotesWidgetItem from '@/Components/NotesWidgetItem'
import RightModal from '@/Components/RightModal'
import {Icon} from '@iconify/vue'
import JetLabel from '@/Jetstream/Label'
import JetInput from '@/Jetstream/Input'
import { QuillEditor } from '@vueup/vue-quill'

export default {
    setup() {

    },
    props:{
        isExpanded: Boolean,
    },
    data(){
        return {
            showModal: false,
        }
    },
    components: {
        IconButton,
        Icon,
        JetLabel,
        JetInput,
        QuillEditor,
        NotesWidgetItem,
        RightModal,
    }
}
</script>
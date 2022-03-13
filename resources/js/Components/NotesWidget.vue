<template>
    <div class="flex flex-col col-span-1 row-span-1 bg-white shadow rounded-2xl dark:bg-slate-800 h-full">
        <div class="flex w-full justify-between  rounded-t-2xl bg-sky-600 ">
            <IconButton @click="toggleExpand" icon="" size="6" label="Collapse"/>
            <span class="font-semibold text-lg text-slate-50">Notes</span>
            <div :class="isExpanded ? 'flex w-10 pr-3' : 'flex w-5'">
                <IconButton v-show="isExpanded" @click="toggleExpand" icon="icon-park-outline:collapse-text-input" size="6" label="Collapse"/>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center p-3 h-full">
            <div class="flex space-x-1 ">
                <IconButton @click="toggleExpand" icon="fluent:note-16-regular" size="8" label="Expand"/>
                <span class="text-3xl font-bold">14</span>
            </div>
            <span>Notes</span>
        </div>
    </div>
</template>

<script>
import IconButton from '@/Components/IconButton'
import '@vueup/vue-quill/dist/vue-quill.bubble.css';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
export default {
    emits: ['open-widget', 'close-widget'],
    setup() {
        
    },
    components: {
        IconButton,
    },
    data(){
        return {
            isExpanded: false,
            showModal: false,
            form: this.$inertia.form({
                header: ''
            }),
        }
    },
    methods: {
        toggleExpand(){
            this.isExpanded = !this.isExpanded
            this.isExpanded == false ? this.$emit('open-widget') : this.$emit('close-widget')
        }
    }
}
</script>
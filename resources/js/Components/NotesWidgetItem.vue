<template>
    <!-- NotesWidgetItem -->
    <div class="px-2 py-5 border-b-2 border-slate-200 dark:border-slate-600">
        <div class="flex justify-between">
            <span class="flex font-semibold text-lg">{{header}}</span>
            <div class="flex space-x-3">
                <IconButton icon="fluent:edit-28-regular" size="5" label="Edit"/>
                <IconButton icon="bi:trash" size="5" label="Delete"/>
                <IconButton icon="bi:check-lg" size="5" label="Clear"/>
            </div>
        </div>
        <div class="flex max-h-24 px-2 py-1 rounded mt-2  overflow-ellipsis overflow-hidden">
            {{content}}
        </div>
    </div>    
</template>

<script>
import IconButton from '@/Components/IconButton'
export default {
    setup() {
        
    },
    components: {
        IconButton
    },
    props:{
        header: {
            default: 'Untitled Note',
            type: String,
        },
        content: {
            default: 'Something went wrong 😖.'
        }
    }
}
</script>


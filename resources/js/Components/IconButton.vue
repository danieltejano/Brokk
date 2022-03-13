<template>
    <div class="relative">
        <Icon @mouseover="showLabel = true" @mouseleave="showLabel = false" :icon="icon" :class="'h-'+ size +' ' + 'w-' + size + ' ' + 'cursor-pointer hover:text-slate-500 dark:hover:text-orange-400'" />
        <div v-show="showLabel" class="absolute flex justify-center p-2 w-28 shadow rounded bg-white dark:bg-slate-800 max-w-sm  -bottom-10 -left-10 z-10">
            <span>{{label}}</span>
        </div>
    </div>    
</template>

<script>
import { Icon } from '@iconify/vue';
export default {
    setup() {
        
    },
    props: {
        showLabel: false,
        icon: {
            required: true,
            type: String,
        },
        size: {
            default: '8',
            type: String
        },
        label: {
            default: 'Icon Button',
            type: String,
        }
    },
    components: {
        Icon,
    }
}
</script>
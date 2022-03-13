<template>
    <Link :href="route(routeName)" class="relative">
        <Icon @mouseover="showLabel = true" @mouseleave="showLabel = false" :icon="icon" class="h-8 w-8 cursor-pointer hover:text-slate-500 dark:hover:text-orange-400" />
        <div v-if="isNavigation" v-show="showLabel" class="flex justify-center absolute p-2 bg-slate-50 dark:bg-slate-800 shadow -top-1 rounded xl:-right-72 w-64">
            <span class="font-semibold">{{label}}</span>
        </div>
        <div v-if="!isNavigation" v-show="showLabel" class="flex justify-center absolute p-2 bg-slate-50 dark:bg-slate-800 shadow">
            <span class="font-semibold">{{label}}</span>
        </div>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
import { Icon } from '@iconify/vue';
export default {
    setup() {
        
    },
    components: {
        Icon,
        Link,
    },
    props: {
        icon: {
            required: true,
            type: String,
        },
        routeName: {
            required:true,
            type: String,
        },
        label:{
            default: 'Unnamed Navigation Item',
            type: String,
        },
        hasPopover: {
            default: false,
            type: Boolean,
        },
        isNavigation: {
            default: false,
            type: Boolean
        }
    },
    data(){
        return {
            showLabel: false,
        }
    }
}
</script>
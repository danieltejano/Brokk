<template>
    <Link :href="route(routeName)">
        <div class="flex w-full items-center space-x-3 hover:bg-slate-50 hover:shadow-sm hover:text-slate-600 dark:hover:text-orange-500 dark:hover:bg-transparent rounded-xl px-3 py-1 cursor-pointer">
            <Icon :icon="icon" class="h-8 w-8 cursor-pointer" />
            <span class="text-base leading-snug">{{label}}</span>
        </div>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
import { Icon } from '@iconify/vue';
export default {
    setup() {
        
    },
    props:{
        routeName: {
            required: true,
            type: String,
        },
        label: {
            required: true,
            type: String,
        },
        icon: String,
    },
    components: {
        Link,
        Icon,
    }
}
</script>
<template>
    <div>
         <Switch
        v-model="enabled"
        :class="enabled ? 'bg-teal-900' : 'bg-emerald-600'"
        class="relative inline-flex items-center h-6 rounded-full w-11"
    >
        <span class="sr-only">Enable notifications</span>
        <span
        :class="enabled ? 'translate-x-6' : 'translate-x-1'"
        class="inline-block w-4 h-4 transform bg-white rounded-full"
        />
    </Switch>
    </div>
</template>

<script>
import {Switch} from '@headlessui/vue'
export default {
    setup() {
        
    },
    components: {
        Switch
    },
    data() {
        return {
            enabled: false,
        }
    },
    watch:{
        enabled(newValue){
            if(newValue){
                document.documentElement.classList.add('dark')
                console.log('lets go dark')
            }else{
                document.documentElement.classList.remove('dark')
                console.log('lets go light')
            }
        }
    }
}
</script>
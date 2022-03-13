<template>
    <form class="flex justify-center cursor-pointer" method="POST" @submit.prevent="logout">
        <button type="submit">
            <Icon icon="eva:power-fill" class="h-6 w-6 cursor-pointer" />
        </button>
    </form>
</template>

<script>
import { Icon } from '@iconify/vue';
export default {
    setup() {
        
    },
    components: {
        Icon,
    },
    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>
<template>
    <div class="flex flex-col h-full sm:hidden w-full relative">
        <div class="flex w-full justify-between items-center">
            <div class="flex items-center justify-center h-14">
                <ApplicationText :appName="appName"/>
            </div>
            <div class="flex items-center justify-center space-x-3">
                <ThemeModeToggle/>
                <svg @click="showMenu = !showMenu" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="h-10 w-10 cursor-pointer" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"/></svg>
            </div>
        </div>
        <MobileNavigationMenu v-show="showMenu" />
    </div>
</template>

<script>
import ThemeModeToggle from '@/Layouts/Components/ThemeModeToggle'
import ApplicationText from '@/Layouts/Components/ApplicationText'
import MobileNavigationMenu from '@/Layouts/Components/MobileNavigationMenu'
export default {
    setup() {
        
    },
    props: {
        appName: {
            required: true,
            type: String,
        }
    },
    components: {
        ApplicationText,
        ThemeModeToggle,
        MobileNavigationMenu,
    },
    data() {
        return {
            showMenu: false,
        }
    }
    
}
</script>
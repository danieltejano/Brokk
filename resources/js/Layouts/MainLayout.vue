<template>
    <div>
        <Head :title="'Playground'"/>

        <div class="flex flex-col sm:flex-row w-screen h-screen bg-slate-50 dark:bg-slate-900 dark:text-slate-100">
            <div class="flex flex-row h-full max-h-16 sm:flex-col sm:max-h-full sm:w-20 justify-between items-center px-3 py-2 bg-slate-100 dark:bg-slate-900">
                <!-- Desktop Navigation -->
                <DesktopNavigation :appName="appName"/>
                <!-- Movie Navigation -->
                <MobileNavigation :appName="appName"/>

            </div>
            <div class="flex flex-col w-full md:p-3">
                <div class="hidden sm:flex items-center justify-between px-3 w-full h-16 ">
                    <!-- Application Text -->
                    <ApplicationText :appName="appName" class="hidden sm:block"/>
                    <div class="flex space-x-5 items-center">
                        <!-- Theme Mode toggle -->
                        <ThemeModeToggle class="hidden sm:block" />
                        <!-- Authenticated User -->
                        <div class="h-10 w-10 bg-slate-900 dark:bg-slate-100 rounded-full relative">
                            <!-- Notification Badge -->
                            <div class="absolute flex justify-center items-center bg-red-600 w-4 h-4 rounded-full right-0 text-white text-xs font-bold">1</div>
                        </div>
                    </div>
                </div>
                <div class="flex px-5 py-4 tracking-widest uppercase h-16">
                    <slot name="breadcrumb"></slot> 
                </div>
                <div class="sm:p-5 h-full">
                    <div class="flex flex-col w-full px-0 sm:px-3 md:px-0 md:py-5 rounded-xl max-h-[80vh]  items-center dark:bg-slate-900 overflow-y-scroll scrollbar scrollbar-track-transparent">
                        <!-- Content -->
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {computed} from 'vue'
import {Head, Link, usePage} from '@inertiajs/inertia-vue3'
import DesktopNavigation from '@/Layouts/Components/DesktopNavigation'
import MobileNavigation from '@/Layouts/Components/MobileNavigation'
import ThemeModeToggle from '@/Layouts/Components/ThemeModeToggle'
import ApplicationText from '@/Layouts/Components/ApplicationText'
export default {
    setup() {
        const appName = computed(() => usePage().props.value.appName)
        return {appName}
    },
    components:{
        Head,
        Link,
        DesktopNavigation,
        MobileNavigation,
        ThemeModeToggle,
        ApplicationText,
    },
    data(){
        return{
            isDarkMode: false,
        }
    },
    watch: {
        isDarkMode: {
            handler:(value) => {
                if(value == false){
                    localStorage.theme = 'light'
                }else{
                    localStorage.theme = 'dark'
                }
            }
        }
    },
    methods: {

    }
}
</script>
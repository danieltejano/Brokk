<template>
    <MainLayout title="Dashboard">
        <template #breadcrumb>
            <h2 class="font-black text-3xl dark:text-slate-50 text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="w-full">
            <div class="w-full">
                <div class="grid p-2 gap-5 grid-cols-2 grid-rows-6 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 w-full text-slate-800 dark:text-slate-50">
                    <div class="grid grid-cols-3 col-span-2 sm:col-span-1 sm:row-span-4 sm:grid-cols-1 md:col-span-1 gap-5">
                        <DateWidget class="rounded-2xl"/>
                        <ClientWidget />
                        <NotesWidget @open-widget="expandWidget('Notes')" @close-widget="expandWidget('Notes')"/>
                    </div>
                    <div :class=" expandedWidget != '' ? 'grid grid-cols-1 col-span-3 row-span-4 bg-white rounded-2xl shadow': 'hidden'">
                        <NotesWidgetExpanded :isExpanded="expandedWidget == 'Notes'" />
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script>
    import { defineComponent } from 'vue'
    import MainLayout from '@/Layouts/MainLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import DateWidget from '@/Components/DateWidget'
    import NotesWidget from '@/Components/NotesWidget'
    import NotesWidgetExpanded from '@/Components/NotesWidgetExpanded'
    import ClientWidget from '@/Components/ClientWidget'
    import '@vueup/vue-quill/dist/vue-quill.snow.css';
    export default defineComponent({
        components: {
            MainLayout,
            Welcome,
            ClientWidget,
            DateWidget,
            NotesWidget,
            NotesWidgetExpanded
        },
        data(){
            return {
                expandedWidget: '',
            }
        },
        methods: {
            expandWidget(widget){
                if(this.expandedWidget == widget){
                    this.expandedWidget = ''
                }else{
                    this.expandedWidget = widget
                }
            }
        }
    })
</script>

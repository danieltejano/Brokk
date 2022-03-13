<template>
    <MainLayout>
        <template #breadcrumb>
            <h2 class="font-black text-3xl dark:text-slate-50 text-gray-800 leading-tight">
                Clients
            </h2>
        </template>

        <div class="w-full">
            <div class="w-full">
                <div class="grid p-2 gap-5 grid-cols-2 grid-rows-6 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 w-full text-slate-800 dark:text-slate-50">
                    <ClientDataTable :filters="{term: 'hello'}"/>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script>
import ClientDataTable from '@/Pages/Admin/Clients/Partials/ClientDataTable'
import MainLayout from '@/Layouts/MainLayout'
import RightModal from '@/Components/RightModal'
export default {
    setup() {
        
    },
    components: {
        MainLayout,
        ClientDataTable,
        RightModal,
    }
}
</script>
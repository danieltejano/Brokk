<template>
    <div class="hidden sm:flex sm:flex-col justify-between font-bold text-lg py-2 sm:h-full bg-slate-100 dark:bg-slate-900">
        <!-- <span class="text-2xl font-bold">{{appName}}</span> -->

        <div class="flex items-center justify-center h-14 w-14">
            <ApplicationMark />
        </div>
        
        <div class="flex flex-col items-center space-y-8">
          <IconLink routeName="dashboard" icon="fluent:home-20-regular" label="Home" :isNavigation="true"/>
          <IconLink routeName="clients.index" icon="fluent:people-audience-20-regular" label="Clients" :isNavigation="true"/>
          <IconLink routeName="simcards.index" icon="fluent:sim-20-regular" label="Sim Cards" :isNavigation="true"/>
          <IconLink routeName="products.index" icon="bi:router" label="Products" :isNavigation="true"/>
          <IconLink routeName="simcards.index" icon="fluent:wifi-1-20-regular" label="Wifi Plans" :isNavigation="true"/>
          <IconLink routeName="simcards.index" icon="fluent:shopping-bag-percent-20-regular" label="Invoices" :isNavigation="true"/>
        </div>

        <div class="flex flex-col space-y-5">
            <IconLogout />
        </div>
    </div>
</template>

<script>
import IconLogout from '@/Components/IconLogout'
import IconLink from '@/Components/IconLink'
import ApplicationMark from '@/Jetstream/ApplicationMark'
export default {
    setup() {
        
    },
    props: {
        appName: String,
    },
    components: {
        ApplicationMark,
        IconLogout,
        IconLink,
    }
}
</script>
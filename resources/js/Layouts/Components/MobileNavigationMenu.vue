<template>
    <div class="absolute w-full rounded-b-xl  dark:bg-slate-900/60 bg-slate-100 top-[3.5rem] z-20">
        <div class="flex flex-col p-5 space-y-3">
            <div class="flex justify-between">
                <!-- Authenticated User -->
                <div class="flex space-x-3 items-center">
                    <div class="h-8 w-8 bg-slate-500 dark:bg-slate-100 rounded-full"></div>
                    <div class="flex flex-col">
                        <span class="text-base leading-snug">Juan Dela Cruz</span>
                        <span class="text-base leading-snug">System Administrator</span>
                    </div>
                </div>
                <!-- Account Settings  -->
                <div class="flex space-x-3 items-center">
                    <IconLink icon="typcn:cog" routeName="profile.show"/>
                    <IconLogout />
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-2xl font-semibold leading-snug">Navigation</span>
                <div class="grid grid-cols-2 gap-2  mt-3">
                    <MobileNavigationLink :routeName="'dashboard'" :label="'Home'" :icon="'fluent:home-24-regular'"  />
                    <MobileNavigationLink :routeName="'clients.index'" :label="'Clients'" :icon="'fluent:people-audience-24-regular'"  />
                    <MobileNavigationLink routeName="simcards.index" icon="fluent:sim-20-regular" label="Sim Cards"/>
                    <MobileNavigationLink routeName="products.index" icon="bi:router" label="Products"/>
                    <MobileNavigationLink routeName="simcards.index" icon="fluent:wifi-1-20-regular" label="Wifi Plans"/>
                    <MobileNavigationLink routeName="simcards.index" icon="fluent:shopping-bag-percent-20-regular" label="Invoices"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MobileNavigationLink from '@/Layouts/Components/MobileNavigationLink'
import IconLink from '@/Components/IconLink'
import IconLogout from '@/Components/IconLogout'
export default {
    setup() {
        
    },
    components: {
        MobileNavigationLink,
        IconLink,
        IconLogout
    },
    
}
</script>
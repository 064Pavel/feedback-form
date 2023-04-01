<template>
    <div class="w-full h-28 bg-red-500 grid grid-cols-3 justify-items-center items-center">
        <div class="w-20 h-20 bg-white rounded-full">
            <ApplicationLogo class="w-16 mx-auto relative top-2"/>
        </div>
        <div><span class="text-6xl text-white font-medium">Feedback-forms</span></div>
        <div class="grid grid-cols-2 gap-x-8 text-2xl">

                <button @click.prevent="logout" class="w-36 h-10 rounded-2xl bg-white hover:bg-gray-100 font-medium">Sign Out</button>

        </div>
    </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {router} from "@inertiajs/vue3";

export default {
    name: "HeaderComponent",
    components: {ApplicationLogo},

    methods:{
        logout(){
            router.post('/logout')
        }
    }
}
</script>

<style scoped>

</style>

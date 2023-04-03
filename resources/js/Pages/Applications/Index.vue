<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid grid-cols-1">

        <HeaderComponent/>

        <div class="w-1/2 h-[700px] mx-auto bg-white rounded-2xl grid-cols-1 p-8 justify-items-center items-center">
            <div class="text-center"><span class="bg-red-500 text-white text-5xl px-3">Applications</span></div>
            <div class="grid grid-cols-2 mt-10 overflow-y-scroll h-[500px] w-full">
                <div v-for="application in applications" class="w-96 h-40 bg-gray-200 rounded-2xl mx-auto mt-10 text-black p-5 text-2xl">
                    <div class="w-8 h-8 bg-blue-500 rounded-full text-white text-center relative bottom-8 right-6">{{application.id}}</div>
                    <div class="truncate uppercase">{{application.title}}</div>
                    <div class="truncate text-xl">Description: {{application.description}}</div>
                    <div class="text-xl">Date: {{application.date}}</div>
                    <div class="relative left-72"><a :href="route('applications.show', application)"><button class="w-24 h-8 bg-red-500 text-white text-xl rounded-xl">Respond</button></a></div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import HeaderComponent from "@/Components/HeaderComponent.vue";

export default {
    name: "DashboardForModerator",
    components: {HeaderComponent},

    props: ['applications']
}
</script>

<style scoped>

</style>

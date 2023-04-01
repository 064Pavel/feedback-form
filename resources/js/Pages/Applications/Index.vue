<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid grid-cols-1">

        <div class="w-full h-28 bg-red-500 grid grid-cols-3 justify-items-center items-center">
            <div class="w-20 h-20 bg-white rounded-full">
                <ApplicationLogo class="w-16 mx-auto relative top-2"/>
            </div>
            <div><span class="text-6xl text-white font-medium">Feedback-forms</span></div>
            <div class="grid grid-cols-2 gap-x-8 text-2xl">
                <a :href="route('homepage')">
                    <button class="w-36 h-10 rounded-2xl bg-white hover:bg-gray-100 font-medium">Sign Out</button>
                </a>
            </div>
        </div>

        <div class="w-1/2 h-[700px] mx-auto bg-white rounded-2xl grid-cols-1 p-8 justify-items-center items-center">
            <div class="text-center"><span class="bg-red-500 text-white text-5xl px-3">Applications</span></div>
            <div class="grid grid-cols-2 mt-10">
                <div v-for="application in applications" class="w-96 h-32 bg-gray-200 rounded-2xl mx-auto mt-10 text-black p-3 text-2xl">
                    <div class="truncate uppercase">{{application.title}}</div>
                    <div class="truncate text-xl">Description: {{application.description}}</div>
                    <div class="text-xl">Date: {{application.date}}</div>
                    <div class="relative left-72 top-3"><a><button class="w-24 h-8 bg-red-500 text-white text-xl rounded-xl">Respond</button></a></div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

export default {
    name: "DashboardForModerator",
    components: {ApplicationLogo},

    props: ['applications']
}
</script>

<style scoped>

</style>

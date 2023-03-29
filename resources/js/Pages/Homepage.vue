<template>

    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 ">
        <div class="w-full h-28 bg-red-500 grid grid-cols-3 justify-items-center items-center">
            <div class="w-20 h-20 bg-white rounded-full">
                <ApplicationLogo class="w-16 mx-auto relative top-2 ease-in-out hover:animate-bounce"/>
            </div>
            <div><span class="text-6xl text-white font-medium">Feedback-forms</span></div>
            <div class="grid grid-cols-2 gap-x-8 text-2xl">
                <a :href="route('login')"><button class="w-36 h-10 rounded-2xl bg-white hover:bg-gray-100">Sign In</button></a>
                <a :href="route('register')"><button class="w-36 h-10 rounded-2xl bg-white hover:bg-gray-100">Sign Up</button></a>
            </div>
        </div>
        <div class="container mx-auto mt-20 p-12 w-full h-screen grid grid-cols-3">
            <div class="w-96 h-80 p-1 grid grid-cols-1 bg-white rounded-xl relative top-60 left-12">
                <div class="text-center w-full text-4xl mb-2"><span>Tech support will help you!</span></div>
                <div class="grid grid-cols-3">
                    <div class="w-28 h-28 bg-red-700 rounded-full relative top-8 left-16 z-auto z-10 hover:z-50 hover:animate-spin"><img class="w-20 mx-auto relative top-3" src="../../../public/UI/gui-questions.svg"></div>
                    <div class="w-28 h-28 bg-blue-700 rounded-full relative bottom-12 z-auto z-20 hover:z-50 hover:animate-spin"><img class="w-20 mx-auto relative top-3" src="../../../public/UI/feedback.svg"></div>
                    <div class="w-28 h-28 bg-green-700 rounded-full relative top-8 right-16 z-auto z-30 hover:z-50 hover:animate-spin"><img class="w-24 mx-auto" src="../../../public/UI/technical-support.svg"></div>
                </div>
            </div>
            <div class="w-[380px] h-[380px] rounded-full bg-red-500 border-2 border-white">
                <img
                    class="w-[320px] mx-auto relative top-4"
                    src="../../../public/UI/man-thinking.svg">
            </div>
            <div class="w-96 h-60 bg-white rounded-xl relative bottom-12 right-5 p-4 grid grid-cols-1 justify-items-center">
                <div class="text-center">
                    <span class="text-4xl  font-semibold">You have questions?</span><br><hr>
                    <span class="text-2xl">Or do you want to leave a review? - <span class="uppercase font-semibold ">write to us</span></span>
                </div>
                <div>
                    <button class="w-72 h-12 mt-8 bg-red-500 text-white text-2xl rounded-full hover:bg-red-700">Write...</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {defineComponent} from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

export default defineComponent({
    components: {ApplicationLogo}
})
</script>

<style>

</style>

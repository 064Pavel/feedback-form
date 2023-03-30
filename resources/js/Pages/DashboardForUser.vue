<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

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


        <div class="w-1/2 h-[700px] rounded-2xl mx-auto bg-blue-400 ">
            <div class="w-full h-[700px] rounded-2xl mx-auto bg-white relative top-6 right-6 p-14">
                <div class="text-center relative z-50">
                    <div class="relative right-8"><span class="text-5xl text-medium">Fill the form</span></div>
                    <div class="relative left-8"><span class="text-2xl text-gray-500">All fields are required</span></div>
                </div>


                <div class="mt-16 grid grid-cols-2 justify-items-center relative z-50">

                    <div class="text-center">
                        <label class="font-medium text-2xl">How can I call you? </label><br>
                        <input type="text" class="w-96 h-[50px] rounded-xl mt-2">
                    </div>


                    <div class="text-center">
                        <label class="font-medium text-2xl">What's happened? </label><br>
                        <input type="text" class="w-96 h-[50px] rounded-xl mt-2">
                    </div>

                    <div class="flex flex-col items-center justify-center w-full mt-16">
                        <label class="font-medium text-2xl mb-4">Submit a screenshot/photo </label><br>
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-96 h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>

                    <div class="flex flex-col items-center justify-center w-full mt-16">
                        <label class="font-medium text-2xl mb-4">Describe your problem in detail </label><br>
                        <textarea class="w-96 h-36 rounded-2xl resize-none"></textarea>
                    </div>
                </div>
                <div class="mt-16 w-full">
                    <button class="bg-red-500 relative left-[52%] text-white rounded-2xl text-3xl font-medium w-96 h-12">Send</button>
                </div>
            </div>
        </div>

<!--        <img-->
<!--            class="w-60 absolute top-1/2 left-[6%] transform rotate-45"-->
<!--            src="../../../public/UI/blob.svg">-->

<!--        <img-->
<!--            class="w-60 absolute top-[20%] left-[2%] transform rotate-45"-->
<!--            src="../../../public/UI/blob(3).svg">-->

<!--        <img-->
<!--            class="w-60 absolute top-[14%] left-[82%] transform rotate-45"-->
<!--            src="../../../public/UI/blob(4).svg">-->

<!--        <img-->
<!--            class="w-60 absolute transform rotate-45 top-[44%] left-[76%] transform rotate-45"-->
<!--            src="../../../public/UI/blob(4).svg">-->

<!--        <img-->
<!--            class="w-60 absolute transform rotate-90 top-[68%] left-[86%] transform rotate-45"-->
<!--            src="../../../public/UI/blob.svg">-->


    </div>


    <!--    <AuthenticatedLayout>-->
    <!--        <template #header>-->
    <!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>-->
    <!--        </template>-->


    <!--    </AuthenticatedLayout>-->
</template>

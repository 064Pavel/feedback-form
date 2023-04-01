<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid justify-items-center items-center">


        <div class="bg-white w-1/2 h-3/4 p-12 grid grid-rows-2 rounded-2xl">

            <div class="grid grid-cols-1">

                <a :href="route('applications.index')">
                    <div
                        class="w-14 h-14 bg-indigo-500 rounded-full text-white cursor-pointer text-6xl font-semibold text-center">
                        <span class="relative bottom-1">&lt;</span></div>
                </a>

                <div class="w-full h-[300px] mt-2 text-white grid grid-cols-2">
                    <div class="bg-gray-200 p-6">
                        <div class="text-black text-3xl font-semibold">{{ application.data.title }}</div>
                        <div class="text-black text-xl">Description: {{ application.data.description }}</div>
                        <div class="text-black text-xl">User: {{ application.data.user_name }}</div>
                        <div class="text-black text-xl"><span class="font-semibold">Date:</span>
                            {{ application.data.date }}
                        </div>
                    </div>
                    <div class="bg-indigo-500 p-6">
                        <div v-for="image in application.data.images">
                            <img class="w-12 h-12" :src="image.url" alt="image">
                        </div>
                    </div>
                </div>
                <div>

                </div>

            </div>

            <div class="h-60 mt-24">
                <div>
                    <textarea v-model="form.reply" class="w-full h-40"/>
                </div>
                <div class="mt-8 grid justify-items-end">
                    <div>
                        <button @click.prevent="send" class="w-48 h-10 bg-indigo-500 text-3xl text-white rounded-2xl">Send</button>
                    </div>
                </div>
            </div>
            <div class="bg-indigo-500 w-full"></div>
        </div>

    </div>
</template>

<script>
import HeaderComponent from "@/Components/HeaderComponent.vue";
import {router} from "@inertiajs/vue3";

export default {
    name: "Show",
    components: {HeaderComponent},

    props: ['application'],

    data() {
        return {
            form: {
                id: this.application.data.id,
                user_email: this.application.data.user.email,
                reply: ""
            }
        }
    },

    methods: {
        send() {
            router.post('/send-reply', this.form)
        }
    }
}
</script>

<style scoped>

</style>

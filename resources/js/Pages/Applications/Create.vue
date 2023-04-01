<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {defineComponent} from "vue";
import Dropzone from "dropzone";
import {router} from "@inertiajs/vue3";
import HeaderComponent from "@/Components/HeaderComponent.vue";

export default defineComponent({
    components: {HeaderComponent, ApplicationLogo},

    props:['userId'],

    data() {
        return {
            form: {
                user_name: '',
                title: '',
                image: '',
                description: '',
                user_id: this.userId,
                dropzone: null
            }
        }
    },

    mounted() {
        this.form.dropzone = new Dropzone(this.$refs.dropzone, {
            url: "someUrl",
            autoProcessQueue: false,
            addRemoveLinks: true
        })
    },

    methods: {
        send() {
            // console.log(this.form.dropzone.getAcceptedFiles());
            console.log(this.form);
            const data = new FormData()
            const files = this.form.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('images[]', file)
                this.form.dropzone.removeFile(file)
            })
            data.append('user_name', this.form.user_name)
            data.append('title', this.form.title)
            data.append('description', this.form.description)
            data.append('user_id', this.form.user_id)

            router.post('/applications', data)
        },

    }
})


</script>

<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid grid-cols-1">

        <HeaderComponent />

        <div class="w-1/2 h-[700px] rounded-2xl mx-auto bg-blue-400 ">
            <div class="w-full h-[700px] rounded-2xl mx-auto bg-white relative top-6 right-6 p-14">
                <div class="text-center relative z-50">
                    <div class="relative right-8"><span class="text-5xl text-medium">Fill the form</span></div>
                    <div class="relative left-8"><span class="text-2xl text-gray-500">All fields are required</span>
                    </div>
                </div>


                <div class="mt-16 grid grid-cols-2 justify-items-center relative z-50">

                    <div class="text-center">
                        <label class="font-medium text-2xl">How can I call you? </label><br>
                        <input v-model="form.user_name" type="text" class="w-96 h-[50px] rounded-xl mt-2">
                    </div>


                    <div class="text-center">
                        <label class="font-medium text-2xl">What's happened? </label><br>
                        <input v-model="form.title" type="text" class="w-96 h-[50px] rounded-xl mt-2">
                    </div>

                    <div class="flex flex-col items-center justify-center w-full mt-16 text-center relative bottom-4">
                        <label class="font-medium text-2xl mb-4">Submit a screenshot/photo<br><span class="text-xl text-gray-600">Click OR Transfer</span> </label><br>

                        <div ref="dropzone" class="w-96 h-36 p-5 rounded-2xl bg-gradient-to-r from-cyan-600 to-blue-500 grid grid-cols-2">
                            <div class="w-36 h-24 rounded-full bg-white">
                                <img
                                    class="w-20 mx-auto relative top-1"
                                    src="../../../../public/UI/photo.svg">
                            </div>
<!---->
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center w-full mt-16">
                        <label class="font-medium text-2xl mb-4">Describe your problem in detail </label><br>
                        <textarea v-model="form.description" class="w-96 h-36 rounded-2xl resize-none"></textarea>
                    </div>


                </div>
                <div class="mt-12 w-full">
                    <button @click.prevent="send"
                            class="bg-red-500 relative left-[52%] text-white rounded-2xl text-3xl font-medium w-96 h-12">
                        Send
                    </button>
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

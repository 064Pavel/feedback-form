<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid justify-items-center items-center">
        <div class="bg-white rounded-2xl w-[450px] h-[650px]">
            <div class="px-12 py-2 w-full h-full">

                <div class="mb-12 grid grid-cols-1 justify-items-start">
                    <div class="text-center mb-4 relative right-4"><a :href="route('homepage')"><span class="text-6xl font-light cursor-pointer text-blue-800">&lt;</span></a></div>
                    <div><span class="text-4xl font-medium">Sign In</span></div>
                </div>

                <div>
                    <label class="font-medium text-2xl">Email: </label>
                    <input v-model="form.email" type="email" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-4">
                    <label class="font-medium text-2xl">Password: </label>
                    <input v-model="form.password" type="password" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-8">
                    <button @click.prevent="submit" class="w-full h-[50px] bg-pink-600 text-3xl text-white rounded-2xl font-medium">Sign In</button>
                </div>

                <div class="inline-flex items-center justify-center w-full mt-6">
                    <hr class="w-64 h-px my-8 bg-black border-0">
                    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
                </div>

                <div class="text-center">
                    <div><span class="text-xl">Want to create an account?</span><br><a :href="route('register')"><span class="text-2xl text-blue-800 font-medium cursor-pointer">Sign Up</span></a></div>
                </div>

            </div>

        </div>
    </div>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid justify-items-center items-center">
        <div class="bg-white rounded-2xl w-[450px] h-[850px]">
            <div class="px-12 py-2 w-full h-full">

                <div class="mb-12 grid grid-cols-1 justify-items-start">
                    <div class="text-center mb-4 relative right-4"><a :href="route('homepage')"><span class="text-6xl font-light cursor-pointer text-blue-800">&lt;</span></a></div>
                    <div><span class="text-4xl font-medium">Sign Up</span></div>
                </div>

                <div>
                    <label class="font-medium text-2xl">Name: </label>
                    <input v-model="form.name" type="text" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-4">
                    <label class="font-medium text-2xl">Email: </label>
                    <input v-model="form.email" type="email" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-4">
                    <label class="font-medium text-2xl">Password: </label>
                    <input v-model="form.password" type="password" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-4">
                    <label class="font-medium text-2xl">Confirm Password: </label>
                    <input v-model="form.password_confirmation" type="password" class="w-full h-[50px] rounded-xl">
                </div>

                <div class="mt-8">
                    <button @click.prevent="submit" class="w-full h-[50px] bg-pink-600 text-3xl text-white rounded-2xl font-medium">Sign Up</button>
                </div>

                <div class="inline-flex items-center justify-center w-full mt-6">
                    <hr class="w-64 h-px my-8 bg-black border-0">
                    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
                </div>

                <div class="text-center">
                    <div><span class="text-xl">Already a user?</span><br><a :href="route('login')"><span class="text-2xl text-blue-800 font-medium cursor-pointer">Sign In</span></a></div>
                </div>

            </div>

        </div>
    </div>
</template>

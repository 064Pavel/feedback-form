<template>
    <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-screen grid items-center">
        <div class="bg-white mx-auto w-[900px] h-[600px] p-12">
            <div class="w-16 h-16 rounded-full text-white text-center bg-gradient-to-r from-cyan-500 to-blue-500 text-6xl "><a :href="route('applications.create')">&lt;</a></div>
            <div class="text-black text-5xl mt-16">
                Application successfully created. <br> The answer will come to your mail within a few hours.
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ApplicationSuccessfullyCreated"
}
</script>

<style scoped>

</style>

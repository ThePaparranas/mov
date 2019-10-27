<template>
    <div class="flex flex-row bg-red-1000 p-12 text-white font-bold justify-center items-center mt-8">
        <div class="">
            <span class="px-2">OBTÉM PREMIUM PARA UMA EXPERIÊNCIA SEM PÚBLICIDADES!</span>
        </div>

        <div class="px-2">
            <router-link to="/premium">
                <span class="rounded bg-gray-300 px-6 py-2 text-gray-700 shadow">2,99€/MÊS</span>
            </router-link>
        </div>

        <div class="px-2">
            <router-link to="/premium">
                <span class="rounded bg-green-600 px-6 py-2 shadow text-white">29,99€/ANO</span>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Premium'
    }
</script>

<style>

</style>

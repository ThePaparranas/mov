<template>
    <footer class="bg-gray-800">
        <div class="flex row w-full text-white p-12">
            <div class="w-full flex row justify-center">
                <ul class="px-8">
                    <li class="font-bold">Navegação</li>
                    <li><router-link to="#">Filmes</router-link></li>
                    <li><router-link to="#">Séries</router-link></li>
                    <li><router-link to="#">Animes</router-link></li>
                </ul>

                <ul class="px-8">
                    <li class="font-bold">Conta</li>
                    <li><router-link to="#">Perfil</router-link></li>
                    <li><router-link to="#">Cronologia</router-link></li>
                    <li><router-link to="#">Definições</router-link></li>
                </ul>

                <ul class="px-8">
                    <li class="font-bold">Legal</li>
                    <li><router-link to="#">Informação Legal</router-link></li>
                    <li><router-link to="#">Termos de Uso</router-link></li>
                    <li><router-link to="#">Contacto</router-link></li>
                </ul>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'Footer'
    }
</script>

<style>

</style>

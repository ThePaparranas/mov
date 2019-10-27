<template>
    <nav :class="navClass">
        <div class="container">
            <router-link to="/home">
                Home
            </router-link>

            <router-link to="/filmes">
                Filmes
            </router-link>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'TopNav',
        computed: {
            navClass () {
                let current = this.$route.meta.menuClass
                return current + ' bg-white h-12'
            }
        }
    }
</script>

<style>

</style>

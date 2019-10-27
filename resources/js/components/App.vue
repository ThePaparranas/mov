<template>
    <main>
        <TopNav/>

        <section :class="sectionClass">
            <router-view v-cloak/>
        </section>

        <Premium/>

        <Footer/>
    </main>
</template>

<script>
    import TopNav from './Nav'
    import Premium from './Premium'
    import Footer from './Footer'

    export default {
        name: 'App',

        computed: {
            sectionClass () {
                return this.$route.meta.name
            }
        },

        components: {
            TopNav,
            Premium,
            Footer
        }
    }
</script>

<style>

</style>

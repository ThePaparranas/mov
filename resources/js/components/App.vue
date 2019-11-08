<template>
    <main>
        <TopNav/>

        <section :class="routeName">
            <router-view v-cloak/>
        </section>

        <Premium v-if="!user.isAdmin"/>

        <Footer v-if="!user.isAdmin"/>
    </main>
</template>

<script>
  import TopNav from './Nav'
  import Footer from './Footer'
  import Premium from './Premium'

  import { appMethods, authMethods, localSettingsComputed } from '../store/storetools'

  export default {
    beforeMount () {
      let appSettings = {
        appName: this.appName,
        baseDir: this.baseDir
      }

      this.setUser(this.user) // authMethods
      this.setApp(appSettings) // appMethods
    },

    computed: {
      routeName () {
        return this.$route.meta.name
      }
    },

    components: {
      TopNav,
      Premium,
      Footer
    },

    methods: {
      ...appMethods,
      ...authMethods
    },

    name: 'App',

    props: {
      appName: {
        required: true,
        type: String
      },
      baseDir: {
        required: true,
        type: String
      },
      user: {
        required: true,
        type: Object
      }
    }
  }
</script>

<style>

</style>

<template>
  <main>
    <TopNav />

    <section :class="routeName">
      <router-view v-cloak />
    </section>

    <Premium v-if="!user.isAdmin" />

    <Footer v-if="!user.isAdmin" />
  </main>
</template>

<script>
import TopNav from './Nav'
import Footer from './Footer'
import Premium from './Premium'

import { appMethods, authMethods/* , localSettingsComputed */ } from '../store/storetools'

export default {
  name: 'App',

  components: {
    TopNav,
    Premium,
    Footer
  },

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
  },

  computed: {
    routeName () {
      return this.$route.meta.name
    }
  },

  beforeMount () {
    const appSettings = {
      appName: this.appName,
      baseDir: this.baseDir
    }

    this.setUser(this.user) // authMethods
    this.setApp(appSettings) // appMethods
  },

  methods: {
    ...appMethods,
    ...authMethods
  }
}
</script>

<template>
  <main>
    <meta-info />

    <top-nav />

    <section :class="sectionClass">
      <admin-nav v-if="user.isAdmin && isAside" />

      <router-view
        v-cloak
        :class="routerViewClass"
      />
    </section>

    <template v-if="!user.isAdmin">
      <premium />
      <phooter />
    </template>
  </main>
</template>

<script>
import topNav from '../../components/Nav'
import phooter from '../../components/Footer'
import metaInfo from '../../components/_head'
import premium from '../../components/Premium'

import adminNav from '../../components/AdminSidebar'

import { appMethods, authMethods/* , localSettingsComputed */ } from '../model/storetools'

export default {
  name: 'App',

  components: {
    adminNav,
    metaInfo,
    topNav,
    premium,
    phooter
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
    },

    isAside () {
      return this.$route.meta.isAside
    },

    routerViewClass () {
      return this.isAside ? 'py-1 px-2' : ''
    },

    sectionClass () {
      return this.routeName + ' flex min-h-screen'
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

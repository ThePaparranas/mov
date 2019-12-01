<template>
  <nav class="flex items-center justify-between flex-wrap text-red-1000 py-2 px-4">
    <div class="block sm:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white"
        @click="toggle"
      >
        <svg
          class="fill-current h-3 w-3"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        ><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
      </button>
    </div>

    <div
      :class="open ? 'block': 'hidden'"
      class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
    >
      <div class="sm:flex-grow">
        <router-link
          v-for="route in userRoutes"
          :key="route.name"
          class="no-underline block mt-4 sm:inline-block sm:mt-0 hover:text-red-500 mr-4"
          :to="route.path"
        >
          {{ route.meta.name }}
        </router-link>

        <template v-if="userIsAdmin">
          <router-link
            v-for="route in adminRoutes"
            :key="route.name"
            class="no-underline block mt-4 sm:inline-block sm:mt-0 hover:text-red-500 mr-4"
            :to="route.path"
          >
            {{ route.meta.name }}
          </router-link>
        </template>
      </div>

      <div class="flex lg:items-stretch lg:flex-no-shrink lg:flex-grow">
        <div class="flex lg:items-stretch lg:justify-end ml-auto">
          <me class="bg-fade text-gray-800 flex-no-grow flex-no-shrink relative py-2 px-4 no-underline flex items-center hover:text-red-1000" />

          <logout class="bg-fade text-gray-800 flex-no-grow flex-no-shrink relative py-2 px-4 no-underline flex items-center hover:text-red-1000" />
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import me from './Me'
import routes from '../routes'
import logout from './Logout.vue'
import filter from 'lodash/filter'

import { userData } from '../store/storetools'

export default {
  name: 'TopNav',

  components: {
    logout,
    me
  },

  data () {
    return {
      open: false
    }
  },

  computed: {
    ...userData,

    userRoutes () {
      return filter(routes, function (o) {
        return o.meta.isNav && o.meta.access === 'user'
      })
    },

    adminRoutes () {
      return filter(routes, function (o) {
        return o.meta.isNav && o.meta.access === 'admin'
      })
    },

    navClass () {
      return this.$route.meta.menuClass + ' w-full fixed z-50 select-none bg-white flex items-center justify-between flex-wrap border-b-4 border-red-1000'
    }
  },

  methods: {
    toggle () {
      this.open = !this.open
    }
  }
}
</script>

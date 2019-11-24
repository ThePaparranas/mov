<template>
  <nav class="flex items-center justify-between flex-wrap text-red-1000 py-2">
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
      <div class="text-sm sm:flex-grow">
        <a
          href="#responsive-header"
          class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white mr-4"
        >
          Docs
        </a>
        <a
          href="#responsive-header"
          class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white mr-4"
        >
          Examples
        </a>
        <a
          href="#responsive-header"
          class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white"
        >
          Blog
        </a>
      </div>
      <div>
        <a
          href="#"
          class="no-underline inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 sm:mt-0"
        >Download</a>
      </div>
    </div>
  </nav>
<!--   <nav
    :class="navClass"
  >
    <div class="text-red-1000 flex items-center flex-no-shrink">
      <div class="block md:hidden">
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
        class="w-full flex-grow md:flex md:items-center md:w-auto"
      >
        <div class="text-sm md:flex-grow">
          <router-link
            v-for="route in userRoutes"
            :key="route.name"
            :class="mainMenuClass"
            :to="route.path"
          >
            {{ route.meta.name }}
          </router-link>
        </div>
        <li
          class="self-center"
        >
          <template v-if="user.isAdmin">
            <router-link
              v-for="route in adminRoutes"
              :key="route.name"
              :class="mainMenuClass"
              :to="route.path"
            >
              {{ route.meta.name }}
            </router-link>
          </template>
        </li>
      </div>
    </div>

    <div class="lg:flex lg:items-stretch lg:flex-no-shrink lg:flex-grow">
      <div class="lg:flex lg:items-stretch lg:justify-end ml-auto">
        <me :class="userMenuClass" />

        <logout :class="userMenuClass" />
      </div>
    </div>
  </nav> -->
</template>

<script>
import me from './Me'
import routes from '../routes'
import logout from './Logout.vue'

import { filter } from 'lodash'
import { userComputed } from '../store/storetools'

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
    ...userComputed,

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
      const current = this.$route.meta.menuClass

      return current + ' w-full fixed z-50 select-none bg-white flex items-center justify-between flex-wrap border-b-4 border-red-1000'
    },

    mainMenuClass () {
      return 'bg-fade text-gray-800 flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center bg-white hover:text-red-1000'
    },

    userMenuClass () {
      return 'bg-fade text-gray-800 flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center bg-white hover:text-red-1000'
    }
  },

  methods: {
    toggle () {
      this.open = !this.open
    }
  }
}
</script>

<style lang="sass" scoped>
    .router-link-exact-active
        color: #e3342f
        font-weight: bold
</style>

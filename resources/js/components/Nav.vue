<template>
  <nav :class="navClass">
    <div class="flex flex-no-shrink items-stretch h-12 text-teal-100">
      <template>
        <router-link
          v-for="route in userRoutes"
          :key="route.path"
          :class="mainMenuClass"
          :to="route.path"
        >
          {{ route.meta.name }}
        </router-link>
      </template>

      <template v-if="user.isAdmin">
        <router-link
          v-for="route in adminRoutes"
          :key="route.path"
          :class="mainMenuClass"
          :to="route.path"
        >
          {{ route.meta.name }}
        </router-link>
      </template>

      <button class="block lg:hidden cursor-pointer ml-auto relative w-12 h-12 p-4">
        <svg
          width="20"
          height="20"
          class="fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
        ><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
      </button>
    </div>

    <div class="lg:flex lg:items-stretch lg:flex-no-shrink lg:flex-grow">
      <div class="lg:flex lg:items-stretch lg:justify-end ml-auto">
        <me :class="userMenuClass" />

        <logout :class="userMenuClass" />
      </div>
    </div>
  </nav>
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

      return current + ' relative select-none bg-teal-700 lg:flex lg:items-stretch w-full'
    },

    mainMenuClass () {
      return 'bg-fade flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-teal-600'
    },

    userMenuClass () {
      return 'bg-fade flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white no-underline flex items-center hover:bg-teal-600'
    }
  }
}
</script>

<style lang="sass" scoped>

</style>

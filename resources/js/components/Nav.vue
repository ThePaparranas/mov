<template>
    <nav :class="navClass" class="fixed">
        <div class="flex flex-no-shrink items-stretch h-12 text-red-1000">
            <router-link :class="mainMenuClass"
                         v-for="route in userRoutes"
                         :key="Math.random()"
                         :to="route.path">{{ route.meta.name}}</router-link>
            <router-link :class="mainMenuClass"
                         v-for="route in adminRoutes"
                         :key="Math.random()"
                         :to="route.path"
                         v-if="user.isAdmin">{{ route.meta.name}}</router-link>
<!--
            <router-link :class="mainMenuClass" to="/admin" v-if="user.isAdmin">Admin</router-link>

            <router-link :class="mainMenuClass" to="/home">Home</router-link>

            <router-link :class="mainMenuClass" to="/filmes">Filmes</router-link>
-->

            <button class="block lg:hidden cursor-pointer ml-auto relative w-12 h-12 p-4">
                <svg width="20"
                     height="20"
                     class="fill-current"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>

        <div class="lg:flex lg:items-stretch lg:flex-no-shrink lg:flex-grow">
            <div class="lg:flex lg:items-stretch lg:justify-end ml-auto">
                <me :class="userMenuClass"/>

                <logout :class="userMenuClass"/>
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
        return filter(routes, function(o){
          return o.meta.isNav && o.meta.access === 'admin'
        })
      },

      navClass () {
        let current = this.$route.meta.menuClass

        return current + 'fixed select-none bg-white lg:flex lg:items-stretch w-full border-b-4 border-red-1000'
      },

      mainMenuClass () {
        return 'bg-fade text-gray-800 hover:text-white flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center hover:bg-red-1000'
      },

      userMenuClass () {
        return 'bg-fade text-gray-800 hover:text-white flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal no-underline flex items-center hover:bg-red-1000'
      }
    },

    name: 'TopNav'
  }
</script>

<style lang="sass" scoped>

</style>

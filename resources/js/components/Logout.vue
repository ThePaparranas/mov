<template>
  <div class="logout-box hover:bg-teal-700">
    <a
      class="logout"
      title="Logout"
      href="#"
      @click.prevent="logout()"
    ><span class="d-none d-md-block text-lg"><standBy title="Logout"/></span
    ><span class="d-block d-md-none p51">Logout</span></a>
  </div>
</template>

<script>
import authApi from '../services/api/authApi'
import standBy from 'vue-material-design-icons/PowerStandby'

import { appHome } from '../services/api/Api'
import { authMethods } from '../store/storetools'
import { alertConfirm } from '../services/notifications'

export default {
  name: 'Logout',

  components: {
    standBy
  },

  methods: {
    ...authMethods,

    logout () {
      alertConfirm('Terminar a sessão?')
        .then(go => {
          if (go) {
            authApi.logout()
              .then(() => {
                this.unsetUser() // authMethods
                window.location.href = '/login'
              })
          }
        })
    }
  }
}
</script>

<style lang="sass" scoped>
  .logout-box
    display: flex
    align-items: center
  .p51
    padding: 0.5rem 0
  .logout
    color: rgba(255, 255, 255, 0.5)
    display: flex
    align-items: center
    transition: all .3s ease
    &:hover
      color: red
      text-decoration: none
</style>

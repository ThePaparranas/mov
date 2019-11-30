<template>
  <div class="logout-box">
    <a
      class="logout"
      title="Logout"
      href="#"
      @click.prevent="logout()"
    ><span class="d-none d-md-block"><standBy title="Logout" /></span></a>
  </div>
</template>

<script>
import authApi from '../services/api/authApi'
import standBy from 'vue-material-design-icons/PowerStandby'

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
    &:hover
      color: #000
  .p51
    padding: 0.5rem 0
  .logout
    display: flex
    align-items: center
    transition: all .3s ease
    &:hover
      text-decoration: none
</style>

<template>
  <div>
    <admin-panel v-if="userIsAdmin" />

    <div v-else>
      <not-found />
    </div>
  </div>
</template>

<script>
import { userData } from '../store/storetools'

const notFound = () => import('../components/error404')
const adminPanel = () => import('../components/admin-panel')

export default {
  name: 'Admin',

  components: {
    adminPanel,
    notFound
  },

  computed: {
      ...userData
  }
}
</script>

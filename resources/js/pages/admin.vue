<template>
    <div>
        <div v-if="$store.state.user.isAdmin">
            Admin
        </div>

        <div v-else>
            <not-found/>
        </div>
    </div>
</template>

<script>
  import notFound from '../components/error404'

  export default {
    components: {
      notFound
    },

    name: 'Admin'
  }
</script>

<style lang="sass" scoped>

</style>

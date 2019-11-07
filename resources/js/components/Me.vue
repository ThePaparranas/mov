<template>
    <div>
        <span v-html="userName"/>
    </div>
</template>

<script>
  export default {
    computed: {
      userName () {
        return this.$store.state.user.name
      }
    },

    name: 'Me'
  }
</script>

<style lang="sass" scoped>

</style>

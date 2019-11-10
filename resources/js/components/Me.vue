<template>
  <div>
    <span>{{ userName }}</span>
  </div>
</template>

<script>
export default {

  name: 'Me',
  computed: {
    userName () {
      return this.$store.state.user.name
    }
  }
}
</script>

<style lang="sass" scoped>

</style>

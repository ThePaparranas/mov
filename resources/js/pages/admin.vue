<template>
    <div>
        <div v-if="$store.state.user.isAdmin">
            Admin
        </div>

        <div v-else>
            Nope
        </div>
    </div>
</template>

<script>
  export default {
    name: 'Admin'
  }
</script>

<style lang="sass" scoped>

</style>

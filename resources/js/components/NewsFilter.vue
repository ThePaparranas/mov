<template>
    <div class="flex flex-col w-1/4 bg-white rounded p-4 m-2 flex-no-grow">
        <span class="text-xl font-bold">Categorias</span>
        <ul class="w-full">
            <li v-for="cat in cats" :key="cat.id">{{ cat.name }}</li>
        </ul>
    </div>
</template>

<script>
  export default {
    name: 'ArticlesFilter',

    props: {
      cats: {
        type: Array,
        required: true
      }
    }
  }
</script>

<style lang="sass" scoped>

</style>

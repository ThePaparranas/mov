<template>
    <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
        <span class="text-xl font-bold">Notícias > {{ filterToTxt }} ({{ filteredItems.length}})</span>

        <div class="movie-card flex flex-row w-full p-2 bg-gray-200 rounded my-2"
             v-for="item in filteredItems"
             :key="item.id">
            <div class="w-2/12 flex flex-col">
                <p class="text-center mb-1">{{ item.type.name }}</p>
                <img :src="item.image" :alt="item.title" class="rounded">
            </div>

            <div class="w-8/12 px-2 flex flex-col">
                <router-link v-if="item.slug"
                             :to="{ name: 'NewsArticle', params: { item, slug: item.slug } }"
                             class="w-full text-lg font-bold inline-block text-red">{{ item.title }}</router-link>
                <div class="flex flex-1 flex-row items-end content-between justify-between">
                    <p class="flex flex-row items-center justify-around">
                        <span class="">{{ item.author.name }}</span>
                        <img class="w-8 h-8 p-1 rounded-full"
                             :src="item.author.gravatar"
                             :alt="item.author.name">
                        <span class="">{{ item.created_at }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import { filter, indexOf } from 'lodash'

  export default {
    data () {
      return {
        filtered: '',
        count: 0
      }
    },

    computed: {
      filterToTxt () {
        if (this.filtered === '') {
          return ('Todas')
        }

        return this.filters.join(' + ')
      },

      filteredItems () {
        if (! this.filters.length) {
          return this.items
        }

        return filter(
          this.items, o => indexOf( this.filterIdxs, o['article_type'] ) !== -1
        )
      }
    },

    watch: {
      filters () {
        this.filtered = this.filters.join(' + ')
      }
    },

    props: {
      filters: {
        type: Array,
        required: true
      },
      filterIdxs: {
        type: Array,
        required: true
      },
      items: {
        type: Array,
        required: true
      }
    },

    name: 'NewsList'
  }
</script>

<style lang="sass" scoped>

</style>

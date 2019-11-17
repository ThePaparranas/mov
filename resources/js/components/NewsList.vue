<template>
  <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2 shadow-md">
    <span class="text-xl font-bold">Notícias > {{ filterToTxt }} ({{ filteredItems.length }})</span>

    <div
      v-for="item in filteredItems"
      :key="item.id"
      class="movie-card flex flex-row w-full p-2 hover:bg-gray-200 rounded my-2 shadow-md"
    >
      <div class="w-2/12 flex flex-col">
        <img
          :src="item.image"
          :alt="item.title"
          class="rounded"
        >
      </div>

      <div class="w-8/12 px-2 flex flex-col">
        <div class="flex flex-row">
          <div class="">
            <span class="bg-red-1000 px-3 py-1 inline-block text-white rounded self-start">{{ item.type.name }}</span>
          </div>

          <router-link
            v-if="item.slug"
            :to="{ name: 'NewsArticle', params: { item, slug: item.slug } }"
            class="w-full ml-2 text-lg font-bold inline-block text-gray-800 hover:text-red-1000"
          >
            {{ item.title }}
          </router-link>
        </div>

        <div class="flex flex-1 flex-row items-end content-between justify-between">
          <p class="flex flex-row items-center justify-around text-xs">
            <img
              class="w-8 h-8 mx-1 mt-1 rounded-full"
              :src="item.author.gravatar"
              :alt="item.author.name"
            >

            <span class="">{{ item.author.name }}</span>

            <span class="mx-2">a</span>

            <span class="text-xs">{{ item.created_at }}</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { filter, indexOf } from 'lodash'

export default {
  name: 'NewsList',

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
      if (!this.filters.length) {
        return this.items
      }

      return filter(
        this.items, o => indexOf(this.filterIdxs, o.article_type) !== -1
      )
    }
  },

  watch: {
    filters () {
      this.filtered = this.filters.join(' + ')
    }
  }
}
</script>

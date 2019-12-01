<template>
  <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2 shadow-md">
    <span class="text-xl font-bold">Filmes > {{ filterToTxt }} ({{ filteredItems.length }})</span>

    <div
      v-for="item in filteredItems"
      :key="item.id"
    >
      <movie :movie="item" />
    </div>
  </div>
</template>

<script>
import Movie from './Movie'
import some from 'lodash/some'
import filter from 'lodash/filter'
import includes from 'lodash/includes'

export default {
  name: 'FilmesCards',

  components: {
    Movie
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
    movies: {
      required: true,
      type: Array
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
        return ('Todos')
      }

      return this.filters.join(' + ')
    },

    filteredItems () {
      if (!this.filters.length) {
        return this.movies
      }

      return filter(
        this.movies, o => some(this.filters, (el) => includes(o.details.Genre, el))
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

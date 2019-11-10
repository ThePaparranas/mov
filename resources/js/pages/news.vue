<template>
  <div class="p-6">
    <div class="mt-16 w-full flex flex-row">
      <news-cats
        :cats="categories"
        @change="changeFilter($event)"
      />

      <news-list
        :filters="filters"
        :filter-idxs="filterIdxs"
        :items="news"
      />
    </div>
  </div>
</template>

<script>
import newsApi from '../services/api/newsApi'
import newsList from '../components/NewsList'
import newsCats from '../components/NewsFilter'

export default {
  name: 'News',

  components: {
    newsList,
    newsCats
  },

  data () {
    return {
      categories: [],
      news: [],
      filters: [],
      filterIdxs: []
    }
  },

  computed: {

  },

  beforeMount () {
    this.fetchData()
  },

  methods: {
    changeFilter (evt) {
      this.filters = evt[0]
      this.filterIdxs = evt[1]
    },

    fetchData () {
      newsApi.categories().then((r) => {
        this.categories = r
      })

      newsApi.index().then((r) => {
        this.news = r
      })
    }
  }
}
</script>

<style lang="sass" scoped>

</style>

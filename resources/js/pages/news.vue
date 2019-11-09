<template>
    <div class="p-6">
        <div class="mt-16 w-full flex flex-row">
            <news-cats :cats="categories" v-on:change="changeFilter($event)"/>

            <news-list :filters="filters" :filterIdxs="filterIdxs" :items="news"/>
        </div>
    </div>
</template>

<script>
  import newsApi from '../services/api/newsApi'
  import newsList from '../components/NewsList'
  import newsCats from '../components/NewsFilter'

  export default {
    components: {
      newsList,
      newsCats
    },

    beforeMount () {
      this.fetchData()
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
    },

    name: 'news'
  }
</script>

<style lang="sass" scoped>

</style>

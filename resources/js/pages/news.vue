<template>
    <div>
        <div class="cover absolute flex w-full z-40 mx-auto">
            <p class="w-full text-3xl text-white opacity-60 self-center text-center">Rick and Morty Season 4</p>
        </div>

        <div class="w-full self-center bg-gray-600">
            <img src="img/perfil/cover/ThePaparranas.jpg" class="cover w-full object-cover object-bottom opacity-50">
        </div>

        <div class="p-4">
            <div class="w-full flex flex-row">
                <news-cats :cats="categories" v-on:change="changeFilter($event)"/>

                <news-list :filters="filters" :filterIdxs="filterIdxs" :items="news"/>
            </div>
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

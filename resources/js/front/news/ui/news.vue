<template>
  <div>
    <hero-img caption="Notícias" />

    <div class="w-full flex flex-row p-4">
      <news-cats
        :cats="categories"
        title="Categorias"
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
import newsCats from '../../../components/Filter'
import heroImg from '../../../components/Hero-img'
import newsApi from '../../../app/connector/api/newsApi'
import newsList from '../../../components/NewsList'

export default {
  name: 'News',

  components: {
    newsList,
    newsCats,
    heroImg
  },

  data () {
    return {
      categories: [],
      news: [],
      filters: [],
      filterIdxs: []
    }
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

<template>
    <div class="p-6">
        <div class="mt-16 w-full flex flex-row">
            <div v-if="item">
                <p>passed item</p>
                <pre>{{ item }}</pre>
            </div>

            <div v-else-if="defaultArticle">
                <p>fetched</p>
                <pre>{{ defaultArticle }}</pre>
            </div>

            <div v-else>404 - Not Found</div>
        </div>
    </div>
</template>

<script>
    import newsApi from '../services/api/newsApi'
    import newsList from '../components/NewsList'
    import newsCats from '../components/NewsFilter'


  export default {
    mounted () {
      if (this.item === undefined) {
        this.fetchData()
      }
    },

    data () {
      return {
        defaultArticle: {}
      }
    },

    props: {
      item: {
        type: Object,
        required: false
      }
    },

    methods: {
      fetchData () {
        let slug = this.$route.params.slug

        if (slug !== undefined) {
          newsApi.getBySlug(slug)
            .then((r) => {
              this.defaultArticle = r
            })
        }
      }
    },

    name: 'single-news'
  }
</script>

<style lang="sass" scoped>

</style>

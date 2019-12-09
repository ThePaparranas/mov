<script>
export default {
  name: 'MetaInfo',

  computed: {
    currentRoute () {
      return this.$route.meta.name
    },

    currentDescription () {
      return this.$route.meta.description
    }
  },

  watch: {
    currentRoute () {
      this.setMeta()
    }
  },

  beforeMount () {
    setTimeout(() => {
      this.setMeta()
    }, 100)
  },

  methods: {
    setMeta () {
      this.setTitle()
      this.setDescription()
    },

    setDescription () {
      document.getElementsByTagName('meta').description.content = this.currentDescription
    },

    setTitle () {
      window.document.title = this.currentRoute
    }
  },

  render: () => null
}
</script>

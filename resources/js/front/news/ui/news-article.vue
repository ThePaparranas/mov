<template>
  <div>
    <hero-img />

    <div class="w-full flex flex-row p-4">
      <div class="flex flex-col w-full bg-white rounded p-4 m-2 shadow-md">
        <div class="w-full self-center bg-gray-600">
          <img
            src="/img/perfil/cover/ThePaparranas.jpg"
            class="cover w-full object-cover object-bottom opacity-50"
          >
        </div>

        <div class="flex flex-row mt-4 w-full">
          <div class="justify-start w-1/2">
            <span class="bg-red-1000 px-3 py-1 inline-block text-white rounded self-start">{{ item.type.name }}</span>
          </div>
          <div class="justify-end w-1/2">
            <span class="text-xl text-gray-600 float-right">{{ item.created_at }}</span>
          </div>
        </div>

        <hr>

        <router-link
          to="#"
          class="text-3xl"
        >
          {{ item.title }}
        </router-link>

        <p class="mt-4">
          {{ item.content }}
        </p>

        <hr>

        <div class="flex flex-row">
          <img
            class="w-20 h-20 rounded-full"
            :src="item.author.gravatar"
            :alt="item.author.name"
          >

          <div class="flex flex-col ml-4">
            <router-link
              to="#"
              class="text-xl"
            >
              {{ item.author.name }}
            </router-link>

            <p class="text-gray-600 self-end">
              Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import heroImg from '../../../components/Hero-img'
import newsApi from '../../../app/connector/api/newsApi'
// import newsList from '../components/NewsList'
// import newsCats from '../components/NewsFilter'

export default {
  name: 'SingleNews',

  components: {
    // newsList,
    // newsCats,
    heroImg
  },

  props: {
    // eslint-disable-next-line vue/require-default-prop
    item: {
      type: Object,
      required: false
    }
  },

  data () {
    return {
      defaultArticle: {}
    }
  },

  mounted () {
    if (this.item === undefined) {
      this.fetchData()
    }
  },

  methods: {
    fetchData () {
      const slug = this.$route.params.slug

      if (slug !== undefined) {
        newsApi.getBySlug(slug)
          .then((r) => {
            this.defaultArticle = r
          })
      }
    }
  }
}
</script>

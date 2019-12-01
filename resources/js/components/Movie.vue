<template>
  <article v-if="movie">
    <div class="movie-card flex flex-row w-full p-2 bg-gray-200 rounded my-2">
      <div class="w-2/12">
        <router-link :to="`/filmes/${slug}`">
          <img
            :src="movie.details.Poster"
            class="rounded"
          >
        </router-link>
      </div>

      <div class="w-10/12 px-2">
        <p class="">
          <span class="w-full text-2xl font-bold inline-block">
            <router-link
              :to="`/filmes/${slug}`"
              :class="linkClass"
            >
              {{ movie.details.Title }} ({{ movie.details.Year }})
            </router-link>

            <button
              class="float-right text-teal-500 border-teal-500 rounded-full bg-white flex items-center justify-center"
              @click="modalShow = !modalShow"
            ><inf title="Info" /></button>
          </span>
        </p>

        <p>{{ movie.details.Genre }} <span class="text-gray-600">&#8226; {{ movie.details.Runtime }}</span></p>

        <p><span class="font-bold">Realização: </span>{{ movie.details.Director }}</p>

        <p><span class="font-bold">Elenco: </span>{{ movie.details.Actors }}</p>

        <p><span class="font-bold">Sinopse: </span>{{ movie.details.Plot }}</p>
      </div>
    </div>

    <b-modal
      v-model="modalShow"
      ok-only
      :title="movie.details.Title"
    >
      <div
        v-if="movie.details"
        class="my-4"
      >
        <p
          v-for="(value, index) in movie.details"
          :key="index"
        >
          <span
            v-if="!excludedDetails.includes(index)"
            class="font-bold"
          >{{ capital(index) }}: <span class="font-normal">{{ value }}</span></span>

          <span
            v-if="serializedDetails.includes(index)"
            class="font-bold"
          >{{ capital(index) }}: <span class="font-normal">{{ value }}</span></span>
        </p>
      </div>
    </b-modal>
  </article>
</template>

<script>
import kebabCase from 'lodash/snakeCase'
import startCase from 'lodash/startCase'
import inf from 'vue-material-design-icons/InformationVariant'

export default {
  name: 'FilmeCard',

  components: {
    inf
  },

  props: {
    movie: {
      required: true,
      type: Object
    }
  },

  data () {
    return {
      modalShow: false,
      excludedDetails: [
        'id',
        'movie_id',
        'Poster',
        'Ratings',
        'Response',
        'created_at',
        'updated_at'
      ],
      serializedDetails: [
        'Ratings'
      ]
    }
  },

  computed: {
    linkClass () {
      return 'text-red-1000' + (this.$store.state.working ? ' disabled' : '')
    },
    slug () {
      return kebabCase(this.movie.details.Title) + '-' + this.movie.details.Year
    }
  },

  methods: {
    capital (str) {
      return startCase(str)
    },

    unSerial (str) {
      return unserialize('str')
    }
  }
}
</script>

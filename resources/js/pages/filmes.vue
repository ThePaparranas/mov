<template>
  <div>
    <hero-img caption="Bem-vindo!" />

    <div class="w-full flex flex-row p-4">
      <genres-filter
        :cats="genres"
        title="Géneros"
        @change="changeFilter($event)"
      />

      <Movies
        :filters="filters"
        :filter-idxs="filterIdxs"
        :movies="movies"
      />
    </div>
  </div>
</template>

<script>
import Movies from '../components/Movies'
import heroImg from '../components/Hero-img'
import genresFilter from '../components/Filter'
import moviesApi from '../services/api/moviesApi'

export default {
  name: 'Filmes',

  components: {
    genresFilter,
    Movies,
    heroImg
  },

  data () {
    return {
      filters: [],
      filterIdxs: [],
      genres: [],
      movies: []
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
      moviesApi.index()
        .then((r) => {
          this.movies = r
        })

      moviesApi.genres()
        .then((r) => {
          this.genres = r
        })
    }
  }
}
</script>

<template>
  <div>
    <hero-img caption="Bem-vindo!" />

    <div class="w-full flex flex-row p-4">
      <genres-filter
        :cats="$store.state.genres"
        title="Géneros"
        @change="changeFilter($event)"
      />

      <Movies
        :filters="filters"
        :filter-idxs="filterIdxs"
        :movies="$store.state.movies"
      />
    </div>
  </div>
</template>

<script>
import Movies from '../../../components/Movies'
import heroImg from '../../../components/Hero-img'
import genresFilter from '../../../components/Filter'

import { mapActions } from 'vuex/'

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
      filterIdxs: []
    }
  },

  beforeMount () {
    this.setMovies()
    this.setGenres()
  },

  methods: {
    ...mapActions(['setMovies', 'setGenres']),

    changeFilter (evt) {
      this.filters = evt[0]
      this.filterIdxs = evt[1]
    }
  }
}
</script>

<template>
  <section class="movies">
    <div
      v-for="movie in movies"
      :key="movie.id"
    >
      <movie :movie="movie" />
    </div>
  </section>
</template>

<script>
import Movie from './Movie'

export default {
  name: 'FilmesCards',

  components: {
    Movie
  },

  props: {
    movies: {
      required: true,
      type: Array
    }
  }
}
</script>

<style scoped>

</style>

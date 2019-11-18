<template>
  <div>
    <hero-img caption="Bem-vindo!" />

    <div class="w-full flex flex-row p-4">
      <SidebarPagin />

      <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2 shadow-md">
        <span class="text-xl font-bold">Filmes > Todos</span>

        <Movies :movies="movies" />
      </div>
    </div>
  </div>
</template>

<script>
import Movies from '../components/Movies'
import heroImg from '../components/Hero-img'
import SidebarPagin from '../components/SidebarPagin'
import moviesApi from '../services/api/moviesApi'

export default {
  name: 'Filmes',

  components: {
    SidebarPagin,
    Movies,
    heroImg
  },

  data () {
    return {
      movies: []
    }
  },

  beforeMount () {
    this.fetchData()
  },

  methods: {
    fetchData () {
      moviesApi.index()
        .then((r) => {
          this.movies = r
        })
    }
  }
}
</script>

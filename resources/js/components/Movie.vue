<template>
  <article v-if="movie">
    <div class="movie-card flex flex-row w-full p-2 bg-gray-200 rounded my-2">
      <div class="w-2/12">
        <router-link to="/filme">
          <img
            :src="movie.details.Poster"
            class="rounded"
          >
        </router-link>
      </div>

      <div class="w-8/12 px-2">
        <p class="">
          <span class="w-full text-2xl font-bold inline-block">
            <router-link
              to="/filme"
              class="red-link"
            >
              {{ movie.details.Title }} ({{ movie.details.Year }})
            </router-link>
          </span>
        </p>

        <p>{{ movie.details.Genre }} <span class="text-gray-600">&#8226; {{ movie.details.Runtime }}</span></p>

        <p><span class="font-bold">Realização: </span>{{ movie.details.Director }}</p>

        <p><span class="font-bold">Elenco: </span>{{ movie.details.Actors }}</p>

        <p><span class="font-bold">Sinopse: </span>{{ movie.details.Plot }}</p>
      </div>
    </div>
  </article>
</template>

<script>
export default {
  name: 'FilmeCard',

  props: {
    movie: {
      required: true,
      type: Object
    }
  }
}
</script>

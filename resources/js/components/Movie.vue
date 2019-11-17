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
              {{ movie.details.Title }}
            </router-link>
          </span>
        </p>

        <p>{{ movie.details.Genre }}</p>

        <p
          v-for="job in movie.crew"
          :key="job.name"
          class=""
        >
          <span class="font-bold">
            Realizadores:
          </span>
          <span
            v-for="name in job.directors"
            :key="name"
          >{{ name }}</span>
        </p>

        <p class="">
          <span>
            Elenco: <span
              v-for="actor in movie.cast"
              :key="actor"
              class="font-bold"
            >
              {{ actor }},
            </span>
          </span>
        </p>

        <p class="">
          <span class="font-bold">
            Sinopse:
          </span>
          {{ movie.intro }}
        </p>
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

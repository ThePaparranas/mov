<template>
    <article>
        <div class="movie-card flex flex-row w-full p-2 bg-gray-200 rounded my-2">
            <div class="w-2/12">
                <router-link to="/filme">
                    <img :src="movie.poster" class="rounded">
                </router-link>
            </div>

            <div class="w-8/12 px-2">
                <p class="">
                    <span class="w-full text-2xl font-bold inline-block">
                        <router-link to="/filme" class="red-link">
                            {{ movie.title }}
                        </router-link>
                    </span>
                </p>

                <p class="" v-for="genre in movie.genres" :key="genre.name">
                    <span class="w-full inline-block">
                        <router-link :to="genre.link" class="red-link">
                            {{ genre.name }}
                        </router-link>,
                    </span>
                </p>

                <p class="" v-for="job in movie.crew" :key="job.name">
                    <span class="font-bold">
                        Realizadores:
                    </span>
                    <span v-for="name in job.directors" :key="name">{{ name }}</span>
                </p>

                <p class="">
                    <span>
                        Elenco: <span class="font-bold" v-for="actor in movie.cast" :key="actor">
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

<!--             <div class="flex flex-col w-2/12 p-2 self-center r-0 align-end">
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-end">favorite_border</i> <span class="ml-2 self-center"></span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-end">record_voice_over</i> <span class="ml-2 self-center"></span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-end">done_outline</i> <span class="ml-2 self-center"></span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-end">notifications_none</i> <span class="ml-2 self-center"></span>
                </div>
            </div> -->
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

<style scoped>

</style>

<template>
    <div>
        <div class="cover absolute flex w-full z-40 mx-auto">
            <p class="w-full text-3xl text-white opacity-60 self-center text-center">Rick and Morty Season 4</p>
        </div>

        <div class="w-full self-center bg-gray-600">
            <img src="img/perfil/cover/ThePaparranas.jpg" class="cover w-full object-cover object-bottom opacity-50">
        </div>

        <div class="w-full flex flex-row p-4">
            <SidebarPagin/>

            <div class="flex flex-col w-3/4 bg-white rounded p-4 m-2">
                <span class="text-xl font-bold">Filmes > Todos</span>
                <Movies :movies="movies"/>
            </div>
        </div>
    </div>
</template>

<script>
    import SidebarPagin from '../components/SidebarPagin'
    import Movies from '../components/Movies'

    export default {
        name: 'Filmes',

        components: {
            SidebarPagin,
            Movies
        },

        data () {
            return {
                movies: [
                    {
                        id: '1',
                        title: 'Avengers: Endgame',
                        year: '2009',
                        poster: '\\img\\video\\poster\\avengers.jpg',
                        genres: [
                            { name: 'Aventura', link: '' },
                            { name: 'Acção', link: '' },
                            { name: 'Fantasia', link: '' }
                            ],
                        intro: 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
                        cast: [
                            { name: 'Robert Downey Jr.', link: '' },
                            { name: 'Chris Evans', link: '' },
                            { name: 'Mark Ruffalo', link: '' }
                            ],
                        crew: {directors: [
                            { name: 'Anthony Russo', link: '' },
                            { name: 'Joe Russo', link: '' }
                        ],
                        producers: [
                            { name: '', link: ''}
                        ]}
                    },
                    {
                        id: '2',
                        title: 'Shutter Island',
                        year: '2000',
                        poster: '\\img\\video\\poster\\shutterisland.jpg',
                        genres: [
                            { name: 'Aventura', link: '' },
                            { name: 'Acção', link: '' },
                            { name: 'Fantasia', link: '' }
                            ],
                        intro: 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
                        cast: [
                            { name: 'Robert Downey Jr.', link: '' },
                            { name: 'Chris Evans', link: '' },
                            { name: 'Mark Ruffalo', link: '' }
                            ],
                        crew: {directors: [
                            { name: 'Anthony Russo', link: '' },
                            { name: 'Joe Russo', link: '' }
                        ],
                        producers: [
                            { name: '', link: ''}
                        ]}                    },
                    {
                        id: '3',
                        title: 'Die Hard',
                        year: '2000',
                        poster: '\\img\\video\\poster\\diehard.jpg',
                        genres: [
                            { name: 'Aventura', link: '' },
                            { name: 'Acção', link: '' },
                            { name: 'Fantasia', link: '' }
                            ],
                        intro: 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
                        cast: [
                            { name: 'Robert Downey Jr.', link: '' },
                            { name: 'Chris Evans', link: '' },
                            { name: 'Mark Ruffalo', link: '' }
                            ],
                        crew: {directors: [
                            { name: 'Anthony Russo', link: '' },
                            { name: 'Joe Russo', link: '' }
                        ],
                        producers: [
                            { name: '', link: ''}
                        ]}                    },
                    {
                        id: '4',
                        title: 'Fight Club',
                        year: '1999',
                        poster: '\\img\\video\\poster\\fightclub.jpg',
                        genres: [
                            { name: 'Aventura', link: '' },
                            { name: 'Acção', link: '' },
                            { name: 'Fantasia', link: '' }
                            ],
                        intro: 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
                        cast: [
                            { name: 'Robert Downey Jr.', link: '' },
                            { name: 'Chris Evans', link: '' },
                            { name: 'Mark Ruffalo', link: '' }
                            ],
                        crew: {directors: [
                            { name: 'Anthony Russo', link: '' },
                            { name: 'Joe Russo', link: '' }
                        ],
                        producers: [
                            { name: '', link: ''}
                        ]}
                    }
                ]
            }
        }
    }
</script>

<style>

</style>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mov</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->

        <link href="{{ mix('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height bg">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registar</a>
                        @endif
                    @endauth
                </div>
            @endif

            @auth
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <div class="absolute w-full h-16 bottom-0 left-0 grad">
                </div>
            </div>
            @else
            <div class="flex w-1/3">
                <div class="bg-white h-100">

                </div>
            </div>
            @endauth
        </div>

        @auth
        <div class="flex row w-full">
            <div class="column w-2/3 p-8">
                <div class="pb-12">
                    <div class="flex row w-full flex-1">
                        <div class="flex self-center w-full">
                            <a href="/filmes" class="text-3xl p-2">Filmes</a>
                        </div>

                        <div class="flex self-center font-bold w-full justify-end">
                            <a href="#" class="px-2">#Aleatórios</a>
                            <a href="" class="red-link px-2">#Recentes</a>
                            <a href="#" class="px-2">#Populares</a>
                            <a href="#" class="px-2">#Avaliação</a>
                        </div>
                    </div>

                    <div class="flex row justify-between flex-1">
                        <div class="p-2">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="pb-12">
                    <div class="flex row w-full flex-1">
                        <div class="flex self-center w-full">
                            <a href="#" class="text-3xl p-2">Séries</a>
                        </div>

                        <div class="flex self-center font-bold w-full justify-end">
                            <a href="#" class="px-2">#Aleatórios</a>
                            <a href="" class="red-link px-2">#Recentes</a>
                            <a href="#" class="px-2">#Populares</a>
                            <a href="#" class="px-2">#Avaliação</a>
                        </div>

                    </div>

                    <div class="flex row justify-between flex-1">
                        <div class="p-2">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </div>
                    </div>
                </div>

                <div class="pb-12">
                    <div class="flex row w-full flex-1">
                        <div class="flex self-center w-full">
                            <a href="#" class="text-3xl p-2">Animes</a>
                        </div>

                        <div class="flex self-center font-bold w-full justify-end">
                            <a href="#" class="px-2">#Aleatórios</a>
                            <a href="" class="red-link px-2">#Recentes</a>
                            <a href="#" class="px-2">#Populares</a>
                            <a href="#" class="px-2">#Avaliação</a>
                        </div>

                    </div>

                    <div class="flex row justify-between flex-1">
                        <div class="p-2">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </div>

                        <div class="p-2">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </div>
                    </div>
                </div>
            </div>

            <div class="column w-1/3 p-8">
                <div class="p-2">
                    <a href="#" class="text-3xl p-2">Amigos</a>

                    <div class="p-2">
                        <div class="pb-4">
                            <a href="#" class="red-link">João Caetano</a> comentou em <a href="#" class="red-link">Game Of Thrones S6-E8</a>
                            <p class="italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p class="text-xs">
                                Há 37 minutos
                            </p>
                        </div>

                        <div class="pb-4">
                            <a href="#" class="red-link">Sam Kitano</a> comentou <a href="#" class="red-link">Justin Bieber - Bibliografia</a>
                            <p class="italic">
                                Fantástico, quem me dera ser ele
                            </p>
                            <p class="text-xs">
                                Há 48 minutos
                            </p>
                        </div>

                        <div class="pb-4">
                            <a href="#" class="red-link">Sam Kitano</a> classificou <a href="#" class="red-link">Justin Bieber - Bibliografia</a>
                            <p class="italic">
                                * * * * *
                            </p>
                            <p class="text-xs">
                                Há 1 hora
                            </p>
                        </div>

                        <div class="pb-4">
                            <a href="#" class="red-link">Sam Kitano</a> está a ver <a href="#" class="red-link">Justin Bieber - Bibliografia</a>

                            <p class="text-xs">
                                Há 1 hora
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!----------->

        @include('parts/premium')
        
        @endauth

        @include('parts/footer')
    </body>
</html>

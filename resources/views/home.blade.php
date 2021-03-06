@extends('layouts.front')

@section('content')

<div class="flex flex-col w-full">
    <div class="cover absolute flex w-full z-40 mx-auto">
        <p class="w-full text-3xl text-white opacity-60 self-center text-center">Rick and Morty Season 4</p>
    </div>

    <div class="w-full self-center bg-gray-600">
        <img src="img/perfil/cover/ThePaparranas.jpg" class="cover w-full object-cover object-bottom opacity-50">
    </div>

    <div class="flex flex-row p-4">
        <div class="flex flex-col w-3/4 p-2">
            <div class="flex flex-col w-full bg-white rounded p-4">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="{{ route('filmes')}}" class="text-3xl">Filmes</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="pl-4 text-gray-600">#Aleatórios</a>
                        <a href="#" class="pl-4 red-link">#Recentes</a>
                        <a href="#" class="pl-4 text-gray-600">#Populares</a>
                        <a href="#" class="pl-4 text-gray-600">#Avaliação</a>
                    </div>
                </div>

                <div class="flex flex-row p-4 bg-gray-200 rounded">
                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </a>
                    </div>
                </div>
            </div>


            <div class="flex flex-col w-full bg-white rounded p-4 mt-8">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="{{ route('filmes')}}" class="text-3xl">Séries</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="pl-4 text-gray-600">#Aleatórios</a>
                        <a href="#" class="pl-4 red-link">#Recentes</a>
                        <a href="#" class="pl-4 text-gray-600">#Populares</a>
                        <a href="#" class="pl-4 text-gray-600">#Avaliação</a>
                    </div>
                </div>

                <div class="flex flex-row p-4 bg-gray-200 rounded">
                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </a>
                    </div>
                </div>
            </div>


            <div class="flex flex-col w-full bg-white rounded p-4 mt-8">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="{{ route('filmes')}}" class="text-3xl">Animes</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="pl-4 text-gray-600">#Aleatórios</a>
                        <a href="#" class="pl-4 red-link">#Recentes</a>
                        <a href="#" class="pl-4 text-gray-600">#Populares</a>
                        <a href="#" class="pl-4 text-gray-600">#Avaliação</a>
                    </div>
                </div>

                <div class="flex flex-row p-4 bg-gray-200 rounded">
                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/avengers.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/shutterisland.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/fightclub.jpg" class="rounded">
                        </a>
                    </div>

                    <div class="px-2">
                        <a href="{{ route('filme')}}">
                            <img src="img/video/poster/diehard.jpg" class="rounded">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/3 bg-white rounded p-4 m-2">
            <p class="text-xl font-bold">Amigos</p>

            <div class="flex flex-col">
                <div class="flex flex-row bg-gray-200 w-full p-4 my-2 rounded">
                    <div class="">
                        <a href="/perfil" class="red-link">ThePaparranas</a> comentou em <a href="/filme" class="red-link">Game Of Thrones S6-E8</a>
                        <p class="italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="text-xs">
                            Há 37 minutos
                        </p>
                    </div>
                </div>
                <div class="flex flex-row bg-gray-200 w-full p-4 my-2 rounded">
                    <div class="">
                        <a href="/perfil" class="red-link">ThePaparranas</a> comentou em <a href="/filme" class="red-link">Game Of Thrones S6-E8</a>
                        <p class="italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="text-xs">
                            Há 37 minutos
                        </p>
                    </div>
                </div>
                <div class="flex flex-row bg-gray-200 w-full p-4 my-2 rounded">
                    <div class="">
                        <a href="/perfil" class="red-link">ThePaparranas</a> comentou em <a href="/filme" class="red-link">Game Of Thrones S6-E8</a>
                        <p class="italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="text-xs">
                            Há 37 minutos
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------->

@include('parts/premium')
@include('parts/footer')



@endsection

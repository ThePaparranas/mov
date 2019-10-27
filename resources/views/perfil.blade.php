@extends('layouts.front')

@section('content')

<div class="flex flex-col w-full">
    <div class="cover absolute flex w-full z-40 mx-auto">
        <p class="w-full text-3xl text-white opacity-60 self-center text-center">"WUBBA LUBBA DUB DUUUUUB!!!"</p>
    </div>

    <div class="w-full self-center bg-gray-600">
        <img src="img/perfil/cover/ThePaparranas.jpg" class="cover w-full object-cover object-bottom opacity-50">
    </div>

    <div class="z-50 p-1 bg-white rounded-full w-48 h-48 -mt-24 mx-auto">
        <img src="img\perfil\avatar\ThePaparranas.jpg" class="rounded-full ">
    </div>

    <div class="flex self-center px-4 py-2 bg-white rounded my-2">
        <span class="text-lg"><a href="/perfil" class="red-link">ThePaparranas</a></span>
    </div>

    <div class="flex flex-row p-4">
        <div class="flex flex-col w-1/2 p-2">
            <div class="flex flex-col w-full bg-white rounded p-4">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="#" class="text-3xl">Favoritos</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="pl-4 text-gray-600">#Filmes</a>
                        <a href="#" class="pl-4 red-link">#Séries</a>
                        <a href="#" class="pl-4 text-gray-600">#Animes</a>
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


            <div class="flex flex-col w-full bg-white rounded p-4 mt-3">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="#" class="text-3xl">Amigos</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="pl-2 text-gray-600">#Pontuação</a>
                        <a href="#" class="pl-2 red-link">#Recentes</a>
                    </div>
                </div>

                <div class="flex flex-wrap">
                <div class="flex flex-row w-1/2 p-2 bg-gray-200 rounded">
                        <div class="w-1/6 self-center">
                            <a href="{{route ('perfil')}}">
                                <img src="img\perfil\avatar\avatar2.jpg" class="self-center rounded">
                            </a>
                        </div>
                        <div class="3/6">
                            <div class="flex flex-col px-4 my-auto self-center">
                                <p><a href="{{route ('perfil')}}" class="red-link">Ferdinanda</a></p>
                                <p class="text-xs text-gray-600">247 Pontos</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row w-1/2 p-2 bg-gray-200 rounded">
                        <div class="w-1/6 self-center">
                            <a href="{{route ('perfil')}}">
                                <img src="img\perfil\avatar\avatar2.jpg" class="self-center rounded">
                            </a>
                        </div>
                        <div class="3/6">
                            <div class="flex flex-col px-4 my-auto self-center">
                                <p><a href="{{route ('perfil')}}" class="red-link">Ferdinanda</a></p>
                                <p class="text-xs text-gray-600">247 Pontos</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row w-1/2 p-2 bg-gray-200 rounded">
                        <div class="w-1/6 self-center">
                            <a href="{{route ('perfil')}}">
                                <img src="img\perfil\avatar\avatar2.jpg" class="self-center rounded">
                            </a>
                        </div>
                        <div class="3/6">
                            <div class="flex flex-col px-4 my-auto self-center">
                                <p><a href="{{route ('perfil')}}" class="red-link">Ferdinanda</a></p>
                                <p class="text-xs text-gray-600">247 Pontos</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row w-1/2 p-2 bg-gray-200 rounded">
                        <div class="w-1/6 self-center">
                            <a href="{{route ('perfil')}}">
                                <img src="img\perfil\avatar\avatar2.jpg" class="self-center rounded">
                            </a>
                        </div>
                        <div class="3/6">
                            <div class="flex flex-col px-4 my-auto self-center">
                                <p><a href="{{route ('perfil')}}" class="red-link">Ferdinanda</a></p>
                                <p class="text-xs text-gray-600">247 Pontos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-1/2 p-2">
            <div class="bg-white rounded p-4">
                <p class="text-xl font-bold">Atividade</p>

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


<!--     <div class="p-4 flex flex-row">
        <div class="flex flex-col w-1/2">
        <div class="flex flex-col w-full bg-white rounded p-4">
                <div class="flex flex-row">
                    <div class="flex self-center w-full">
                        <a href="{{ route('filmes')}}" class="text-3xl">Filmes</a>
                    </div>

                    <div class="flex self-center font-bold w-full justify-end">
                        <a href="#" class="px-2 text-gray-600">#Aleatórios</a>
                        <a href="#" class="red-link px-2">#Recentes</a>
                        <a href="#" class="px-2 text-gray-600">#Populares</a>
                        <a href="#" class="px-2 text-gray-600">#Avaliação</a>
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


            <div class="bg-white rounded my-2">
                <p class="p-4"><span class="text-xl font-bold">Amigos</span><span class="ml-2"><a href="#" class="red-link">»Ver todos</a></span></p>
                <div class="flex flex-row flex-wrap p-2">
                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full object-cover"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full object-cover"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full object-cover"></a>
                    </div>

                    <div class="w-1/5 px-3 py-2">
                        <a href="/perfil"><img src="img\perfil\avatar\avatar2.jpg" class="rounded-full object-cover"></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-1/2 bg-white rounded p-4 m-2">
            <p class="text-xl font-bold">Atividade</p>

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
 --></div>

<!----------->

@include('parts/premium')
@include('parts/footer')



@endsection

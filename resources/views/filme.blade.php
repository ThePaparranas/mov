@extends('layouts.front')

@section('content')

<div class="w-full self-center bg-gray-600">
    <img src="img/video/cover/avengers.jpg" class="cover w-full object-cover opacity-50">
</div>

<div class="flex flex-col px-8">
    <div class="flex flex-row">
        <div class="poster rounded p-1 bg-white z-40 top-0 w-1/6">
            <img src="img\video\poster\avengers.jpg" class="rounded">
        </div>
        <div class="flex flex-row w-5/6 bg-white rounded p-2">
            <div class="w-9/12 p-2">
                <p class=""><span class="w-full text-2xl font-bold inline-block"><a href="/filme" class="red-link">Avengers: Endgame</a></span></p>

                <p class=""><span class="w-full inline-block"><a href="#" class="red-link">Aventura</a>, <a href="/filme" class="red-link">Ação</a>, <a href="/filme" class="red-link">Fantasia</a></span></p>

                <p class=""><span class="font-bold">Realizadores:</span> Anthony Russo, Joe Russo</p>

                <p class=""><span class="font-bold">Elenco:</span> Robert Downey Jr. Chris Evans Mark Ruffalo</p>

                <p class=""><span class="font-bold">Sinopse:</span> Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.</p>
            </div>

            <div class="flex flex-col w-3/12 p-2 self-center">
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-center">favorite_border</i> <span class="ml-2 self-center">Adicionar aos Favoritos</span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-center">record_voice_over</i> <span class="ml-2 self-center">Recomendar</span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-center">done_outline</i> <span class="ml-2 self-center">Marcar como Visto</span>
                </div>
                <div class="flex flex-row self-end bg-gray-200 rounded px-4 py-2 mb-2 w-full">
                    <i class="material-icons self-center">notifications_none</i> <span class="ml-2 self-center">Receber Notificações</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-8 bg-white rounded p-4">
        <p class="leading-none font-bold text-2xl my-4 mx-2"><span class="border border-solid rounded-lg p-2">Temporada 7</span> <span class="ml-2">Episódio 1: </span><span class="text-red">Pilot</span></p>

        <div class="flex flex-row w-full content-between">
            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>

            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>

            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>

            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>

            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>

            <div class="px-2 rounded">
                <img src="img/video/cover/avengers.jpg" class="object-cover rounded">
            </div>
        </div>

        <div class="video">
            <span class="text-white m-auto">
                Escolhe um dos servidores em baixo para ver o vídeo
            </span>
        </div>
    </div>

    <div class="flex flex-col mt-8 bg-white rounded p-4">
        @include('parts/comments')
    </div>

</div>

<!----------->

@include('parts/premium')
@include('parts/footer')
@endsection
